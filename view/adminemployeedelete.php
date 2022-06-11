<?php
session_start();
if(empty($_SESSION["username"])) 
{
header("Location: ../view/login.php"); 
}
include('../db/db.php');
include('../control/deleteuseremp.php');
?>





<!DOCTYPE html>
<html lang="en">
<head>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
    <meta charset="UTF-8">
    <title>Welcome to PBL</title>
    <link rel="stylesheet" type ="text/css" href="../css/adminheader.css">
    <link rel="stylesheet" type ="text/css" href="../css/login.css">
</head>
<body style="background-image: linear-gradient(to right, rgba(255,0,0,0), rgb(87, 137, 194))">
    <div class="topSection">
        <img src="../resources/pbl.png" alt="pbl Logo" class='logo'>
        <h1 class='topTitle'>Project Bank Limited</h1>
        <h2 class='slogan'>- the bank you can trust</h2>
        <a href="../view/aboutUs.php" class='aboutPbl'>About Project Bank</a>
        <h4 class='devider'>|</h4>
        <a href="contactUs.php" class='contactUs'>Contact Us</a>
        
    </div>
    <div class='navbar'>
        <div class='navCont'>
            <a href="admindash.php" id="nav-cont">Dashboard</a>
            <a href="adminemployeeall.php" id="nav-cont">Employee</a>
            <a href="admincustomerall.php" id="nav-cont">Customer</a>
            <a href="adminmerchantall.php" id="nav-cont">Merchant</a>
        </div>
    </div>
    <div class='eReg'>
        <h2 class='top-title'>Employee delete</h2> 
        </div>
        <div class='updateform'>
        <?php
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->ShowAll($conobj,"employee",$_COOKIE['deleteck']);

if ($userQuery->num_rows > 0) {
    echo "<table class='empsearch'><tr><th>id</th><th>name</th><th>email</th><th>username</th><th>password</th><th>nid</th><th>date of birth</th><th>mobile</th><th>address</th><th>gender</th></tr>";
    
    while($row = $userQuery->fetch_assoc()) {
      echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["username"]."</td><td>".$row["password"]."</td><td>".$row["nid"]."</td><td>".$row["dob"]."</td><td>".$row["mobile"]."</td><td>".$row["address"]."</td><td>".$row["gender"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }
?>
<h4 class='e1'>Do you want to delete this employee?</h4><br>
<form action="" method = "post">
<input class='reg-button button1' name='delete' type='submit' value='Confirm delete'></div>
<a href="adminemployeeall.php">Go back</a>
</form>
    
        
    
    
        

</body>
</html>