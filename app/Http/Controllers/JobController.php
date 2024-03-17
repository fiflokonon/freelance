<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function new_job()
    {
        return view('pages.new_job');
    }
}
