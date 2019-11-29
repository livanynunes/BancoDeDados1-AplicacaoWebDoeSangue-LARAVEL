<?php

namespace App\Http\Controllers;

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
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('dashboard');
    }

    public function bancos()
    {
        return view('Buscahospital');
    }

    public function logout()
    {
        return view('welcome');
    }

    // public function welcome()
    // {
    //     return view('welcome');
    // }

}
