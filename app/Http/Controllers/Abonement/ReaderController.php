<?php

namespace App\Http\Controllers\Abonement;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\Major;
use App\Models\Student;
use Illuminate\Http\Request;

class ReaderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('abonement.createreader')->with([
            'groups' => Group::all(),
            'majors' => Major::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate
//        dd($request);
        $students = Student::create([
            'major_id' => $request->major_id,
            'group_id' => $request->group_id,
            'name' => $request->name,
            'surname' => $request->surname,
            'middle_name' => $request->middle_name,
        ]);

        return redirect()->route('abonement.dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
