<?php

namespace App\Http\Controllers;

use App\Section;
use App\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SectionsController extends Controller
{
    
    public function index()
    {
        $sections = DB::table('books')
                    ->join('sections', 'sections.book_id', 'books.id')
                    ->get();
        return view('sections.index', ['sections' => $sections]);
    }

    public function create()
    {
        $book = Book::all();
        return view('sections.create', ['books' => $book]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'marhalah' => 'required'
        ]);
        Section::create($request->all());
        return redirect('/sections')->with('status', 'Data berhasil disimpan...!!!');
    }

    public function show(Section $section)
    {
        return view('sections.detail', compact('section'));
    }

    public function edit(Section $section)
    {
        $book = Book::all();
        return view('sections.edit', compact('section', ['book', $book]));
    }

    public function update(Request $request, Section $section)
    {
        $request->validate([
            'marhalah' => 'required'
        ]);
        $section::where('id', $section->id)
                    ->update([
                        'book_id' => $request->book_id,
                        'marhalah' => $request->marhalah,
                        'keterangan' => $request->keterangan ? $request->keterangan : ''
                    ]);
        return redirect('/sections')->with('status', 'Data berhasil dirubah...!!!');
    }

    public function destroy(Section $section)
    {
        Section::destroy($section->id);
        return redirect('/sections')->with('status', 'Data berhasil dihapus...!');
    }
}
