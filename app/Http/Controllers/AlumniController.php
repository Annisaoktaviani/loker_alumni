<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Alumni;

class AlumniController extends Controller
{
    //
    function register(){
        return view('register');
    }
    function daftar(Request $req){

        $validate = $this->validate($req,[
            'nis' => '',
            'nama_lengkap' => '',
            'email' => '',
            'password' => '',
            'tahun_lulus' => '',
            'foto_alumni' => ''

        ]);

        if ($req->hasFile('foto_alumni')) {
            $fotoPath = $req->file('foto_alumni')->store('public/foto_alumni');
            $validate['foto_alumni'] = str_replace('public/', '', $fotoPath);
        }

        $validate['password'] = bcrypt($req->password);

        Alumni::create($validate);
        return redirect('loginalumni');
    }
    function tampil(){
        $data['alumnis']=Alumni::all();
        return view('tampilan',$data);
    }
    function alumni(){
        $data['alumnis']=Alumni::all();
        return view('dataalumni',$data);
    }
    function profil(){
        $data['alumnis']=Alumni::all();
        return view('profil',$data);
    }
    function auth(Request $request){
        $nisa = $request->only('email','password');
        if(auth('alumni')->attempt($nisa)){
            return redirect('dashboard');
        }
        return redirect()->back();
    }
     
    function logout(){
        $logout = auth()->guard('alumni')->logout();
      
        return redirect('loginalumni');
    }
}
