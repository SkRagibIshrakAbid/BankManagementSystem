<?php
include('../db/db.php');


 
// store session data
if(isset($_REQUEST['submits'])) {
    
if (empty($_POST['username']) || empty($_POST['password'])) {
echo "Username or Password is empty";
}
else
{
$username=$_POST['username'];
$password=$_POST['password'];

$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUserForLogin($conobj,"admin",$username,$password);

if ($userQuery->num_rows > 0) {
 echo "test";
  $_SESSION['username']=$_POST['username'];
  $_SESSION['password']=$_POST['password'];
  $_SESSION['cat']=$_POST['catagory'];
  //1
  $sql = "SELECT MAX(id) FROM employee";
    $result = mysqli_query($conobj, $sql);
    if ($result->num_rows > 0){
      while($row = $result->fetch_assoc()){
        $formdata= array(
        'No. of registered Employees' => $row["MAX(id)"],
      );
      }
    $tempJSONdata[] = $formdata;
    $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
    
    if(file_put_contents("../json/data.json", $jsondata)){
        
    }
    else{
        
    }
    }

    //2
  $sql = "SELECT MAX(id) FROM customer";
  $result = mysqli_query($conobj, $sql);
  if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
      $formdata= array(
      'No. of registered Customers' => $row["MAX(id)"],
    );
    }
    $existingdata = file_get_contents('../json/data.json');
$tempJSONdata = json_decode($existingdata);
  $tempJSONdata[] = $formdata;
  $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
  
  if(file_put_contents("../json/data.json", $jsondata)){
      
  }
  else{
      
  }
  }

  //3
  $sql = "SELECT MAX(id) FROM merchant";
    $result = mysqli_query($conobj, $sql);
    if ($result->num_rows > 0){
      while($row = $result->fetch_assoc()){
        $formdata= array(
        'No. of registered Merchants' => $row["MAX(id)"],
      );
      }
      $existingdata = file_get_contents('../json/data.json');
$tempJSONdata = json_decode($existingdata);
    $tempJSONdata[] = $formdata;
    $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
    
    if(file_put_contents("../json/data.json", $jsondata)){
        
    }
    else{
        
    }
    }
  

   }
 else {
echo "Username or Password is invalid";
}
$connection->CloseCon($conobj);

}
}


?>
