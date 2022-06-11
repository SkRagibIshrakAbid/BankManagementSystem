<?php
session_start();
if(empty($_SESSION["username"])) 
{
header("Location: ../view/login.php"); 
}
    
?>

<?php
include('../control/updatecheckcus.php');




$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUser($conobj,"customer",$_COOKIE['updateck']);

if ($userQuery->num_rows > 0) {

    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
        $fname = $row["fname"];
        $lname = $row["lname"];
        $email = $row["email"];
        $username = $row["username"];
        $password = $row["password"];
        $dob = $row["dob"];
        $address = $row["address"];
        $nid = $row["nid"];
        $phone = $row["phone"];
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
    <title>Welcome to PBL</title>
    <link rel="stylesheet" type ="text/css" href="../css/adminheader.css">
    <link rel="stylesheet" type ="text/css" href="../css/customerReg.css">
    <link rel="stylesheet" type ="text/css" href="../css/login.css">
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
    <div class="customerForm">
            <h2>PBL Customer Info Update</h2>   
            
            <form name="cusForm" action="<?php echo $_SERVER["PHP_SELF"] ?>" onsubmit="return validateForm()" method="post">
            <p class="name">
                    <input type="text" name="fname" id="fname" placeholder="First Name" value = "<?php echo $fname?>">
                    <p class="error">
                        <p id="Fname" class="error"></p>
                        <?php
                            if(isset($validatefname))
                            echo $validatefname;
                        ?> 
                    </p> 
                </p>
               
                <p class="name">
                <input id="lname" name="lname" placeholder= "Last name" type="text" value = "<?php echo $lname?>">
                <p class="error">
                        <p id="Lname" class="error"></p>
                        <?php
                            if(isset($validatelname))
                            echo $validatelname;
                        ?> 
                    </p> 
                </p>

                <p class="email">
                    <input type="text" name="email" id="email" placeholder="E-mail" value = "<?php echo $email?>">
                    <p class="error">
                        <p id="Email" class="error"></p>
                        <?php
                            if(isset($validateemail))
                            echo $validateemail;
                        ?> 
                    </p> 
                </p>

                <p class="username">
                    <input type="text" name="username" id="username" placeholder="Username" value = "<?php echo $username?>">
                    <p class="error">
                        <p id="Username" class="error"></p>
                        <?php
                            if(isset($validateusername))
                            echo $validateusername;
                        ?> 
                    </p> 
                </p>

                <p class="password">
                    <input type="password" name="password" id="password" placeholder="Password" value = "<?php echo $password?>">
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
                    <input type="text" name="dob" id="dob" ty onfocus="(this.type='date')" placeholder="Date of Birth" value = "<?php echo $dob?>">
                    <p id="Dob" class="error"></p>
                    <p class="error">
                        <?php
                            if(isset($validatedob))
                            echo $validatedob;
                        ?> 
                </p>

                <p class="address">
                    <textarea name="address" id="address" placeholder="Address"><?php echo $address;?></textarea>
                    <p id="Address" class="error"></p>
                    <p class="error">
                        <?php
                            if(isset($validateaddress))
                            echo $validateaddress;
                        ?> 
                    </p>
               </p>
                <p class="nid">
                <input type="text" name="nid" id="nid" placeholder="NID" value = "<?php echo $nid?>">
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
                    <input type="text" name="phone" id="phone" placeholder="Phone No." value = "<?php echo $phone?>">
                    <p id="Phone" class="error"></p>
                    <p class="error">
                        <?php
                            if(isset($validatephone))
                            echo $validatephone;
                        ?> 
                </p>

                <p class="submit">
                    <input class='reg-button button1' type="submit" name="submit" id="submit" value="Update" >
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