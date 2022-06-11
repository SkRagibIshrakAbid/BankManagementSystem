<?php
$databaseReport="";
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "projectbank";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
 
 return $conn;
 }
 function CheckUserForLogin($conn,$table,$username,$password)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username."' AND password='". $password."'");
 return $result;
 }
 function CheckUser($conn,$table,$username,$password)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username."' AND password='". $password."'");
 return $result;
 }

 function RegUser($conn,$table, $name, $email, $username, $password, $license, $mobile, $address){
    $sql="INSERT INTO merchant (name, email, username, password, license, mobile, address)
    VALUES ('$name','$email','$username','$password','$license','$mobile','$address')";    
    $res = $conn->query($sql);
    if($res){
        echo "new record inserted";
    }
    else{
        echo "error occurred".$conn->connect_error;
    }
}
function UpdateUser($conn,$table, $name, $email, $username, $password, $license, $mobile, $address)
 {
    $sql = "UPDATE $table SET name='$name', email='$email', password='$password', license='$license', mobile='$mobile',address='$address' WHERE username='$username'";

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
 }

 function GetUserByUname($conn,$table, $uname)
 {
$result = $conn->query("SELECT * FROM  $table WHERE username='$uname'");
 return $result;
 }
 function CheckUsername ($conn, $table, $username)
 {
    $result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username."'");
    return $result;
    echo "merchant";
 } 

 function UpdateBalanceMerchant($conn, $table, $username, $updateBalance){
    $sql3 = $conn->query("UPDATE merchant SET balance='$updateBalance' WHERE username='$username'");
  }

  function merchantWithdraw($conn,$table,$username,$amount)
  {
     $sql = "INSERT INTO merchantwithdraw (username, amount) VALUES ('$username','$amount')";
     $res = $conn->query($sql);
     if($res){
         echo "new record inserted";
     }
     else{
         echo "error occurred".$conn->connect_error;
     }
  }
function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>