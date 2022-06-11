<?php

include("../db/merchantDB.php");
$validateName="";
$validateEmail="";
$validateUsername="";
$validatePassword ="";
$validateCpassword ="";
$validateLicense="";
$validateMobile="";
$validateAddress="";
$flag=true; 
$validateForm="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name=$_REQUEST["name"];
    $email=$_REQUEST["email"];
    $username=$_REQUEST["username"];
    $password=$_REQUEST["password"];
    $cpassword=$_REQUEST["cpassword"];
    $license=$_REQUEST["license"];
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

    if(empty($password) || strlen($password)<8 || !preg_match("/(?=.*[@#$%^&+=]).*$/", $password)){
        $validatePassword = "Please enter a valid password atleast that contains 8 characters & 1 special character!";
        $flag=false;
    }
    
    if(empty($cpassword) || $password != $cpassword){
        $validateCpassword = "Password Does Not Matched!";
        $flag=false;
    }
    
    
    if(!preg_match("/^[0-9]\d{14}$/",$license)){
        $validateLicense="Please enter a valid License Number!";
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

    if($flag==true)
    {
        $connection = new db();
        $conobj=$connection->OpenCon();

        $userQuery=$connection->RegUser($conobj,"merchant",$name, $email, $username, $password, $license, $mobile, $address);
                
        $connection->CloseCon($conobj);
    }
    else
    {
        $validateForm="Registration Failed";
    }
}


?>