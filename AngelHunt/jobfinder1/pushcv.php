<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dp = "starter" ;

$email=$_SESSION['email'];
$id=$_SESSION['id'];

$msg=$_GET['msg'];
$company=$_SESSION['company'];

// Create connection
$conn = new mysqli($servername, $username, $password,$dp);

 //Check connection
 if (isset($_POST['submit'])) { 
    // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = './uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx'])) {
        echo "You file extension must be .zip, .pdf or .docx";
    } elseif ($_FILES['myfile']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
       
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
           
            
            $sql = "INSERT INTO cv(email,company, size, cvf,iduser) VALUES ('$email','$company', $size,'$filename','$id')";
            if (mysqli_query($conn, $sql)) {
                if($msg==='1'){
                header("location:../startup/profile.php?msg={$company}");
                }
                if($msg==='2'){
                    header("location:../startup/profile2.php?msg={$company}");
                    }
                if($msg==='3'){
                header("location:../startup/profile3.php?msg={$company}");
                }
                if($msg==='4'){
                  header("location:jobmain.php?msg=''");
                
                    }
        } 
        else {
           
            header("location:jobmain.php?msg= Failed to upload file.");
        }
    }
}
}

?>