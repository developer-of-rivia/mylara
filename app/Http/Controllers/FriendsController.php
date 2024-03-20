<?php

namespace App\Http\Controllers;

use App\Models\useruser;
use Illuminate\Http\Request;


class FriendsController extends Controller
{
    private $uri_param;

    public function __construct(Request $request)
    {
        $uri = $request->path();
        $uri_param = intval(preg_replace('/[^0-9]+/', '', $uri), 10);
        
        $this->uri_param = $uri_param;
    }


    // отправить запрос на дружбу
    public function friendshipRequest()
    {
        Useruser::create([
            'user' => session()->get('user-id'),
            'friend' => $this->uri_param,
            'friendship_status' => 'subscriber',
        ]);

        return redirect()->route('people');
    }

    // отменить запрос на дружбу
    public function cancelRequest()
    {
        Useruser::where('user', session()->get('user-id'))->where('friendship_status', 'subscriber')->where('friend', $this->uri_param)->delete();
        return redirect()->route('people');
    }

    // принять запрос на дружбу
    public function acceptRequest()
    {
        Useruser::where('friend', session()->get('user-id'))->where('friendship_status', 'subscriber')->where('user', $this->uri_param)->update(['friendship_status'=>'friend']);
        return redirect()->route('people');
    }

    // перестать дружить
    public function breakUp()
    {
        Useruser::where('friendship_status', 'friend')
        ->where(function ($query){
            $query->where('user', $this->uri_param)
                ->orWhere('friend', $this->uri_param);
                })->delete();

        return redirect()->route('people');
    }
}
