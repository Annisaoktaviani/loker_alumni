<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postingan;
use Illuminate\Facades\Database;
use Illuminate\Facades\DB;
// use Toastr;


class PostinganController extends Controller
{
    //
  function show() {
    $data ['postingans'] = Postingan:: all();
    return view('postingan', $data);
  }
  function add() {
    $data=[
        'action'=>url('postingan/create'),
        'tombol'=>'simpan',
        'postingans'=>(object)[
            'nama_perusahaan'=>'',
            'posisi'=>'',
            'alamat'=>'',
            'deskripsi'=>'',
            'email'=>'',
            'kontak'=>'',
            'foto'=>'',
            'tanggal_post'=>'',
            
        ],
    ];
    return view('formdatapostingan',$data);
  }
  function tampil(){
    $data ['postingans'] = Postingan:: all();
    return view('datapostingan', $data);
  }

  function create(Request $req){
    Postingan::create([
        'nama_perusahaan'=>$req->nama_perusahaan,
        'posisi'=>$req->posisi,
        'alamat'=>$req->alamat,
        'deskripsi'=>$req->deskripsi,
        'email'=>$req->email,
        'kontak'=>$req->kontak,
        'foto'=>$req->file('foto')->store('foto'),
        'tanggal_post'=>$req->tanggal_post,

    ]);
    return redirect('postingan');
}
function delete($item){
  Postingan:: where('id_postingan',$item)->delete();
  return redirect('postingan');
}
function edit($item){
  $data['postingans']=Postingan::find($item);
  $data['status'] = ['Draft', 'Accepted', 'Rejected'];
  $data['Manajer'] = ['Adminstrasi dan Gudang', 'Manajer Pemasaran'];

  $data['action']= url('postinganadmin/update').'/'.$data['postingans']->id_postingan;
  return view('formpostingan',$data);
}

function update(Request $req){
  // $this->validate($req ,[
  //     'id' => 'required|numeric',
  //     'judul' => 'required|string|max:50',
  //     'foto' => 'mimes:jpg,png'
  // ]);
  Postingan::where('id_postingan',$req->id_postingan)->update([
    'nama_perusahaan'=>$req->nama_perusahaan,
    'posisi'=>$req->posisi,
    'alamat'=>$req->alamat,
    'deskripsi'=>$req->deskripsi,
    'email'=>$req->email,
    'kontak'=>$req->kontak,
    'status'=>$req->status,
    'foto'=>$req->file('foto')->store('foto'),
    'tanggal_post'=>$req->tanggal_post,

  ]);
  return redirect('postingan');
}

}