<?php

namespace App\Http\Controllers\Hall;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\Hall;
use App\Models\Reader;
use Illuminate\Http\Request;

class   HallController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('hall.dashboard')->with([
            'readers' => Reader::all(),
            'groups' => Group::all(),
            'halls' => Hall::with('reader', 'group')->latest()->get(),
        ]);
    }

    public function store(Request $request)
    {
//        dd($request->all());
        $hall = Hall::create([
            'reader_id' => $request->reader_id,
            'group_id' => $request->group_id,
        ]);

        return redirect()->route('hall.dashboard');
    }
}
