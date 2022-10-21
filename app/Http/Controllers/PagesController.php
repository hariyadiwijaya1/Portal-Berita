<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function slug($slug)
    {
        $id = DB::table('posts')->where('slug', $slug)->first();
        $beritaNews = DB::table('posts')->offset(1)->limit(5)->get();


        return view('pages.pages', compact('id', 'beritaNews'));
    }

    public function islam()
    {
        $beritaNews = DB::table('posts')
            ->join('categories', 'posts.id_category', '=', 'categories.id')
            ->select('posts.*', 'categories.nama as category')
            ->where('categories.nama', '=', 'islam')
            ->limit(3)
            ->orderBy('id', 'desc')
            ->get();

        // $beritaTrending = DB::table('Posts')->latest()->first();
        $berita  = DB::table('posts')
            ->join('categories', 'posts.id_category', '=', 'categories.id')
            ->select('posts.*', 'categories.nama as category')
            ->where('categories.nama', '=', 'islam')
            ->orderBy('id', 'desc')
            ->paginate(4);

        return view('pages.islam', compact('beritaNews', 'berita'));
    }
    public function kristen()
    {
        $beritaNews = DB::table('posts')
            ->join('categories', 'posts.id_category', '=', 'categories.id')
            ->select('posts.*', 'categories.nama as category')
            ->where('categories.nama', '=', 'kristen')
            ->limit(3)
            ->orderBy('id', 'desc')
            ->get();

        // $beritaTrending = DB::table('Posts')->latest()->first();
        $berita  = DB::table('posts')
            ->join('categories', 'posts.id_category', '=', 'categories.id')
            ->select('posts.*', 'categories.nama as category')
            ->where('categories.nama', '=', 'kristen')
            ->orderBy('id', 'desc')
            ->paginate(4);

        return view('pages.kristen', compact('beritaNews', 'berita'));
    }
    public function hindu()
    {
        $beritaNews = DB::table('posts')
            ->join('categories', 'posts.id_category', '=', 'categories.id')
            ->select('posts.*', 'categories.nama as category')
            ->where('categories.nama', '=', 'hindu')
            ->limit(3)
            ->orderBy('id', 'desc')
            ->get();

        // $beritaTrending = DB::table('Posts')->latest()->first();
        $berita  = DB::table('posts')
            ->join('categories', 'posts.id_category', '=', 'categories.id')
            ->select('posts.*', 'categories.nama as category')
            ->where('categories.nama', '=', 'hindu')
            ->orderBy('id', 'desc')
            ->paginate(4);

        return view('pages.hindu', compact('beritaNews', 'berita'));
    }
    public function budha()
    {
        $beritaNews = DB::table('posts')
            ->join('categories', 'posts.id_category', '=', 'categories.id')
            ->select('posts.*', 'categories.nama as category')
            ->where('categories.nama', '=', 'budha')
            ->limit(3)
            ->orderBy('id', 'desc')
            ->get();

        // $beritaTrending = DB::table('Posts')->latest()->first();
        $berita  = DB::table('posts')
            ->join('categories', 'posts.id_category', '=', 'categories.id')
            ->select('posts.*', 'categories.nama as category')
            ->where('categories.nama', '=', 'budha')
            ->orderBy('id', 'desc')
            ->paginate(4);

        return view('pages.budha', compact('beritaNews', 'berita'));
    }

    public function khonghucu()
    {
        $beritaNews = DB::table('posts')
            ->join('categories', 'posts.id_category', '=', 'categories.id')
            ->select('posts.*', 'categories.nama as category')
            ->where('categories.nama', '=', 'khonghucu')
            ->limit(3)
            ->orderBy('id', 'desc')
            ->get();

        // $beritaTrending = DB::table('Posts')->latest()->first();
        $berita  = DB::table('posts')
            ->join('categories', 'posts.id_category', '=', 'categories.id')
            ->select('posts.*', 'categories.nama as category')
            ->where('categories.nama', '=', 'khonghucu')
            ->orderBy('id', 'desc')
            ->paginate(4);

        return view('pages.khonghucu', compact('beritaNews', 'berita'));
    }
}
