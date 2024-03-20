<?php

namespace App\Http\Controllers\Settings;

use Illuminate\Http\Request;
use App\Services\Settings\SettingsService;
use App\Contracts\Settings\SettingsContract;
use Illuminate\Routing\Controller;



class SettingsController extends Controller
{
    public function index(SettingsContract $settingsService)
    {
        $settingsService->getData();
    }
}
