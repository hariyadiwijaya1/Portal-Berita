<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show()
    {
        $beritaNews = DB::table('posts')->offset(1)->limit(5)->get();
        $beritaTrending = DB::table('posts')->latest()->first();
        $berita  = DB::table('posts')->offset(6)->latest()->paginate(3);

        return view('pages.index', compact('beritaNews', 'beritaTrending', 'berita'));
    }
    public function create()
    {
        return view('pages.post');
    }
}
