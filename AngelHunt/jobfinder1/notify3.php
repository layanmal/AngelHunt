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
if (isset($_POST['submit'])) {
    
$job=$_POST['job'];

//echo $job;
 
$sql ="INSERT INTO `notify3`(email,job)VALUES('$email','$job')";

if ($conn->query($sql)){
    header("location:jobmain.php?msg=");
 
}
else{
    echo "Error: " . $sql . "<br>" . $conn->error ;
}
}

?>