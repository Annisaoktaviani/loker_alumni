<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.wrraptheme.com/templates/bigbucket/html/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Nov 2023 11:28:04 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="Webpixels">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<title>Dashboard |Alumni</title>

<link rel="stylesheet" href="/dasboard/assets/vendor/themify-icons/themify-icons.css">
<link rel="stylesheet" href="/dasboard/assets/vendor/fontawesome/css/font-awesome.min.css">

<link rel="stylesheet" href="/dasboard/assets/vendor/charts-c3/plugin.css"/>
<link rel="stylesheet" href="/dasboard/assets/vendor/jvectormap/jquery-jvectormap-2.0.3.css"/>
<link rel="stylesheet" href="/dasboard/assets/css/main.css" type="text/css">
</head>
<body class="theme-indigo">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="https://www.wrraptheme.com/templates/bigbucket/html/assets/images/brand/icon_black.svg" width="48" height="48" alt="ArrOw"></div>
        <p>Please wait...</p>
    </div>
</div>

<nav class="navbar custom-navbar navbar-expand-lg py-2">
    <div class="container-fluid px-0">
        <a href="javascript:void(0);" class="menu_toggle"><i class="fa fa-align-left"></i></a>
        <a href="index.html" class="navbar-brand"><img src="" alt="" /> <strong>Big</strong> </a>
        <div id="navbar_main">
            <ul class="navbar-nav mr-auto hidden-xs">
                <li class="nav-item page-header">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ul>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                {{-- <li class="nav-item hidden-xs">
                    <form class="form-inline main_search">
                        <input class="form-control form-control-sm mr-sm-2" type="search" placeholder="Search..." aria-label="Search">
                    </form>
                </li> --}}
                {{-- <li class="nav-item"><a class="nav-link nav-link-icon" href="javascript:void(0);"><i class="fa fa-cogs"></i></a></li> --}}
              
                <li class="nav-item dropdown">
                    <a class="nav-link nav-link-icon" href="javascript:void(0);" id="navbar_1_dropdown_3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <h6 class="dropdown-header">User menu</h6>
                        <a class="dropdown-item" href="javascript:void(0);"><i class="fa fa-user text-primary"></i>Profil Saya</a>
                        {{-- <a class="dropdown-item" href="javascript:void(0);"><span class="float-right badge badge-success">$50K</span><i class="fa fa-briefcase text-primary"></i>My Balance</a>
                        <a class="dropdown-item" href="javascript:void(0);"><span class="float-right badge badge-warning">4</span><i class="fa fa-envelope text-primary"></i>Inbox</a>
                        <a class="dropdown-item" href="javascript:void(0);"><i class="fa fa-cog text-primary"></i>Settings</a>
                        <div class="dropdown-divider" role="presentation"></div> --}}
                        <a class="dropdown-item" href="javascript:void(0);"><i class="fa fa-sign-out text-primary"></i>Keluar</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="main_content" id="main-content">

    <div class="left_sidebar">
        <nav class="sidebar">
            {{-- <div class="user-info"> --}}
                {{-- <div class="image"><a href="javascript:void(0);"><img src="dasboard/assets/images/pict7.jpg" alt="User"></a></div> --}}
                {{-- <div class="detail mt-3">
                    <h5 class="mb-0">Mike Thomas</h5>
                    <small>Admin</small>
                </div>
                <div class="social">
                    <a href="javascript:void(0);" title="facebook"><i class="ti-twitter-alt"></i></a>
                    <a href="javascript:void(0);" title="twitter"><i class="ti-linkedin"></i></a>
                    <a href="javascript:void(0);" title="instagram"><i class="ti-facebook"></i></a>
                </div> --}}
            {{-- </div> --}}
            <ul id="main-menu" class="metismenu">
                <li class="g_heading">Main</li>
                <li><a href="{{url('dashboard')}}"><i class="ti-home text-primary"></i><span>Dashboard</span></a></li>
                <li><a href="{{url('profil')}}"><i class="fa fa-user text-primary"></i><span>Profil Saya</span></a></li>
                {{-- <li><a href="{{url('dataalumni')}}"><i class="ti-notepad text-primary"></i><span>Data Alumni</span></a></li> --}}
                {{-- <li><a href="{{url('datapostingan')}}"><i class="ti-comments text-primary"></i><span>Data Postingan</span></a></li>
                <li><a href="{{url('datapengajuan')}}"><i class="ti-pencil-alt text-primary"></i><span>Data Pengajuan</span></a></li>
                <li><a href="{{url('testimoni')}}"><i class="ti-pencil-alt text-primary"></i><span>Data Pengajuan</span></a></li> --}}
                <li>
                    <form action="{{url('logoutalumni')}}" method="post">
                        @csrf
                        <a href="{{url('logoutalumni')}}"><i class="fa fa-sign-out text-primary"></i><span>Keluar</span></a>
                    </form>
                </li>


                
                </li>
               
               
        </nav>

    </div>

    <div class="right_sidebar">
        <div class="setting_div">
            <a href="javascript:void(0);" class="rightbar_btn"><i class="fa fa-cog fa-spin"></i></a>
        </div>        
        <ul class="nav nav-pills nav-fill flex-column flex-sm-row mx-3 my-3" id="myTab" role="tablist">
            {{-- <li class="nav-item"><a class="nav-link active" id="Settings-tab" data-toggle="tab" href="#Settings" role="tab" aria-controls="Settings" aria-selected="true">Settings</a></li> --}}
            <li class="nav-item"><a class="nav-link" id="Contact-tab" data-toggle="tab" href="#Contact" role="tab" aria-controls="Contact" aria-selected="false">Contact</a></li>
        </ul>
        <hr>
        {{-- <div class="tab-content" id="myTabContent">
            <div class="tab-pane show active" id="Settings" role="tabpanel" aria-labelledby="Settings-tab">
                <div class="sidebar-scroll">
                    <div class="sidebar-widget px-3">
                        <h5>Theme Setting</h5>
                        <ul class="choose-skin list-unstyled">
                            <li data-theme="black"><div class="black"></div></li>
                            <li data-theme="azure"><div class="azure"></div></li>
                            <li data-theme="indigo" class="active"><div class="indigo"></div></li>
                            <li data-theme="purple"><div class="purple"></div></li>
                            <li data-theme="orange"><div class="orange"></div></li>
                            <li data-theme="green"><div class="green"></div></li>                                
                            <li data-theme="cyan"><div class="cyan"></div></li>
                            <li data-theme="blush"><div class="blush"></div></li>
                        </ul>
                        <ul class="setting-list list-unstyled mt-3">
                            <li>
                                <label class="custom-switch">
                                    <span class="custom-switch-description">Dark Sidebar</span>
                                    <label class="toggle-switch switch-sm mb-0">
                                        <input type="checkbox" class="switch-dark">
                                        <span class="toggle-switch-slider"></span>
                                    </label>
                                </label>
                            </li>
                            <li>
                                <label class="custom-switch">
                                    <span class="custom-switch-description">Mini Sidebar</span>
                                    <label class="toggle-switch switch-sm mb-0">
                                        <input type="checkbox" class="switch-sidebar">
                                        <span class="toggle-switch-slider"></span>
                                    </label>
                                </label>
                            </li>
                        </ul>
                        <hr>
                    </div>
                    <div class="sidebar-widget px-3">
                        <h5>Language Setting</h5>
                        <select class="selectpicker" title="Select language">
                            <option>English</option>
                            <option>Spanish</option>
                            <option>Chinese</option>
                            <option>Hindi</option>
                            <option>Arabic</option>
                        </select>
                        <hr>
                    </div>
                    <div class="sidebar-widget px-3">
                        <h5>General Setting</h5>
                        <ul class="setting-list list-unstyled mt-3">
                            <li>
                                <label class="custom-switch">
                                    <span class="custom-switch-description">Report Panel Usage</span>
                                    <label class="toggle-switch switch-sm mb-0">
                                        <input type="checkbox" checked>
                                        <span class="toggle-switch-slider"></span>
                                    </label>
                                </label>
                            </li>
                            <li>
                                <label class="custom-switch">
                                    <span class="custom-switch-description">Email Redirect</span>
                                    <label class="toggle-switch switch-sm mb-0">
                                        <input type="checkbox" checked>
                                        <span class="toggle-switch-slider"></span>
                                    </label>
                                </label>
                            </li>
                            <li>
                                <label class="custom-switch">
                                    <span class="custom-switch-description">Notifications</span>
                                    <label class="toggle-switch switch-sm mb-0">
                                        <input type="checkbox">
                                        <span class="toggle-switch-slider"></span>
                                    </label>
                                </label>       
                            </li>
                            <li>
                                <label class="custom-switch">
                                    <span class="custom-switch-description">Location Permission</span>
                                    <label class="toggle-switch switch-sm mb-0">
                                        <input type="checkbox" checked>
                                        <span class="toggle-switch-slider"></span>
                                    </label>
                                </label> 
                            </li>
                        </ul>
                        <hr>
                    </div>
                    <div class="sidebar-widget px-3">
                        <div class="progress-wrapper">
                            <h4 class="progress-label text-uppercase">New Project</h4>
                            <h4 class="progress-percentage text-uppercase">$950</h4>
                            <div class="progress" style="height: 5px;">
                                <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"></div>
                            </div>
                        </div>
                        <div class="progress-wrapper">
                            <h4 class="progress-label text-uppercase"> Admin</h4>
                            <h4 class="progress-percentage text-uppercase">$10k</h4>
                            <div class="progress" style="height: 5px;">
                                <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;"></div>
                            </div>
                        </div>
                        <div class="progress-wrapper">
                            <h4 class="progress-label text-uppercase">Balance</h4>
                            <h4 class="progress-percentage text-uppercase">$50k</h4>
                            <div class="progress" style="height: 5px;">
                                <div class="progress-bar bg-green" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%;"></div>
                            </div>
                        </div>
                        <hr>
                        <div class="progress-wrapper">
                            <h4 class="progress-label text-uppercase">Storage</h4>
                            <h4 class="progress-percentage text-uppercase">35GB</h4>
                            <div class="progress" style="height: 5px;">
                                <div class="progress-bar bg-red" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%;"></div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary btn-block btn-animated btn-animated-x">
                            <span class="btn-inner--visible">Upgrade Now</span>
                            <span class="btn-inner--hidden"><i class="fas fa-arrow-right"></i></span>
                        </button>
                    </div>                    
                </div>
            </div>
            <div class="tab-pane" id="Contact" role="tabpanel" aria-labelledby="Contact-tab">
                <div class="sidebar-widget px-3">
                    <ul class="list-unstyled contact-list">
                        <li class="d-flex align-items-center">
                            <span class="contact-img">
                                <img src="../assets/images/xs/avatar1.jpg" class="rounded" alt="">
                            </span>
                            <h4 class="contact-name">Vincent Porter <span class="d-block">London UK</span></h4>
                            <div class="action">
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fab fa-skype"></i></a>
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fa fa-envelope"></i></a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <span class="contact-img">
                                <img src="../assets/images/xs/avatar2.jpg" class="rounded" alt="">
                            </span>
                            <h4 class="contact-name">Mike Thomas <span class="d-block">London UK</span></h4>
                            <div class="action">
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fab fa-skype"></i></a>
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fa fa-envelope"></i></a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <span class="contact-img">
                                <img src="../assets/images/xs/avatar3.jpg" class="rounded" alt="">
                            </span>
                            <h4 class="contact-name">Aiden Chavaz</h4>
                            <div class="action">
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fab fa-skype"></i></a>
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fa fa-envelope"></i></a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <span class="contact-img">
                                <img src="../assets/images/xs/avatar4.jpg" class="rounded" alt="">
                            </span>
                            <h4 class="contact-name">Vincent Porter <span class="d-block">Miami USA</span></h4>
                            <div class="action">
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fab fa-skype"></i></a>
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fa fa-envelope"></i></a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <span class="contact-img">
                                <img src="../assets/images/xs/avatar5.jpg" class="rounded" alt="">
                            </span>
                            <h4 class="contact-name">Mike Thomas <span class="d-block">Neyyork USA</span></h4>
                            <div class="action">
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fab fa-skype"></i></a>
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fa fa-envelope"></i></a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <span class="contact-img">
                                <img src="../assets/images/xs/avatar6.jpg" class="rounded" alt="">
                            </span>
                            <h4 class="contact-name">Aiden Chavaz</h4>
                            <div class="action">
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fab fa-skype"></i></a>
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fa fa-envelope"></i></a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <span class="contact-img">
                                <img src="../assets/images/xs/avatar7.jpg" class="rounded" alt="">
                            </span>
                            <h4 class="contact-name">Mike Thomas <span class="d-block">New Delhi IND</span></h4>
                            <div class="action">
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fab fa-skype"></i></a>
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fa fa-envelope"></i></a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <span class="contact-img">
                                <img src="../assets/images/xs/avatar8.jpg" class="rounded" alt="">
                            </span>
                            <h4 class="contact-name">Aiden Chavaz</h4>
                            <div class="action">
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fab fa-skype"></i></a>
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fa fa-envelope"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div> --}}
    </div>

    <div class="page">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="javascript:void(0);">Dashboard</a>
            {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-align-justify"></i>
            </button> --}}
            
           
        </nav>
        <div>
        @yield('content')
       </div>
    </div>    
</div>

<!-- Jquery Core Js --> 
<script src="/dasboard/assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="/dasboard/assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<!-- Jquery DataTable Plugin Js --> 
<script src="/dasboard/assets/bundles/datatablescripts.bundle.js"></script>
<script src="/dasboard/assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
<script src="/dasboard/assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
<script src="/dasboard/assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js"></script>
<script src="/dasboard/assets/vendor/jquery-datatable/buttons/buttons.flash.min.js"></script>
<script src="/dasboard/assets/vendor/jquery-datatable/buttons/buttons.html5.min.js"></script>
<script src="/dasboard/assets/vendor/jquery-datatable/buttons/buttons.print.min.js"></script>

<script src="/dasboard/assets/js/theme.js"></script><!-- Custom Js --> 
<script src="/dasboard/assets/js/pages/tables/jquery-datatable.js"></script>
</body>

<!-- Mirrored from www.wrraptheme.com/templates/bigbucket/html/light/table-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Nov 2023 11:28:41 GMT -->

</html>