<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Sgcwt;
use App\Models\User;

class IndexController extends Controller
{
    public function __invoke()
    {
        $user_count = User::all()->count();
        $sgcwt_count = Sgcwt::all()->count();
        return view('admin.main.index', compact('user_count', 'sgcwt_count'));
    }
}
