<?php

namespace App\Http\Controllers\Category\Admin;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('admin.category.create');
    }
}