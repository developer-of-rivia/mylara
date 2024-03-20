<?php

    namespace App\Services\MyHeroes;

    use App\Models\User;
    use App\Contracts\MyHeroes\MyHeroesContract;


    class MyHeroesService implements MyHeroesContract{

        public function getHeroes()
        {
            $rows = User::where('id', session('user-id'))->get();
            
            foreach($rows as $row)
            {
                // dd($row->mainhero);
            }
        }
    }



?>