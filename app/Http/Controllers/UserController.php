<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function actionLogin(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        Auth::attempt($data);
        if (Auth::check($data)) {
            return redirect('/home');
        }else{
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/');
        }
    }

    public function dashboard()
    {
        $user = Auth::User()->id;
        return view('admin.index');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function edit()
    {
        return view('admin.profile.show');
    }
    public function update(Request $request, $id)
    {

        DB::table('users')->where('id',$id)->update([
            'email'     => $request->email,
            'password'  => $request->password,
            'role'      => $request->role,
        ]);

        // DB::table('user_details')->where('id', $id)->update([
        //     'nama'      => $request->nama,
        //     'status'    => $request->alamat
        // ]);

        return redirect('/home')->with('msg', 'Berhasil mengubah Biodata.');
    }
}
