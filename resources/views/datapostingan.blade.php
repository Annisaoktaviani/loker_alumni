@extends('sidebar')

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
                                <tr>
                                    <tr class="tet-center">
                                        <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                            No
                                        </th>
                                        <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                            Nama Perusahaan
                                        </th>
                                        <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                            Bidang Usaha
                                        </th>
                                        <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                            Deskripsi
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
                                           Foto
                                          </th>
                                        <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                            Aksi
                                        </th>
                                    </tr>
                                </tr>
                            </thead>
                           
                            <tbody>
                                @foreach ($postingans as $key => $item)
                        <!-- 1 -->
                        <tr class="bg-white border-b border-dashed dark:bg-gray-800 dark:border-gray-700">
                        
                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                {{$key+1}}
                            </td>
                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                {{$item->nama_perusahaan}}
                            </td>
                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                {{$item->bidang_usaha}}
                            </td>
                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                {{$item->alamat}}
                            </td>
                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                {{$item->deskripsi}}
                            </td>
                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                {{$item->email}}
                            </td>
                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                {{$item->kontak}}
                            </td>
                        
                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                <img src="/storage/{{$item->foto}}" alt="" width="50  ">
                            </td>
                        
                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                <a href="postinganalumni/edit/{{$item-> id_postingan}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                <a href= "postinganalumni/delete/{{$item-> id_postingan}}"class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></a>
                                {{-- <a href="postingan/delete/{{ $item -> id_postingan }}"><button class="btn btn-danger">HAPUS</button></a>
                                <a href="postingan/edit/{{ $item -> id_postingan }}"><button class="btn btn-success">EDIT</button></a> --}}
                            </td>
                        </tr>
                        @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
</div>
@endsection