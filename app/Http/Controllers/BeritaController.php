<?php

namespace App\Http\Controllers;

use App\berita;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

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

    public function create()
    {
        return view('admin.post.create');
    }

   //create
   public function store(Request $request)
   {
            try{
               DB::transaction(function() use($request) {
                   DB::table('posts')->insert([
                       'created_at' => date('Y-m-d H:i:s'),
                       'title' => $request->title,
                       'slug' => $request->slug,
                       'body' => $request->body,
                       'image' => $request->image,
                       'id_category' => $request->id_category,
                       'id_user' => $request->id_user,
                   ]);
               });

               $json = [
                   'msg' => 'Produk berhasil ditambahkan',
                   'status' => true
               ];
           } catch(Exception $e) {
               $json = [
                   'msg'       => 'error',
                   'status'    => false,
                   'e'         => $e
               ];
           }

       return Response::json($json);
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
   public function update(Request $request, $id)
   {
       if($request->name == NULL) {
           $json = [
               'msg'       => 'Mohon masukan nama produk',
               'status'    => false
           ];
       } elseif($request->price == NULL) {
           $json = [
               'msg'       => 'Mohon masukan harga produk',
               'status'    => false
           ];
       } else {
           try{
               DB::transaction(function() use($request, $id) {
                   DB::table('posts')->where('id', $id)->update([
                    'created_at' => date('Y-m-d H:i:s'),
                    'title' => $request->title,
                    'slug' => $request->slug,
                    'body' => $request->body,
                    'image' => $request->image,
                    'id_category' => $request->id_category,
                    'id_user' => $request->id_user,
                   ]);
               });

               $json = [
                   'msg' => 'Produk berhasil disunting',
                   'status' => true
               ];
           } catch(Exception $e) {
               $json = [
                   'msg'       => 'error',
                   'status'    => false,
                   'e'         => $e
               ];
           }
       }

       return Response::json($json);
   }

   //delete
   public function destroy($id)
   {
       try{
           DB::transaction(function() use($id) {
               DB::table('posts')->where('id', $id)->delete();
           });
           $json = [
               'msg'       => "Produk di hapus",
               'status'    => true
           ];

       }catch(Exception $e){
           $json =[
               'msg'       => 'error',
               'status'    => false,
               'e'         => $e,
           ];
       }

       return response()->json($json);
   }
}
