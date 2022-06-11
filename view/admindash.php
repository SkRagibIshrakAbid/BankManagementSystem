<?php
session_start();
if(empty($_SESSION["username"])) 
{
header("Location: ../view/login.php"); 
}
?>
<?php
    include ("../db/db.php");
    $connection = new db();
    $conobj=$connection->OpenCon();
    
    $userQuery=$connection->CheckUserForLogin($conobj,"admin", $_SESSION['username'], $_SESSION['password']);
    
    if ($userQuery->num_rows > 0) {
    
        // output data of each row
        while($row = $userQuery->fetch_assoc()) {
            
            $username = $row["name"];
            $firstname = $row["firstname"];
            $lastname = $row["lastname"];
            
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to PBL</title>
    <link rel="stylesheet" type ="text/css" href="../css/adminheader.css">
    <link rel="stylesheet" type ="text/css" href="../css/login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script> 
$(document).ready(function(){
  
    var div = $("div.login-box");
    div.animate({height: '0px', opacity: '0.4'}, "slow");
    div.animate({width: '0px', opacity: '0.8'}, "slow");
    div.animate({height: '380px', opacity: '0.4'}, "slow");
    div.animate({width: '500px', opacity: '0.8'}, "slow");
 
});
</script> 
</head>
<body style="background-image: linear-gradient(to left, rgba(255,0,0,0), rgb(87, 137, 194))">
    <div class="topSection">
        <img src="../resources/pbl.png" alt="pbl Logo" class='logo'>
        <h1 class='topTitle'>Project Bank Limited</h1>
        <h2 class='slogan'>- the bank you can trust</h2>
        <a href="#" class='aboutPbl'>About Project Bank</a>
        <a href="../view/aboutUs.php" class='aboutPbl'>About Project Bank</a>
        <h4 class='devider'>|</h4>
        <a href="contactUs.php" class='contactUs'>Contact Us</a>
        
    </div>
    <div class='navbar'>
        <div class='navCont'>
            <a href="admindash.php" id="nav-cont">Dashboard</a>
            <a href="adminemployeeall.php" id="nav-cont">Employee</a>
            <a href="admincustomerall.php" id="nav-cont">Customer</a>
            <a href="adminmerchantall.php" id="nav-cont">Marchant</a>
        </div>
    </div>
    <div class="login-box">
        <br>
        <img src="../resources/pbl.png"  alt="pbl Logo">
        <h3>PBL Admin Dashbord</h3>
        <h3>Hi,<br><?php echo $lastname.", ".$firstname ; ?></h3>
        <h4>Username: @<?php echo $_SESSION['username']; ?></h4>
        <?php
$data = file_get_contents("../json/data.json");
$mydata = json_decode($data);
foreach($mydata as $myobject)
{
foreach($myobject as $key=>$value)
{
   echo $key.": ".$value."<br>";
} 
}
?>
     </div>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    
    
</body>
</html>