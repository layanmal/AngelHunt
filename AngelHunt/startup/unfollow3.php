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


$email=$_SESSION['email'];

$StartupName = $_GET['msg'];
$id=$_SESSION['id'];

$result=mysqli_query($conn,"SELECT id FROM registration WHERE email='$email'");
if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
  }
$row=mysqli_fetch_array($result);
$id=$row['id'];

$result1=mysqli_query($conn,"SELECT idname,following FROM followers ");
while($row2=mysqli_fetch_array($result1)){
    if (!$result1) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
      }
    if($StartupName=== $row2['following'] and $id=== $row2['idname'] ){
       
        $deletecolumn= "DELETE FROM followers WHERE  idname= '$id' and following='$StartupName' ";

        if ($conn->query($deletecolumn) === TRUE) {
            header("location:profile3.php?msg={$StartupName}");
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    }
   

}


?>