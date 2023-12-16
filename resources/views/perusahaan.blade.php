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
                            <a href="{{url ('perusahaan/add')}}"><button class="btn btn-primary margin-right" type="submit">+ Tambah Data</button></a>

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
                                           Foto
                                          </th>
                                          <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                            Deskripsi
                                        </th>
                                        <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                            Aksi
                                        </th>
                                    </tr>
                                </tr>
                            </thead>
                           
                            <tbody>
                                @foreach ($perusahaans as $key => $item)
                        <!-- 1 -->
                        <tr class="bg-white border-b border-dashed dark:bg-gray-800 dark:border-gray-700">
                        
                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                {{$key+1}}
                            </td>
                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                {{$item->nama_perusahaan}}
                            </td>
                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                <img src="/storage/{{$item->foto_perusahaan}}" alt="" width="50  ">
                            </td>
                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                <div id="editor">{!! $item->deskripsi !!}</div>

                            </td>
                        
                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                <a href="/perusahaan/edit/{{$item-> id_perusahaan}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                <a href= "perusahaan/delete/{{$item-> id_perusahaan}}"class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></a>
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

{{-- @push('style')
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
@endpush

@push('script')
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script>
  var quill = new Quill('#editor', {
    theme: 'snow'
  });

  document.getElementById('form').addEventListener('submit', function (e) {
            // Mendapatkan HTML yang dihasilkan oleh Quill
            // e.preventDefault();
            var quillHtml = document.querySelector('.ql-editor').innerHTML;
            
            // Menambahkan HTML sebagai nilai ke input tersembunyi
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'deskripsi');
            hiddenInput.setAttribute('value', quillHtml);
            this.appendChild(hiddenInput);
            
            // Anda juga bisa melakukan validasi atau tindakan lainnya di sini sebelum mengirimkan formulir
        });

        // document.querySelector("#form").submit();
</script>
@endpush --}}