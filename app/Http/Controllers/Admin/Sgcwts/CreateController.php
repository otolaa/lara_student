<?php

namespace App\Http\Controllers\Admin\Sgcwts;

use App\Http\Controllers\Controller;
use App\Models\Status;
use App\Models\User;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        $statuses = Status::all();
        $teachers = User::where('role', User::ROLE_TEACHER)->get();
        return view('admin.sgcwts.create', compact('statuses', 'teachers'));
    }
}
