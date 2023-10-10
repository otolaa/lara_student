<?php

namespace App\Http\Controllers\Admin\Sgcwts;

use App\Http\Controllers\Controller;
use App\Models\Status;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        $statuses = Status::all();
        return view('admin.sgcwts.create', compact('statuses'));
    }
}
