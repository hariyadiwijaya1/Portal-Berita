<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show()
    {
        return view('pages.index');
    }
    public function create()
    {
        return view('pages.post');
    }
}
