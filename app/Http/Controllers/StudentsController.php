<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentsController extends Controller
{
 
    public function index()
    {
        $students = Student::all();
        return view('students.index', ['students' => $students]);
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'  => 'required',
            'nis'   => 'required',
            'phone' => 'required',
            'email' => 'required'
        ]);
        Student::create($request->all());
        return redirect('/students')->with('status', 'Data berhasil di simpan...!');
    }

    public function show(Student $student)
    {
        return view('students.detail', compact('student'));
    }

    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'nama'  => 'required',
            'nis'   => 'required|max:15',
            'phone' => 'required|max:15',
            'email' => 'required'
        ]);

        $student::where('id', $student->id)
                ->update([
                    'nama'      => $request->nama,
                    'nama_arab' => $request->nama_arab,
                    'nis'       => $request->nis,
                    'usercode'  => $request->usercode,
                    'email'     => $request->email,
                    'kota'      => $request->kota,
                    'tgl_lahir' => $request->tgl_lahir,
                    'phone'     => $request->phone,
                    'alamat'    => $request->alamat
                ]);
        return redirect('/students')->with('status', 'Data berhasil di rubah...!');
    }

    public function destroy(Student $student)
    {
        Student::destroy($student->id);
        return redirect('/students')->with('status', 'Data berhasil dihapus...!');
    }
}