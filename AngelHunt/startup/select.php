<?php
session_start();
$flag[]="";
 
$result=array();
$servername = "localhost";
$username = "root";
$password = "";
$dp = "starter" ;

$conn = new mysqli($servername, $username, $password,$dp);
 //Check connection
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
   
}

$iduser=$_SESSION['id'];
$idcomp=$_SESSION['idcomp'];


$query=mysqli_query($conn,"SELECT * FROM chat WHERE iduser='$iduser' and idcomp='$idcomp' ");
if (!$query) {
  printf("Error: %s\n", mysqli_error($conn));
  exit();
}
else{
    while($row=mysqli_fetch_array($query)){
        
        $action=$row['action'];
        $message=$row['message'];
       $msg= $action.",".$message.",";
       echo $msg;
    }
   
        
}

?>