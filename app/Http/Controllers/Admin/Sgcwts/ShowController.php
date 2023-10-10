<?php

namespace App\Http\Controllers\Admin\Sgcwts;

use App\Http\Controllers\Controller;
use App\Models\Sgcwt;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Sgcwt $sgcwt)
    {
        return view('admin.sgcwts.show', compact('sgcwt'));
    }
}
