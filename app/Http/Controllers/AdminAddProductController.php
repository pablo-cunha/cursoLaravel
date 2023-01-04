<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAddProductController extends Controller
{
    public function show() {
        return view('admin.add-product');
    }
}
