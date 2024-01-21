<?php

namespace App\Http\Controllers\Category\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;

class ShowController extends Controller
{
    public function __invoke( Category $category )
    {
        return view('admin.category.show', compact('category'));
    }
}
