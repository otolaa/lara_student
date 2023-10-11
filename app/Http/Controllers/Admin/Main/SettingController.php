<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Sgcwt;
use App\Models\User;

class SettingController extends Controller
{
    public function __invoke()
    {
        $user_count = User::all()->count();
        $sgcwt_count = Sgcwt::all()->count();
        return view('admin.main.setting', compact('user_count', 'sgcwt_count'));
    }
}
