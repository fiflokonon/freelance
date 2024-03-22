<?php

namespace App\Http\Controllers;

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
        #if (auth()->user()->role == 'developer')
        return view('pages.dashboard.home_dev');

    }
         public function employer(){
             #if (auth()->user()->role == 'employer')
              return view('pages.dashboard.home_employer');

    }
        public function admin(){
             #if (auth()->user()->role == '1')
             return view('pages.dashboard.home_admin');
    }
}
