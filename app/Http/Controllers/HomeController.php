<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class HomeController extends Controller
{
    //главная страница
    public function __invoke(): View|Application|Factory
    {

        return view("home");
    }
}
