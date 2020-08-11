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
$id=$_SESSION['id'];

$StartupName = $_GET['msg'];
$num='3';

$result22=mysqli_query($conn,"SELECT email FROM corporates WHERE companyname='$StartupName'");
if (!$result22) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
  }
$row22=mysqli_fetch_array($result22);
$email22=$row22['startemail'];

$result=mysqli_query($conn,"SELECT id FROM registration WHERE email='$email'");
if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
  }
$row=mysqli_fetch_array($result);
$id=$row['id'];
$check=TRUE;
$result1=mysqli_query($conn,"SELECT idname,following FROM followers ");
while($row2=mysqli_fetch_array($result1)){
    
    if($StartupName=== $row2['following'] and $id=== $row2['idname'] ){
        $check=FALSE;
       
    }
}
if($check){

        //$sql = "INSERT INTO `followers`(idname,following)VALUES('$id','$StartupName')";
        $sql = "INSERT INTO `followers`(idname,following,emailcomp,num)VALUES('$id','$StartupName','$email22','$num')";

        if ($conn->query($sql)){
            header("location:profile3.php?msg={$StartupName}");
        
        }
        else{
            echo "Error: " . $sql . "<br>" . $conn->error ;
        }
    }

else{
    header("location:profile3.php?msg={$StartupName}");
}



?>