<?php
session_start();
//include_once('index1.php');
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
$id=$_SESSION['id'];

if (isset($_POST['submit'])) {
$companyname =$_POST['company_name'];

$type = $_POST['type']; 
$type_inv = $_POST['type_inv']; 
$bio = $_POST['bio'];

if(isset($_FILES['pic'])){
  
}
$imageType = addslashes(file_get_contents($_FILES['pic']['tmp_name']));
$image = getimagesize($_FILES['pic']['tmp_name']);//to know about image type etc
$imgmime = $image['mime'];
$country = $_POST['country'];
$city = $_POST['city'];
 
if (empty($_POST['street'])){
$street="N/A";
}
else{
$street = $_POST['street'];
}
if (empty($_POST['branches'])){
  $branches="N/A";
  }
  else{
  $branches = $_POST['branches'];
  }

if (empty($_POST['facebook'])){
    $facebook="N/A";
    }
    else{
    $facebook = $_POST['facebook'];
    }
if (empty($_POST['twitter'])){
    $twitter="N/A";
    }
    else{
    $twitter = $_POST['twitter'];
    }
if (empty($_POST['linked_in'])){
    $linkedin="N/A";
    }
    else{
    $linkedin = $_POST['linked_in'];
    }

if (empty($_POST['website'])){
    $website="N/A";
    }
    else{
    $website = $_POST['website'];
    }
  
 
$min = $_POST['startup_fund_min'];
$max=$_POST['startup_fund_max'];
$linked = $_POST['linked'];
$typeinst = $_POST['typeinst'];

$dateraised = $_POST['dateraised'];
$Amount = $_POST['Amount'];
$currency = $_POST['currency'];
$funding_stage = $_POST['funding_stage'];
$company= $_POST['company'];


 //if(empty($investor)){
 //      $investor="N/A";
 //   }
//  if( empty($dateclosed)){
//     $dateclosed="N/A";
//     }

// if( empty($currency)){
//     $currency="N/A";
// }
// if( empty($Amount)){
//     $Amount="N/A";
// }
// if( empty($stage)){
//     $stage="N/A";
// }
    
       
    foreach($dateraised as $key=> $value){
        
       $query= "INSERT INTO `invrounds`(companyname,dateraised,amount,currency,stage,startupname)VALUES('$companyname','".$conn->real_escape_string($value)."','".$conn->real_escape_string($Amount[$key])."','".$conn->real_escape_string($currency[$key])."','".$conn->real_escape_string($funding_stage[$key])."','".$conn->real_escape_string($company[$key])."')";
       $yallah=$conn->query($query);
    }
   
   
 
   $sql = "INSERT INTO `investors`(startemail,companyname,type,typeinv,pic,mimepic,bio,country,city,street,branches,facebook,twitter,linkedin,website,min,max,institution,typeinst)
   VALUES('$email','$companyname','$type','$type_inv','$imageType','$imgmime','$bio','$country','$city','$street','$branches','$facebook','$twitter','$linkedin','$website','$min','$max','$linked','$typeinst')";
      
    
   if ($conn->query($sql) and ($yallah===TRUE)) {
    $_SESSION['StartupName']=$companyname;
    
    
        header("location:profile2my.php?msg={$companyname");
       
  } 
  else{
    echo "Error: " . $sql . "<br>" . $conn->error ;
    
  }
  

}

$conn->close();
?>