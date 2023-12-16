<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perusahaan;
use App\Models\Testimoni;
use App\Models\Postingan;
class HomeController extends Controller
{
    //
    function show(){
        $data['perusahaans'] = Perusahaan::all();
        $data['testimonis'] = Testimoni::all();
        $data['postingans'] = Postingan::all();
        return view('welcome',$data);
    }

    function edit($item){
        $data['postingans']=Postingan::find($item);
        // $data['status'] = ['Draft', 'Accepted', 'Rejected'];
        $data['Manajer'] = ['Adminstrasi dan Gudang', 'Manajer Pemasaran'];
      
        $data['action']= url('postinganalumni/update').'/'.$data['postingans']->id_postingan;
        return view('formdatapostingan',$data);
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
        //   'status'=>$req->status,
          'foto'=>$req->file('foto')->store('foto'),
          'tanggal_post'=>$req->tanggal_post,
      
        ]);
        return redirect('postingan');
      }

      function tampil() {
        $data ['postingans'] = Postingan:: all();
        return view('detail', $data);
      }

}
