<!DOCTYPE html>
<html>
<head>
    <title>PBL: Customer Registration</title>
    <link rel="stylesheet" type="text/css" href="../css/customerReg.css">
    <script  type = "text/javascript" src="../js/cusJsVal.js"></script>
</head>
<body>
<?php 
        include "../control/customerRegistration.php"; 
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
    
    <div class="customerForm">
            <h2>PBL Customer Sign Up</h2>   
            
            <form name="cusForm" action="<?php echo $_SERVER["PHP_SELF"] ?>" onsubmit="return validateForm()" method="post">
            <p class="name">
                    <input type="text" name="fname" id="fname" placeholder="First Name">
                    <p class="error">
                        <p id="Fname" class="error"></p>
                        <?php
                            if(isset($validatefname))
                            echo $validatefname;
                        ?> 
                    </p> 
                </p>
               
                <p class="name">
                <input id="lname" name="lname" placeholder= "Last name" type="text">
                <p class="error">
                        <p id="Lname" class="error"></p>
                        <?php
                            if(isset($validatelname))
                            echo $validatelname;
                        ?> 
                    </p> 
                </p>

                <p class="email">
                    <input type="text" name="email" id="email" placeholder="E-mail">
                    <p class="error">
                        <p id="Email" class="error"></p>
                        <?php
                            if(isset($validateemail))
                            echo $validateemail;
                        ?> 
                    </p> 
                </p>

                <p class="username">
                    <input type="text" name="username" id="username" placeholder="Username">
                    <p class="error">
                        <p id="Username" class="error"></p>
                        <?php
                            if(isset($validateusername))
                            echo $validateusername;
                        ?> 
                    </p> 
                </p>

                <p class="password">
                    <input type="password" name="password" id="password" placeholder="Password">
                    <p class="error">
                        <p id="Password" class="error"></p>
                        <?php
                            if(isset($validatepassword))
                            echo $validatepassword;
                        ?> 
                    </p> 
                </p>

                <p class="cpassword">
                    <input type="password" name="cpassword" id="cpassword" placeholder="Confirm password">
                    <p class="error">
                        <p id="Cpassword" class="error"></p>
                        <?php
                            if(isset($validatecpassword))
                            echo $validatecpassword;
                        ?> 
                    </p> 
                </p>

                <p class="dob">
                    <input type="text" name="dob" id="dob" ty onfocus="(this.type='date')" placeholder="Date of Birth">
                    <p id="Dob" class="error"></p>
                    <p class="error">
                        <?php
                            if(isset($validatedob))
                            echo $validatedob;
                        ?> 
                </p>

                <p class="address">
                    <textarea name="address" id="address" placeholder="Address"></textarea>
                    <p id="Address" class="error"></p>
                    <p class="error">
                        <?php
                            if(isset($validateaddress))
                            echo $validateaddress;
                        ?> 
                    </p>
               </p>
                <p class="nid">
                <input type="text" name="nid" id="nid" placeholder="NID">
                <p id="Nid" class="error"></p>
                    <p class="error">
                        <?php
                            if(isset($validatenid))
                            echo $validatenid;
                        ?> 
                    </p>
                </p>
                </p>

                <p class="phone">
                    <input type="text" name="phone" id="phone" placeholder="Phone No.">
                    <p id="Phone" class="error"></p>
                    <p class="error">
                        <?php
                            if(isset($validatephone))
                            echo $validatephone;
                        ?> 
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
                            if(isset($validatecheckbox))
                            echo $validatecheckbox;
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



    