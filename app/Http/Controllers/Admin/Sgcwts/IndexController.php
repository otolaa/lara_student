<?php

namespace App\Http\Controllers\Admin\Sgcwts;

use App\Http\Controllers\Controller;
use App\Models\Sgcwt;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $sgcwts = Sgcwt::all();
        return view('admin.sgcwts.index', compact('sgcwts'));
    }
}
