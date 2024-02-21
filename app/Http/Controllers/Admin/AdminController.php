<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index(Request $request){
        if($request->session()->get('auth') == true){

            /* сюда бы впиндюрить сервис, который собирает данные о пользователе */

            return view('pages/admin/index');
        } else{
            return redirect('login/');
        }
    }
}
