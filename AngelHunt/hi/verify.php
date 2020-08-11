<?php
if(isset($_GET['vkey'])){
include("connection.php");

session_start();
$email=$_SESSION['email'];
$vkey=$_GET['vkey'];
$resultset=mysqli_query($conn,"SELECT verified,vkey FROM registration where verified=0 AND vkey='$vkey'
LIMIT 1");
if($resultset->num_rows ==1){
$update=mysqli_query($conn,"UPDATE registration SET verified=1 WHERE vkey='$vkey' LIMIT 1 ");

if($update){
echo"";
header('location:http://localhost/AngelHunt1/AngelHunt/hi/firstpage1.php?msg= Your account has been verified. You may now login.');
}
else {
echo $mysqli->error;
}}
else{
echo"This account invalid or already verified";
} }
else{
die("something went wrong");
} ?>