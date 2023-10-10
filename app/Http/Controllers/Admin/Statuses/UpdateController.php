<?php

namespace App\Http\Controllers\Admin\Statuses;

use App\Http\Controllers\Controller;
use App\Models\Status;
use App\Http\Requests\Admin\Statuses\UpdateRequest;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Status $status)
    {
        $data = $request->validated();
        $status->update($data);
        return view('admin.statuses.show', compact('status'));
    }
}
