<?php

namespace App\Http\Controllers\Abonement;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreIssueRequest;
use App\Http\Requests\UpdateIssueRequest;
use App\Models\Book;
use App\Models\Issue;
use App\Models\Reader;
use Illuminate\Http\Request;

class IssueController extends Controller
{

    public function index()
    {
        return view('abonement.issues.index')->with([
            'issues' => Issue::with('reader', 'book')->latest()->get(),
        ]);
    }


    public function create()
    {
        return view('abonement.issues.create')->with([
            'readers' => Reader::latest()->get(),
            'books' => Book::where('status', '>', 0)->get(),
        ]);
    }


    public function store(StoreIssueRequest $request)
    {
        $issue = Issue::create([
            'book_id' => request('book_id'),
            'reader_id' => request('reader_id'),
        ]);

        $book = Book::find(request('book_id'));
        $book->status = $book->status - 1;
        $book->save();

        return redirect()->route('abonement.issue.index');
    }


    public function show(string $id)
    {
        //
    }


    public function edit(Issue $issue)
    {
        return view('abonement.issues.edit')->with([
            'issue' => $issue
        ]);
    }


    public function update(UpdateIssueRequest $request, Issue $issue)
    {
        $issue->return_date = now();
        $issue->book_condition = $request->book_condition;
        $issue->save();
        $book = Book::find($issue->book_id);
        $book->status = $book->status + 1;
        $book->save();

        return redirect()->route('abonement.issue.index');
    }


    public function destroy(string $id)
    {
        //
    }
}
