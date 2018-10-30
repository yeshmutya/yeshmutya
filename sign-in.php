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
          <form class="" method="post" action="signin_check.php">


            <div class="form-group">
              <label for="username">Username</label>
                <div class="input-group">
                  <input type="text" class="form-control" name="username" placeholder="Enter your Username"/>
                </div>
            </div>
            <div class="form-group">
              <label for="username">Password</label>
                <div class="input-group">
                  
                  <input class="form-control" name="password" type="password" value="FakePSW" id="myInput" placeholder="Enter your Password">
                </div>
            </div>
        <button type="submit">SIGN IN</button><p>Don't have account <a href="sign-up.php">Register Now</a></p>

          </form>
        </div><!--main-center"-->
      </div><!--main-->
    </div><!--container-->
  </section>


  <?php
  include('footer.php');

  ?>
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
<script>
function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>
