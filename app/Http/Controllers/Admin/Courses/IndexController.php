<?php

namespace App\Http\Controllers\Admin\Courses;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Courses\StoreRequest;
use App\Http\Requests\Admin\Courses\UpdateRequest;
use App\Models\Course;
use Illuminate\Support\Str;


class IndexController extends Controller
{
    public function __invoke()
    {
        $courses = Course::all();
        return view('admin.courses.index', compact('courses'));
    }

    public function create()
    {
        return view('admin.courses.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        if (isset($data['title']))
            $data['slug'] = Str::slug($data['title']);

        Course::firstOrCreate($data);
        return redirect()->route('admin.courses.index');
    }

    public function show(Course $course)
    {
        return view('admin.courses.show', compact('course'));
    }

    public function edit(Course $course)
    {
        return view('admin.courses.edit', compact('course'));
    }

    public function update(UpdateRequest $request, Course $course)
    {
        $data = $request->validated();

        if (isset($data['title']))
            $data['slug'] = Str::slug($data['title']);

        $course->update($data);
        return view('admin.courses.show', compact('course'));
    }

    public function delete(Course $course)
    {
        $course->delete();
        return redirect()->route('admin.courses.index');
    }
}
