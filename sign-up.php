<?php
include('header.php');
include('connect.php');
?>

  <!--==========================
    Intro Section
  ============================-->
  <section id="back-area">
    <div class="container">
      <div class="main-signin-up">
        <div class="main-center">
        <h5>Sign up once...</h5>
          <form class="" method="post" action="">

            <div class="form-group">
              <label for="name">Your Name</label>
                <div class="input-group">
        <input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
              </div>
            </div>

            <div class="form-group">
              <label for="email">Your Email</label>
                <div class="input-group">
                  <input type="text" class="form-control" name="email" placeholder="Enter your Email"/>
              </div>
            </div>

            <div class="form-group">
              <label for="username">Username</label>
                <div class="input-group">
                  <input type="text" class="form-control" name="username" placeholder="Enter your Username"/>
                </div>
            </div>

            <div class="form-group">
              <label for="password">Password</label>
                <div class="input-group">
                  <input type="password" class="form-control" name="password" placeholder="Enter your Password"/>
                </div>
            </div>

            <!-- <div class="form-group">
              <label for="confirm">Confirm Password</label>
                <div class="input-group">
                  <input type="password" class="form-control" name="confirm" placeholder="Confirm your Password"/>
                </div>
            </div> -->

        <button type="submit" name="submit">SUBMIT</button><a href="sign-in.php"><button type="button">Back</button></a>

          </form>
          <?php

           //	$conn = mysqli_connect("localhost","mmmp1","mmmp123","mmmp1");
           //	$con = mysqli_connect("localhost","root","","mlm") or die(mysql_error());

               if(isset($_POST['submit']))

             {
   $name = $_POST['name']; echo "<br>";
   $username=$_POST['username']; echo "<br>";
   $email=$_POST['email']; echo "<br>";
   $pass=$_POST['password'];

   $sql = "INSERT INTO users (name,username,email,password) VALUES
   ('$name','$username','$email','$pass')";

   if ($conn->query($sql) === TRUE) {


   $message = "Account Created Successfully";
echo "<script type='text/javascript'>alert('$message'); window.location='sign-up.php'</script>";
} else {
 $message = "Getting error processing your request";
echo "<script type='text/javascript'>alert('$message'); window.location='sign-up.php'</script>";

}
 }

?>
        </div><!--main-center"-->
      </div><!--main-->
    </div><!--container-->
     </section>

<?php include('footer.php');?>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="bootstrap-4.1.3/js/bootstrap.min.js"></script>
  <script src="js/superfish/hoverIntent.js"></script>
  <script src="js/superfish/superfish.min.js"></script>
  <script src="js/owlcarousel/owl.carousel.min.js"></script>
  <script src="js/magnific-popup/magnific-popup.min.js"></script>
  <script src="js/sticky.js"></script>
  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
