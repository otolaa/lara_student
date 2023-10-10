<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Requests\Admin\User\UpdateRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, User $user)
    {
        $data = $request->validated();

        if (isset($data['password']))
            $data['password'] = Hash::make($data['password']);
        else
            unset($data['password']);

        if (isset($data['photo']))
            $data['photo'] = Storage::disk('public')->put('/photo', $data['photo']);

        //dd($data);
        $user->update($data);
        return view('admin.user.show', compact('user'));
    }
}
