@extends('bar')

@section('content')

<div class="container-fluid">            
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="header">
                    <h2><strong></strong></h2>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            {{-- <a href="{{url ('postingan/add')}}"><button class="btn btn-primary margin-right" type="submit">+ Tambah Data</button></a> --}}

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
                                           Posisi
                                        </th>
                                        <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                            Alamat
                                        </th>
                                        <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                            Deskripsi
                                        </th>
                                       
                                        <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                          Email
                                        </th>
                                          <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                        Kontak
                                        </th>
                                        <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                        Status
                                            </th>
                                        <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                           Foto
                                          </th>
                                         <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                           Tanggal
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
                                {{$item->posisi}}
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
                            <td>
                                <a href="" class="text-white btn btn-sm
                                @if($item->status == 'Draft') btn-warning
                                @elseif($item->status == 'Accepted') btn-success
                                @elseif($item->status == 'Rejected') btn-danger
                                @endif">
                                {{$item->status}}
                            </a>
                            </td>
                        
                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                <img src="/storage/{{$item->foto}}" alt="" width="50  ">
                            </td>
                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                {{$item->tanggal_post}}
                            </td>
                        
                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                <a href="postingan/edit/{{$item-> id_postingan}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                <a href= "postingan/delete/{{$item-> id_postingan}}"class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></a>
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