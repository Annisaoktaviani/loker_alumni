@extends('bar')
@section('content')
    

     <div class="container mt-3 py-5">
          <div class="card ">
           <div class="card-header text-center">
               <h2>Form Data Postingan</h2>
          </div>
               <div class="card-body">
               <form action="{{ $action }}" method="post" enctype="multipart/form-data" id="form">
                     @csrf
                <div class="mb-3">   
                    <label for="" class="form-label">Nama Perusahaan</label>
                         <input type="text" name="nama_perusahaan" class="form-control" id="nama_perusahaan" value="{{ $perusahaans-> nama_perusahaan}}" >
                  </div>
                  <div class="mb-3">
                       <label for="" class="form-label">Foto</label>
                       <input type="file" name="foto_perusahaan" id="foto_perusahaan" value="{{ $perusahaans-> foto_perusahaan}}">
                  </div>
                  <div class="mb-3">   
                    <label for="" class="form-label">Deskripsi</label>
                         <input type="text" name="deskripsi" class="form-control" id="deskripsi" value="{{ $perusahaans-> deskripsi}}" >
                  </div>
               
               <div>
                <div class="row">
                  <div class="col-5">
                    <input type="submit"class="btn btn-primary" value="SIMPAN" name="simpan">
                  </div>
                  </div>
               </div>
          </form>
     </div>
     </div>
     </div>

     @endsection

     