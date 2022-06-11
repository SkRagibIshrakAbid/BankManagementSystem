<?php
include("../db/empDb.php");

$validateName="";
$validateEmail="";
$validateUsername="";
$validatePassword ="";
$validateConfirmPassword ="";
$validateNid="";
$validateDob="";
$validateMobile="";
$validateAddress="";
$validateGender="";
$gender="";
$validateCheckbox="";
$checkbox="";
$flag=true;
$validateForm="";
$error="";

if (isset($_POST['submit'])) {
    
    $name=$_REQUEST["name"];
    $email=$_REQUEST["email"];
    $username=$_REQUEST["username"];
    $password=$_REQUEST["password"];
    $confirmPassword=$_REQUEST["confirmPassword"];
    $nid=$_REQUEST["nid"];
    $dob=$_REQUEST["dob"];
    $mobile=$_REQUEST["mobile"];
    $address=$_REQUEST["address"];
    if(empty($name))
    {
        $validateName="Please enter a valid name!";
        $flag=false;
    }
    
    if(empty($email) || !preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i", $email)){
        $validateEmail="Please enter a valid e-mail!";
        $flag=false;
    }

    if(empty($username) || !preg_match('/[a-zA-Z0-9._]{5,}$/', $username)){
        $validateUsername="Please enter a valid Username!";
        $flag=false;
    }

    if(empty($password) || strlen($password)<8 || !preg_match("/(?=.*[@#$%^&+=!]).*$/", $password)){
        $validatePassword = "Please enter a valid password atleast that contains 8 characters & 1 special character!";
        $flag=false;
    }
    
    if(empty($confirmPassword) || $password != $confirmPassword){
        $validateConfirmPassword = "Password Does Not Matched!";
        $flag=false;
    }
    
    
    if(!preg_match("/^[0-9]\d{12}$/",$nid)){
        $validateNid="Please enter a valid NID Number!";
        $flag=false;
    }
    if(empty($dob)){
        $validateDob="Please Select a Date.";
        $flag=false;
    }  
    
    if(!preg_match("/^01\d{9}$/",$mobile)){
        $validateMobile="Please enter a valid mobile number!";
        $flag=false;
    }  

    if(empty($address)){
        $validateAddress="Please enter a valid Address!";
        $flag=false;
    }  

    if($flag==true){

    $connection = new db();
    $conobj=$connection->OpenCon();
    $userQuery=$connection->UpdateUser($conobj,"employee",$_POST["name"],$_POST['email'],$_SESSION['username'],$_POST['password'], $_POST['nid'], $_POST['dob'], $_POST['mobile'],$_POST['address']);
    if($userQuery==TRUE)
    {
        $validateForm = "update successful"; 
    }
    else
    {
        $validateForm = "could not update";    
    }
    $connection->CloseCon($conobj);
    }
}


?>
