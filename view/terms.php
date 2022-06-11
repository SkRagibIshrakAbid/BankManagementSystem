<!DOCTYPE html>
<html lang="en">
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
<body style="background-image: linear-gradient(to right, rgba(255,0,0,0), rgb(87, 137, 194));">
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
            <a href="homePage.php" id="nav-cont">Home</a>
            <a href="terms.php" id="nav-cont">Terms of Deposit</a>
            <a href="loan.php" id="nav-cont">Loan</a>
            <a href="branches.php" id="nav-cont">ATMs & Branches</a>
        </div>
    </div>
    <div class="login-box">
        <h1 style="text-shadow: 1px 2px;">You will need -</h1> <br>
        <p style="text-align:center; text-shadow: 1px 1px;">#Copy of valid Photo ID for Applicant and Nominee.<p>
        <p style="text-align:center; text-shadow: 1px 1px;">#Resident address verification document.</p>
        <p style="text-align:center; text-shadow: 1px 1px;">#Photograph of the applicant. </p>
        <p style="text-align:center; text-shadow: 1px 1px;">#Photograph of the nominee. </p>
        
    </div>
    <footer class='footer'>
        ©2021 Project Bank Limited 
    </footer>  
          
</body>
</html>