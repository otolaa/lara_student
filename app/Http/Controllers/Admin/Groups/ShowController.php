<?php

namespace App\Http\Controllers\Admin\Groups;

use App\Http\Controllers\Controller;
use App\Models\StudentGroupe;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(StudentGroupe $group)
    {
        return view('admin.groups.show', compact('group'));
    }
}
