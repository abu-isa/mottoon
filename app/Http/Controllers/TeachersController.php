<?php

namespace App\Http\Controllers;

use App\Teacher;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    public function index()
    {
        $teacher = Teacher::all();
        return view('teachers.index', ['teacher' => $teacher]);
    }
    public function create()
    {
        return view('teachers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nip' => 'required',
            'phone' => 'required',
            'email' => 'required'
        ]);
        Teacher::create($request->all());
        return redirect('/teachers')->with('status', 'Data berhasil di simpan...!');
    }

    public function show(teacher $teacher)
    {
        return view('teachers.detail', compact('teacher'));
    }

    public function edit(teacher $teacher)
    {
        return view('teachers.edit', compact('teacher'));
    }
    public function update(Request $request, teacher $teacher)
    {
        $request->validate([
            'nama' => 'required',
            'nip' => 'required',
            'email' => 'required',
            'alamat' => 'required'
        ]);
        $teacher::where('id', $teacher->id)
                    ->update([
                        'nama' => $request->nama,
                        'nip' => $request->nip,
                        'phone' => $request->phone,
                        'email' => $request->email,
                        'alamat' => $request->alamat
                    ]);
        return redirect('/teachers')->with('status', 'Data berhasil di rubah...!');
    }
    public function destroy(teacher $teacher)
    {
        Teacher::destroy($teacher->id);
        return redirect('/teachers')->with('status', 'Data berhasil di hapus...!');
    }
}
