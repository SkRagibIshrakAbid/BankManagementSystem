<?php
$validateTrasaction=""; 
$paymentConfirm="";
$userSearch="";
$merchantUser="";
$merchantBalance="";
include ("../db/cusDb.php");


if($_SERVER["REQUEST_METHOD"]=="POST")
{ 

    $merchantUsername=$_REQUEST["username"];
    $amount=$_REQUEST["amount"];
    $username  = $_SESSION ["username"];
    $password = $_SESSION ["password"];
    $connection = new db();
    $conobj=$connection->OpenCon();

    $connection = new db();
    $conobj=$connection->OpenCon();
    
    $userQuery=$connection->CheckUsername($conobj,"merchant", $merchantUsername);
    
    if ($userQuery->num_rows > 0) {
    
        // output data of each row
        while($row = $userQuery->fetch_assoc()) {
            
            $merchantUser = $row["username"];
            $balanceMerchant = $row["balance"];
        }

    }
    $userQuery=$connection->CheckUserForLogin($conobj,"customer",$_SESSION['username'],$_SESSION['password']);

    if ($userQuery->num_rows > 0) {

        // output data of each row
        while($row = $userQuery->fetch_assoc()) {
        
        $balanceCustomer = $row["balance"];
        } 
    
    }
    if ($balanceCustomer < $amount)
    {
      $validateTrasaction = "Insufficient balance";
    }
    
    else{
        if($amount=="" || $merchantUsername==""){
            $validateTrasaction= "Invalid Username or Amount";
        }
    

        else{
            if($merchantUser==$merchantUsername){

            $doubleAmount = floatval($amount);
            $doubleBalance= floatval($balanceCustomer);
            $updateBalanceCustomer=$doubleBalance-$doubleAmount;
            $userQuery=$connection->UpdateBalanceCustomer($conobj,"customer", $username, $updateBalanceCustomer);
            
    
        
            $doubleBalance= floatval($balanceMerchant);
            $updateBalanceMerchant = $doubleAmount+$doubleBalance;
            $userQuery=$connection->UpdateBalanceMerchant($conobj,"merchant", $merchantUsername, $updateBalanceMerchant);

            $userQuery=$connection->customerPayment($conobj,"customerpayment",$username, $amount, $merchantUsername);
            $paymentConfirm ="Payment Successful";
            }
            else{
                $userSearch="Username Not Found";
            }
        }   
    }
    }
?>