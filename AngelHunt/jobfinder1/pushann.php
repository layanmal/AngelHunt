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
email=$_SESSION['email'];

if (isset($_POST['submit'])) {
   echo "hi" ;
$title =$_POST['title'];
$company = $_POST['company'];
$type = $_POST['a'];
$pic = addslashes (file_get_contents($_FILES['pic']['tmp_name']));
$country = $_POST['country'];
$city = $_POST['city'];
$about = $_POST['about'];
$goal = $_POST['goal'];
$logo = addslashes (file_get_contents($_FILES['logo']['tmp_name']));
$date=$_POST['date'];
$sponsors=$_POST['sponsors'];
$sponsorsimage = addslashes (file_get_contents($_FILES['sponsorsimage']['tmp_name']));
//sponsersimage
$organizers=$_POST['organizers'];
//orgimage
$orgimage = addslashes (file_get_contents($_FILES['orgimage']['tmp_name']));
$website = $_POST['website'];
$chk="";
foreach($type as $chk1) {
    $chk.= $chk1."/";  
}


$sql = "INSERT INTO `announcment`(id,title,company,type,pic,country,city,about,goal,logo,date,sponsores,sponsorsimage,organizers,orgimage,website)
VALUES('','$title','$company','$chk','$pic','$country','$city','$about','$goal','$logo','$date','$sponsors','$sponsorsimage','$organizers','$orgimage','$website')";
   
 
if ($conn->query($sql)) {
 header("location:../miniblog/valid.php?msg={$company}");
 

}else{
 echo "Error: " . $sql . "<br>" . $conn->error ;

}}






















?>