@extends('layout')

@section('content')
	<div class="home">

		<!-- Hero Slider -->
		<div class="hero_slider_container">
			<div class="hero_slider owl-carousel">

				<!-- Hero Slide -->
				<div class="hero_slide">
					<div class="hero_slide_background"  style="background-image:url({{asset('layout/images/splash9.jpg')}})"></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">“A reader lives a thousand lives before he dies . . . The man who never reads lives only one.” - George R.R. Martin</h1>
							<br>
							<a href="" style="text-decoration: none;" data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut"><button type="button" class="btn btn-outline-light" style="font-size:22px;">View Books </button></a>
						</div>
					</div>
				</div>

				<!-- Hero Slide -->
				<div class="hero_slide">
					<div class="hero_slide_background" style="background-image:url({{asset('layout/images/splash17.jpg')}});"></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Don't put your books on shelves and desks. Give them wings, airline tickets, and happy memories.</h1>
							<br>
							<a href="" style="text-decoration: none;"data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut"><button type="button" class="btn btn-outline-light" style="font-size:22px;">View Books </button></a>

						</div>
					</div>
				</div>

				<!-- Hero Slide -->
				<div class="hero_slide">
					<div class="hero_slide_background" style="background-image:url({{asset('layout/images/splash16.jpg')}})"></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">"There is no delight in owning anything unshared.”</h1>
							<br>
							<a href="" style="text-decoration: none;" data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut"><button type="button" class="btn btn-outline-light" style="font-size:22px;">View Books </button></a>

						</div>
					</div>
				</div>

			</div>

			<div class="hero_slider_left hero_slider_nav trans_200"><span class="trans_200"><i class="material-icons" style="font-size:45px; color:white;">&#xe314;</i></span></div>
			<div class="hero_slider_right hero_slider_nav trans_200"><span class="trans_200"><i class="material-icons" style="font-size:45px;color:white; ">&#xe315;</i></span></div>
		</div>

	</div>



	<!-- Popular -->



	<div class="popular page_section">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Books Categories</h1>

						<h1>Books categories</h1>

					</div>
				</div>
			</div>

			<div class="row course_boxes">

							<!-- Popular Course Item -->
                @foreach($catig as $item)
				<div class="col-lg-4 course_box">
					<div class="card">

						<img class="card-img-top" src="{{asset('layout/images/'.$item->image)}}" alt="https://unsplash.com/@dsmacinnes">
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.html">Book shelf</a></div>
							<div class="card-text">{{$item->name}}</div>
						</div>
						<div class="price_box d-flex flex-row align-items-center">
							<div class="course_author_image">
								<img src="{{asset('layout/images/home3.jpg')}}" id="cat" alt="https://unsplash.com/@mehdizadeh">
							</div>
							<div class="course_author_name" ><span><a href="" style="text-decoration:none;color:#524431; float:right !important; " >view here</a> </span></div>
							<div class="course_price d-flex flex-column align-items-center justify-content-center"><a href=""><span><i class="material-icons" style="font-size:35px; color:white;margin-top:10px;">&#xe315;</i></span></a></div>

						<img class="card-img-top" src="/style/images/{{$item->book_image}}" alt="https://unsplash.com/@dsmacinnes">
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.html">{{$item->book_genre}}</a></div>
							<div class="card-text"></div>
						</div>
						<div class="price_box d-flex flex-row align-items-center">
							<div class="course_author_image">
								<!-- <img src="images/author.jpg" alt="https://unsplash.com/@mehdizadeh"> -->
							</div>
							<div class="course_author_name"><button type="button" class="btn btn-outline-warning">show</button></div>
							<div class="course_price d-flex flex-column align-items-center justify-content-center"> </div>

						</div>
					</div>
				</div>
                @endforeach
			</div>
		</div>
	</div>





        <!-- Register -->

	

	<!-- Services -->

	<div class="services page_section">

		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Our Services</h1>
					</div>
				</div>
			</div>

			<div class="row services_row">

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="{{asset('layout/images/earth-globe.svg')}}" alt="">
					</div>
					<h3>Online uniting</h3>
					<p>In books we help you to find and share the books you want so bad.</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="{{asset('layout/images/exam.svg')}}" alt="">
					</div>
					<h3>Latest books</h3>
					<p>One of our goals is to provide passionate readers with the latest books.</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="{{asset('layout/images/books.svg')}}" alt="">
					</div>
					<h3>Amazing Library</h3>
					<p>You will never feel bored with us  ,you will always find vairety of amazing books you would enjoy reading .</p>
				</div>

				

			</div>
		</div>
	</div>

	<!-- Testimonials -->

	<div class="testimonials page_section">
		 {{-- <div class="testimonials_background" style="background-image:url({{asset('layout/images/splash14.jpg')}})"></div> --}}
		<div class="testimonials_background_container prlx_parent">
			<div class="testimonials_background prlx" style="background-image:url({{asset('layout/images/splash8.jpg')}})"></div>
		</div>
		<div class="container">

			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>What our  readers say</h1>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-10 offset-lg-1">

					<div class="testimonials_slider_container">

						<!-- Testimonials Slider -->
						<div class="owl-carousel owl-theme testimonials_slider">

							<!-- Testimonials Item -->
							<div class="owl-item">
								<div class="testimonials_item text-center">
									<div class="quote">“</div>
									<p class="testimonials_text">Thank you books for affording me this chance ,I was looking for this book for along time.</p>
									<div class="testimonial_user">
										<div class="testimonial_image mx-auto">
											<img src="{{asset('layout/images/teacher_3.jpg')}}" alt="">
										</div>
										<div class="testimonial_name">james cooper</div>
										<div class="testimonial_title">literature student</div>
									</div>
								</div>
							</div>

							<!-- Testimonials Item -->
							<div class="owl-item">
								<div class="testimonials_item text-center">
									<div class="quote">“</div>
									<p class="testimonials_text">Books you own me a favor Finally I have my organized shelf back & I am super happy I know a lot of people will use these books.</p>
									<div class="testimonial_user">
										<div class="testimonial_image mx-auto">
											<img src="{{asset('layout/images/teacher_4.jpg')}}"alt="">
										</div>
										<div class="testimonial_name">james cooper</div>
										<div class="testimonial_title">passionate reader</div>
									</div>
								</div>
							</div>

							<!-- Testimonials Item -->
							<div class="owl-item">
								<div class="testimonials_item text-center">
									<div class="quote">“</div>
									<p class="testimonials_text">Finally I can read and share books regulary.</p>
									<div class="testimonial_user">
										<div class="testimonial_image mx-auto">
											<img src="{{asset('layout/images/teacher_1.jpg')}}" alt="">
										</div>
										<div class="testimonial_name">james cooper</div>
										<div class="testimonial_title">Loyal Customer</div>
									</div>
								</div>
							</div>

						</div>

					</div>
				</div>
			</div>

		</div>
	</div>

	<!-- Events -->

	<div class="events page_section">
		<div class="container">

			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>outstanding Events</h1>
					</div>
				</div>
			</div>

			<div class="event_items">

				<!-- Event Item -->
				<div class="row event_item">
					<div class="col">
						<div class="row d-flex flex-row align-items-end">

							<div class="col-lg-2 order-lg-1 order-2">
								<div class="event_date d-flex flex-column align-items-center justify-content-center">
									<div class="event_day">23</div>
									<div class="event_month">April</div>
								</div>
							</div>

							<div class="col-lg-6 order-lg-2 order-3">
								<div class="event_content">
									<div class="event_name"><a class="trans_200" href="#">World Reading Day</a></div>
									<div class="event_location">Grand Central Park</div>
									<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor.</p>
								</div>
							</div>

							<div class="col-lg-4 order-lg-3 order-1">
								<div class="event_image">
									<img src="{{asset('layout/images/event_1.jpg')}}" alt="https://unsplash.com/@theunsteady5">
								</div>
							</div>

						</div>
					</div>
				</div>

				<!-- Event Item -->
				<div class="row event_item">
					<div class="col">
						<div class="row d-flex flex-row align-items-end">

							<div class="col-lg-2 order-lg-1 order-2">
								<div class="event_date d-flex flex-column align-items-center justify-content-center">
									<div class="event_day">15</div>
									<div class="event_month">June</div>
								</div>
							</div>

							<div class="col-lg-6 order-lg-2 order-3">
								<div class="event_content">
									<div class="event_name"><a class="trans_200" href="#">Reading conference in Dubai</a></div>
									<div class="event_location">Grand Central Park</div>
									<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor.</p>
								</div>
							</div>

							<div class="col-lg-4 order-lg-3 order-1">
								<div class="event_image">
									<img src="{{asset('layout/images/event_2.jpg')}}" alt="https://unsplash.com/@claybanks1989">
								</div>
							</div>

						</div>
					</div>
				</div>

				<!-- Event Item -->
				<div class="row event_item">
					<div class="col">
						<div class="row d-flex flex-row align-items-end">


						</div>
					</div>
				</div>

			</div>

		</div>
	</div>
    @endsection
