<?php 
if (isset($_REQUEST['approve'])){
    $username=$_POST['loan']; 
    $connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->ShowAllspec($conobj,"loan",$username);

if ($userQuery->num_rows > 0) {
    
    
    while($row = $userQuery->fetch_assoc()) {
        setcookie('loancookie', $row["loanAmount"], time() + (86400 * 30), "", "", false);
    }
    $loancookieee=$_COOKIE['loancookie'];
      
	$sql = "UPDATE customer SET balance = (balance + '$loancookieee') where username = '$username'";
    $result = mysqli_query($conobj, $sql);
    $ssql = "DELETE FROM loan WHERE cusUsername = '$username'";
    $result = mysqli_query($conobj, $ssql);
    
  } else {
    $err = "0 results";
  } 
}

if (isset($_REQUEST['reject'])){
    $username=$_POST['loan']; 
    $connection = new db();
$conobj=$connection->OpenCon();
$ssql = "DELETE FROM loan WHERE cusUsername = '$username'";
    $result = mysqli_query($conobj, $ssql);
}
?>