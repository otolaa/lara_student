<?php

namespace App\Http\Controllers\Admin\Statuses;

use App\Http\Controllers\Controller;
use App\Models\Status;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Status $status)
    {
        return view('admin.statuses.show', compact('status'));
    }
}
