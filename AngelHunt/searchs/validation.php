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
    die("Connection failed: " . $conn->connect_error);
}

$email=$_SESSION['email'];
$id=$_SESSION['id'];

$msg=$_GET['msg'];

$result=mysqli_query($conn,"SELECT startemail FROM startups WHERE StartupName='$msg'");
if (!$result) {
  printf("Error: %s\n", mysqli_error($conn));
  exit();
}

$row=mysqli_fetch_array($result);
if ($row['startemail'] === $email){
   header("location:../startup/profilemy.php?msg={$msg}");

}
else{
    header("location:../startup/profile.php?msg={$msg}");
}

?>