<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            $user= Auth::user();
            if($user->role=='developer'){
                return view('pages.dashboard.home_dev');
            }elseif ($user->role=='employer') {
                return view('pages.dashboard.home_employer');
            }elseif ($user->role=='1') {
                return view('pages.dashboard.home_admin');
            }
    }
        
}
