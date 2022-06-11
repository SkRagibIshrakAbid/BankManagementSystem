<?php
session_start();
if(empty($_SESSION["username"]))
    {
        header("Location: ../view/login.php");
    }
?>
<?php
    include ("../db/merchantDB.php");
    $connection = new db();
    $conobj=$connection->OpenCon();
    
    $userQuery=$connection->CheckUsername($conobj,"merchant", $_SESSION['username']);
    
    if ($userQuery->num_rows > 0) {
    
        // output data of each row
        while($row = $userQuery->fetch_assoc()) {
            
            $companyName = $row["name"];
            $balance = $row["balance"];
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to PBL</title>
    <link rel="stylesheet" type ="text/css" href="../css/header.css">
    <link rel="stylesheet" type ="text/css" href="../css/login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script> 
$(document).ready(function(){
  
    var div = $("div.login-box");
    div.animate({height: '0px', opacity: '0.4'}, "slow");
    div.animate({width: '0px', opacity: '0.8'}, "slow");
    div.animate({height: '320px', opacity: '0.4'}, "slow");
    div.animate({width: '500px', opacity: '0.8'}, "slow");
 
});
</script> 
</head>
<body>
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
        <div class='navCont'>
            <a href="merchantDashboard.php" id="nav-cont">Dashboard</a>
            <a href="merchantWithdraw.php" id="nav-cont">Withdraw</a>
            <a href="merchantPaymentTransiction.php" id="nav-cont">Transations</a>
            <a href="merchantAccountSettings.php" id="nav-cont">Account Settings</a>
        </div>
    </div>

    
    <div class="login-box">
        <br>
        <img src="../resources/pbl.png"  alt="pbl Logo">
        <h3>PBL Merchant Dashbord</h3>
        <h3>Hi, <?php echo $companyName; ?></h3>
        <h4>Usename: @<?php echo $_SESSION['username']; ?></h4>
        <h4>Balance: <?php echo $balance; ?></h4>
      
    </div>
    
    
    <footer class='footer'>
        ©2021 Project Bank Limited 
    </footer>  
</body>
</html>