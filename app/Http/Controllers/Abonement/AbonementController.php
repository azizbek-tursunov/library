<?php

namespace App\Http\Controllers\Abonement;

use App\Http\Controllers\Controller;
use App\Models\Issue;
use App\Models\Book;
use App\Models\Major;
use App\Models\Reader;
use Illuminate\Http\Request;

class AbonementController extends Controller
{
public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('abonement.dashboard')->with([
            'readers' => Reader::count(),
            'books' => Book::count(),
            'issues' => Issue::whereNull('return_date')->count(),
            'today_issues' => Issue::whereDate('issue_date', today())->count(),
            'majors' => Major::count(),
        ]);
    }
}
