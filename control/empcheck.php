<?php
include('../db/db.php');
if (isset($_REQUEST['submits'])) {
    if (empty($_REQUEST['esearch'])){
        echo "Can not keep this empty!";
    }
    else{
        $connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUser($conobj,"employee",$_REQUEST['esearch']);
if ($userQuery->num_rows > 0){
    
    setcookie('searchck', $_REQUEST['esearch'], time() + (86400 * 30), "", "", false);
    header("Location: ../view/adminemployeesearch.php");
}
else{
    echo "0 results";
}
    }
}

else if (isset($_REQUEST['submitu'])) {
    if (empty($_REQUEST['eupdate'])){
        echo "Can not keep this empty!";
    }
    else{
        $connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUser($conobj,"employee",$_REQUEST['eupdate']);
if ($userQuery->num_rows > 0){
    setcookie('updateck', $_REQUEST['eupdate'], time() + (86400 * 30), "", "", false);
    header("Location: ../view/adminemployeeupdate.php");
}
else{
    echo "0 results";
}
    }
}

else if (isset($_REQUEST['submitd'])) {
    if (empty($_REQUEST['edelete'])){
        echo "Can not keep this empty!";
    }
    else{
        $connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUser($conobj,"employee",$_REQUEST['edelete']);
if ($userQuery->num_rows > 0){
    setcookie('deleteck', $_REQUEST['edelete'], time() + (86400 * 30), "", "", false);
    header("Location: ../view/adminemployeedelete.php");
}
else{
    echo "0 results";
}
    }
}


?>