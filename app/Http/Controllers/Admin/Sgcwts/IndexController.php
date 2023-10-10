<?php

namespace App\Http\Controllers\Admin\Sgcwts;

use App\Http\Controllers\Controller;
use App\Models\Sgcwt;
use App\Models\Status;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $statuses = Status::all()->pluck('title','id')->toArray();
        $sgcwts = Sgcwt::all();
        return view('admin.sgcwts.index', compact('sgcwts', 'statuses'));
    }
}
