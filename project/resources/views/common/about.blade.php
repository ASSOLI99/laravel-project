<!DOCTYPE html>
<html lang="en">
<head>
<title>Course</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{asset('layout/styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{asset('layout/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('layout/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('layout/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('layout/plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('layout/styles/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('layout/styles/responsive.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('layout/styles/changable.css')}}">
<!-- <link rel="stylesheet" type="text/css" href="{{asset('layout/styles/contact.css')}}"> -->
<link rel="stylesheet" type="text/css" href="{{asset('layout/styles/contact_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('layout/styles/contact_responsive.css')}}">




<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">



<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


<style>
#team {
    padding: 20px 0;
    text-align: center;
    /* background-color: #d1d1d1; */
    color: #145889;
}
#team h2 {
    position: relative;
    padding: 0px 0px 15px;
}
#team p {
    font-size: 15px;
    font-style: italic;
    padding: 0px;
    margin: 0px 0px 0px;
}
#team h2::after {
    content: '';
    border-bottom: 1px solid #fff;
    position: absolute;
    bottom: 0px;
    right: 0px;
    left: 0px;
    width: 90px;
    margin: 0 auto;
    display: block;
}
#team .member {
    margin-bottom:10px;
    position: relative;
    overflow: hidden;
    background-color: #ffffff;
    padding: 0px;
    border-radius: 5px 0px 5px 0px;
    box-shadow: 0px 1px 6px 0px rgba(0, 0, 0, 0.4);
}
#team .member .member-info {
    display: block;
    position: absolute;
    bottom: 0px;
    left: -200px;
    transition: 0.4s;
    padding: 15px 0;
    background: rgba(0, 0, 0, 0.4);
}
#team .member:hover .member-info {
    left: 0px;
    right: 0px;
}
#team .member h4 {
    font-weight: 700;
    margin-bottom: 2px;
    font-size: 18px;
    color: #fff;
}
#team .member span {
    font-style: italic;
    display: block;
    font-size: 13px;
}
#team .member .social-links {
    margin-top: 15px;
}
#team .member .social-links a {
    transition: none;
    color: #fff;
}
#team .member .social-links a:hover {
    color: #ffc107;
}
#team .member .social-links i {
    font-size: 18px;
    margin: 0 2px;
}
</style>

</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header d-flex flex-row">
		<div class="header_content d-flex flex-row align-items-center">
			<!-- Logo -->
			<div class="logo_container">
				<div class="logo">
					<img src="{{asset('layout/images/logo.png')}}" alt="">
					<span>Books</span>
				</div>
			</div>

			<!-- Main Navigation -->
			<nav class="main_nav_container">
				<div class="main_nav">
					<ul class="main_nav_list">
						<li class="main_nav_item"><a href="/">home</a></li>
						<li class="main_nav_item"><a href="#">Shop</a></li>
						<li class="main_nav_item"><a href="courses.html">about us</a></li>
						<li class="main_nav_item"><a href="contact.html">contact</a></li>
                        <li class="main_nav_item">
                            <form action="">
                                <input type="text" class="black form-control search-input">
                                <button type="submit" class="btn btn-warning" style="margin-bottom:5px;"><i class="fas fa-search"></i></button>
                            </form>
                        </li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="header_side d-flex flex-row justify-content-center align-items-center">
			@if(session()->has('name'))
			<p  style="color: black ; margin-right: 20px; margin-top:15px ; font-size:20px ; font-weight:500"> <span>Welcome</span>  {{session('name')}}</p>
			@endif
			<ul>
                <div class="dropdown">
                    <a class="dropbtn"><i class="material-icons" style="font-size:50px;color:black;margin-top:5px;">&#xe853;</i></a>
                    <div class="dropdown-content">
						@if(session()->has('name'))

						<a href="/profile">Account</a>
						<a href="/logout">Logout</a>
						@else

                      <a href="/login">Login</a>
                      <a href="/signup">Signup</a>
						@endif
                    </div>
                  </div>
            </ul>
		</div>

		<!-- Hamburger -->
        {{-- <div class="hamburger_container text-center mr-5">
            <a class=""><i class="material-icons" style="font-size:50px;color:#3a3a3a;margin-top:5px;">&#xe853;</i></a>
			<ul>
                <div class="dropdown">
                    <a class="dropbtn"><i class="material-icons" style="font-size:50px;color:black;margin-top:5px;">&#xe853;</i></a>

                  </div>
            </ul>
		</div> --}}
		<div class="hamburger_container ml-5">
			<i class="fas fa-bars trans_200"></i>

		</div>



	</header>

	<!-- Menu -->
	<div class="menu_container menu_mm">

		<!-- Menu Close Button -->
		<div class="menu_close_container">
			<div class="menu_close"></div>
		</div>

		<!-- Menu Items -->
		<div class="menu_inner menu_mm">
			<div class="menu menu_mm">
				<ul class="menu_list menu_mm">
					<li class="menu_item menu_mm"><a href="#">Home</a></li>
					{{-- <li class="menu_item menu_mm"><a href="#">About us</a></li> --}}
					<li class="menu_item menu_mm"><a href="courses.html">Categories</a></li>
					<li class="menu_item menu_mm"><a href="elements.html">Books</a></li>
					<li class="menu_item menu_mm"><a href="news.html">About us</a></li>
					<li class="menu_item menu_mm"><a href="contact.html">Contact</a></li>

					@if(session()->has('name'))

					<li class="menu_item menu_mm">	<a href="#">Login</a></li>
					<li class="menu_item menu_mm"><a href="#">Signup</a></li>
					@else
					<li class="menu_item menu_mm"><a href="#">Account</a></li>
					<li class="menu_item menu_mm">   <a href="#">Logout</a></li>

	                   @endif

				</ul>

				<!-- Menu Social -->


                    <div class="menu_social_container menu_mm">
					<ul class="menu_social menu_mm">
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-pinterest"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>

				<div class="menu_copyright menu_mm">books team</div>

			</div>

		</div>

	</div>

	<!-- Home -->


    <!-- @yield('content') -->
	<!-- Home -->

	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(layout/images/splash18.jpg)"></div>
		</div>
		<!-- <div class="home_content">
			<h1>about us</h1>
		</div> -->
	</div>


    <div class="m-5 ">
  <div class="row">
    <div class="col-lg-6 col-md-12">
    <img src="style/images/clay-banks-w_qTfiPbjbg-unsplash.jpg" class="img-thumbnail" alt="">

    </div>
    <div class="col-lg-6 col-md-12">
   <p  class="lead text-center text-dark" style=" font-style:italic";>
   <strong style="font-size:40px;"> Our site</strong>
	<br>the general vision of the site is determined in raising the local, Arab and international cultural and scientific level, where a group of writers, intellectuals and academics are based on this site, who are interested in providing sound, purposeful and fruitful content, in cooperation with all supporting bodies and individuals, free of charge available to all groups and societal groups of all kinds.
