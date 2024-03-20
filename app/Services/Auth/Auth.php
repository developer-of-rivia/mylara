<?php

    namespace App\Services\Auth;

    use App\Contracts\Auth\AuthContract;
    use Illuminate\Http\Request;
    use App\Models\User;

    

    class Auth implements AuthContract
    {
        private $request;

        public function __construct(Request $request)
        {   
            $this->request = $request;
        }

        private function userExistCheck()
        {
            $user = User::where('login', $this->request->login)->where('password', $this->request->password)->get();
        
            if($user->isNotEmpty()){
                foreach($user as $user_item){
                    $this->request->session()->put(['user-login' => $user_item->login]);
                    $this->request->session()->put(['user-name' => $user_item->name]);
                    $this->request->session()->put(['user-id' => $user_item->id]);
                    $this->request->session()->put(['auth' => true]);
                }
                return true;
            } else {
                return false;
            }
        }

        public function canI(): bool
        {
            if($this->userExistCheck() == true){
                return true;
            } else {
                return false;
            }
        }
    }



?>