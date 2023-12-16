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
                     <input type="text" name="id_alumni" class="form-control" id="id_alumni" value="{{ $pengajuans -> id_alumni}}" >
                </div> --}}
                
                <div class="mb-3">   
                    <label for="" class="form-label">Nama Lengkap</label>
                         <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" value="{{ $pengajuans -> nama_lengkap}}" >
                  </div>
                  <div class="mb-3">   
                    <label for="" class="form-label">Tanggal Lahir</label>
                     <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" value="{{ $pengajuans -> tanggal_lahir}}" >
              </div>
                  <div class="mb-3">   
                    <label for="" class="form-label">Alamat</label>
                     <input type="text" name="alamat" class="form-control" id="alamat" value="{{ $pengajuans -> alamat}}" >
              </div>
             <div class="mb-3">   
                     <label for="" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email" value="{{ $pengajuans -> email}}" >
             </div>
             <div class="mb-3">   
                <label for="" class="form-label">Kontak</label>
               <input type="text" name="kontak" class="form-control" id="kontak" value="{{ $pengajuans -> kontak}}" >
             </div>
             <div class="mb-3">   
               <label for="" class="form-label">Persyaratan</label>
              <input type="file" name="persyaratan" class="form-control" id="persyaratan" value="{{ $pengajuans -> persyaratan}}" >
            </div>
             <div class="mb-3">   
                <label for="" class="form-label">Tanggal pengajuan</label>
                 <input type="date" name="tanggal_pengajuan" class="form-control" id="tanggal_pengajuan" value="{{ $pengajuans -> tanggal_pengajuan}}" >
          </div>
                {{-- <div class="mb-3">   
                    <label for="" class="form-label">Jenis Kelamim</label>
                     <input type="enum" name="jenis_kelamin" class="form-control" id="jenis_kelamin" value="{{ $pengajuans -> jenis_kelamin}}" >
                 </div> --}}
            
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

     