<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dp = "starter" ;

// Create connection
$conn = new mysqli($servername, $username, $password,$dp);
 //Check connection
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
   
}



$result='';
$msg = $_GET['msg'];
$myArray = explode(',', $msg);

if($myArray['0'] === "Type" and $myArray['1'] === "StartupName" and $myArray['2']==="loc" ){
    
     if($myArray['3'] !="NULL" and $myArray['4'] ==="NULL" and $myArray['5'] ==="NULL"){
        echo"5ara";
        
           $result = mysqli_query($conn,"SELECT * FROM  startups WHERE Type='$myArray[3]'") or die('Invalid query: ' . mysqli_error($conn));
      } 
       else if($myArray['3'] === "NULL" and $myArray['4'] ==="NULL" and $myArray['5']!="NULL"){
       $result = mysqli_query($conn,"SELECT * FROM  startups WHERE Country='$myArray[5]'") or die('Invalid query: ' . mysqli_error($conn));
       }
       else if($myArray['3'] === "NULL" and $myArray['4'] !="NULL" and $myArray['5'] === "NULL"){
       $result = mysqli_query($conn,"SELECT * FROM  startups WHERE StartupName='$myArray[4]'") or die('Invalid query: ' . mysqli_error($conn));
        }

  else if($myArray['3'] ==="NULL" and $myArray['4'] !="NULL" and $myArray['5'] !="NULL"){
    $result = mysqli_query($conn,"SELECT * FROM  startups WHERE StartupName='$myArray[4]' and  Country='$myArray[5]'") or die('Invalid query: ' . mysqli_error($conn));
    }
  else if($myArray['3'] !="NULL" and $myArray['4'] ==="NULL" and $myArray['5'] !="NULL"){
    $result = mysqli_query($conn,"SELECT * FROM  startups WHERE Type='$myArray[3]' and  Country='$myArray[5]'") or die('Invalid query: ' . mysqli_error($conn));
    }
 else if($myArray['3'] !="NULL" and $myArray['4'] !="NULL" and $myArray['5'] ==="NULL"){
   $result = mysqli_query($conn,"SELECT * FROM  startups WHERE Type='$myArray[3]' and  StartupName='$myArray[4]'") or die('Invalid query: ' . mysqli_error($conn));
   }

 
 else if($myArray['3'] !="NULL" and $myArray['4'] !="NULL" and $myArray['5'] !="NULL"){
   $result = mysqli_query($conn,"SELECT * FROM  startups WHERE Type='$myArray[3]' and StartupName='$myArray[4]' and  Country='$myArray[5]'") or die('Invalid query: ' . mysqli_error($conn));
}
}



?>
<?php
 while ($row = mysqli_fetch_assoc($result)){
    echo $row['StartupName'] ;
     echo"hi";
}

?>