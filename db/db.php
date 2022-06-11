<?php

class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "projectbank";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 function CheckUserForLogin($conn,$table,$username,$password)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE name='". $username."' AND pass='". $password."'");
 return $result;
 }

 function CheckUser($conn,$table,$id)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE id='". $id."' ");
 return $result;
 }

 function ShowAll($conn,$table,$id)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE id='". $id."' ");
 return $result;
 }

 function UpdateUserEmp($conn,$table, $name, $email, $username, $password, $nid, $dob, $mobile,$address)
 {
    $sql = "UPDATE $table SET name='$name', email='$email', password='$password', nid='$nid',dob='$dob' ,mobile='$mobile',address='$address' WHERE username='$username'";

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
 }
 function UpdateUserCus($conn,$table, $fname, $lname, $email, $username, $password,  $dob, $address, $nid, $phone)
 {
    $sql = "UPDATE $table SET fname='$fname', lname='$lname', email='$email', password='$password', dob='$dob', address = '$address', nid='$nid', phone='$phone' WHERE username='$username'";

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
 }
 function UpdateUserMer($conn,$table, $name, $email, $password, $license, $mobile, $address)
 {
    $id=$_COOKIE['updateck'];
    $sql = "UPDATE $table SET name='$name', email='$email', password='$password', license='$license', mobile='$mobile',address='$address' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;

}

function deleteUseremp($conn,$table,$id){
    $sql = "DELETE FROM $table WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
}


function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>