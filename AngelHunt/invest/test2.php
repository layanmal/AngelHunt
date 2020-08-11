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
    $investor= $_POST['name'];
    $loc =$_POST['loc'];
    $cato= $_POST['cat'];
    

}
if($investor!=NULL && $loc!=NULL && $cato!=NULL ){
  
$result=mysqli_query($conn,"SELECT * FROM investors WHERE companyname='$investor' AND country='$loc' AND type='$cato'");
$num=$result->num_rows;
if($num===0){
       
    header("Location:investormain.php?msg=the value you entered is wrong,please try again");
} 
else{
while ($row = mysqli_fetch_assoc($result)) {
    header("Location:investor.php?msg=type,investor,loc,{$row['type']},{$row['companyname']},{$row['country']}");
    }
}
}

else if($investor!=NULL && $loc!=NULL  && $cato==NULL){
    
    $result=mysqli_query($conn,"SELECT * FROM investors WHERE companyname='$investor' AND country='$loc'");
    $num=$result->num_rows;
    if($num===0){
           
        header("Location:investormain.php?msg=the value you entered is wrong,please try again");
    } 
    else{
    while ($row = mysqli_fetch_assoc($result)) {
    header("Location:investor.php?msg=type,investor,loc,NULL,{$row['companyname']},{$row['country']}");
    }
    }}
    
else if($investor==NULL && $loc!=NULL  && $cato!=NULL){
    
    $result=mysqli_query($conn,"SELECT * FROM investors WHERE type='$cato' AND country='$loc'");
    $num=$result->num_rows;
    if($num===0){
           
        header("Location:investormain.php?msg=the value you entered is wrong,please try again");
    } 
    else{
    
    while ($row = mysqli_fetch_assoc($result)) {
        
        header("Location:investor.php?msg=type,investor,loc,{$row['type']},NULL,{$row['country']}");
        }
    }
}

    else if($investor!=NULL && $loc==NULL  && $cato!=NULL){
      
        $result=mysqli_query($conn,"SELECT * FROM investors WHERE type='$cato' AND companyname='$investor'");
        $num=$result->num_rows;
        if($num===0){
               
            header("Location:investormain.php?msg=the value you entered is wrong,please try again");
        } 
        else{
        
        while ($row = mysqli_fetch_assoc($result)) {
                    
            header("Location:investor.php?msg=type,investor,loc,{$row['type']},{$row['companyname']},NULL");

            }
        }  
    } 

     else if($investor==NULL && $loc==NULL  && $cato!=NULL){
            
            $result=mysqli_query($conn,"SELECT * FROM investors WHERE type='$cato'");
            $num=$result->num_rows;
            if($num===0){
                   
                header("Location:investormain.php?msg=the value you entered is wrong,please try again");
            } 
            else{

            while ($row = mysqli_fetch_assoc($result)) {

            header("Location:investor.php?msg=type,investor,loc,{$row['type']},NULL,NULL");

            }
        }
    }

        else if($investor==NULL && $loc!=NULL  && $cato==NULL){
              
                $result=mysqli_query($conn,"SELECT * FROM investors WHERE country='$loc'");
                $num=$result->num_rows;
                if($num===0){
                       
                    header("Location:investormain.php?msg=the value you entered is wrong,please try again");
                } 
                else{
               
                while ($row = mysqli_fetch_assoc($result)) {
                    
                  echo"5araaaa"  ;
                header("Location:investor.php?msg=type,investor,loc,NULL,NULL,{$row['country']}");
    
                    }
                }
            }

        else if($investor!=NULL && $loc==NULL  && $cato==NULL){
                    
                    $result=mysqli_query($conn,"SELECT * FROM investors WHERE companyname='$investor'");
                    
                    $num=$result->num_rows;
                  if($num===0){
                         
                      header("Location:investormain.php?msg=the value you entered is wrong,please try again");
                  } 
                  else{
                while ($row = mysqli_fetch_assoc($result)) {
                    
                    
                    header("Location:investor.php?msg=type,investor,loc,NULL,{$row['companyname']},NULL");
    
                    }
                    }}
?>