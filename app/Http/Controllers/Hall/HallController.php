<?php

namespace App\Http\Controllers\Hall;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreHallRequest;
use App\Models\Group;
use App\Models\Hall;
use App\Models\Major;
use App\Models\Reader;
use Carbon\Carbon;
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

    public function store(StoreHallRequest $request)
    {
        $hall = Hall::create([
            'reader_id' => $request->reader_id,
            'group_id' => $request->group_id,
        ]);

        return redirect()->route('hall.dashboard');
    }

    public function stats()
    {
        $readersToday = Hall::whereDate('created_at', Carbon::today())->count();
        $readersMonth = Hall::whereMonth('created_at', Carbon::now()->month)->count();

        $mostActiveGroup = Hall::groupBy('group_id')
            ->selectRaw('group_id, count(*) as total')
            ->orderByDesc('total')
            ->first();

        $group = Group::find($mostActiveGroup->group_id);

        return view('hall.stats')->with([
            'readersToday' => $readersToday,
            'readersMonth' => $readersMonth,
            'group' => $group,
        ]);
    }
}
