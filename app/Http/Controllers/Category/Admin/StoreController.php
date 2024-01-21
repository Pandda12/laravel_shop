<?php

namespace App\Http\Controllers\Category\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\StoreRequest;
use App\Models\Category;

class StoreController extends Controller
{
    public function __invoke( StoreRequest $request )
    {
        $data = $request->validated();

        Category::firstOrCreate($data);

        return redirect()->route('admin.category.index');
    }
}