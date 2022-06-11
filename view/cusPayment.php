<?php
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: ../control/login.php");
}
include("../control/paymentVal.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to PBL</title>
    <link rel="stylesheet" type ="text/css" href="../css/header.css">
    <link rel="stylesheet" type ="text/css" href="../css/login.css">
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
            <a href="customerDashboard.php" id="nav-cont">Dashboard</a>
            
            <a href="cusPayment.php" id="nav-cont">Payment</a>
            <a href="cusDeposite.php" id="nav-cont">Deposite</a>
            <a href="cusWithdraw.php" id="nav-cont">Withdraw</a>
            <a href="cusLoan.php" id="nav-cont">Loan</a>
            <a href="customerAccountSettings.php" id="nav-cont">Account Settings</a>
        </div>
    </div>
    
    <form action="" method="post">
    <div class="login-box">
        <br>
        <img src="../resources/pbl.png" alt="pbl Logo" class='login-logo'>
        <h2 class="login-title">Pay Bill</h2><br>
        <br>
        <label class="label-username" for="username">Merchant Username  : </label>
        <input class="username" name="username" type="text" id = "username" > 
        <br>     
        <br>

        <label class="label-username" for="label-username">Sending Amount   :    </label>
        <input class="username" name="amount" type="text" id = "amount"> 
        <br>
        <br>
        <input class='reg-button button1' type="submit" name="submits" value="Payment">
        <br>
      
        <h4 style="color: red">
            <?php
                echo $validateTrasaction;
                echo $userSearch; 
            ?>
        </h4>  
        <h4 style="color: blue">
        <?php    
            echo $paymentConfirm;
        ?>
        </h4>
    </div>
    </form>
    
    <footer class='footer'>
        ©2021 Project Bank Limited 
    </footer>        
</body>
</html>