
<!DOCTYPE html>
 <html class="no-js">
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="Meghna One page parallax responsive HTML Template ">

        <meta name="author" content="Muhammad Morshed">

        <title>Meghna | Responsive Multipurpose Parallax HTML5 Template</title>

		<!-- Mobile Specific Meta
		================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Favicon -->
		<!-- <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" /> -->



		<!-- CSS
		================================================== -->
		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="{{ asset('users/plugins/themefisher-font/style.css') }}">
		<!-- bootstrap.min css -->
        <link rel="stylesheet" href="{{ asset('users/plugins/bootstrap/dist/css/bootstrap.min.css')}}">
		<!-- Animate.css -->
        <link rel="stylesheet" href="{{ asset('users/plugins/animate-css/animate.css')}}">
        <!-- Magnific popup css -->
        <link rel="stylesheet" href="{{ asset('users/plugins/magnific-popup/dist/magnific-popup.css')}}">
		<!-- Slick Carousel -->
        <link rel="stylesheet" href="{{ asset('users/plugins/slick-carousel/slick/slick.css')}}">
        <link rel="stylesheet" href="{{ asset('users/plugins/slick-carousel/slick/slick-theme.css')}}">
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="{{ asset('users/css/style.css')}}">


        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-
        alpha/css/bootstrap.css" rel="stylesheet">

       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

       <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

       <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


    </head>

    <body id="body" data-spy="scroll" data-target=".navbar" data-offset="50">
        <script>
            @if(Session::has('message'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
                    toastr.success("{{ session('message') }}");
            @endif

            @if(Session::has('error'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
                    toastr.error("{{ session('error') }}");
            @endif

            @if(Session::has('info'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
                    toastr.info("{{ session('info') }}");
            @endif

            @if(Session::has('warning'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
                    toastr.warning("{{ session('warning') }}");
            @endif
          </script>
	    <!--
	    Start Preloader
	    ==================================== -->
		{{-- <div id="preloader">
			<div class="preloader">
				<div class="sk-cube-grid">
				  <div class="sk-cube sk-cube1"></div>
				  <div class="sk-cube sk-cube2"></div>
				  <div class="sk-cube sk-cube3"></div>
				  <div class="sk-cube sk-cube4"></div>
				  <div class="sk-cube sk-cube5"></div>
				  <div class="sk-cube sk-cube6"></div>
				  <div class="sk-cube sk-cube7"></div>
				  <div class="sk-cube sk-cube8"></div>
				  <div class="sk-cube sk-cube9"></div>
				</div>
			</div>
		</div> --}}
        <!--
        End Preloader
        ==================================== -->

 <!--
Welcome Slider
==================================== -->



 <!--






  Fixed Navigation
  ==================================== -->
    <header id="navigation" class="navbar navigation">
        <div class="container">
            <div class="navbar-header">
              <!-- responsive nav button -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- /responsive nav button -->

                <!-- logo -->
                <a class="navbar-brand logo" href="#body">
                    <!-- <img src="images/logo.png" alt="Website Logo" /> -->
                    <svg width="40px" height="40px" viewBox="0 0 45 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Group" transform="translate(2.000000, 2.000000)" stroke="#57CBCC" stroke-width="3">
                                <ellipse id="Oval" cx="20.5" cy="20" rx="20.5" ry="20"></ellipse>
                                <path d="M6,7 L33.5,34.5" id="Line-2" stroke-linecap="square"></path>
                                <path d="M21,20 L34,7" id="Line-3" stroke-linecap="square"></path>
                            </g>
                        </g>
                    </svg>
                </a>
            <!-- /logo -->
        </div>

        <!-- main nav -->
        <nav class="collapse navbar-collapse navbar-right" role="Navigation">
            <ul id="nav" class="nav navbar-nav navigation-menu">
                <li><a data-scroll href="{{ url('/') }}">Home</a></li>
                <li><a data-scroll href="#about">About Us</a></li>
                <li><a data-scroll href="#services">Services</a></li>
                {{--  <li><a data-scroll href="#portfolio">Portfolio</a></li>
                <li><a data-scroll href="#our-team">Team</a></li>  --}}
                <li><a data-scroll href="#contact-us">Contact</a></li>
                <li><a data-scroll href="{{ url('terms-conditions') }}">Terms & Conditions</a></li>
                <li><a data-scroll href="{{ url('privacy-policy') }}">Privecy & Pollicy</a></li>
            </ul>
        </nav>
        <!-- /main nav -->

      </div>
  </header>
  <!--
  End Fixed Navigation
  ==================================== -->



  @yield('content')

		<!-- end Contact Area
		========================================== -->

		<footer id="footer" class="bg-one">
			<div class="container">
			    <div class="row wow fadeInUp" data-wow-duration="500ms">
					<div class="col-lg-12">

						<!-- Footer Social Links -->
						<div class="social-icon">
							<ul class="list-inline">
								<li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
								<li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
								 
								<li><a href="#"><i class="tf-ion-social-youtube"></i></a></li>
								<li><a href="#"><i class="tf-ion-social-linkedin"></i></a></li>
			 
							</ul>
						</div>
						<!--/. End Footer Social Links -->

						<!-- copyright -->
						<div class="copyright text-center">
							<a href="index.html">
								<!-- <img src="images/logo-meghna.png" alt="Meghna" />  -->
								<svg width="40px" height="40px" viewBox="0 0 45 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
		                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
		                            <g id="Group" transform="translate(2.000000, 2.000000)" stroke="#57CBCC" stroke-width="3">
		                                <ellipse id="Oval" cx="20.5" cy="20" rx="20.5" ry="20"></ellipse>
		                                <path d="M6,7 L33.5,34.5" id="Line-2" stroke-linecap="square"></path>
		                                <path d="M21,20 L34,7" id="Line-3" stroke-linecap="square"></path>
		                            </g>
		                        </g>
		                    </svg>
							</a>
							<br />

							<p>Design And Developed by <a href="#"> Themefisher Team</a>. Copyright &copy; <script>document.write(new Date().getFullYear())</script>. All Rights Reserved.
								</a>
							</p>
						</div>
						<!-- /copyright -->

					</div> <!-- end col lg 12 -->
				</div> <!-- end row -->
			</div> <!-- end container -->
		</footer> <!-- end footer -->












		<!--
		Essential Scripts
		=====================================-->

		<!-- Main jQuery -->
		<script type="text/javascript" src="{{ asset('users/plugins/jquery/dist/jquery.min.js') }}"></script>
		<!-- Bootstrap 3.1 -->
		<script type="text/javascript" src="{{ asset('users/plugins/bootstrap/dist/js/bootstrap.min.js') }}"></script>
		<!-- Slick Carousel -->
		<script type="text/javascript" src="{{ asset('users/plugins/slick-carousel/slick/slick.min.js') }}"></script>
		<!-- Portfolio Filtering -->
		<script type="text/javascript" src="{{ asset('users/plugins/mixitup/dist/mixitup.min.js') }}"></script>
		<!-- Smooth Scroll -->
		<script type="text/javascript" src="{{ asset('users/plugins/smooth-scroll/dist/js/smooth-scroll.min.js') }}"></script>
		<!-- Magnific popup -->
		<script type="text/javascript" src="{{ asset('users/plugins/magnific-popup/dist/jquery.magnific-popup.min.js') }}"></script>
		<!-- Sticky Nav -->
		<script type="text/javascript" src="{{ asset('users/plugins/Sticky/jquery.sticky.js') }}"></script>
		<!-- Number Counter Script -->
		<script type="text/javascript" src="{{ asset('users/plugins/count-to/jquery.countTo.js') }}"></script>
		<!-- wow.min Script -->
		<script type="text/javascript" src="{{ asset('users/plugins/wow/dist/wow.min.js') }}"></script>
		<!-- Custom js -->
		<script type="text/javascript" src="{{ asset('users/js/script.js') }}"></script>

    </body>
</html>
