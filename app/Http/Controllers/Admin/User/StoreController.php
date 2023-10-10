<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\StoreRequest;
use App\Mail\User\PasswordMail;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        if (isset($data['photo']))
            $data['photo'] = Storage::disk('public')->put('/photo', $data['photo']);

        $password = $data['password']?$data['password']:Str::random(10);
        $data['password'] = Hash::make($password);
        User::firstOrCreate(['email'=>$data['email']], $data);
        // Mail::to($data['email'])->send(new PasswordMail($password));

        return redirect()->route('admin.user.index');
    }
}
