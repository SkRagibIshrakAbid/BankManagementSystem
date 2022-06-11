<?php
session_start();
include('../db/cusDb.php');

$user = $_POST['uname'];
$merchantUser=$_SESSION['username'];

if($user!="")
{
$connection = new db();
$conobj=$connection->OpenCon();

$MyQuery=$connection->paymentCheck($conobj,"customerpayment",$user,$merchantUser );



if ($MyQuery->num_rows > 0) {
  echo "<table><tr><th>id</th><th>username</th><th>amount</th></tr>";
    // output data of each row
    while($row = $MyQuery->fetch_assoc()) {
      echo "<tr><td>".$row["id"]."</td><td>".$row["username"]."</td><td>".$row["amount"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }
}
else{
  echo "please enter something";
}