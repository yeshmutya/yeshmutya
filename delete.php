<?php


session_start();

// $_SESSION['id']=$id;
  //print_r($_SESSION);die;

$id=$_GET['id'];
//print_r($_GET['id']);die;
$conn = mysqli_connect('localhost','t_pro','tpro@123','t_pro');


$sql = "DELETE FROM forms WHERE id='$id' ";
$result = mysqli_query($conn,$sql);
// $res=mysqli_query($conn,$sql);
$res =mysqli_num_rows($result);
//echo "<pre>";
//print_r($res);die;
if ($res== 1) {
$row=mysqli_fetch_array($result);
//print_r($row['id']);die;
$data=$row['id'];
   $_SESSION['id']=$data;

  

}
 else {
    $message = "Form Deleted Successfully";
					echo "<script type='text/javascript'>alert('$message'); window.location='forms.php'</script>";
}

///if





?>
