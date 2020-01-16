<?php

namespace App\Http\Controllers;

use App\Part;
use Illuminate\Http\Request;

class PartsController extends Controller
{
    public function index()
    {
        $fatroh = Part::all();
        return view('parts.index', ['parts' => $fatroh]);
    }

    public function create()
    {
        return view('parts.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'fatroh' => 'required'
        ]);
        Part::create($request->all());
        return redirect('/parts')->with('status', 'Data berhasil di simpan...!');
    }

    public function show(Part $part)
    {
        //
    }

    public function edit(Part $part)
    {
        return view('parts.edit', compact('part'));
    }

    public function update(Request $request, Part $part)
    {
        $request->validate([
            'fatroh' => 'required'
        ]);

        $part::where('id', $part->id)
                ->update([
                    'fatroh' => $request->fatroh
                ]);
        return redirect('/parts')->with('status', 'Data berhasil di rubah...!');
    }

    public function destroy(Part $part)
    {
        Part::destroy($part->id);
        return redirect('/parts')->with('status', 'Data berhasil di hapus...!');
    }
}
