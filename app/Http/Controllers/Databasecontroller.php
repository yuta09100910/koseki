<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class Databasecontroller extends Controller
{
    public function showLoginForm()
{
    return view('auth.login'); // 必要に応じてビューを変更
}
}
