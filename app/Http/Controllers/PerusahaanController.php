<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perusahaan;
use Illuminate\Facades\Database;
use Illuminate\Facades\DB;

class PerusahaanController extends Controller
{
    //
    function show(){
        $data ['perusahaans'] = Perusahaan:: all();
        return view('perusahaan', $data);
    }
    function add() {
        $data=[
            'action'=>url('perusahaan/create'),
            'tombol'=>'simpan',
            'perusahaans'=>(object)[
                'nama_perusahaan'=>'',
                'foto_perusahaan'=>'',
                'deskripsi'=>'',
               
            ],
        ];
        return view('formperusahaan',$data);
      }
      function create(Request $req){
        Perusahaan::create([
            'nama_perusahaan'=>$req->nama_perusahaan,
            'foto_perusahaan'=>$req->file('foto_perusahaan')->store('foto_perusahaan'),
            'deskripsi'=>$req->deskripsi,
          
        ]);
        return redirect('perusahaan');
    }
    function delete($item){
        Perusahaan:: where('id_perusahaan',$item)->delete();
        return redirect('perusahaan');
      }
      function edit($item){
        $data['perusahaans']=Perusahaan::find($item);
        $data['action']= url('perusahaan/update').'/'.$data['perusahaans']->id_perusahaan;
        return view('formperusahaan',$data);
      }
      function update(Request $req){
        // $this->validate($req ,[
        //     'id' => 'required|numeric',
        //     'judul' => 'required|string|max:50',
        //     'foto' => 'mimes:jpg,png'
        // ]);
        Perusahaan::where('id_perusahaan',$req->id_perusahaan)->update([
            'nama_perusahaan'=>$req->nama_perusahaan,
            'foto_perusahaan'=>$req->file('foto_perusahaan')->store('foto_perusahaan'),
            'deskripsi'=>$req->deskripsi,
      
        ]);
        return redirect('perusahaan');
      }
      
}
