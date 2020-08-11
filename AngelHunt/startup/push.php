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
if (!empty($_POST['submit'])) {
$startupname =$_POST['startup_name'];

$Type = strip_tags($_POST['Type']); 
$Cofounders = $_POST['Cofounders']; 
$Datefounded = $_POST['Datefounded'];
$team = $_POST['team'];
$imageType = addslashes (file_get_contents($_FILES['pic']['tmp_name']));
$image = getimagesize($_FILES['pic']['tmp_name']);
$imgmime = $image['mime'];
//$cover = addslashes (file_get_contents($_FILES['cover']['tmp_name']));
//$image1= getimagesize($_FILES['cover']['tmp_name']);//to know about image type etc
//$imageD = $image1['mime'];
$stage = $_POST['stage'];
$gener =$_POST['startup_generating'];
$country = $_POST['country'];
$City = $_POST['city'];
$chk="";  
if (empty($_POST['street'])){
$street="N/A";
}
else{
$street = $_POST['street'];
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
  
 if (empty($_POST['A'])){
        $teamneeds="N/A";
        }
        else{
        $teamneeds = $_POST['A'];
        
        foreach($teamneeds as $chk1) {
            $chk.= $chk1."/";  
        }
        }    
$startupfund = $_POST['startup_fund'];
$money=$_POST['money'];
$dateclosed = $_POST['dateclosed'];
$Amount = $_POST['Amount'];
$currency = $_POST['currency'];
$funding_stage = $_POST['funding_stage'];
$investor = $_POST['investor'];
$problem= $_POST['problem'];

$future = $_POST['future'];



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
    if( !empty($investor) and !empty($dateclosed) and !empty($currency) and !empty($Amount) and !empty($funding_stage) ){
       
    }
       
    foreach($dateclosed as $key=> $value){
        
       $query= "INSERT INTO `rounds`(startup,dateclosed,Amount,currency,stage,investor)VALUES('$startupname','".$conn->real_escape_string($value)."','".$conn->real_escape_string($Amount[$key])."','".$conn->real_escape_string($currency[$key])."','".$conn->real_escape_string($funding_stage[$key])."','".$conn->real_escape_string($investor[$key])."')";
      
    }
   
   
 
   $sql = "INSERT INTO `startups`(startemail,StartupName,Type,Cofounders,imageType,teammem,Datefounded,stage,startupgenerating,Country,City,Street,teamneeds,facebook,twitter,linkedin,website,startupfund,money,problem,future)
   VALUES('$email','$startupname','$Type','$Cofounders','$imageType','$team','$Datefounded','$stage','$gener','$country','$City','$street','$chk','$facebook','$twitter','$linkedin','$website','$startupfund','$money','$problem','$future')";
    


if ($conn->query($sql) ) {

    if($conn->query($query)) {
        // header("location:profilemy.php?msg={$startupname}");
        if($startupfund =="yes" ){
 
         $sql2= "INSERT INTO `notify1`(user,email,company)VALUES('','','$startupname')";
         
         if($conn->query($sql2)){
               header("location:profilemy.php?msg={$startupname}");
         }
         else{
           echo "Error: " . $sql2 . "<br>" . $conn->error ;
         }
     
        }else{
        header("location:profilemy.php?msg={$startupname}");
     }

}else{
    echo "Error: " . $query . "<br>" . $conn->error ;
} 
    
  } else{
        echo "Error: " . $sql . "<br>" . $conn->error ;
     
       }

   
    
   
    


    }

$conn->close();
?>