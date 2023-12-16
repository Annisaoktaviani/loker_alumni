<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengajuan;
use Illuminate\Facades\Database;
use Illuminate\Facades\DB;

class PengajuanController extends Controller
{
    //
    function show (){
        $data ['pengajuans'] = Pengajuan::all();
        return view ('pengajuan',$data);
    }
    function add(){
        $data=[
            'action'=> url('pengajuan/create'),
            'tombol' => 'simpan',
            'pengajuans'=>(object)[
                'nama_lengkap'=>'',
                'tanggal_lahir'=> '',
                'alamat'=> '',
                'email'=> '',
                'kontak'=> '',
                'persyaratan'=> '',
                'tanggal_pengajuan'=> '',
                // 'foto_peng'=> '',
                // 'jenis_kelamin'=> '',
            ],
        ];
        return view('formpengajuan',$data);
    }
    function tampil(){
      $data ['pengajuans']  = Pengajuan::all();
      return view('datapengajuan', $data);
    }
    function create(Request $req){
       Pengajuan::create([
        'nama_lengkap'=>$req->nama_lengkap,
        'tanggal_lahir'=>$req->tanggal_lahir,
        'alamat'=>$req->alamat,
        'email'=>$req->email,
        'kontak'=>$req->kontak,
        'persyaratan'=>$req->file('persyaratan')->store('persyaratan'),
        'tanggal_pengajuan'=>$req->tanggal_pengajuan,
        // 'foto_peng'=>$req->file('foto')->store('foto'),
        // 'jenis_kelamin'=>$req->jenis_kelamin,
       ]); 
       return redirect('pengajuan');
    }
    function delete($item){
        Postingan:: where('id_pengajuan',$item)->delete();
        return redirect('pengajuan');
      }
      function edit($item){
        $data['pengajuans']=Pengajuan::find($item);
        $data['action']= url('pengajuan/update').'/'.$data['pengajuans']->id_pengajuan;
        return view('formpengajuan',$data);
      }
      
      function update(Request $req){
        // $this->validate($req ,[
        //     'id' => 'required|numeric',
        //     'judul' => 'required|string|max:50',
        //     'foto' => 'mimes:jpg,png'
        // ]);
        Postingan::where('id_pengajuan',$req->id_pengajuan)->update([
            'nama_lengkap'=>$req->nama_lengkap,
            'tanggal_lahir'=>$req->tanggal_lahir,
            'alamat'=>$req->alamat,
            'email'=>$req->email,
            'kontak'=>$req->kontak,
            'persyaratan'=>$req->persyaratan,
            'tanggal_pengajuan'=>$req->tanggal_pengajuan,
            // 'foto_peng'=>$req->file('foto')->store('foto'),
            // 'jenis_kelamin'=>$req->jenis_kelamin,
          'foto'=>$req->file('foto')->store('foto'),
      
        ]);
        return redirect('pengajuan');
      }
      
}