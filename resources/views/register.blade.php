<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesdesign.in/jobcy/layout/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Oct 2023 14:09:05 GMT -->
<head>
        
        
        <meta charset="utf-8" />
        <title>Daftar|Untuk Masuk Ke Website</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content=" " />
        <meta name="keywords" content="" />
        <meta content="Themesdesign" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet"/>
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" />
        <!--Custom Css-->

    </head>

    <body >
         <!--start page Loader -->
         <div id="preloader">
            <div id="status">
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                  </ul>
            </div>
        </div>
        <!--end page Loader -->

        <!-- Begin page -->
        <div>

            
            <div class="main-content">

                <div class="page-content">

                    <!-- START SIGN-UP -->
                    <section class="bg-auth">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-10 col-lg-12">
                                    <div class="card auth-box">
                                        <div class="row align-items-center">
                                            <div class="col-lg-6 text-center">
                                                <div class="card-body p-4">
                                                    <a href="index.html">
                                                        {{-- <img src="assets/images/logo-light.png" alt="" class="logo-light">
                                                        <img src="assets/images/logo-dark.png" alt="" class="logo-dark"> --}}
                                                    </a>
                                                    <div class="mt-5">
                                                        <img src="assets/images/sign.png" alt="" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-lg-6">
                                                <div class="auth-content card-body p-5 text-white">
                                                    <div class="w-100">
                                                        <div class="text-center">
                                                            <h5>Mari Kita Mulai</h5>
                                                            <p class="text-white-70">Daftar dan dapatkan akses ke semua fitur</p>
                                                        </div>
                                                        <form class="auth-form" enctype="multipart/form-data" method="POST" action='{{ url('register/daftar')}}'  >
                                                            @csrf
                                                            <div class="mb-3">
                                                                <label for="nis" class="form-label">Nis</label>
                                                                <input type="text" name="nis" class="form-control"  id="nis" placeholder="nis">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="nama_lengkap" class="form-label">Nama</label>
                                                                <input type="text" name="nama_lengkap" class="form-control"  id="nama_lengkap" placeholder="nama">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="eail" class="form-label">Email</label>
                                                                <input type="email" name="email" class="form-control"  id="email" placeholder=" email">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="password" class="form-label">Kata Sandi</label>
                                                                <input type="password" name="password" class="form-control" id="password" placeholder=" Kata Sandi">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="tahun_lulus" class="form-label">Tahun Lulus</label>
                                                                <input type="text" name="tahun_lulus" class="form-control"  id="tahun_lulus" placeholder="tahun lulus">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="foto_alumni" class="form-label">foto</label>
                                                                <input type="file" name="foto_alumni" class="form-control"  id="foto_alumni" placeholder="foto">
                                                            </div>
                                                           
                                                            {{-- <div class="mb-4">
                                                                <div class="form-check"><input class="form-check-input" type="checkbox" id="flexCheckDefault">
                                                                    <label class="form-check-label" for="flexCheckDefault">I agree to the <a href="javascript:void(0)" class="text-white text-decoration-underline">Terms and conditions</a></label>
                                                                </div> --}}
                                                            </div>
                                                            <div class="text-center">
                                                                <button type="submit" class="btn btn-white btn-hover w-100">Daftar</button>
                                                            </div>
                                                        </form>
                                                        <div class="mt-3 text-center">
                                                            <p class="mb-0">Sudah bergabung ? <a href="sign-in.html" class="fw-medium text-white text-decoration-underline"> Masuk</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end auth-box-->
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end container-->
                    </section>
                    <!-- END SIGN-UP -->
                    
                </div>
                <!-- End Page-content -->

            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Style switcher -->
        <div id="style-switcher" onclick="toggleSwitcher()" style="left: -165px;">
            <div>
                <h6>Select your color</h6>
                <ul class="pattern list-unstyled mb-0">
                    <li>
                        <a class="color-list color1" href="javascript: void(0);" onclick="setColorGreen()"></a>
                    </li>
                    <li>
                        <a class="color-list color2" href="javascript: void(0);" onclick="setColor('blue')"></a>
                    </li>
                    <li>
                        <a class="color-list color3" href="javascript: void(0);" onclick="setColor('green')"></a>
                    </li>
                </ul>
                <div class="mt-3">
                    <h6>Light/dark Layout</h6>
                    <div class="text-center mt-3">
                        <!-- light-dark mode -->
                        <a href="javascript: void(0);" id="mode" class="mode-btn text-white rounded-3">
                            <i class="uil uil-brightness mode-dark mx-auto"></i>
                            <i class="uil uil-moon mode-light"></i>
                        </a>
                        <!-- END light-dark Mode -->
                    </div>
                </div>
            </div>
            <div class="bottom d-none d-md-block" >
                <a href="javascript: void(0);" class="settings rounded-end"><i class="mdi mdi-cog mdi-spin"></i></a>
            </div>
        </div>
        <!-- end switcher-->

        <!--start back-to-top-->
        <button onclick="topFunction()" id="back-to-top">
            <i class="mdi mdi-arrow-up"></i>
        </button>
        <!--end back-to-top-->

        <!-- JAVASCRIPT -->
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../../../unicons.iconscout.com/release/v4.0.0/script/monochrome/bundle.js"></script>


        <!-- Switcher Js -->
        <script src="assets/js/pages/switcher.init.js"></script>

    </body>

<!-- Mirrored from themesdesign.in/jobcy/layout/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Oct 2023 14:09:06 GMT -->
</html>