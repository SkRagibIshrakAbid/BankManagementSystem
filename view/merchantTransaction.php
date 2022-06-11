<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to PBL</title>
    <link rel="stylesheet" type ="text/css" href="../css/header.css">
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
            <a href="merchantTransaction.php" id="nav-cont">Transations</a>
            <a href="merchantAccountSettings.php" id="nav-cont">Account Settings</a>
        </div>
    </div>
</body>
</html>