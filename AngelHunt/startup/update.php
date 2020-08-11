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
$email=$_SESSION['email'];

if (!empty($_POST['fname'])) {
$fname =$_POST['fname'];
$sql = "UPDATE registration SET firstname='$fname' where email='$email' "; 
if ($conn->query($sql) === TRUE) {
    header("location:edit.php?msg=updated successfully");
  } else {
    echo "Error updating record: " . $conn->error;
  }
}
if (!empty($_POST['lname'])) {
    $lname =$_POST['lname'];
    $sql = "UPDATE registration SET lastname='$lname' where email='$email'"; 
    if ($conn->query($sql) === TRUE) {
        header("location:edit.php?msg=updated successfully");
      } else {
        echo "Error updating record: " . $conn->error;
      }
  }

  if(!empty($_FILES['pic']['tmp_name']) || is_uploaded_file($_FILES['pic']['tmp_name'])){

    $pic = addslashes(file_get_contents($_FILES['pic']['tmp_name'])); 
    $sql = "UPDATE registration SET pic ='$pic' where email='$email' "; 
    if ($conn->query($sql) === TRUE) {
        header("location:edit.php?msg=updated successfully");
      } else {
        echo "Error updating record: " . $conn->error;
      }
}

if(!empty($_FILES['cover']['tmp_name']) || is_uploaded_file($_FILES['cover']['tmp_name'])){
    $cover= addslashes(file_get_contents($_FILES['cover']['tmp_name'])); 
    $sql = "UPDATE registration SET cover='$cover' where email='$email' "; 
    if ($conn->query($sql) === TRUE) {
         header("location:edit.php?msg=updated successfully");
      } else {
        echo "Error updating record: " . $conn->error;
      }
}

if (!empty($_POST['bio'])) {
    $bio=$_POST['bio'];
    $sql = "UPDATE registration SET bio='$bio' where email='$email'"; 
    if ($conn->query($sql) === TRUE) {
        header("location:edit.php?msg=updated successfully");
      } else {
        echo "Error updating record: " . $conn->error;
      }
  }
  if (!empty($_POST['exp'])) {
    $exp=$_POST['exp'];
    $sql = "UPDATE registration SET exp='$exp' where email='$email'"; 
    if ($conn->query($sql) === TRUE) {
        header("location:edit.php?msg=updated successfully");
      } else {
        echo "Error updating record: " . $conn->error;
      }
  }
  if (!empty($_POST['country'])) {
    $country=$_POST['country'];
    $sql = "UPDATE registration SET country='$country' where email='$email'"; 
    if ($conn->query($sql) === TRUE) {
        header("location:edit.php?msg=updated successfully");
      } else {
        echo "Error updating record: " . $conn->error;
      }
  }
  if (!empty($_POST['city'])) {
    $city=$_POST['city'];
    $sql = "UPDATE registration SET city='$city' where email='$email' "; 
    if ($conn->query($sql) === TRUE) {
        header("location:edit.php?msg=updated successfully");
      } else {
        echo "Error updating record: " . $conn->error;
      }
  }