<?php

namespace App\Http\Controllers\Admin\Courses;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Http\Requests\Admin\Courses\UpdateRequest;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Course $course)
    {
        $data = $request->validated();
        $course->update($data);
        return view('admin.courses.show', compact('course'));
    }
}
