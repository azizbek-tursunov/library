<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\Hall;
use App\Models\User;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $readersToday = Hall::whereDate('created_at', Carbon::today())->count();
        $readersMonth = Hall::whereMonth('created_at', Carbon::now()->month)->count();

        $mostActiveGroup = Hall::groupBy('group_id')
            ->selectRaw('group_id, count(*) as total')
            ->orderByDesc('total')
            ->first();

        $group = Group::find($mostActiveGroup->group_id);

        return view('admin.dashboard')->with([
            'readersToday' => $readersToday,
            'readersMonth' => $readersMonth,
            'group' => $group,
            'users' => User::all(),
        ]);
    }
}
