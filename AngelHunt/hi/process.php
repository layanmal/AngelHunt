<?php                  
session_start(); 

         
                if (!empty($_POST['submit'])){
                include("connection.php");
                $email=$_POST['email'];
                $pass=$_POST['pass'];
                $_SESSION['email']=$email;
                $p=md5($pass);

                
         $sql = "SELECT * FROM registration WHERE email = '$email' and password = '$p'";
         $result = mysqli_query($conn,$sql);
         if($result->num_rows != 0){
          $row= mysqli_fetch_assoc($result);
          $verified=$row['verified'];
          $email=$row['email'];
          $id=$row['id'];
          $_SESSION['id']=$id;
          $email=$_SESSION['email'];
          $date=$row['createdate'];
          $date=strtotime($date);
    echo "hi";
          if($verified==1){
            header("location: ../blog.php");
          }
          else{
          $error="This account has not yet been verified, An email was sent to $email on $date";
          header("location:firstpage1.php?msg=$error");
          }
          }
          else{
             
          $error="The username or password you entered is incorrect";
          header("location:firstpage1.php?msg=$error");
          }}
                ?> 