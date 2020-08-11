<?php
if(isset($_GET('vkey'])){
include("connection.php");


$resultset=$mysqli->query("SELECT verified,vkey FROM registration where verified=0 AND vkey='$vkey'
LIMIT 1");
if($resultSet->numRows==1){
$update=$mysqli->query("UPDATE registration SET verified=1 WHERE vkey='$vkey' LIMIT 1 ");

if($update){
echo" Your account has been verified. You may now login."
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