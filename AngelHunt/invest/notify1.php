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

$msg = $_GET['msg'];
$myArray = explode(',', $msg);
$email=$_SESSION['email'];
$id=$_SESSION['id'];
 $result=mysqli_query($conn,"SELECT * FROM registration WHERE email='$email'");
 if (!$result) {
     printf("Error: %s\n", mysqli_error($conn));
     exit();
   }
   if($result->num_rows>0){
 $row=mysqli_fetch_array($result);
 
     $name= $row['firstname']." ".$row['lastname'] ;
     
     $email1= $myArray['0'];
     $comp= $myArray['1'];
     $sql="INSERT INTO notify1(user,email,company)VALUES('$name','$email1','$comp')";
     $result1=mysqli_query($conn,$sql);
     header("Location:investormain.php?msg=''");
     
 }
 else{
     echo "error";
 }
  






?>