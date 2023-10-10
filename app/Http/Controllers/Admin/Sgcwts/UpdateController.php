<?php

namespace App\Http\Controllers\Admin\Sgcwts;

use App\Http\Controllers\Controller;
use App\Models\Sgcwt;
use App\Http\Requests\Admin\Sgcwts\UpdateRequest;
use Illuminate\Support\Str;
use App\Models\Status;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Sgcwt $sgcwt)
    {
        $data = $request->validated();

        if (isset($data['title']))
            $data['slug'] = Str::slug($data['title']);

        $sgcwt->update($data);

        $statuses = Status::all()->pluck('title','id')->toArray();
        return view('admin.sgcwts.show', compact('sgcwt', 'statuses'));
    }
}
