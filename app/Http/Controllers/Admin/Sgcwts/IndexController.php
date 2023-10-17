<?php

namespace App\Http\Controllers\Admin\Sgcwts;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Sgcwts\StoreRequest;
use App\Http\Requests\Admin\Sgcwts\UpdateRequest;
use App\Models\Sgcwt;
use App\Models\Status;
use App\Models\User;
use Illuminate\Support\Str;

class IndexController extends Controller
{
    public function __invoke()
    {
        $statuses = Status::all()->pluck('title','id')->toArray();
        $teachers = User::where('role', User::ROLE_TEACHER)->get()->pluck('name','id')->toArray();
        $sgcwts = Sgcwt::all();
        return view('admin.sgcwts.index', compact('sgcwts', 'statuses', 'teachers'));
    }

    public function create()
    {
        $statuses = Status::all();
        $teachers = User::where('role', User::ROLE_TEACHER)->get();
        return view('admin.sgcwts.create', compact('statuses', 'teachers'));
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        if (isset($data['title']))
            $data['slug'] = Str::slug($data['title']);

        Sgcwt::firstOrCreate($data);
        return redirect()->route('admin.sgcwts.index');
    }

    public function show(Sgcwt $sgcwt)
    {
        $statuses = Status::all()->pluck('title','id')->toArray();
        $teachers = User::where('role', User::ROLE_TEACHER)->get()->pluck('name','id')->toArray();
        return view('admin.sgcwts.show', compact('sgcwt', 'statuses', 'teachers'));
    }

    public function edit(Sgcwt $sgcwt)
    {
        $statuses = Status::all();
        $teachers = User::where('role', User::ROLE_TEACHER)->get();
        return view('admin.sgcwts.edit', compact('sgcwt', 'statuses', 'teachers'));
    }

    public function update(UpdateRequest $request, Sgcwt $sgcwt)
    {
        $data = $request->validated();

        if (isset($data['title']))
            $data['slug'] = Str::slug($data['title']);

        $sgcwt->update($data);

        $statuses = Status::all()->pluck('title','id')->toArray();
        $teachers = User::where('role', User::ROLE_TEACHER)->get()->pluck('name','id')->toArray();
        return view('admin.sgcwts.show', compact('sgcwt', 'statuses', 'teachers'));
    }

    public function delete(Sgcwt $sgcwt)
    {
        $sgcwt->delete();
        return redirect()->route('admin.sgcwts.index');
    }
}
