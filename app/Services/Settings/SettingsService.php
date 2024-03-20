<?php

    namespace App\Services\Settings;

    use App\Models\User;
    use App\Contracts\Settings\SettingsContract;


    class SettingsService implements SettingsContract{

        private $user;


        public function getData()
        {
            $rows = User::where('id', session('your-id'))->get();
            dd($rows);
        }

    }



?>