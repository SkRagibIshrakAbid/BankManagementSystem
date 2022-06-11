<?php
$validateDeposite=""; 
$depositeConfirm="";
$userSearch="";

include ("../db/cusDb.php");

if($_SERVER["REQUEST_METHOD"]=="POST")
{ 
    $username  = $_SESSION ["username"];
    $amount=$_REQUEST["amount"];
    $password = $_REQUEST ["password"];
    
    $connection = new db();
    $conobj=$connection->OpenCon();

    $userQuery=$connection->CheckUserForDepWithLogin($conobj,"customer", $_SESSION['username']);

    if ($userQuery->num_rows > 0) {

        // output data of each row
        while($row = $userQuery->fetch_assoc()) {
        
        $cusPassword = $row["password"];
        $balanceCustomer = $row["balance"];
        } 
     }
    
     if($amount=="" || $password==""){
            $validateDeposite= "Invalid Password or Amount";
       
         }

        else{
            if($cusPassword==$password){

            $doubleAmount = floatval($amount);
            $doubleBalance= floatval($balanceCustomer);
            $updateBalanceCustomer=$doubleBalance+$doubleAmount;
            $userQuery=$connection->UpdateBalanceCustomer($conobj,"customer", $username, $updateBalanceCustomer);
            $depositeConfirm ="Deposite Successful !";
             }
            else{
                $userSearch="User Not Found";
            }
        }   
    }
    
?>