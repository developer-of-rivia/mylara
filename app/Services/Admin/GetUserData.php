<?php
    // namespace
    namespace App\Services\Admin;
    // use
    use Illuminate\Http\Request;
    use App\Models\User;
    
    // class
    class GetUserData
    {
        public $request;

        public function __construct(Request $request){
            $this->request = $request;
        }

        public function get_user_data()
        {
            $user_id = $this->request->session()->get('your-id');
            $user_model = User::where('id', $user_id)->get();

            foreach($user_model as $user_model_row){
                $user_data['Name'] = $user_model_row['name'];
                $user_data['Main-hero'] = $user_model_row['main-hero'];
            }

            return $user_data;
        }
    }



?>