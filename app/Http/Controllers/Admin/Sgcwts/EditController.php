<?php

namespace App\Http\Controllers\Admin\Sgcwts;

use App\Http\Controllers\Controller;
use App\Models\Sgcwt;
use App\Models\Status;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Sgcwt $sgcwt)
    {
        $statuses = Status::all();
        return view('admin.sgcwts.edit', compact('sgcwt', 'statuses'));
    }
}
