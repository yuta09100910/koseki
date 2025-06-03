<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home');
}

public function about_route(){
        return view('about');
}

public function cours_route(){
        return view('cours');
}

public function kanri_route(){
        return view('kanri');
}
}
