<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Settings\StoreRequest;
use App\Http\Requests\Admin\Settings\UpdateRequest;
use App\Models\Setting;
//use Illuminate\Support\Str;


class IndexController extends Controller
{
    public function __invoke()
    {
        $settings = Setting::all();
        return view('admin.settings.index', compact('settings'));
    }

    public function create()
    {
        return view('admin.settings.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        Setting::firstOrCreate($data);
        return redirect()->route('admin.settings.index');
    }

    public function show(Setting $setting)
    {
        return view('admin.settings.show', compact('setting'));
    }

    public function edit(Setting $setting)
    {
        return view('admin.settings.edit', compact('setting'));
    }

    public function update(UpdateRequest $request, Setting $setting)
    {
        $data = $request->validated();
        $setting->update($data);
        return view('admin.settings.show', compact('setting'));
    }

    public function delete(Setting $setting)
    {
        $setting->delete();
        return redirect()->route('admin.settings.index');
    }
}
