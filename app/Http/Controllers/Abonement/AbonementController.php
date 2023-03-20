<?php

namespace App\Http\Controllers\Abonement;

use App\Http\Controllers\Controller;

class AbonementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('abonement.dashboard');
    }
}
