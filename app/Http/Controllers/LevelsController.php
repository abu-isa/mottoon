<?php

namespace App\Http\Controllers;

use App\Level;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LevelsController extends Controller
{
    public function index()
    {
        $levels = Level::all();
        return view('levels.index',['levels' => $levels]);
    }

    public function create()
    {
        return view('levels.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'level' => 'required'
        ]);
        Level::create($request->all());
        return redirect('/levels')->with('status', 'Data berhasil di simpan...!');
    }

    public function show(Level $level)
    {
    return view('levels.detail', compact('level'));
    }

    public function edit(Level $level)
    {
        return view('levels.edit', compact('level'));
    }

    public function update(Request $request, Level $level)
    {
        $request->validate([
            'level' => 'required'
        ]);
        Level::where('id', $level->id)
                ->update([
                    'level' => $request->level
                ]);
        return redirect('/levels')->with('status', 'Data berhasil di rubah...!');
    }

    public function destroy(Level $level)
    {
        Level::destroy($level->id);
        return redirect('/levels')->with('status', 'Data berhasil di hapus...!');
    }
}
