<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function indexView()
    {
        return view('layouts.admin-master');
    }
    public function indexMail()
    {
        return view('email.register-mail');
    }
    public function userAll()
    {
        return User::all();
    }
}
