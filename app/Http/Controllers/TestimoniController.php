<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Testimoni;
class TestimoniController extends Controller
{
    //
    function show() {
        $data['testimonis'] = Testimoni ::all();
        return view ('testimoni', $data);
    }

    function add() {
        $data=[
            'action'=>url('testimoni/create'),
            'tombol'=>'simpan',
            'testimonis'=>(object)[
                'foto_testi'=>'',
                'deskripsi'=>'',
                'nama_testi'=>'',
               
            ],
        ];
        return view('formtesti',$data);
      }
      function create(Request $req){
        Testimoni::create([
            'foto_testi'=>$req->file('foto_testi')->store('foto_testi'),
            'deskripsi'=>$req->deskripsi,
            'nama_testi'=>$req->nama_testi,
          
        ]);
        return redirect('testimoni');
    }
    function delete($item){
        Testimoni:: where('id',$item)->delete();
        return redirect('testimoni');
      }
      function edit($item){
        $data['testimonis']=Testimoni::find($item);
        $data['action']= url('testimoni/update').'/'.$data['perusahaans']->id;
        return view('formtesti',$data);
      }
      function update(Request $req){
        // $this->validate($req ,[
        //     'id' => 'required|numeric',
        //     'judul' => 'required|string|max:50',
        //     'foto' => 'mimes:jpg,png'
        // ]);
        Testimoni::where('id',$req->id)->update([
            'foto_testi'=>$req->file('foto_testi')->store('foto_testi'),
            'deskripsi'=>$req->deskripsi,
            'nama_testi'=>$req->nama_testi,
      
        ]);
        return redirect('testimoni');
      }
}
