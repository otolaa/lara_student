<?php

namespace App\Http\Controllers\Admin\Sgcwts;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Sgcwts\StoreRequest;
use App\Models\Sgcwt;
use Illuminate\Support\Str;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        if (isset($data['title']))
            $data['slug'] = Str::slug($data['title']);

        Sgcwt::firstOrCreate($data);
        return redirect()->route('admin.sgcwts.index');
    }
}
