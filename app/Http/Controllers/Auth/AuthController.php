<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Services\Auth\AuthService;
use App\Contracts\Auth\AuthContract;
use Illuminate\Routing\Controller;


class AuthController extends Controller
{
    public function loginPage(Request $request)
    {
        if($request->session()->get('auth') == true){
            return redirect()->route('admin-page');
        } else{
            return view('auth/login-page');
        }
    }

    public function auth(AuthContract $AuthService)
    {
        if($AuthService->canI() == true){
            return redirect()->route('admin-page');
        } else {
            return redirect('login?formbad=true');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->forget('auth');
        return redirect('login/');
    }
}