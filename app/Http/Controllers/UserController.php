<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Alumni;
use App\Models\Postingan;
use App\Models\Perusahaan;
use App\Models\Pengajuan;



use Toastr;

class UserController extends Controller
{
    //

  
    function auth(Request $request){
        $loker = $request->only('email','password');
        if(Auth::attempt($loker)){
            return redirect()->intended('tampilan');
        }
        Toastr::error('Password Salah', 'Login Gagal');
        return redirect()->back();
    }


    // }
    function logout(){
        Auth::logout();
        return redirect('/');
    }


    function show(){
        $nisa = Alumni::count();
        $okta = Postingan::count();
        $viani = Pengajuan::count();
        $ica = Perusahaan::count();
        return view('dashboardadmin', compact ('nisa','okta','viani','ica'));
    }

    
}

