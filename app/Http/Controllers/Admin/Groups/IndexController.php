<?php

namespace App\Http\Controllers\Admin\Groups;

use App\Http\Controllers\Controller;
use App\Models\StudentGroupe;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $groups = StudentGroupe::all();
        return view('admin.groups.index', compact('groups'));
    }
}
