<?php

namespace App\Http\Controllers\Abonement;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreReaderRequest;
use App\Models\Group;
use App\Models\Major;
use App\Models\Reader;

class ReaderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('abonement.readers.index')->with([
            'readers' => Reader::with('group.major')->latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('abonement.readers.create')->with([
            'groups' => Group::all(),
            'majors' => Major::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReaderRequest $request)
    {
        $students = Reader::create([
            'major_id' => $request->major_id,
            'group_id' => $request->group_id,
            'name' => $request->name,
            'surname' => $request->surname,
            'middle_name' => $request->middle_name,
        ]);

        return redirect()->route('abonement.reader.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reader $reader)
    {
        return view('abonement.readers.show')->with(['reader' => $reader]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reader $reader)
    {
        return view('abonement.readers.edit')->with([
            'reader' => $reader,
            'groups' => Group::all(),
            'majors' => Major::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreReaderRequest $request, Reader $reader)
    {
        $reader->update([
            'major_id' => $request->major_id,
            'group_id' => $request->group_id,
            'name' => $request->name,
            'surname' => $request->surname,
            'middle_name' => $request->middle_name,
        ]);

        return redirect()->route('abonement.reader.show', ['reader' => $reader->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reader $reader)
    {
        $reader->delete();

        return redirect()->route('abonement.reader.index');
    }
}
