<?php
include('../db/merchantDB.php');


 $errMsg="";
// store session data
if(isset($_REQUEST['submits'])) {
    
if (empty($_POST['username']) || empty($_POST['password'])) {
  $errMsg= "Username or Password is empty";
}
else
{


$username=$_REQUEST["username"];
$password=$_REQUEST["password"];

$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUserForLogin($conobj,"merchant",$username,$password);

if ($userQuery->num_rows > 0) {
 echo "test";
  $_SESSION['username']=$_POST['username'];
  $_SESSION['password']=$_POST['password'];
  $_SESSION['cat']=$_POST['catagory'];
  $_SESSION['email'] = $_POST['email'];
  //header("location:../view/admindash.php");
  $name=$_REQUEST["name"];
  $email=$_REQUEST["email"];
  $license=$_REQUEST["license"];
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