</p>
</div>
  </div>
  </div>


			<section id="team">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-6 mb-4">
						  <h1 style="color: #3a3a3a;font-size:40px;">Our team is here to help</h1>
						  <p>It is true that you can succeed best and quickest by helping others to succeed</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="member">
							  <div class="member-img" >
								  <img src="style/images/img.png" class="img-fluid" alt="">
							  </div>
								<div class="member-info">
									<h4>Aiman jaradat</h4>
									<span>Team leader </span>
									<div class="social-links">
										<a href="#"><i class="fab fa-facebook-f"></i></a>
										<a href="#"><i class="fab fa-twitter"></i></a>
										<a href="#"><i class="fab fa-linkedin-in"></i></a>
										<!-- <a href="#"><i class="fab fa-pinterest-p"></i></a> -->
										<a href="#"><i class="fab fa-instagram"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-md-6">
							<div class="member">
							  <div class="member-img">
								  <img src="style/images/img.png" class="img-fluid" alt="">
							  </div>
								<div class="member-info">
									<h4>Abdullah assoli</h4>
									<span>Web Developer</span>
									<div class="social-links">
										<a href="#"><i class="fab fa-facebook-f"></i></a>
										<a href="#"><i class="fab fa-twitter"></i></a>
										<a href="#"><i class="fab fa-linkedin-in"></i></a>
										<!-- <a href="#"><i class="fab fa-pinterest-p"></i></a> -->
										<a href="#"><i class="fab fa-instagram"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="member">
							  <div class="member-img">
								  <img src="style/images/img.png" class="img-fluid" alt="">
							  </div>
								<div class="member-info">
									<h4>Baha Zyoud</h4>
									<span>Web Developer</span>
									<div class="social-links">
										<a href="#"><i class="fab fa-facebook-f"></i></a>
										<a href="#"><i class="fab fa-twitter"></i></a>
										<a href="#"><i class="fab fa-linkedin-in"></i></a>
										<!-- <a href="#"><i class="fab fa-pinterest-p"></i></a> -->
										<a href="#"><i class="fab fa-instagram"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="member">
							  <div class="member-img">
								  <img src="style/images/img.png" class="img-fluid" alt="">
							  </div>
								<div class="member-info">
									<h4>kaled Bani_amer</h4>
									<span>SEO Expert</span>
									<div class="social-links">
										<a href="#"><i class="fab fa-facebook-f"></i></a>
										<a href="#"><i class="fab fa-twitter"></i></a>
										<a href="#"><i class="fab fa-linkedin-in"></i></a>
										<!-- <a href="#"><i class="fab fa-pinterest-p"></i></a> -->
										<a href="#"><i class="fab fa-instagram"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-md-6">
							<div class="member">
							  <div class="member-img">
								  <img src="style/images/Untitled design .png" class="img-fluid" alt="">
							  </div>
								<div class="member-info">
									<h4>Tasnem Baibars</h4>
									<span>ISO Developer</span>
									<div class="social-links">
										<a href="#"><i class="fab fa-facebook-f"></i></a>
										<a href="#"><i class="fab fa-twitter"></i></a>
										<a href="#"><i class="fab fa-linkedin-in"></i></a>
										<!-- <a href="#"><i class="fab fa-pinterest-p"></i></a> -->
										<a href="#"><i class="fab fa-instagram"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-md-6">
							<div class="member">
							  <div class="member-img">
								  <img src="style/images/Untitled design .png" class="img-fluid" alt="">
							  </div>
								<div class="member-info">
									<h4>shifa alkasasbeh</h4>
									<span>ISO Developer</span>
									<div class="social-links">
										<a href="#"><i class="fab fa-facebook-f"></i></a>
										<a href="#"><i class="fab fa-twitter"></i></a>
										<a href="#"><i class="fab fa-linkedin-in"></i></a>
										<!-- <a href="#"><i class="fab fa-pinterest-p"></i></a> -->
										<a href="#"><i class="fab fa-instagram"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>


	<!-- Footer -->

	<footer class="footer">
		<div class="container">

			<!-- Newsletter -->

			<div class="newsletter">
				<div class="row">
					<div class="col">
						<div class="section_title text-center">
							<h1>Subscribe to newsletter</h1>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col text-center">
						<div class="newsletter_form_container mx-auto">
							<form action="post">
								<div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-center">
									<input id="newsletter_email" class="newsletter_email" type="email" placeholder="Email Address" required="required" data-error="Valid email is required.">
									<button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">Subscribe</button>
								</div>
							</form>
						</div>
					</div>
				</div>

			</div>

			<!-- Footer Content -->

			<div class="footer_content">
				<div class="row">

					<!-- Footer Column - About -->
					<div class="col-lg-3 footer_col">

						<!-- Logo -->
						<div class="logo_container">
							<div class="logo">
								<img src="{{asset('layout/images/logo.png')}}" alt="">
								<span>Books</span>
							</div>
						</div>

						<p class="footer_about_text">The general vision of the site is determined in raising the local, Arab and international cultural and scientific level, where a group of writers, intellectuals and academics are based on this site, who are interested in providing sound.</p>

					</div>

					<!-- Footer Column - Menu -->

					<div class="col-lg-3 footer_col">
						<div class="footer_column_title">Menu</div>
						<div class="footer_column_content">
							<ul>
								<li class="footer_list_item"><a href="#">Home</a></li>
								<li class="footer_list_item"><a href="#">About Us</a></li>
								<li class="footer_list_item"><a href="courses.html">Categories</a></li>
								<li class="footer_list_item"><a href="news.html">Books</a></li>
								<li class="footer_list_item"><a href="contact.html">Contact</a></li>
							</ul>
						</div>
					</div>

					<!-- Footer Column - Usefull Links -->

					<div class="col-lg-3 footer_col">
						<div class="footer_column_title">Usefull Links</div>
						<div class="footer_column_content">
							<ul>
								<li class="footer_list_item"><a href="#">Testimonials</a></li>
								<li class="footer_list_item"><a href="#">FAQ</a></li>
								<li class="footer_list_item"><a href="#">Community</a></li>
								<li class="footer_list_item"><a href="#">Pictures</a></li>
								{{-- <li class="footer_list_item"><a href="#">Tuitions</a></li> --}}
							</ul>
						</div>
					</div>

					<!-- Footer Column - Contact -->

					<div class="col-lg-3 footer_col">
						<div class="footer_column_title">Contact</div>
						<div class="footer_column_content">
							<ul>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="{{asset('layout/images/placeholder.svg')}}" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									Jordan
								</li>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="{{asset('layout/images/smartphone.svg')}}" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									0034 37483 2445 322
								</li>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="{{asset('layout/images/envelope.svg')}}" alt="https://www.flaticon.com/authors/lucy-g">
									</div>hellobooks@company.com
								</li>
							</ul>
						</div>
					</div>

				</div>
			</div>

			<!-- Footer Copyright -->

			<div class="footer_bar d-flex flex-column flex-sm-row align-items-center">
				<div class="footer_copyright">
					<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Books team <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank"></a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
				</div>
				<div class="footer_social ml-sm-auto">
					<ul class="menu_social">
						<li class="menu_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>
			</div>

		</div>
	</footer>

</div>

<script src="{{asset('layout/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('layout/styles/bootstrap4/popper.js')}}"></script>
<script src="{{asset('layout/styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('layout/plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{asset('layout/plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{asset('layout/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{asset('layout/plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{asset('layout/plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{asset('layout/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('layout/plugins/scrollTo/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('layout/plugins/easing/easing.js')}}"></script>
<script src="{{asset('layout/js/custom.js')}}"></script>

</body>
</html>
