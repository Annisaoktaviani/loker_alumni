@extends('bar')

@section('content')

<div class="container-fluid">            
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="header">
                    <h2><strong></strong>  </h2>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <a href="{{url ('pengajuan/add')}}"><button class="btn btn-primary margin-right" type="submit">+ Tambah Data</button></a>

                            <thead>
                                <tr class="tet-center">
                                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                        No
                                    </th>
                                    {{-- <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                       Id Alumni
                                    </th> --}}
                                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                       Nama Lengkap
                                    </th>
                                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                       Tanggal lahir
                                    </th>
                                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                      Alamat
                                    </th>
                                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                      Email
                                    </th>
                                      <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                      Kontak
                                    </th>
                                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                      Persyaratan
                                      </th>
                                      <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                     Tanggal Pengajuan
                                       </th>
                                        {{-- <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                     Foto 
                                       </th> --}}
                                       {{-- <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                    Jenis Kelamin 
                                     </th> --}}
                                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                        
                            <tbody>
                             @foreach ($pengajuans as $key => $item)
                             <tr class="bg-white border-b border-dashed dark:bg-gray-800 dark:border-gray-700">
                                    
                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                    {{$key+1}}
                                </td>
                                
                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                    {{$item->nama_lengkap}}
                                </td>
                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                    {{$item->tanggal_lahir}}
                                </td>
                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                    {{$item->alamat}}
                                </td>
                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                    {{$item->email}}
                                </td>
                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                    {{$item->kontak}}
                                </td>
                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                    <button class="btn btn-success "><a class="text-white" href="/storage/{{$item->persyaratan}}">Download</a></button>
                                </td>
                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                    {{$item->tanggal_pengajuan}}
                                </td>
                                {{-- <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                    {{$item->foto_peng}}
                                </td> --}}
                                {{-- <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                    {{$item->jenis_kelamin}}
                                </td> --}}
                            
                                
                            
                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                    {{-- <a href="pengajuan/edit/{{$item-> id_pengajuan}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a> --}}
                                    <a href= "pengajuan/delete/{{$item-> id_pengajuan}}"class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                             @endforeach
                                
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
</div>
@endsection