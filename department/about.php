<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Department Pages</title>

	<!-- Bootstrap -->
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/style.css" rel="stylesheet">
	<link href="../css/pccoer.css" rel="stylesheet">
	<link href="../css/menu.css" rel="stylesheet">
	<link rel="icon" href="../images/pccoer-favicon-icon.png" type="image/png">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<!--Font Awesome Stylesheets -->
	<link href="../css/all.min.css" rel="stylesheet">

</head>

<body>

	<?php include '../header.php'; ?>

	<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="../images/pccoer-innerpage-banner.webp" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
				<img src="../images/pccoer-innerpage-banner.webp" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
				<img src="../images/pccoer-innerpage-banner.webp" class="d-block w-100" alt="...">
			</div>
		</div>
	</div>

	<!-- <div class="inner-page-banner"></div> -->

	<div class="page_breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><i class="fa fa-home"></i> Home</li>
							<li class="breadcrumb-item">Department</li>
							<li class="breadcrumb-item"><a href="#">About Department</a></li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>

	<div class="page_details">
		<div class="container">
			<div class="row">

				<?php include 'department-sidebar.php'; ?>

				<div class="col-xs-12 col-sm-12 col-md-9">
					<div class="hdg-bdr"><span class="hdg-bdr-1"></span><span class="hdg-bdr-2"></span><span class="hdg-bdr-3"></span></div>
					<br>
					<h1 align="center">About Department</h1>
					<hr>

					<p>The Mechanical Engineering Department is the one of Best Department of Nutan Maharashtra Institute of Engineering & Technology (NMIET). The department believes in delivering the best Market value recent practical based education to there students. The department has highly qualified and experienced faculty with expertise in the areas of Design, Production, Manufacturing, CADCAM and Thermal. The Department continuously encourages their students to participate in various activities like Industry Based Project Work, VLCI, GIZ. Apart from placement, The Department provides platform to students for Higher Education as well as Entrepreneurship.</p>

					<h3>Overview of Department</h3>

					<div class="table-responsive">
						<table class="table table-bordered table-responsive">
							<tbody>
								<tr class="tablehead">
									<th>Table</th>
									<th>Name</th>
								<tr>
								<tr>
									<td>Table</td>
									<td>1</td>
								</tr>
								<tr>
									<td>Table</td>
									<td>2</td>
								</tr>
								<tr>
									<td>Table</td>
									<td>3</td>
								</tr>
								<tr>
									<td>Table</td>
									<td>4</td>
								</tr>
							</tbody>
						</table>
					</div>

				</div>
			</div>
		</div>
	</div>

	<?php include '../footer.php'; ?>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/menu.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>