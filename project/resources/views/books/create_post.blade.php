@extends('master.bootstrap')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="style/main_styles.css">
	<link rel="stylesheet" type="text/css" href="style/responsive.css">
</head>
	<!-- Register -->

	<div class="register">

		<div class="container-fluid">
			
			<div class="row row-eq-height">
				<div class="col-lg-6 nopadding">
					
					<!-- Register -->

					<div class="register_section d-flex flex-column align-items-center justify-content-center">
						<div class="register_content text-center">
							<h1 class="register_title">Register now and get a discount <span>50%</span> discount until 1 January</h1>
							<p class="register_text">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum. Aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempo.</p>
							<div class="button button_1 register_button mx-auto trans_200"><a href="#">register now</a></div>
						</div>
					</div>

				</div>

				<div class="col-lg-6 nopadding">
					
					<!-- Search -->

					<div class="search_section d-flex flex-column align-items-center justify-content-center">
						<div class="search_background" style="background-image:url(images/search_background.jpg);"></div>
						<div class="search_content text-center">
							<h1 class="search_title">Publish Your Book</h1>
							<form id="search_form" class="search_form" action="post">

								<input id="search_form_name" class="input_field search_form_name" type="text" placeholder="Book Name" required="required" data-error="Course name is required.">

								<input id="search_form_name" class="input_field search_form_name" type="text" placeholder="Book Brief" required="required" data-error="Course name is required.">

								<input id="search_form_name" class="input_field search_form_name" type="text" placeholder="Publiser" required="required" data-error="Course name is required.">

								<input id="search_form_name" class="input_field search_form_name" type="text" placeholder="Author" required="required" data-error="Course name is required.">

								<input id="search_form_name" class="input_field search_form_name" type="text" placeholder="Pub.Year" required="required" data-error="Course name is required.">

								<input id="search_form_category" class="input_field search_form_category" type="text" placeholder="Category">

								<input id="search_form_degree" class="input_field search_form_degree" type="text" placeholder="Address">

								<button id="search_submit_button" type="submit" class="search_submit_button trans_200" value="Submit">Publish</button>

							</form>
						</div> 
					</div>

				</div>
			</div>
		</div>
	</div>
</html>
@endsection