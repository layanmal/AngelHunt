<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dp = "starter" ;

// Create connection
$conn = new mysqli($servername, $username, $password,$dp);

if ($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
   
}

//Create connection

$iduser=$_SESSION['id'];
$idcomp=$_SESSION['idcomp'];

$email=$_SESSION['email'];


//  //Check connection



$to=$_GET['msg'];
$message=$_POST['message'];

 $sql = "INSERT INTO `chat`(iduser,idcomp,message,action)
 VALUES('$iduser','$idcomp','$message','$to')";

 if ($conn->query($sql)){
 
    echo "success ";
 }else{
        echo "Error";
    }
    


?>