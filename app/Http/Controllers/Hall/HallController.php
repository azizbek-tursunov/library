<?php

namespace App\Http\Controllers\Hall;

use App\Http\Controllers\Controller;

class HallController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('hall.dashboard');
    }
}
