<!DOCTYPE html>
<html>
<head>
    <title>PBL: Merchant Registration</title>
    <link rel="stylesheet" type="text/css" href="../css/merchantReg.css">
    <script  type = "text/javascript" src="../js/merchantJs.js"></script>
</head>
<body>
    <?php 
        include "../control/merchantRegistration.php"; 
    ?>
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
    <div class="merchantForm">
            <h2>PBL Merchant Sign Up</h2>
            <form name="merchantForm" action= "<?php echo $_SERVER["PHP_SELF"] ?>" onsubmit="return validateForm()" method="post">
                <p class="name">
                    <input type="text" name="name" id="name" placeholder="Company Name">
                    <p class="error" id="Name">
                        <?php
                            if(isset($validateName))
                            echo $validateName;
                        ?> 
                    </p> 
                </p>
                <p class="email">
                    <input type="text" name="email" id="email" placeholder="E-mail">
                    <p class="error" id="Email">
                        <?php
                            if(isset($validateEmail))
                            echo $validateEmail;
                        ?> 
                    </p>
                </p>
                <p class="username">
                    <input type="text" name="username" id="username" placeholder="Username">
                    <p class="error" id="Username">
                        <?php
                            if(isset($validateUsername))
                            echo $validateUsername;
                        ?> 
                    </p>
                </p>
                <p class="password">
                    <input type="password" name="password" id="password" placeholder="Password">
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
                    <input type="text" name="license" id="license" placeholder="License No.">
                    <p class="error" id="License">
                        <?php
                            if(isset($validateLicense))
                            echo $validateLicense;
                        ?> 
                    </p>
                </p>
                <p class="mobile">
                    <input type="text" name="mobile" id="mobile" placeholder="Mobile No.">
                    <p class="error" id="Mobile">
                        <?php
                            if(isset($validateMobile))
                            echo $validateMobile;
                        ?> 
                    </p>
                </p>
                <p class="address">
                    <textarea name="address" id="address" placeholder="Address"></textarea>
                    <p class="error" id="Address">
                        <?php
                            if(isset($validateAddress))
                            echo $validateAddress;
                        ?> 
                    </p>
                </p>
                <p>
                    <input class="checkbox" type="checkbox" name="checkbox" id="checkbox">
                    <label class="checkbox" for="checkbox">I agree to all terms & conditions</label>
                    <p id="Checkbox" class="error"></p>
                    <p class="error">
                        <?php
                            if(isset($validateCheckbox))
                            echo $validateCheckbox;
                        ?>
                    </p>
                </p>
                <p class="submit">
                    <input type="submit" name="submit" id="submit">
                </p>
                <p class="error">
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



    