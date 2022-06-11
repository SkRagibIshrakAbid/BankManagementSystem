<?php

if (isset($_REQUEST['delete'])){
       $server="localhost";
	    $user="root";
	    $password="";
	    $db="projectbank";
	    $conn = mysqli_connect($server,$user,$password,$db);
$id=$_COOKIE['deleteck'];
      echo $_COOKIE['deleteck'];
	   $sql = "DELETE FROM customer WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
     
	echo "User deleted" ;   
}


?>
