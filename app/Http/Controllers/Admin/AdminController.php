<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index(Request $request){
        if($request->session()->get('auth') == true){
            return view('pages/admin/index');
        } else{
            return redirect('login/');
        }
    }
}
