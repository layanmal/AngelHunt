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
$email=$_SESSION['email'];
$id=$_SESSION['id'];

if(!empty('submit')){
    $startup= $_POST['startn'];
    $loc =$_POST['loc'];
    
    

}
if($startup!=NULL && $loc!=NULL ){
  
$result=mysqli_query($conn,"SELECT * FROM jobs where company='$startup' AND country='$loc' ");
$num=$result->num_rows;
    if($num===0){
           
        header("Location:jobmain.php?msg=the value you enterd is wrong,please try again");
    }
    else{

while ($row = mysqli_fetch_assoc($result)) {
    header("Location:searchjob.php.php?msg=StartupName,loc,{$row['company']},{$row['country']}");
    }

}
}


    
else if($startup==NULL && $loc!=NULL ){
    
    $result=mysqli_query($conn,"SELECT * FROM jobs WHERE  country='$loc'");
    $num=$result->num_rows;
    if($num===0){
           
        header("Location:jobmain.php?msg=the value you enterd is wrong,please try again");
    }
    else{
    
    while ($row = mysqli_fetch_assoc($result)) {
        
        header("Location:searchjob.php?msg=StartupName,loc,NULL,{$row['country']}");
        }
    }
}

    else if($startup!=NULL && $loc==NULL ){
      
        $result=mysqli_query($conn,"SELECT * FROM jobs WHERE  company='$startup'");
        $num=$result->num_rows;
        
        if($num===0){
           
            header("Location:jobmain.php?msg=the value you enterd is wrong,please try again");
        }
        else{
            
        while ($row = mysqli_fetch_assoc($result)) {
                    
            header("Location:searchjob.php?msg=StartupName,loc,{$row['company']},NULL");

            }
        }  
    } 

     else if($startup==NULL && $loc==NULL  ){

        
            header("Location:jobmain.php?msg='you haven't entered any value, please try again!'");
        
       
        
    }
                      
?>