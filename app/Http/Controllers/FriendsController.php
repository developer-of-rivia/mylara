<?php

namespace App\Http\Controllers;

use App\Models\useruser;
use Illuminate\Http\Request;


class FriendsController extends Controller
{
    public function index(Request $request){

    }

    public function friendshipRequest(Request $request)
    {
        //
        $uri = $request->path();
        $uri_param = intval(preg_replace('/[^0-9]+/', '', $uri), 10);

        $useruser = Useruser::create([
            'user' => session()->get('user-id'),
            'friend' => $uri_param,
            'friendship_status' => 'subscriber',
        ]);

        return redirect()->route('people');
    }
}
