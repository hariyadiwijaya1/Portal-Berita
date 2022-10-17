<?php

namespace App\Http\Controllers;

use Exception;
use App\Berita;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('admin.post.index');
    }
    public function categories()
    {
        return view('admin.profile.show');
    }

    public function create()
    {
        $data =  DB::table('categories')->get();

        return view('admin.post.create', compact('data'));
    }

    //create
    public function store(Request $request)
    {
        try {


            $slug = Str::slug($request->title, '-');


            DB::transaction(function () use ($request, $slug) {
                DB::table('posts')->insert([
                    'created_at' => date('Y-m-d H:i:s'),
                    'title' => $request->title,
                    'slug' => $slug,
                    'body' => $request->body,
                    'image' => '$request->image',
                    'id_category' => $request->id_category,
                    'id_user' => Auth::User()->id,
                ]);
            });
        } catch (Exception $e) {
            return 'data error';
        }

        return redirect('post');
    }

    //read by id atau search
    public function show()
    {
        //    if(is_numeric($id)) {
        //        $data = DB::table('posts')->where('id', $id)->first();
        //        return Response::json($data);
        //    }
        $data =
            DB::table('posts')
            ->join('categories', 'categories.id', '=', 'posts.id_category')
            ->select('posts.*', 'categories.nama as category')
            ->orderBy('posts.id', 'desc')->get();

        return view('admin.post.index', compact('data'));
    }

    //update
    public function edit($id)
    {
        $data = DB::table('posts')->find($id);
        return view('admin.post.edit', compact('data'));
    }

    public function update(Request $request)
    {

        try {
            DB::transaction(function () use ($request) {
                DB::table('posts')->where('id',)->update([
                    'created_at' => date('Y-m-d H:i:s'),
                    'title' => $request->title,
                    'slug' => '$request->slug',
                    'body' => $request->body,
                    'image' => '$request->image',
                    'id_category' => $request->id_category,
                    'id_user' => Auth::User()->id,
                ]);
            });

            $json = [
                'msg' => 'Produk berhasil disunting',
                'status' => true
            ];
        } catch (Exception $e) {
            $json = [
                'msg'       => 'error',
                'status'    => false,
                'e'         => $e
            ];
        }

        return Response::json($json);
    }

    //delete
    public function destroy($id)
    {
        try {
            DB::transaction(function () use ($id) {
                DB::table('posts')->where('id', $id)->delete();
            });
            $json = [
                'msg'       => "Produk di hapus",
                'status'    => true
            ];
        } catch (Exception $e) {
            $json = [
                'msg'       => 'error',
                'status'    => false,
                'e'         => $e,
            ];
        }

        return response()->json($json);
    }
}
