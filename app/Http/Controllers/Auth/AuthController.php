<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;


class AuthController extends Controller
{
    
    // зайти на страницу входа
    public function login_page(Request $request) {
        /**
         * Если пользователь в массиве сессии имеет переменную auth = true, то чела перекидывает на страницу админки
         */
        if($request->session()->get('auth') == true){
            return redirect('admin/');
        } else{
            return view('pages/auth/login-page');
        }
    }

    // авторизация
    public function auth(Request $request){
        /**
         * Поиск в базе данных совпадения логина и пароль и кладём коллекцию в переменную $user
         */
        $user = User::where('login', $request->login)->where('password', $request->password)->get();
        

        $user_id;
        foreach($user as $user_item){
            $user_id = $user_item->id;
        }


        if($user->isNotEmpty()){
            $request->session()->put(['auth' => true]);
            $request->session()->put(['your-id' => $user_id]);

            return redirect('admin/');
        } else {
            return redirect('login?formbad=true');
        }
    }

    // выход из аккаунта
    public function logout(Request $request){
        $request->session()->forget('auth');
        return redirect('login/');
    }
}