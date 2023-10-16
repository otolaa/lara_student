<?php

namespace App\Http\Controllers\Admin\Statuses;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Statuses\StoreRequest;
use App\Models\Status;
use App\Http\Requests\Admin\Statuses\UpdateRequest;
use Illuminate\Support\Str;

class IndexController extends Controller
{
    public function __invoke()
    {
        $statuses = Status::all();
        return view('admin.statuses.index', compact('statuses'));
    }

    public function create()
    {
        return view('admin.statuses.create');
    }

    public function edit(Status $status)
    {
        return view('admin.statuses.edit', compact('status'));
    }

    public function update(UpdateRequest $request, Status $status)
    {
        $data = $request->validated();

        if (isset($data['title']))
            $data['slug'] = Str::slug($data['title']);

        $status->update($data);
        return view('admin.statuses.show', compact('status'));
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        if (isset($data['title']))
            $data['slug'] = Str::slug($data['title']);

        Status::firstOrCreate($data);
        return redirect()->route('admin.statuses.index');
    }

    public function show(Status $status)
    {
        return view('admin.statuses.show', compact('status'));
    }

    public function delete(Status $status)
    {
        $status->delete();
        return redirect()->route('admin.statuses.index');
    }
}
