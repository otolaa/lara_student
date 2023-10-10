<?php

namespace App\Http\Controllers\Admin\Statuses;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Statuses\StoreRequest;
use App\Models\Status;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Status::firstOrCreate($data);
        return redirect()->route('admin.statuses.index');
    }
}
