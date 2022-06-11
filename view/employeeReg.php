<!DOCTYPE html>
<html>
<head>
    <title>PBL: Employee Registration</title>
    <link rel="stylesheet" type="text/css" href="../css/empReg.css">
    <script  type = "text/javascript" src="../js/empJsVal.js"></script>
</head>
<body>
    <?php 
        include "../control/employeeRegistration.php"; 
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
    <div class="employeeForm">
            <h2>PBL Employee Sign Up</h2>
            <form name="empForm" action= "<?php echo $_SERVER["PHP_SELF"] ?>" onsubmit="return validateForm()"  method="post">
                <p class="name">
                    <input type="text" name="name" id="name" placeholder="Full Name">
                    <p class="error">
                        <p id="Name" class="error"></p>
                        <?php
                            if(isset($validateName))
                            echo $validateName;
                        ?> 
                    </p> 
                </p>
                <p class="email">
                    <input type="text" name="email" id="email" placeholder="E-mail">
                    <p id="Email" class="error"></p>
                    <p class="error">
                        <?php
                            if(isset($validateEmail))
                            echo $validateEmail;
                        ?> 
                    </p>
                </p>
                <p class="username">
                    <input type="text" name="username" id="username" placeholder="Username">
                    <p id="Username" class="error"></p>
                    <p class="error">
                        <?php
                            if(isset($validateUsername))
                            echo $validateUsername;
                        ?> 
                    </p>
                </p>
                <p class="password">
                    <input type="password" name="password" id="password" placeholder="Password">
                    <p id="Password" class="error"></p>
                    <p class="error">
                        <?php
                            if(isset($validatePassword))
                            echo $validatePassword;
                        ?> 
                    </p>
                </p>
                <p class="confirmPassword">
                    <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm password">
                    <p id="ConfirmPassword" class="error"></p>
                    <p class="error">
                        <?php
                            if(isset($validateConfirmPassword))
                            echo $validateConfirmPassword;
                        ?> 
                    </p>
                </p>
                <p class="nid">
                    <input type="text" name="nid" id="nid" placeholder="NID No.">
                    <p id="NID" class="error"></p>
                    <p class="error">
                        <?php
                            if(isset($validateNid))
                            echo $validateNid;
                        ?> 
                    </p>
                </p>
                </p>
                <p class="dob">
                    <input type="text" name="dob" id="dob" ty onfocus="(this.type='date')" placeholder="Date of Birth">
                    <p id="DOB" class="error"></p>
                    <p class="error">
                        <?php
                            if(isset($validateDob))
                            echo $validateDob;
                        ?> 
                </p>
                <p class="mobile">
                    <input type="text" name="mobile" id="mobile" placeholder="Mobile No.">
                    <p id="Mobile" class="error"></p>
                    <p class="error">
                        <?php
                            if(isset($validateMobile))
                            echo $validateMobile;
                        ?> 
                </p>
                <p class="address">
                    <textarea name="address" id="address" placeholder="Address"></textarea>
                    <p id="Address" class="error"></p>
                    <p class="error">
                        <?php
                            if(isset($validateAddress))
                            echo $validateAddress;
                        ?> 
                    </p>
                </p>
                <p class="gender">
               
                   Gender: <input type="radio" name="gender" value="male">Male <input type="radio" name="gender" value="female"> Female <input type="radio" name="gender" value="others"> Others
                   <p id="Gender" class="error"></p>
                    <p class="error">
                        <?php
                            if(isset($validateGender))
                            echo $validateGender;
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



    