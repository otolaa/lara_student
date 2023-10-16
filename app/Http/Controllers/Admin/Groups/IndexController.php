<?php

namespace App\Http\Controllers\Admin\Groups;

use App\Http\Controllers\Controller;
use App\Models\StudentGroupe;
use App\Http\Requests\Admin\Groups\StoreRequest;
use App\Http\Requests\Admin\Groups\UpdateRequest;

class IndexController extends Controller
{
    public function __invoke()
    {
        $groups = StudentGroupe::all();
        return view('admin.groups.index', compact('groups'));
    }

    public function create()
    {
        return view('admin.groups.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        StudentGroupe::firstOrCreate($data);
        return redirect()->route('admin.groups.index');
    }

    public function show(StudentGroupe $group)
    {
        return view('admin.groups.show', compact('group'));
    }

    public function edit(StudentGroupe $group)
    {
        return view('admin.groups.edit', compact('group'));
    }

    public function update(UpdateRequest $request, StudentGroupe $group)
    {
        $data = $request->validated();
        $group->update($data);
        return view('admin.groups.show', compact('group'));
    }

    public function delete(StudentGroupe $group)
    {
        $group->delete();
        return redirect()->route('admin.groups.index');
    }
}
