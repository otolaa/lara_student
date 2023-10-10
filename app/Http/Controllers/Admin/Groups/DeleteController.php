<?php

namespace App\Http\Controllers\Admin\Groups;

use App\Http\Controllers\Controller;
use App\Models\StudentGroupe;

class DeleteController extends Controller
{
    public function __invoke(StudentGroupe $group)
    {
        $group->delete();
        return redirect()->route('admin.groups.index');
    }
}
