<?php
include_once('connection.php');
session_start();
$msg=$_GET['msg'];
$email=$_SESSION['email'];
if(empty($email)){
    header("location:firstpage.php?msg=please login first");
}
else if($msg=="announce") {
    header("location:../miniblog/main.php");
}



 ?>
