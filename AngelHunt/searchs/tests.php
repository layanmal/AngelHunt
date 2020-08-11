<?php
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

if(!empty('submit')){
    $startup= $_POST['startn'];
    $loc =$_POST['loc'];
    $cato= $_POST['cat'];
    

}
if($startup!=NULL && $loc!=NULL && $cato!=NULL ){
  
$result=mysqli_query($conn,"SELECT * FROM startups WHERE StartupName='$startup' AND Country='$loc' AND Type='$cato'");
$num=$result->num_rows;
if($num===0){
       
    header("Location:startupError.php?msg=the value you enterd is wrong,please try again");
}
else{
while ($row = mysqli_fetch_assoc($result)) {
    header("Location:startupmain.php?msg=Type,StartupName,loc,{$row['Type']},{$row['StartupName']},{$row['Country']}");
    }

}
}

else if($startup!=NULL && $loc!=NULL  && $cato==NULL){
    
    $result=mysqli_query($conn,"SELECT * FROM startups WHERE StartupName='$startup' AND Country='$loc'");
    $num=$result->num_rows;
    if($num===0){
           
        header("Location:startupError.php?msg=the value you enterd is wrong,please try again");
    }
    else{
    while ($row = mysqli_fetch_assoc($result)) {
    header("Location:startupmain.php?msg=Type,StartupName,loc,NULL,{$row['StartupName']},{$row['Country']}");
    }
    }
}
    
else if($startup==NULL && $loc!=NULL  && $cato!=NULL){
    
    $result=mysqli_query($conn,"SELECT * FROM startups WHERE Type='$cato' AND Country='$loc'");
    $num=$result->num_rows;
    if($num===0){
           
        header("Location:startupError.php?msg=the value you enterd is wrong,please try again");
    }
    else{
    
    while ($row = mysqli_fetch_assoc($result)) {
        
        header("Location:startupmain.php?msg=Type,StartupName,loc,{$row['Type']},NULL,{$row['Country']}");
        }
    }
}

    else if($startup!=NULL && $loc==NULL  && $cato!=NULL){
      
        $result=mysqli_query($conn,"SELECT * FROM startups WHERE Type='$cato' AND StartupName='$startup'");
        $num=$result->num_rows;
        if($num===0){
               
            header("Location:startupError.php?msg=the value you enterd is wrong,please try again");
        }
        else{
        
        while ($row = mysqli_fetch_assoc($result)) {
                    
            header("Location:startupmain.php?msg=Type,StartupName,loc,{$row['Type']},{$row['StartupName']},NULL");

            }
        } 
    }  

     else if($startup==NULL && $loc==NULL  && $cato!=NULL){
            
            $result=mysqli_query($conn,"SELECT * FROM startups WHERE Type='$cato'");
            $num=$result->num_rows;
    if($num===0){
           
        header("Location:startupError.php?msg=the value you enterd is wrong,please try again");
    }
    else{

            while ($row = mysqli_fetch_assoc($result)) {

            header("Location:startupmain.php?msg=Type,StartupName,loc,{$row['Type']},NULL,NULL");

            }
        }
    }

        else if($startup==NULL && $loc!=NULL  && $cato==NULL){
              
                $result=mysqli_query($conn,"SELECT * FROM startups WHERE Country='$loc'");
                $num=$result->num_rows;
                if($num===0){
                       
                    header("Location:startupError.php?msg=the value you enterd is wrong,please try again");
                }
                else{
               
                while ($row = mysqli_fetch_assoc($result)) {
                    
                    
                header("Location:startupmain.php?msg=Type,StartupName,loc,NULL,NULL,{$row['Country']}");
    
                    }
                }
            }

        else if($startup!=NULL && $loc==NULL  && $cato==NULL){
                    
                    $result=mysqli_query($conn,"SELECT * FROM startups WHERE StartupName='$startup'");
                    $num=$result->num_rows;
                    if($num===0){
                           
                        header("Location:startupError.php?msg=the value you enterd is wrong,please try again");
                    }
                    else{   
                while ($row = mysqli_fetch_assoc($result)) {
                    
                    
                    header("Location:startupmain.php?msg=Type,StartupName,loc,NULL,{$row['StartupName']},NULL");
    
                    }
                    }
                }
?>