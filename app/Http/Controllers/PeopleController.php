<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Useruser;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    public function index()
    {
        // все те на кого подписан данный пользователь
        $wishFriends = Useruser::where('user', session()->get('user-id'))
                                ->whereNot('friendship_status', 'friend')
                                ->get();
        
        // все кто подписан на данного пользователя
        $mySubs = Useruser::where('friend', session()->get('user-id'))
                        ->where('friendship_status', 'subscriber')
                        ->get();

        // все те, с кем дружит данный пользователь
        $weFriends = Useruser::where('friendship_status', 'friend')
                        ->where(function ($query) {
                            $query->where('user', session()->get('user-id'))
                                ->orWhere('friend', session()->get('user-id'));
                                })->get();


        // все люди
        $people = User::whereNot('id', session()->get('user-id'))->get();

        $people->map(function ($items) use ($wishFriends, $mySubs, $weFriends){
            foreach($wishFriends as $wishFriend)
            {
                if($items->id == $wishFriend->friend){
                    $items['relationships'] = 'wish-friend';
                }
            }
            //
            foreach($mySubs as $mySub)
            {
                if($items->id == $mySub->user){
                    $items['relationships'] = 'my-sub';
                }
            }
            //
            foreach($weFriends as $weFriend)
            {
                if($items->id == $weFriend->user || $items->id == $weFriend->friend){
                    $items['relationships'] = 'friend';
                }
            }
        });

        //
        return view('people/people', ['people' => $people, 'friends' => $people]);
    }
}