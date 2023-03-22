<?php

namespace App\Http\Controllers\Abonement;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('abonement.books.index')->with([
            'books' => Book::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('abonement.books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validatsiya qil

        $book = Book::create([
            'name' => $request->name,
            'author' => $request->author,
            'genre' => $request->genre,
            'about' => $request->about,
        ]);

        return redirect()->route('abonement.book.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('abonement.books.show')->with(['book' => $book]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('abonement.books.edit')->with('book', $book);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $book->update([
            'name' => $request->name,
            'author' => $request->author,
            'genre' => $request->genre,
            'about' => $request->about,
        ]);

        return redirect()->route('abonement.book.show', ['book' => $book->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('abonement.book.index');
    }
}
