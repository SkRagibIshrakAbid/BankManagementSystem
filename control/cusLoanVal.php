<?php
include('../db/cusLoanDb.php'); 

   
   $invalidInput ="";
   $validateForm ="";
   $loanConfirm="";
   $flag=true;
   if($_SERVER["REQUEST_METHOD"] == "POST")
   {
    $amount = $_REQUEST ["amount"];
    $passwordSession = $_SESSION["password"];
    $username = $_SESSION["username"];
    $passwordForm = $_REQUEST["password"];
    
     if(empty($amount) || empty($passwordForm) || $passwordForm!=$passwordSession){
        
        $invalidInput="Invalid INPUT.";
                $flag=false;
     }
     else
     {
        if ($flag ==true) 
        {
            $connection = new db();
            $conobj=$connection->OpenCon();

            $userQuery=$connection->LoanEntry($conobj,"loan",$username, $amount);
            
            $connection->CloseCon($conobj);
            $loanConfirm="Loan Request Successful";
        }
        else
   {
    $validateForm="Loan Request Failed";
  }
     }

}
?>