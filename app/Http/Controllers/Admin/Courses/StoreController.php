<?php

namespace App\Http\Controllers\Admin\Courses;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Courses\StoreRequest;
use App\Models\Course;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Course::firstOrCreate($data);
        return redirect()->route('admin.courses.index');
    }
}
