<?php 
include ("../db/merchantDB.php");


     
    function Recieve($amount, $username)
    {
        $connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUsername($conobj,"merchant",$username);

function CheckUsername($conn, $table, $username)
 {
    if ($userQuery->num_rows > 0) {

    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
        
        $balance = $row["balance"];
    }
 }
       // $result = $conn->query ("SELECT balance FROM ". $table." WHERE username='". $username."' AND password='". $password."'");

    }
    echo $balance;

?>