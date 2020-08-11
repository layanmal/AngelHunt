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


// bas momken ydro hala2 la2eno ma b3raf men ele btlob hay el saf7a la2no lazm yb3tha GET kaman
// mesh session ok mesh mohem jrbe nshof esh bserl wenek?? 
//$StartupName = $_GET['msg'];
$StartupName=""
echo $StartupName;

$result=mysqli_query($conn,"SELECT companyname,type,pic,cover,imageData,country,facebook,twitter,linkedin,linked,typeinst,bio,countryf,cityf,city,stagef,type,focus,street,branches FROM corporates WHERE companyname='$StartupName'");
if (!$result) {
  printf("Error: %s\n", mysqli_error($conn));
  exit();
}

$retrieve=mysqli_fetch_array($result);
$company=$retrieve['companyname'];
$type=$retrieve['type'];
$typeinv=$retrieve['typeinv'];
$imageData=$retrieve['imageData'];
$bio=$retrieve['bio'];
$focus=$retrieve['focus'];
$facebook=$retrieve['facebook'];
$twitter=$retrieve['twitter'];
$linkedin=$retrieve['linkedin'];
$website=$retrieve['website'];
$branches=$retrieve['branches'];
$country=$retrieve['country'];
$city=$retrieve['city'];
$stagef=$retrieve['stagef'];
$investwith=$retrieve['investwith'];
$countryf=$retrieve['countryf'];
$cityf=$retrieve['cityf'];
$street=$retrieve['street'];
$linked=$retrieve['linked'];
$typeinst=$retrieve['typeinst'];


?>