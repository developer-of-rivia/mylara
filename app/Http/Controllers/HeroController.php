<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hero;
use App\Contracts\MyHeroes\MyHeroesContract;
use App\Services\MyHeroes\MyHeroesService;
use Illuminate\Support\Facades\DB;


class HeroController extends Controller
{
    public function index(MyHeroesContract $myHeroesService)
    {
        return view('myheroes/myheroes', ['heroes' => $myHeroesService->getHeroes()]);
    }
}
