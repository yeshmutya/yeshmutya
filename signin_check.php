<?php


//$id_user= $_SESSION['id'];
//print_r($_SESSION);die;


$conn = mysqli_connect('localhost','t_pro','tpro@123','t_pro');



if(!empty($_POST['username']) && !empty($_POST['password'])){

  $username=$_POST['username'];
  $password=$_POST['password'];
  //print_r($_POSt);die;
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password' ";
$result = mysqli_query($conn,$sql);
// $res=mysqli_query($conn,$sql);
$res =mysqli_num_rows($result);
//echo "<pre>";
//print_r($sql);die;
if ($res== 1) {
$row=mysqli_fetch_array($result);
//print_r($row['id']);die;
$data=$row['id'];
   $_SESSION['id']=$data;

  header("Location: pannel.php");

}
 else {
    header("Location: sign-up.php");
}

///if
}
else {
  header("Location: Sign_in.php?message=Please%20fill%20in%20all%20details.");
}



?>
