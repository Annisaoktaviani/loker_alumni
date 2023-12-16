@extends('sidebar')
@section('content')
    

     <div class="container mt-3 py-5">
          <div class="card ">
           <div class="card-header text-center">
               <h2>Form Data Postingan</h2>
          </div>
               <div class="card-body">
               <form action="{{ $action }}" method="post" enctype="multipart/form-data" id="form">
                     @csrf
                {{-- <div class="mb-3">   
                <label for="" class="form-label">Id Alumni</label>
                     <input type="text" name="id_alumni" class="form-control" id="id_alumni" value="{{ $postingans -> id_alumni}}" >
                </div> --}}
                <div class="mb-3">   
                    <label for="" class="form-label">Nama Perusahaan</label>
                         <input type="text" name="nama_perusahaan" class="form-control" id="nama_perusahaan" value="{{ $postingans -> nama_perusahaan}}" >
                  </div>
                  <div class="mb-3">   
                   <select name="posisi" class="form-control">
                         <option data-display="posisi">posisi</option>
                         <option value="Manajer">Manajer</option>
                         <option value="Administrasi dan Gudang">Administrasi dan Gudang</option>
                         <option value="Manajer Pemasaran">Manajer Pemasaran</option>
                   </select>
              </div>
              <label for="">Deskripsi</label>
              <div class="mb-3">   
                   <textarea name="deskripsi" id="" cols="100" rows="10" value="{{$postingans-> deskripsi}}"></textarea>
               </div>
               <label for="" class="form-label">Alamat</label>
                   <div class="mb-3">   
                     <textarea name="alamat" id="" cols="100" rows="10" value="{{$postingans-> alamat}}"></textarea>
               </div>
             <div class="mb-3">   
                     <label for="" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email" value="{{ $postingans -> email}}" >
             </div>
             <div class="mb-3">   
                <label for="" class="form-label">Kontak</label>
               <input type="text" name="kontak" class="form-control" id="kontak" value="{{ $postingans -> kontak}}" >
             </div>
             
                <div class="mb-3">
                     <label for="" class="form-label">Foto</label>
                     <input type="file" name="foto" id="foto" value="{{ $postingans -> foto}}">
                </div>
                <div class="mb-3">   
                    <label for="" class="form-label">Tanggal</label>
                   <input type="date" name="tanggal_post" class="form-control" id="tanggal_post" value="{{ $postingans -> tanggal_post}}" >
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

     