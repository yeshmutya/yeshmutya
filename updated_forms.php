<?php include('connect.php');?>
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
                    <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">S.No</th>
                                    <th scope="col">User ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Mobile</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>-->
             <?php
  //$sql = "SELECT * FROM users WHERE id='".$_GET['id']."'";

  //$sql = "SELECT CONCAT('MLM','@id') AS 'sponsorId', 'username','f_name', 'l_name' , 'mobile', 's_id' FROM 'users' ";
  //$username = $_SESSION['username'];
  //$sql = "SELECT * FROM users WHERE username = '$username'";
  $conn = mysqli_connect('localhost','t_pro','tpro@123','t_pro');
  $sql = "SELECT * FROM forms where status='update'";

  $result=mysqli_query($conn,$sql);
    $i=1;
           //     $row = $result->fetch_assoc()
  			//  echo $result; die();
  	while($row = $result->fetch_assoc()) { ?>
                              <tr>
                                <th><?php echo $i; $i++?></th>
  							<!--<td><?php //echo $row['sponsor_id']; ?></td>-->
                                <td><?php echo $row['user_id']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['mobile']; ?></td>
                                <td>
                                	<a href="update_profile.php?id=<?php echo $row["id"]; ?>">
                      				     <i class="fa fa-pencil"></i>
                      				</a>
                    	            <a href="view_profile.php?id=<?php echo $row["id"]; ?>">
                     	 		       	<i class="fa fa-eye"></i>
                      				</a>

                                </td>
                            </tr>

    <?php     }
       ?>
                        </tbody>
                    </table>
										<?php

										 //	$conn = mysqli_connect("localhost","mmmp1","mmmp123","mmmp1");
										 //	$con = mysqli_connect("localhost","root","","mlm") or die(mysql_error());

												 if(isset($_POST['submit']))

											 {
												 //print_r($_POST);die;
						 $name = $_POST['name']; echo "<br>";
						 $l_name = $_POST['l_name']; echo "<br>";
						 $email=$_POST['email']; echo "<br>";
						 $mobile=$_POST['mobile_no']; echo "<br>";
						 $dob=$_POST['bday']; echo "<br>";
						 $id=$_POST['ID']; echo "<br>";
						 $address = $_POST['address']; echo "<br>";
						 $pin= $_POST['pin_code']; echo "<br>";
						 $sel_op= $_POST['sel_op']; echo "<br>";
						 $image=$_FILES['myFile']['name'];
                    $location="images/".$image;
                    $file_copy=move_uploaded_file($_FILES['myFile']['tmp_name'],$location);

						 $sql = "INSERT INTO forms (name,l_name,email,mobile,dob,user_id,address,pincode,sel_op,path) VALUES
						 ('$name','$l_name','$mobile','$email','$dob','$id','$address','$pin','$sel_op','$location')";
print_r($sql);die;
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
