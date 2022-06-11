<?php
$validateTrasaction=""; 
$paymentConfirm="";
$userSearch="";
$merchantUser="";
include ("../db/merchantDB.php");

if($_SERVER["REQUEST_METHOD"]=="POST")
{ 
    $merchantPassword=$_REQUEST["password"];
    $amount=$_REQUEST["amount"];
    $username  = $_SESSION ["username"];
    $password = $_SESSION ["password"];
    $connection = new db();
    $conobj=$connection->OpenCon();
    
    $userQuery=$connection->CheckUserForLogin($conobj,"merchant",$_SESSION['username'],$_SESSION['password']);

    if ($userQuery->num_rows > 0) {

        // output data of each row
        while($row = $userQuery->fetch_assoc()) {
        
            $merchantUser = $row["username"];
            $balanceMerchant = $row["balance"];
        } 
    
    }
    if ($balanceMerchant < $amount)
    {
      $validateTrasaction = "Insufficient balance";
    }
    
    else{
        if($amount=="" || $merchantPassword==""){
            $validateTrasaction= "Invalid Password or Amount!";
        }
    

        else{
            if($password==$merchantPassword){

            $doubleAmount = floatval($amount);
            $doubleBalance= floatval($balanceMerchant);
            $updateBalanceMerchant=$doubleBalance-$doubleAmount;
            $userQuery=$connection->UpdateBalanceMerchant($conobj,"merchant", $username, $updateBalanceMerchant);
            $userQuery=$connection->merchantWithdraw($conobj,"merchantwithdraw",$username, $amount);

            $paymentConfirm ="Withdraw Successful";
            }
            else{
                $userSearch="Incorrect Password!";
            }
        }   
    }
    }
?>