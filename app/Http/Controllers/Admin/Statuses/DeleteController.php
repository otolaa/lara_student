<?php

namespace App\Http\Controllers\Admin\Statuses;

use App\Http\Controllers\Controller;
use App\Models\Status;

class DeleteController extends Controller
{
    public function __invoke(Status $status)
    {
        $status->delete();
        return redirect()->route('admin.statuses.index');
    }
}
