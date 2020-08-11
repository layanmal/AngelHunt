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
    $startup= $_POST['name'];
    $loc =$_POST['loc'];
    $fullname=explode(" ",$startup); 
$first=$fullname[0];
$last=$fullname[1];
    

echo $first;
echo $last;
}
if($startup!=NULL && $loc!=NULL ){
  
$result=mysqli_query($conn,"SELECT * FROM registration  WHERE firstname ='$first' AND lastname ='$last' AND  country='$loc' ");
$num=$result->num_rows;
    if($num===0){
           
       // header("Location:connect.php?msg=the value you enterd is wrong,please try again");
    }
    else{

while ($row = mysqli_fetch_assoc($result)) {
   header("Location:connect1.php.php?msg=name,loc,$startup,{$row['country']}");
    }

}
}


    
else if($startup==NULL && $loc!=NULL ){
    
    $result=mysqli_query($conn,"SELECT * FROM registration WHERE  country='$loc'");
    $num=$result->num_rows;
    if($num===0){
           
      header("Location:connect.php?msg=the value you enterd is wrong,please try again");
    }
    else{
    
    while ($row = mysqli_fetch_assoc($result)) {
        
        header("Location:connect1.php?msg=name,loc,NULL,{$row['country']}");
        }
    }
}

    else if($startup!=NULL && $loc==NULL ){
      
        $result=mysqli_query($conn,"SELECT * FROM registration WHERE firstname ='$first' AND lastname ='$last'");
        $num=$result->num_rows;
        
        if($num===0){
            echo "wrong";
           
            header("Location:connect.php?msg=the value you enterd is wrong,please try again");
        }
        else{
            
        while ($row = mysqli_fetch_assoc($result)) {
           
            header("Location:connect1.php?msg=name,loc,$startup,NULL");

            }
        }  
    } 

     else if($startup==NULL && $loc==NULL  ){

        
           header("Location:connect.php?msg='you haven't entered any value, please try again!'");
        
       
        
    }
                      
?>