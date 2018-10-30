<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="images/favicon.ico">
	<title>Our Company</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="bootstrap-4.1.3/css/bootstrap.min.css" type="text/css" media="all" />
  <!-- Bootstrap CSS File -->

    <!-- Libraries CSS Files -->
  <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="css/animate/animate.min.css" rel="stylesheet">
  <link href="css/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="js/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="css/magnific-popup.css" rel="stylesheet">
  <link href="css/ionicons/css/ionicons.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/pannel.css" rel="stylesheet">


</head>
<body>
	<div class="container-fluid" id="wrapper">
		<div class="row">
			<nav class="sidebar col-xs-12 col-sm-4 col-lg-3 col-xl-2">
				<h1 class="site-title"><a href="index.html"><em class="fa fa-rocket"></em>Our Company</a></h1>

				<a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><em class="fa fa-bars"></em></a>
				<ul class="nav nav-pills flex-column sidebar-nav">
					<li class="nav-item"><a class="nav-link active" href="index.php"><em class="fa fa-dashboard"></em> Back to Website <span class="sr-only">(current)</span></a></li>

					<li class="nav-item"><a class="nav-link" href="forms.php"><em class="fa fa-pencil-square-o"></em> Forms <span class="sr-only">(current)</span></a></li>
						<li class="nav-item"><a class="nav-link" href="added_forms.php"><em class="fa fa-pencil-square-o"></em> Added Forms <span class="sr-only">(current)</span></a></li>
							<li class="nav-item"><a class="nav-link" href="updated_forms.php"><em class="fa fa-pencil-square-o"></em> Updated Forms <span class="sr-only">(current)</span></a></li>
				</ul>
				<a href="index.php" class="logout-button"><em class="fa fa-power-off"></em> Signout</a>
			</nav>
			<main class="col-xs-12 col-sm-8 col-lg-9 col-xl-10 pt-3 pl-4 ml-auto">
				<header class="page-header row justify-center">
					<div class="col-md-6 col-lg-8" >
						<h1 class="float-left text-center text-md-left">Dashboard</h1>
					</div>
					<div class="dropdown user-dropdown col-md-6 col-lg-4 text-center text-md-right"><a class="btn btn-stripped dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<img src="img/profile-pic.jpg" alt="profile photo" class="circle float-left profile-photo" width="50" height="auto">
						<div class="username mt-1">
							<h4 class="mb-1">Username</h4>
							<h6 class="text-muted">Super Admin</h6>
						</div>
						</a>
						<div class="dropdown-menu dropdown-menu-right" style="margin-right: 1.5rem;" aria-labelledby="dropdownMenuLink"><a class="dropdown-item" href="sign-in.php"><em class="fa fa-user-circle mr-1"></em> View Profile</a>
						     <!-- <a class="dropdown-item" href="#"><em class="fa fa-sliders mr-1"></em> Preferences</a> -->
						     <a class="dropdown-item" href="sign-in.php"><em class="fa fa-power-off mr-1"></em> Logout</a></div>
					</div>
					<div class="clear"></div>
				</header>
				<section class="row">
					<div class="col-sm-12">
						<section class="row">
							<div class="col-md-12 col-lg-8">
								<div class="jumbotron">
									<h1 class="mb-4">Welcome To Our Company!</h1>
									<p class="lead">A Bachelor of Medical Sciences (BMedSci, BMedSc, BMSc, BSc(Med) degree or Bachelor of Medical Sciences is an undergraduate academic degree awarded after three or four years of degree</p>
									<p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
									<p class="lead"><a class="btn btn-primary btn-lg mt-2" href="#" role="button">Learn more</a></p>
								</div>
								<div class="card mb-4">
									<div class="card-block">
										<h3 class="card-title">Overview</h3>
										<div class="dropdown card-title-btn-container">
											<button class="btn btn-sm btn-subtle" type="button"><em class="fa fa-list-ul"></em> View All</button>
											<button class="btn btn-sm btn-subtle dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><em class="fa fa-cog"></em></button>
											<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#"><em class="fa fa-search mr-1"></em> More info</a>
											    <a class="dropdown-item" href="#"><em class="fa fa-thumb-tack mr-1"></em> Pin Window</a>
											    <a class="dropdown-item" href="#"><em class="fa fa-remove mr-1"></em> Close Window</a></div>
										</div>
										<h6 class="card-subtitle mb-2 text-muted">Latest Medical stats</h6>
										<div class="canvas-wrapper">
											<canvas class="chart" id="line-chart" height="200" width="600"></canvas>
										</div>
									</div>
								</div>
								<div class="card mb-4">
									<div class="card-block">
										<h3 class="card-title">Current Report</h3>
										<div class="dropdown card-title-btn-container">
											<button class="btn btn-sm btn-subtle" type="button"><em class="fa fa-list-ul"></em> View All</button>
											<button class="btn btn-sm btn-subtle dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><em class="fa fa-cog"></em></button>
											<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#"><em class="fa fa-search mr-1"></em> More info</a>
											    <a class="dropdown-item" href="#"><em class="fa fa-thumb-tack mr-1"></em> Pin Window</a>
											    <a class="dropdown-item" href="#"><em class="fa fa-remove mr-1"></em> Close Window</a></div>
										</div>
										<div class="table-responsive">
											<table class="table table-striped">
												<thead>
													<tr>
														<th>Order #</th>
														<th>Product</th>
														<th>Customer</th>
														<th>Status</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>0001</td>
														<td>Product Name 1</td>
														<td>Customer 1</td>
														<td>Complete</td>
													</tr>
													<tr>
														<td>0002</td>
														<td>Product Name 2</td>
														<td>Customer 2</td>
														<td>Complete</td>
													</tr>
													<tr>
														<td>0003</td>
														<td>Product Name 3</td>
														<td>Customer 3</td>
														<td>Processing</td>
													</tr>
													<tr>
														<td>0004</td>
														<td>Product Name 4</td>
														<td>Customer 4</td>
														<td>Pending</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="card mb-4">
									<div class="card-block">
										<h3 class="card-title">Notification</h3>
										<div class="dropdown card-title-btn-container">
											<button class="btn btn-sm btn-subtle" type="button"><em class="fa fa-list-ul"></em> View All</button>
											<button class="btn btn-sm btn-subtle dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><em class="fa fa-cog"></em></button>
											<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#"><em class="fa fa-search mr-1"></em> More info</a>
											    <a class="dropdown-item" href="#"><em class="fa fa-thumb-tack mr-1"></em> Pin Window</a>
											    <a class="dropdown-item" href="#"><em class="fa fa-remove mr-1"></em> Close Window</a></div>
										</div>
										<h6 class="card-subtitle mb-2 text-muted">Latest news</h6>
										<div class="divider" style="margin-top: 1rem;"></div>
										<div class="articles-container">
											<div class="article border-bottom">
												<div class="col-xs-12">
													<div class="row">
														<div class="col-2 date">
															<div class="large">30</div>
															<div class="text-muted">Jun</div>
														</div>
														<div class="col-10">
															<h4><a href="#">Medical Sciences</a></h4>
															<p>A Bachelor of Medical Sciences (BMedSci, BMedSc, BMSc, BSc(Med) degree or Bachelor of Medical Sciences is an undergraduate academic degree.</p>
														</div>
													</div>
												</div>
												<div class="clear"></div>
											</div><!--End .article-->

											<div class="article">
												<div class="col-xs-12">
													<div class="row">
														<div class="col-2 date">
															<div class="large">30</div>
															<div class="text-muted">Jun</div>
														</div>
														<div class="col-10">
															<h4><a href="#">Medical Sciences</a></h4>
															<p>A Bachelor of Medical Sciences (BMedSci, BMedSc, BMSc, BSc(Med) degree or Bachelor of Medical Sciences is an undergraduate academic degree awarded after three or four years of degree</p>
														</div>
													</div>
												</div>
												<div class="clear"></div>
											</div><!--End .article-->

											<div class="article">
												<div class="col-xs-12">
													<div class="row">
														<div class="col-2 date">
															<div class="large">30</div>
															<div class="text-muted">Jun</div>
														</div>
														<div class="col-10">
															<h4><a href="#">Medical Sciences</a></h4>
															<p>A Bachelor of Medical Sciences (BMedSci, BMedSc, BMSc, BSc(Med) degree or Bachelor of Medical Sciences is an undergraduate academic degree awarded after three or four years of degree</p>
														</div>
													</div>
												</div>
												<div class="clear"></div>
											</div><!--End .article-->
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-4">
								<div class="card mb-4">
									<div class="card-block">
										<h3 class="card-title">Top Users</h3>
										<h6 class="card-subtitle mb-2 text-muted">Most active this week</h6>
										<div class="user-progress justify-center">
											<div class="col-sm-3 col-md-2" style="padding: 0;">
												<img src="img/profile-pic.jpg" alt="profile photo" class="circle profile-photo" style="width: 100%; max-width: 100px;">
											</div>
											<div class="col-sm-9 col-md-10">
												<h6 class="pt-1">Username 1</h6>
												<div class="progress progress-custom">
													<div class="progress-bar bg-primary" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
										</div>
										<div class="user-progress justify-center">
											<div class="col-sm-3 col-md-2" style="padding: 0;">
												<img src="img/profile-pic.jpg" alt="profile photo" class="circle profile-photo" style="width: 100%; max-width: 100px;">
											</div>
											<div class="col-sm-9 col-md-10">
												<h6 class="pt-1">Username 2</h6>
												<div class="progress progress-custom">
													<div class="progress-bar bg-primary" style="width: 50%" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
										</div>
										<div class="user-progress justify-center">
											<div class="col-sm-3 col-md-2" style="padding: 0;">
												<img src="img/profile-pic.jpg" alt="profile photo" class="circle profile-photo" style="width: 100%; max-width: 100px;">
											</div>
											<div class="col-sm-9 col-md-10">
												<h6 class="pt-1">Username 3</h6>
												<div class="progress progress-custom">
													<div class="progress-bar bg-primary" style="width: 25%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
										</div>
										<div class="divider"></div>
										<div id="calendar"></div>
										<div class="divider"></div>
										<h3 class="card-title">Timeline</h3>
										<h6 class="card-subtitle mb-2 text-muted">What's coming up</h6>
										<ul class="timeline">
											<li>
												<div class="timeline-badge"><em class="fa fa-camera"></em></div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<h5 class="timeline-title mt-2">Medical Sciences</h5>
													</div>
													<div class="timeline-body">
														<p>A Bachelor of Medical Sciences (BMedSci, BMedSc, BMSc,</p>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-badge primary"><em class="fa fa-link"></em></div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<h5 class="timeline-title mt-2">Medical Sciences</h5>
													</div>
													<div class="timeline-body">
														<p>A Bachelor of Medical Sciences (BMedSci, BMedSc, BMSc,</p>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-badge"><em class="fa fa-paperclip"></em></div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<h5 class="timeline-title mt-2">Medical Sciences</h5>
													</div>
													<div class="timeline-body">
														<p>A Bachelor of Medical Sciences (BMedSci, BMedSc, BMSc,</p>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>

							</div>
						</section>
						<section class="row">
							<div class="col-12 mt-1 mb-4"><a href="></a></div>
						</section>
					</div>
				</section>
			</main>
		</div>
	</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
  	<script src="js/popper.min.js"></script>
    <script src="bootstrap-4.1.3/js/bootstrap.min.js"></script>

    <script src="js/pannel/chart.min.js"></script>
    <script src="js/pannel/chart-data.js"></script>
    <script src="js/pannel/easypiechart.js"></script>
    <script src="js/pannel/easypiechart-data.js"></script>
    <script src="js/pannel/bootstrap-datepicker.js"></script>
    <script src="js/pannel/custom.js"></script>
    <script>
	    var startCharts = function () {
	                var chart1 = document.getElementById("line-chart").getContext("2d");
	                window.myLine = new Chart(chart1).Line(lineChartData, {
	                responsive: true,
	                scaleLineColor: "rgba(0,0,0,.2)",
	                scaleGridLineColor: "rgba(0,0,0,.05)",
	                scaleFontColor: "#c5c7cc "
	                });
	            };
	        window.setTimeout(startCharts(), 1000);
	</script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

	</body>
</html>
