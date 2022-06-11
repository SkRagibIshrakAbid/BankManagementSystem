<?php
include('../db/empDb.php');

$errMsg = "";
 
// store session data
if(isset($_REQUEST['submits'])) {
    
if (empty($_POST['username']) || empty($_POST['password'])) {
$errMsg = "Username or Password is empty";
}
else
{
$username=$_POST['username'];
$password=$_POST['password'];

$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUserForLogin($conobj,"employee",$username,$password);

if ($userQuery->num_rows > 0) {
  $_SESSION['username']=$_POST['username'];
  $_SESSION['password']=$_POST['password'];
  $_SESSION['cat']=$_POST['catagory'];
  $name=$_REQUEST["name"];
    $email=$_REQUEST["email"];
    $confirmPassword=$_REQUEST["confirmPassword"];
    $nid=$_REQUEST["nid"];
    $dob=$_REQUEST["dob"];
    $mobile=$_REQUEST["mobile"];
    $address=$_REQUEST["address"];
  

   }
 else {
$errMsg= "Username or Password is invalid";
}
$connection->CloseCon($conobj);

}
}


?>
