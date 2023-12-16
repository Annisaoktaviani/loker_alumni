<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from peterdraw.studio/ziro-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Oct 2023 14:19:04 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>BKK SMK YPC Tasikmalaya</title>
		<link rel="icon" type="image/x-icon" href="asset/logo1.png" />

		<!-- Plugin CSS -->
		<link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.min.css" />
		<link rel="stylesheet" href="vendors/swiper/swiper-bundle.min.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="dist/css/style.css" />
	</head>
	<body class="page__homepage">
		<nav class="navbar navbar-expand-xl bg-ghost-white">
			<div class="container-xxl justify-content-md-start">
				<a class="navbar-brand" href="index.html">
					<img src="asset/ypc.jpg" width="65" alt="" />
				</a>
				<!-- /.navbar-brand -->

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
					<img src="asset/icons/bars.svg" class="svg-inject svg-icon" alt="" />
				</button>
				<!-- /.navbar-toggler-mobile -->

				<div class="d-none d-md-flex d-xl-none ms-auto">
					<a class="btn btn-alice-blue text-dark fw-semiBold py-12 px-34 me-12 rounded-pill" href="applicationform.html" role="button">Log In</a>
					<a class="btn btn-primary fw-semiBold py-12 px-43 rounded-pill" href="applicationform.html" role="button">Sign Up</a>
				</div>
				<!-- /.btn-login and btn-signup mobile -->

				<div class="collapse navbar-collapse" id="navbarContent">
					<div class="d-grid d-xl-flex align-items-xl-center pb-15 pb-xl-0 w-100 gap-20 gap-xl-0">
						<ul class="navbar-nav mx-xl-auto order-2 order-xl-1">
							<li class="nav-item"><a href="#">Beranda</a></li>
							<li class="nav-item">
								<a class="nav-link " href="#tentang">Tentang</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#postingan">Postingan</a>
							</li>
						
							<li class="nav-item">
								<a class="nav-link" href="#perusahaan">Perusahaan</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#testimoni">Testimoni</a>
							</li>
						
						</ul> 
						<!-- /.navbar-nav -->

						
						<!-- /.form-search -->

						<div class="d-grid d-md-none d-xl-flex gap-15 gap-xl-0 order-3">
							<a class="btn btn-primary  fw-semiBold py-12 px-xl-34 ms-xl-12 rounded-pill" href="{{url('loginalumni')}}" role="button">Log In</a>
						</div>
						<!-- /.btn-login and btn-sign-up desktop -->
					</div>
				 </div>
				
				 {{-- <div class="collapse navbar-collapse sub-menu-bar main-nav__main-navigation"
				 id="navbarSupportedContent">
				 <ul class="navbar-nav mx-xl-auto order-2 order-xl-1">
					 <li class="nav-item active">
						 <a class="nav-link page-scroll" href="#home">Beranda</a>
					 </li>
					 <li class="nav-item">
						 <a class="nav-link page-scroll" href="#tentang">Tentang</a>
					 </li>
					 <li class="nav-item">
						 <a class="nav-link page-scroll" href="#features">Postingan</a>
					 </li>
					 <li class="nav-item">
						 <a class="nav-link page-scroll" href="#preview">Perusahaan</a>
					 </li>

					 <li class="nav-item">
						 <a class="nav-link page-scroll" href="#feedbacks">Testimoni</a>
					 </li>
					 <li class="nav-item">
						 <a class="nav-link page-scroll" href="#blog">Berita</a>
					 </li>
					 <li class="nav-item">
						 <a class="nav-link page-scroll" href="#footer">Kontak</a>
					 </li> --}}
					 {{-- <li class="nav-item d-flex align-items-center">
						 <a href="{{url ('register')}}" class="btn btn-daftar" style="color: darkgreen">Daftar</a>
					 </li>
					 <li class="nav-item d-flex align-items-center">
						 <a href="{{URL ('loginadmin')}}" class="btn btn-daftar" style="color: darkgreen">Masuk</a>
					 </li> --}}
				 </ul>
			 </div>
			</div>
		</nav>

		<!-- = /. Navbar Section = -->

	
        <div class="container">
            @yield('content')
          </div>		

						

					

			<!-- /.container -->
			<!-- = /. Pricing Plan Section = -->

			
					<!-- /.blog-pagination-slider -->
				


						
			<!-- = /. Blog Slider Section = -->


		<footer class="footer bg-black">
			<div class="container-xxl">
				<div class="row py-25 py-lg-43 py-xl-80 align-items-md-center">
					<div class="col-12 col-md-6">
						<h2 class="heading-section-2 text-white mb-0">Don't miss our weekly updates about freelancer career</h2>
						<!-- /.newsletter-heading -->
					</div>
					<!-- /.col -->

					<div class="col-12 col-md-6 col-lg-5 offset-lg-1 mt-25 mt-md-0">
						<form class="ms-auto" action="#">
							<div class="form-btn-inner form-newsletter rounded-pill">
								<input class="form-control" type="email" placeholder="Enter your email address..." />
								<button class="btn btn-accent text-white text-uppercase fw-semiBold py-12 px-20 px-lg-34 shadow-none" type="submit">Subscribe</button>
							</div>
						</form>
						<!-- /.newsletter-form -->
					</div>
					<!-- /.col -->
				</div>
				<!-- /.row -->

				<div class="row py-20 py-xl-80">
					<div class="col-12 col-xl-4 footer-widget about">
						<div class="footer-brand">
							<img src="assets/logo-footer.svg" alt="logo" />
						</div>
						<p class="footer-description mt-34">Ziro is a Freelance Landing Website lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
						<ul class="social-btn-group mt-34">
							<li class="social-item">
								<a class="social-link" href="#">
									<img src="asset/icons/facebook-f.svg" class="svg-inject svg-icon" alt="" />
								</a>
							</li>
							<li class="social-item">
								<a class="social-link" href="#">
									<img src="asset/icons/twitter.svg" class="svg-inject svg-icon" alt="" />
								</a>
							</li>
							<li class="social-item">
								<a class="social-link" href="#">
									<img src="asset/icons/youtube.svg" class="svg-inject svg-icon" alt="" />
								</a>
							</li>
							<li class="social-item">
								<a class="social-link" href="#">
									<img src="asset/icons/linkedin.svg" class="svg-inject svg-icon" alt="" />
								</a>
							</li>
							<li class="social-item">
								<a class="social-link" href="#">
									<img src="asset/icons/instagram.svg" class="svg-inject svg-icon" alt="" />
								</a>
							</li>
						</ul>
						<!-- /.social-btn-component -->
					</div>
					<!-- /.col -->

					<div class="col-12 col-lg-4 col-xl footer-widget link-list mt-34 mt-xl-0">
						<h6 class="footer-title">Ziro</h6>
						<ul class="footer-link-list">
							<li class="link-item">
								<a class="link" href="#">Why Ziro</a>
							</li>
							<li class="link-item">
								<a class="link" href="#">Enterprise</a>
							</li>
							<li class="link-item">
								<a class="link" href="#">Customer Story</a>
							</li>
							<li class="link-item">
								<a class="link" href="#">Security</a>
							</li>
							<li class="link-item">
								<a class="link" href="#">Pricing</a>
							</li>
						</ul>
					</div>
					<!-- /.col -->

					<div class="col-12 col-lg-4 col-xl footer-widget link-list mt-34 mt-xl-0">
						<h6 class="footer-title">Resources</h6>
						<ul class="footer-link-list">
							<li class="link-item">
								<a class="link" href="#">Download</a>
							</li>
							<li class="link-item">
								<a class="link" href="#">Help Center</a>
							</li>
							<li class="link-item">
								<a class="link" href="#">Events</a>
							</li>
							<li class="link-item">
								<a class="link" href="#">Guides</a>
							</li>
							<li class="link-item">
								<a class="link" href="#">Partner</a>
							</li>
							<li class="link-item">
								<a class="link" href="#">Directories</a>
							</li>
						</ul>
					</div>
					<!-- /.col -->

					<div class="col-12 col-lg-4 col-xl footer-widget link-list mt-34 mt-xl-0">
						<h6 class="footer-title">Company</h6>
						<ul class="footer-link-list">
							<li class="link-item">
								<a class="link" href="#">About us</a>
							</li>
							<li class="link-item">
								<a class="link" href="#">Contact us</a>
							</li>
							<li class="link-item">
								<a class="link" href="#">Products</a>
							</li>
							<li class="link-item">
								<a class="link" href="#">Login</a>
							</li>
							<li class="link-item">
								<a class="link" href="#">Sign Up</a>
							</li>
							<li class="link-item">
								<a class="link" href="#">FAQ</a>
							</li>
						</ul>
					</div>
					<!-- /.col -->

					<div class="col-12 col-xl-3 footer-widget link-list _icon mt-34 mt-xl-0">
						<h6 class="footer-title">Get in Touch with Us</h6>
						<ul class="footer-link-list _icon">
							<li class="link-item">
								<img src="asset/icons/mark-stroke.svg" class="svg-inject svg-icon" alt="" />
								<a class="link" href="#">
									<span>832 Thompson Drive, San Fransisco CA 94107, United States</span>
								</a>
							</li>
							<li class="link-item">
								<img src="asset/icons/phone-stroke.svg" class="svg-inject svg-icon" alt="" />
								<a class="link" href="#">
									<span>+123 345123 556</span>
								</a>
							</li>
							<li class="link-item">
								<img src="asset/icons/envelope-stroke.svg" class="svg-inject svg-icon" alt="" />
								<a class="link" href="#">
									<span>support@ziro.id</span>
								</a>
							</li>
						</ul>
					</div>
					<!-- /.col -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->

			<div class="border border-arsenic border-end-0 border-bottom-0 border-start-0">
				<div class="container-xxl d-grid d-lg-flex gap-12 gap-xl-0 justify-content-lg-between py-25">
					<div class="fs-14 text-white text-center">Ziro Freelancer Landing Website - © 2020 All Rights Reserved</div>

					<div class="fs-14 text-white text-center">Made with ♥ by Peterdraw</div>
				</div>
			</div>
		</footer>
		<!-- = /. Footer Section = -->

		<!-- Bootstrap JS -->
		<script src="vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

		<!-- Vendors -->
		<script src="vendors/jquery/jquery-3.6.0.min.js"></script>
		<script src="vendors/jquery-ui/jquery-ui.min.js"></script>
		<script src="vendors/swiper/swiper-bundle.min.js"></script>
		<script src="vendors/fslightbox/fslightbox.js"></script>
		<script src="vendors/svg-inject/dist/svg-inject.min.js"></script>

		<!-- Template Function -->
		<script src="dist/js/theme.js"></script>
	</body>

<!-- Mirrored from peterdraw.studio/ziro-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Oct 2023 14:19:04 GMT -->
</html>
