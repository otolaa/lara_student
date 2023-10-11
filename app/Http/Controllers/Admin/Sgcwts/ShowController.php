<?php

namespace App\Http\Controllers\Admin\Sgcwts;

use App\Http\Controllers\Controller;
use App\Models\Sgcwt;
use App\Models\Status;
use App\Models\User;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Sgcwt $sgcwt)
    {
        $statuses = Status::all()->pluck('title','id')->toArray();
        $teachers = User::where('role', User::ROLE_TEACHER)->get()->pluck('name','id')->toArray();
        return view('admin.sgcwts.show', compact('sgcwt', 'statuses', 'teachers'));
    }
}
