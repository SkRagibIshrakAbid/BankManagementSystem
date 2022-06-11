<?php
include("../db/empDb.php");
include("../control/loanapprove.php");
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
</head>
<body style="background-image: linear-gradient(to right, rgba(255,0,0,0), rgb(87, 137, 194))">
    <div class="topSection">
        <img src="../resources/pbl.png" alt="pbl Logo" class='logo'>
        <h1 class='topTitle'>Project Bank Limited</h1>
        <h2 class='slogan'>- the bank you can trust</h2>
        <a href="aboutUs.php" class='aboutPbl'>About Project Bank</a>
        <h4 class='devider'>|</h4>
        <a href="contactUs.php" class='contactUs'>Contact Us</a>
        <a href="../control/logout.php" id="login">LogOut</a>
        
    </div>
    <div class='navbar'>
        <div class='nav-main'>
            <a href="employeeDashboard.php" id="nav-cont">Dashboard</a>
            <a href="empCusTransaction.php" id="nav-cont">Customer Transations</a>
            <a href="empMerTransaction.php" id="nav-cont">Merchant Transations</a>
            <a href="empLoan.php" id="nav-cont">Loan</a>
            <a href="employeeAccountSettings.php" id="nav-cont">Account Settings</a> </div>
    </div>
        </div>
        <div class='eReg'>
        <h2 class='top-title'>Merchant search result</h2> 
        </div>
        <div class='updateform'>
        <form action="" method="post">
        <h4 class='e1'>Search:</h4><br>
            <input type="text" name="loan" placeholder="Input username">
            
            <input type="submit" name="approve" value="approve">
            <input type="submit" name="reject" value="reject">
        </form>
        <?php
        
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->ShowAll($conobj,"loan");

if ($userQuery->num_rows > 0) {
    echo "<table class='empsearch'><tr><th>id</th>><th>cusUsername</th><th>loanAmount</th></tr>";
    
    while($row = $userQuery->fetch_assoc()) {
      echo "<tr><td>".$row["id"]."</td><td>".$row["cusUsername"]."</td><td>".$row["loanAmount"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }



?>
    </div>
        
    
    
</body>
</html>