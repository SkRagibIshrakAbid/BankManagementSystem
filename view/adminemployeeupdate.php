


<?php
session_start();
if(empty($_SESSION["username"])) 
{
header("Location: ../view/login.php"); 
}
include('../control/updatecheckemp.php');




$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUser($conobj,"employee",$_COOKIE['updateck']);

if ($userQuery->num_rows > 0) {

    // output data of each row
    while($row = $userQuery->fetch_assoc()) {

        $Name=$row["name"];
        $Email=$row["email"];
        $Username=$row["username"];
        $Password=$row["password"];
        $Nid=$row["nid"];
        $Dob=$row["dob"];
        $Mobile=$row["mobile"];
        $Address=$row["address"];
      
    }
}
  else {
    echo "0 results";
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PBL: Employee Info Update</title>
    <link rel="stylesheet" type ="text/css" href="../css/adminheader.css">
    <link rel="stylesheet" type="text/css" href="../css/empReg.css">
    <link rel="stylesheet" type ="text/css" href="../css/login.css">
</head>
</head>
<body style="background-image: linear-gradient(to right, rgba(255,0,0,0), rgb(87, 137, 194))">
    <div class="topSection">
        <img src="../resources/pbl.png" alt="pbl Logo" class='logo'>
        <h1 class='topTitle'>Project Bank Limited</h1>
        <h2 class='slogan'>- the bank you can trust</h2>
        <a href="../view/aboutUs.php" class='aboutPbl'>About Project Bank</a>
        <h4 class='devider'>|</h4>
        <a href="contactUs.php" class='contactUs'>Contact Us</a>
        
    </div>
    <div class='navbar'>
        <div class='navCont'>
            <a href="admindash.php" id="nav-cont">Dashboard</a>
            <a href="adminemployeeall.php" id="nav-cont">Employee</a>
            <a href="admincustomerall.php" id="nav-cont">Customer</a>
            <a href="adminmerchantall.php" id="nav-cont">Merchant</a>
        </div>
    </div>
    <div class="merchantForm">
            <h2 style="padding-top: 200px">PBL Employee Info Update</h2>
            <form name="empForm" action= "<?php echo $_SERVER["PHP_SELF"] ?>" onsubmit="return validateForm()"  method="post" >
                <p class="name">
                    <input type="text" name="name" id="name" placeholder="Full Name" value="<?php echo $Name;?>">
                    <p class="error">
                        <p id="Name" class="error"></p>
                        <?php
                            if(isset($validateName))
                            echo $validateName;
                        ?> 
                    </p> 
                </p>
                <p class="email">
                    <input type="text" name="email" id="email" placeholder="E-mail" value="<?php echo $Email;?>">
                    <p id="Email" class="error"></p>
                    <p class="error">
                        <?php
                            if(isset($validateEmail))
                            echo $validateEmail;
                        ?> 
                    </p>
                </p>
                <p class="username">
                    <input type="text" name="username" id="username" placeholder="Username" value="<?php echo $Username;?>">
                    <p id="Username" class="error"></p>
                    <p class="error">
                        <?php
                            if(isset($validateUsername))
                            echo $validateUsername;
                        ?> 
                    </p>
                </p>
                <p class="password">
                    <input type="password" name="password" id="password" placeholder="Password" value="<?php echo $Password;?>">
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
                    <input type="text" name="nid" id="nid" placeholder="NID No." value="<?php echo $Nid;?>">
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
                    <input type="text" name="dob" id="dob"  value="<?php echo $Dob;?>">
                    <p id="DOB" class="error"></p>
                    <p class="error">
                        <?php
                            if(isset($validateDob))
                            echo $validateDob;
                        ?> 
                </p>
                <p class="mobile">
                    <input type="text" name="mobile" id="mobile" placeholder="Mobile No." value="<?php echo $Mobile;?>">
                    <p id="Mobile" class="error"></p>
                    <p class="error">
                        <?php
                            if(isset($validateMobile))
                            echo $validateMobile;
                        ?> 
                </p>
                <p class="address">
                    <textarea name="address" id="address" placeholder="Address"><?php echo $Address;?></textarea>
                    <p id="Address" class="error"></p>
                    <p class="error">
                        <?php
                            if(isset($validateAddress))
                            echo $validateAddress;
                        ?> 
                    </p>
                </p>

                <p class="submit">
                    <input class='reg-button button1' type="submit" name="submit" id="submit" value="Update">
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