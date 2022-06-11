<?php
include('../db/cusDb.php');

// store session data
if(isset($_REQUEST['submits'])) {
    
if (empty($_POST['username']) || empty($_POST['password'])) {
echo "Username or Password is empty";
}
else
    {
$username=$_POST['username'];
$password=$_POST['password'];

$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUserForLogin($conobj,"customer",$username,$password);

if ($userQuery->num_rows > 0) {
  $_SESSION['username']=$_POST['username'];
  $_SESSION['password']=$_POST['password'];
  $_SESSION['cat']=$_POST['catagory'];
    $fname = $_REQUEST ["fname"];
    $lname = $_REQUEST ["lname"];
    $email = $_REQUEST ["email"];
    $cpassword = $_REQUEST["cpassword"];
    $dob = $_REQUEST["dob"];
    $address = $_REQUEST ["address"];
    $nid = $_REQUEST ["nid"];
    $phone = $_REQUEST["phone"];
}
 else {
  $errMsg= "Username or Password is invalid";
      }
  $connection->CloseCon($conobj);

   }
}
?>
