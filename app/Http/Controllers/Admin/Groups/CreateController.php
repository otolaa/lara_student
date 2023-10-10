<?php

namespace App\Http\Controllers\Admin\Groups;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('admin.groups.create');
    }
}
