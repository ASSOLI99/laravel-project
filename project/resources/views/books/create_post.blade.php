@extends('master.bootstrap')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form-v6 by Colorlib</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="style/create_post.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="style/create_post.css"/>
</head>
<body class="form-v6">
	<div class="page-content">
		<div class="form-v6-content">
			<div class="form-left " >
				<img src="image/books.jfif" class="" alt="form" width="400px" height="95%">
			</div>
			<form class="form-detail" action="#" method="post">
				<h2>Publish Form</h2>
				<div class="form-row">
					<input type="text" name="full-name" id="full-name" class="input-text" placeholder="Book Name" required>
				</div>
				<div class="form-row">
					<input type="text" name="full-name" id="full-name" class="input-text" placeholder="Publiser" required>
				</div>
				<div class="form-row">
					<input type="text" name="full-name" id="full-name" class="input-text" placeholder="Author" required>
				</div>
				<div class="form-row">
					<input type="text" name="your-email" id="your-email" class="input-text" placeholder="Address" required >
				</div>
				<div class="form-row">
					<input type="text" name="your-email" id="your-email" class="input-text" placeholder="Address" required >
				</div>

				<div class="form-row-last">
					<input type="submit" name="register" class="register" value="Register">
				</div>
			</form>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
@endsection