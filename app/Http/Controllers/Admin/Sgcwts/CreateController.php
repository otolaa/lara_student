<?php

namespace App\Http\Controllers\Admin\Sgcwts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('admin.sgcwts.create');
    }
}
