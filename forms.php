<?php


session_start();
//print_r($_SESSION['id']);die;

 include('connect.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="images/favicon.ico">
	<title>Our Company</title>
*
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
				<h1 class="site-title"><a href="index.php"><em class="fa fa-rocket"></em> Brand.name</a></h1>

				<a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><em class="fa fa-bars"></em></a>
				<ul class="nav nav-pills flex-column sidebar-nav">
					<li class="nav-item"><a class="nav-link active" href="index.php"><em class="fa fa-dashboard"></em> Back to Website <span class="sr-only">(current)</span></a></li>
					<li class="nav-item"><a class="nav-link" href="forms.php"><em class="fa fa-pencil-square-o"></em> Forms <span class="sr-only">(current)</span></a></li>
						<li class="nav-item"><a class="nav-link" href="added_forms.php"><em class="fa fa-pencil-square-o"></em> Added Forms <span class="sr-only">(current)</span></a></li>
			<li class="nav-item"><a class="nav-link" href="updated_forms.php"><em class="fa fa-pencil-square-o"></em> Updated Forms <span class="sr-only">(current)</span></a></li>
				</ul>

				<a href="#" class="logout-button"><em class="fa fa-power-off"></em> Signout</a></nav>
			<main class="col-xs-12 col-sm-8 col-lg-9 col-xl-10 pt-3 pl-4 ml-auto">
				<header class="page-header row justify-center">
					<div class="col-md-6 col-lg-8" >
						<h1 class="float-left text-center text-md-left">Form Elements</h1>
					</div>
					<div class="dropdown user-dropdown col-md-6 col-lg-4 text-center text-md-right"><a class="btn btn-stripped dropdown-toggle" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
							<div class="col-12">
								<div class="card mb-4">
									<div class="card-block">
										<h3 class="card-title">Inputs</h3>
										<form class="form" action="" method="post">
											<div class="form-group row">
												<label class="col-md-3 col-form-label">Name</label>
												<div class="col-md-9">
													<input type="text" name="name" class="form-control" required>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label">Last Name</label>
												<div class="col-md-9">
													<input class="form-control" type="text" name="l_name" required>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label">Email</label>
												<div class="col-md-9">
													<input class="form-control" type="email" name="email" placeholder="@mail.com" required>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label">Mobile No.</label>
												<div class="col-md-9">
													<input type="number" name="mobile" placeholder="Mobile No." class="form-control" required>
												</div>
											</div>
												<div class="form-group row">
												<label class="col-md-3 col-form-label">Date Of Birth</label>
												<div class="col-md-9">
													<input type="date" name="bday" placeholder="Mobile No." class="form-control" required>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label">Enter Your ID</label>
												<div class="col-md-9">
													<input type="text" name="ID" placeholder="Enter Your ID" class="form-control" required>
												</div>
											</div>

											<div class="form-group row">
												<label class="col-md-3 col-form-label">Address</label>
												<div class="col-md-5">
													<input type="address" name="address" placeholder="Hose no.,Street, Road, City" class="form-control" required>
												</div>
												<div class="col-md-4">
													<input type="text" name="pin_code" placeholder="Pincode" class="form-control" required>
												</div>
											</div>

											<div class="form-group row">
												<label class="col-md-3 col-form-label">Select Option</label>
												<div class="col-md-9">
													<select name="sel_op" class="custom-select form-control">
														<option selected>Open this select menu</option>
														<option value="1">One</option>
														<option value="2">Two</option>
														<option value="3">Three</option>
													</select>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label">Upload Report</label>
												<div class="col-md-9">
													  Select a file: <input type="file" name="myFile"><br><br>
												</div>
											</div>


											<button name="submit" type="submit">Submit</button>
										</form>
										<?php

										 //	$conn = mysqli_connect("localhost","mmmp1","mmmp123","mmmp1");
										 //	$con = mysqli_connect("localhost","root","","mlm") or die(mysql_error());

												 if(isset($_POST['submit']))

											 {
										//print_r($_POST);die;
										$user_id=$_POST['id'];
						 $name = $_POST['name']; echo "<br>";
						 $l_name = $_POST['l_name']; echo "<br>";
						 $email=$_POST['email']; echo "<br>";
						 $mobile=$_POST['mobile']; echo "<br>";
						 $dob=$_POST['bday']; echo "<br>";
						 $id=$_POST['ID']; echo "<br>";
						 $address = $_POST['address']; echo "<br>";
						 $pin= $_POST['pin_code']; echo "<br>";
						 $sel_op= $_POST['sel_op']; echo "<br>";
						 $image=$_FILES['myFile']['name'];
                    $location="images/".$image;
                    $file_copy=move_uploaded_file($_FILES['myFile']['tmp_name'],$location);

						 $sql = "INSERT INTO forms (name,l_name,email,mobile,dob,user_id,address,pincode,sel_op,path,user) VALUES
						 ('$name','$l_name','$email','$mobile','$dob','$id','$address','$pin','$sel_op','$location','$user_id')";
//print_r($sql);die;
						 if ($conn->query($sql) === TRUE) {


						 $message = "Form Added Successfully";
					echo "<script type='text/javascript'>alert('$message'); window.location='forms.php'</script>";
					} else {
					 $message = "Getting error processing your request";
					echo "<script type='text/javascript'>alert('$message'); window.location='forms.php'</script>";

					}
					 }

					?>
									</div>
								</div>
							</div>
						</section>



						<section class="row">
							<div class="col-12 mt-1 mb-4"><a href=""></a></div>
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
