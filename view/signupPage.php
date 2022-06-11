<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PBL: Registration</title>
    
    <link rel="stylesheet" type ="text/css" href="../css/signupPage.css">
</head>
<body>
    <div class="topSection">
        <img src="../resources/pbl.png" alt="pbl Logo" class='logo'>
        <h1 class='topTitle'>Project Bank Limited</h1>
        <h2 class='slogan'>- the bank you can trust</h2>
        <a href="aboutUs.php" class='aboutPbl'>About Project Bank</a>
        <h4 class='devider'>|</h4>
        <a href="contactUs.php" class='contactUs'>Contact Us</a>
    </div>
    <div class='navbar'>
        <div class='nav-main'>
            <a href="homePage.php" id="nav-cont">Home</a>
            <a href="terms.php" id="nav-cont">Terms of Deposit</a>
            <a href="loan.php" id="nav-cont">Loan</a>
            <a href="branches.php" id="nav-cont">ATMs & Branches</a>
        </div>
    </div>
    <div class="reg">
        <h1 id="signup-top">Welcome to PBL</h1>
        <h3>Click Registration or Apply to Start Journey With Us</h3>
        <div class="empReg">
            <h2>Employee Registration</h2>
            <p>This is a test paragraph <br> this is another text </p><br><br><br><br>
            <button class='reg-button button1'><a class="reg-button" href="employeeReg.php">Apply for Registration</a></button>       
        </div>
        <div class="cusReg">
            <h2>Customer Registration</h2>
            <p>This is a test paragraph <br> this is another text </p><br><br><br><br>
            <button class='reg-button button2'><a class="reg-button" href="customerReg.php">Registration</a></button>
        </div>
        <div class="venReg">
            <h2>Merchant Registration</h2>
            <p>This is a test paragraph <br> this is another text </p><br><br><br><br>
            <button class='reg-button button3'><a class="reg-button" href="merchantReg.php">Apply for Registration</a></button>
        </div>
        <div>
            <br>
            <a href="login.php" class="exist-login">Already have an account? Login</a>
        </div>
    </div>
    
    <footer class='footer'>
        ©2021 Project Bank Limited 
    </footer>
</body>
</html>