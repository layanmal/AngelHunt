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

$msg=$_GET['msg'];
echo "hi";
if (!empty($_POST['submit'])) {
  echo "hi";
    
$title =$_POST['job_title'];
$company = $_SESSION['company'];
echo $company;
$job = $_POST['a'];
echo $job;
$day = $_POST['day'];
echo $day;
$month = $_POST['month'];
echo $month;
$year = $_POST['year'];
echo $year;
$country = $_POST['country'];
echo $country;
$city = $_POST['city'];
echo $city;
$describtion = $_POST['describtion'];
echo $describtion;
$req= $_POST['req'];

echo $req;
$chk="";
 


    
       
 
        
       $query= "INSERT INTO `jobs`(company,title,day,month,year,job,country,city,describtion,req)VALUES('$company','$title','$day','$month','$year','$chk','$country','$city','$describtion','$req')";
       $yallah=$conn->query($query);
       
    
    
   if ($yallah===TRUE) {
    if($msg==='1'){
  
        header("location:../startup/profilemy.php?msg={$company}");
    }
    if($msg==='2'){
  
        header("location:../startup/profile2my.php?msg={$company}");
    }
    if($msg==='3'){

        header("location:../startup/profile3my.php?msg={$company}");
    }
  } 
  else{
    echo "Error: " . $yallah . "<br>" . $conn->error ;
    
  }
  

}

$conn->close();
?>