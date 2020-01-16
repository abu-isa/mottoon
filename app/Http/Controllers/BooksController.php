<?php

namespace App\Http\Controllers;

use App\Book;
use App\Level;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BooksController extends Controller
{
    
    public function index()
    {
        $books = DB::table('levels')
                ->join('books', 'books.level_id', 'levels.id')
                ->get();
        return view('books.index', ['books' => $books]);
    }

    public function create()
    {
        $levels = Level::all();
        return view('books.create', ['levels' => $levels]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'level_id'  => 'required',
            'kitab'     => 'required'
        ]);
        Book::create($request->all());
        return redirect('/books')->with('status', 'Data berhasil di simpan...!');
    }

    public function show(Book $book)
    {
        return view('books.detail', compact('book'));
    }

    public function edit(Book $book)
    {
        $level = Level::all();
        return view('books.edit', compact('book', ['level', $level]));
    }

    public function update(Request $request, Book $book)
    {
        $request->validate([
            'level_id'  => 'required',
            'kitab'     => 'required'
        ]);

        $book::where('id', $book->id)
                ->update([
                    'kitab'     => $request->kitab,
                    'level_id'  => $request->level_id,
                    'pengarang' => $request->pengarang
                ]);
        return redirect('/books')->with('status', 'Data berhasil dirubah...!');
    }

    public function destroy(Book $book)
    {
        Book::destroy($book->id);
        return redirect('/books')->with('status', 'Data berhasil dihapus...!');
    }
}
