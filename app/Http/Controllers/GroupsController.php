<?php

namespace App\Http\Controllers;

use App\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GroupsController extends Controller
{
    public function index()
    {
        $groups = Group::all();
        return view('groups.index', ['groups' => $groups]);
    }

    public function create()
    {
        return view('groups.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kelompok' => 'required'
        ]);
        Group::create($request->all());
        return redirect('/groups')->with('status', 'Data berhasil di simpan...!');
    }

    public function show(Group $group)
    {
        
    }

    public function edit(Group $group)
    {
        return view('groups.edit', compact('group'));
    }

    public function update(Request $request, Group $group)
    {
        $request->validate([
            'kelompok' => 'required'
        ]);
        group::where('id', $group->id)
                    ->update([
                        'kelompok' =>$request->kelompok
                    ]);
        return redirect('/groups')->with('status', 'Data berhasil di rubah...!');
    }

    public function destroy(Group $group)
    {
        Group::destroy($group->id);
        return redirect('/groups')->with('status', 'Data berhasil di hapus...!');
    }
}
