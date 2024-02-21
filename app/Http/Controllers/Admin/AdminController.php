<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Admin\GetUserData;

class AdminController extends Controller
{
    public function index(Request $request, GetUserData $GetUserData){
        if($request->session()->get('auth') == true){
            return view('pages/admin/index', ['user_data' => $GetUserData->get_user_data()]);
        } else{
            return redirect('login/');
        }
    }
}
