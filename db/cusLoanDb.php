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
 function LoanEntry($conn,$table,$username,$amount)
 {
    $sql = "INSERT INTO loan (cusUsername, loanAmount) VALUES ('$username','$amount')";
    $res = $conn->query($sql);
    if($res){
        $databaseReport = "new record inserted";
    }
    else{
        $databaseReport = "error occurred".$conn->connect_error;
    }
 }



function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>