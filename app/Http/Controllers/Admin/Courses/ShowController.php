<?php

namespace App\Http\Controllers\Admin\Courses;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Course $course)
    {
        return view('admin.courses.show', compact('course'));
    }
}
