<?php

namespace App\Http\Controllers\Admin\Sgcwts;

use App\Http\Controllers\Controller;
use App\Models\Sgcwt;

class DeleteController extends Controller
{
    public function __invoke(Sgcwt $sgcwt)
    {
        $sgcwt->delete();
        return redirect()->route('admin.sgcwts.index');
    }
}
