<?php

namespace App\Http\Controllers\Admin\Groups;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Groups\StoreRequest;
use App\Models\StudentGroupe;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        StudentGroupe::firstOrCreate($data);
        return redirect()->route('admin.groups.index');
    }
}
