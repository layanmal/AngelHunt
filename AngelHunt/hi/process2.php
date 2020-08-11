<?php
   include("connection.php");
   session_start();
   $error=NULL;
   if (isset($_POST['submit'])){ 
       $email=$_POST['email'];
    
       $fname=$_POST['fname'];
       $lname=$_POST['lname'];
       $pass=$_POST['pass'];
       $pass2=$_POST['pass2'];


       
if(strlen($fname)<2){
$error="<p> your firstname must be at least 2 characters</p>";
header("location:firstpage1.php?msg=$error");

}
elseif(strlen($lname)<2){
$error="<p> your lastname must be at least 2 characters</p>";
header("location:firstpage1.php?msg=$error");

}
elseif(strlen($pass) < 8) {

    $error = "<p>Password too short!</p>";
    header("location:firstpage1.php?msg=$error");

}

elseif(!preg_match("#[0-9]+#", $pass)) {
    $error= "<p>Password must include at least one number!</p>";
    header("location:firstpage1.php?msg=$error");
}

elseif(!preg_match("#[a-zA-Z]+#", $pass)) {
    
    $error= "<p>Password must include at least one letter!</p>";
    header("location:firstpage1.php?msg=$error");
} 
else{  


$pass=md5($pass);
$vkey=md5(time().$fname);

$insert= mysqli_query($conn,"INSERT INTO registration(email,firstname,lastname,password,Vkey)VALUES ('$email','$fname','$lname','$pass','$vkey')");

if($insert){
    $_SESSION['fname']=$fname;
    $_SESSION['lname']=$lname;
    $_SESSION['email']=$email;

$to=$email;
$subject="Email Verification";
$message="<a href='http://localhost/AngelHunt1/AngelHunt/hi/verify.php?vkey=$vkey'>Register Account</a>";
$headers = "Form:AngelHunt@gmail.com\r";
$headers.= "MIME-Version:1.0"."\r\n";
$headers .= "Content-type:text/html;charset=UTF-18"."\r\n";

  
  mail($to,$subject,$message,$headers);
    header('location:firstpage1.php?msg=check your email for verification');
  error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");
 

    }
    
    

    else{
    echo"no not successful";
    }
    
   }
   
   }
   ?>