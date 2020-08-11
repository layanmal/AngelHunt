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
$type = $_POST['corporates']; 
$focus = $_POST['type_inv']; 
$bio = $_POST['bio'];


$imageType = addslashes(file_get_contents($_FILES['pic']['tmp_name']));
$image = getimagesize($_FILES['pic']['tmp_name']);//to know about image type etc
$imgmime = $image['mime'];

$cover = addslashes(file_get_contents($_FILES['cover']['tmp_name']));
$image2 = getimagesize($_FILES['cover']['tmp_name']);//to know about image type etc
$imageData= $image2['mime'];

$country = $_POST['country'];
$city = $_POST['city'];
$stagef = $_POST['stagef'];
$invest_with = $_POST['invest_with'];
$countryf = $_POST['countryf'];
$cityf = $_POST['cityf'];
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


$linked = $_POST['linked'];
$typeinst = $_POST['typeinst'];

//$dateraised = $_POST['dateraised'];
//$Amount = $_POST['Amount'];
if (empty($_POST['dateraised'])){
    $dateraised="N/A";
}
else{
    $dateraised  = $_POST['dateraised'];
}
//$currency = $_POST['currency'];
if (empty($_POST['Amount'])){
    $Amount="N/A";
}
else{
    $Amount= $_POST['Amount'];
}
if (empty($_POST['currency'])){
    $currency="N/A";
}
else{
    $currency = $_POST['currency'];
}

if (empty($_POST['funding_stage'])){
    $funding_stage="N/A";
}
else{
    $funding_stage  = $_POST['funding_stage'];
}
if (empty($_POST['company'])){
    $company="N/A";
}
else{
    $company = $_POST['company'];
}
//$funding_stage = $_POST['funding_stage'];
//$company= $_POST['company'];

    //     $dateclosed="N/A";
    //     }


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
        
       $query= "INSERT INTO `corprounds`(companyname,dateraised,amount,currency,stage,startupname)VALUES('$companyname','".$conn->real_escape_string($value)."','".$conn->real_escape_string($Amount[$key])."','".$conn->real_escape_string($currency[$key])."','".$conn->real_escape_string($funding_stage[$key])."','".$conn->real_escape_string($company[$key])."')";
       
   }
   
 
   $sql = "INSERT INTO `corporates`(email,companyname,type,focus,pic,cover,imageData,bio,country,city,street,branches,stagef,investwith,countryf,cityf,facebook,twitter,linkedin,website,linked,typeinst)
   VALUES('$email','$companyname','$type','$focus','$imageType','$cover','$imageData','$bio','$country','$city','$street','$branches','$stagef','$invest_with','$countryf','$cityf','$facebook','$twitter','$linkedin','$website','$linked','$typeinst')";
      
      if ($conn->query($sql) and $conn->query($query)) {
        header("location:profile3my.php?msg={$companyname}");
      }
      else{
        echo "Error: " . $sql . "<br>" . $conn->error ;
        echo "Error: " . $query . "<br>" . $conn->error ;
      }
    
        
     

  

}

$conn->close();
?>