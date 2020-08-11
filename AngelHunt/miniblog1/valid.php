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

$id=$_SESSION['id'];
$email=$_SESSION['email'];

$msg=$_GET['msg'];
echo $msg;
$result=mysqli_query($conn,"SELECT * FROM announcment Where company='$msg'");
while($row =mysqli_fetch_assoc($result)){
   $type= $row['type'];
   
    if($type=="Investment Opportunity"){
        header("location:investment opportunity.php?msg={$msg}");
    }else{
        header("location:hackathon.php?msg={$msg}");
    }
}


?>