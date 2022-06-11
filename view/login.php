<?php
$cat="";
$errMsg="";
$catErr="";
 session_start();
 if(isset($_REQUEST['submits'])){
    $cat = $_REQUEST['catagory'];
    if($cat == "admin"){
        include('../control/logincheckforadmin.php');
    }

    elseif($cat == "merchant"){
        include('../control/logincheckformerchant.php');
    }

    elseif($cat == "employee"){
        include('../control/logincheckforemployee.php');
    }
    elseif($cat == "customer"){
        include('../control/logincheckforcustomer.php');
    }

    elseif($cat==""){
        $catErr="Please select a catagory!";
    }
}

if(isset($_SESSION['username'])){
   if($_SESSION['cat']=="admin"){
    
      header("location:admindash.php");
   }
   elseif($_SESSION['cat']=="merchant"){
    
    header("location:merchantDashboard.php");
    }

    elseif($_SESSION['cat']=="employee"){
    
        header("location:employeeDashboard.php");
        }
    elseif($_SESSION['cat']=="customer"){
    
        header("location:customerDashboard.php");
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
        <div class='navCont'>
            <a href="homePage.php" id="nav-cont">Home</a>
            <a href="terms.php" id="nav-cont">Terms of Deposit</a>
            <a href="loan.php" id="nav-cont">Loan</a>
            <a href="branches.php" id="nav-cont">ATMs & Branches</a>
        </div>
    </div>

<form action="" method="post">
    <div class="login-box">
        <br>
        <img src="../resources/pbl.png" alt="pbl Logo" class='login-logo'>
        <h2 class="login-title">PBL Login</h2><br>
        <div>
            <label class="login-type"for="catagory" >Account Type:</label>
            <select name="catagory" id="login-catagory">
                <option value="">Select type</option>
                <option value="admin">Admin</option>
                <option value="customer">Customer</option>
                <option value="employee">Employee</option>
                <option value="merchant">Merchant</option>
            </select>
        </div>        
        <br>
        <label class="label-username" for="username">Username: </label>
        <input class="username" name="username" type="text"> 
        <br>     
        <br>
        <label class="label-password" for="password">Password: </label>
        <input class="password" name="password" type="password"><br> <br>
        
        <input class='reg-button button1' type="submit" name="submits" value="Login">
        <br>
        <p style="color: red">
            <?php
                echo $catErr;
                echo $errMsg; 
            ?>
        </p>
        <div>
            <a href="signupPage.php" class="new-user">New here? SignUp now</a>
        </div>
    
    </div></form>
    <footer class='footer'>
        ©2021 Project Bank Limited 
    </footer>
</body>
</html>