@extends('bar')

@section('content')
<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card widget_2 big_icon traffic">
                <div class="body">
                    <h6>Data Alumni</h6>
                    <h2> <small class="info"></small>{{ $nisa }}</h2>
                    <small></small>
                    <div class="progress mb-0">
                        <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card widget_2 big_icon sales">
                <div class="body">
                    <h6>Data Postingan</h6>
                    <h2> <small class="info"></small>{{$okta}}</h2>
                    {{-- <small>6% higher than last month</small> --}}
                    <div class="progress mb-0">
                        <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100" style="width: 38%;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card widget_2 big_icon email">
                <div class="body">
                    <h6>Data Pengajuan</h6>
                    <h2><small class="info"></small>{{$viani}}</h2>
                    <small>Total Registered email</small>
                    <div class="progress mb-0">
                        <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100" style="width: 39%;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card widget_2 big_icon domains">
                <div class="body">
                    <h6>Data Perusahaan</h6>
                    <h2> <small class="info"></small>{{$ica}}</h2>
                    <small>Total Registered Domain</small>
                    <div class="progress mb-0">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
</div>
@endsection