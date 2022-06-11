<?php
session_start();
if(empty($_SESSION["username"])) 
{
header("Location: ../view/login.php"); 
}
include('../control/cuscheck.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
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
        <a href="aboutUs.php" class='aboutPbl'>About Project Bank</a>
        <h4 class='devider'>|</h4>
        <a href="contactUs.php" class='contactUs'>Contact Us</a>
        
    </div>
    <div class='navbar'>
        <div class='navCont'>
            <a href="admindash.php" id="nav-cont">Dashboard</a>
            <a href="employeeall.php" id="nav-cont">Employee</a>
            <a href="customerall.php" id="nav-cont">Customer</a>
            <a href="merchantall.php" id="nav-cont">Merchant</a>
        </div>
    </div>
    <div class='eReg'>
        <h2 class='top-title'>Customer section</h2>  
        </div>
        
        <form>
        <div class='rightsearch'>
        <h4 class='e1'>Search Customer info:</h4><br>
            <input type="text" name="esearch" placeholder="Input ID">
            <br>
            <input class='reg-button button1' type="submit" name="submits" value="GO">
            </div>
        <div class='leftupdate'>    
        <h4 class='e1'>Update Customer info:</h4><br>
            <input type="text" name="eupdate" placeholder="Input ID">
            <br>
            <input class='reg-button button1' type="submit" name="submitu" value="GO">
            </div>
                
        
            <div class='leftdelete'>    
        <h4 class='e1'>Delete Customer info:</h4><br>
            <input type="text" name="edelete" placeholder="Input ID">
            <br>
            <input class='reg-button button1' type="submit" name="submitd" value="GO">
            </div>

        </form>


    
    

</body>
</html>