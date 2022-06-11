<?php
$result = "bye";
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
 function CheckUserForDepWithLogin($conn,$table,$username)
 {
  $result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username."'");
 return $result;
 }
 function CheckUsername ($conn, $table, $username)
 {
    $result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username."'");
    return $result;
 } 

 function RegUser($conn,$table, $fname,$lname, $email, $username, $password, $dob, $address, $nid, $phone, $gender){
    $sql="INSERT INTO customer (fname, lname, email, username, password, dob, address, nid, phone, gender)
    VALUES ('$fname','$lname','$email','$username','$password','$dob','$address','$nid','$phone','$gender')";    
    $res = $conn->query($sql);
    if($res){
        echo "new record inserted";
    }
    else{
       echo "error occurred".$conn->connect_error;
    }
}
function UpdateUser($conn,$table, $fname, $lname, $email, $username, $password,  $dob, $address, $nid, $phone)
 {

    $sql = "UPDATE $table SET fname='$fname', lname='$lname', email='$email', password='$password', dob='$dob', address = '$address', nid='$nid', phone='$phone' WHERE username='$username'";

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
 }
 function Payment($conn, $table, $username, $password)
 {
    $result = $conn->query ("SELECT balance FROM ". $table." WHERE username='". $username."' AND password='". $password."'");
 }
 function UpdateBalanceCustomer($conn, $table, $username, $updateBalanceCus){
   $sql3 = $conn->query("UPDATE customer SET balance='$updateBalanceCus' WHERE username='$username'");
 }
 function UpdateBalanceMerchant($conn, $table, $username, $updateBalance){
   $sql2 = $conn->query("UPDATE merchant SET balance='$updateBalance' WHERE username='$username'");
 }
 
 function customerWithdraw($conn,$table,$username,$amount)
 {
    $sql = "INSERT INTO customerwithdraw (username, amount) VALUES ('$username','$amount')";
    $res = $conn->query($sql);
    if($res){
        $databaseReport = "new record inserted";
    }
    else{
        $databaseReport = "error occurred".$conn->connect_error;
    }
 }

 function customerPayment($conn,$table,$username,$amount, $merchantUsername)
 {
    $sql = "INSERT INTO customerpayment(username, amount, merchantUsername) VALUES ('$username','$amount','$merchantUsername')";
    $res = $conn->query($sql);
    if($res){
        $databaseReport = "new record inserted";
    }
    else{
        $databaseReport = "error occurred".$conn->connect_error;
    }
 }

 function paymentCheck($conn,$table,$username,$merchantUser)
    {
        $result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username."' AND merchantUsername='".$merchantUser."'");

   
    return  $result;
    }

 

function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>