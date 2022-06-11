<?php
   // include("viewData.php");
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to PBL</title>
    <link rel="stylesheet" type ="text/css" href="../css/header.css">
    <script>
function showmyuser() {
  var uname=  document.getElementById("uname").value;
  
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("mytext").innerHTML = this.responseText;
    }
	else
	{
		 document.getElementById("mytext").innerHTML = this.status;
	}
  };
  xhttp.open("POST", "/projectBank/control/getPaymentTransaction.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("uname="+uname);


}

</script>
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
        <div class='navCont'>
        <a href="merchantDashboard.php" id="nav-cont">Dashboard</a>
            <a href="merchantWithdraw.php" id="nav-cont">Withdraw</a>
            <a href="merchantPaymentTransiction.php" id="nav-cont">Transations</a>
            <a href="merchantAccountSettings.php" id="nav-cont">Account Settings</a>
        </div>
    </div>
<div style="padding-top: 200px">
<h2>Payment Transaction</h2>
<input type="text" id="uname" placeholder="Customer Username">
<button onclick="showmyuser()">Search</button>

<p id="mytext" align="center"></p>
</div>
</body>
</html>