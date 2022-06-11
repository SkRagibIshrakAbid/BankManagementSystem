<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>PBL: Merchant Info Update</title>
    <link rel="stylesheet" type="text/css" href="../css/merchantReg.css">
</head>
<body>
    <?php  
        include "../control/merchantUpdate.php";
    
        $connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUserForLogin($conobj,"merchant",$_SESSION['username'],$_SESSION['password']);

if ($userQuery->num_rows > 0) {

    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
      $Name=$row["name"];
      $Email=$row["email"];
      $Username=$row["username"];
      $Password=$row["password"];
      $License=$row["license"];
      $Mobile=$row["mobile"];
      $Address=$row["address"];
      
    }
}
  else {
    echo "0 results";
  }
    ?>
    <div class="topSection">
        <img src="../resources/pbl.png" alt="pbl Logo" class='logo'>
        <h1 class='topTitle'>Project Bank Limited</h1>
        <h2 class='slogan'>- the bank you can trust</h2>
        <a href="aboutUs.php"class='aboutPbl'>About Project Bank</a>
        <h4 class='devider'>|</h4>
        <a href="contactUs.php" class='contactUs'>Contact Us</a>
    </div>
    <div class='navbar'>
        <div class='nav-main'>
        <a href="merchantDashboard.php" id="nav-cont">Dashboard</a>
            <a href="merchantWithdraw.php" id="nav-cont">Withdraw</a>
            <a href="merchantPaymentTransiction.php" id="nav-cont">Transations</a>
            <a href="merchantAccountSettings.php" id="nav-cont">Account Settings</a>
        </div>
    </div>
    <div class="merchantForm">
            <h2>PBL Merchant Info Update</h2>
            <form name="merchantForm" action= "<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
                <p class="name">
                    <input type="text" name="name" id="name" value="<?php echo $Name;?>" placeholder="Company Name">
                    <p class="error" id="Name">
                        <?php
                            if(isset($validateName))
                            echo $validateName;
                        ?> 
                    </p> 
                </p>
                <p class="email">
                    <input type="text" name="email" id="email" placeholder="Email" value="<?php echo $Email;?>">
                    <p class="error" id="Email">
                        <?php
                            if(isset($validateEmail))
                            echo $validateEmail;
                        ?> 
                    </p>
                </p>
                
                <p class="password">
                    <input type="password" name="password" id="password" placeholder="Password" value="<?php echo $Password;?>">
                    <p class="error" id="Password">
                        <?php
                            if(isset($validatePassword))
                            echo $validatePassword;
                        ?> 
                    </p>
                </p>
                <p class="cpassword">
                    <input type="password" name="cpassword" id="cpassword" placeholder="Confirm password">
                    <p class="error" id="ConfirmPassword">
                        <?php
                            if(isset($validateCpassword))
                            echo $validateCpassword;
                        ?> 
                    </p>
                </p>
                <p class="license">
                    <input type="text" name="license" id="license" placeholder="License No." value="<?php echo $License;?>">
                    <p class="error" id="License">
                        <?php
                            if(isset($validateLicense))
                            echo $validateLicense;
                        ?> 
                    </p>
                </p>
                <p class="mobile">
                    <input type="text" name="mobile" id="mobile" placeholder="Mobile No." value="<?php echo $Mobile;?>">
                    <p class="error" id="Mobile">
                        <?php
                            if(isset($validateMobile))
                            echo $validateMobile;
                        ?> 
                    </p>
                </p>
                <p class="address">
                    <textarea name="address" id="address"  placeholder="Address"><?php echo $Address;?></textarea>
                    <p class="error" id="Address">
                        <?php
                            if(isset($validateAddress))
                            echo $validateAddress;
                        ?> 
                    </p>
                </p>

                <p class="submit">
                    <input type="submit" name="submit" id="submit" value="Update">
                </p>
                <p class="error" style = "color:blue">
                    <?php
                        echo $validateForm;
                    ?>
                </p>
            </form>
            <footer class='footer'>
                ©2021 Project Bank Limited 
            </footer>
        </div>
</body>
</html>



    