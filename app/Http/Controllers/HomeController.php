<?php

namespace App\Http\Controllers;

use DB;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // return Auth::user();
        return view('home');
    }
    public function dashboard(){

//        $users = DB::table('editor')->get();
//
        return view('dashboard', ['user' => "Admin"]);
    }
}
