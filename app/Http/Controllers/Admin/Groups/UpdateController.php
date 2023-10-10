<?php

namespace App\Http\Controllers\Admin\Groups;

use App\Http\Controllers\Controller;
use App\Models\StudentGroupe;
use App\Http\Requests\Admin\Groups\UpdateRequest;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, StudentGroupe $group)
    {
        $data = $request->validated();
        $group->update($data);
        return view('admin.groups.show', compact('group'));
    }
}
