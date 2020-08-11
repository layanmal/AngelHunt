<?php   

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dp = "starter" ;

$conn = new mysqli($servername, $username, $password,$dp);
 //Check connection
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
   
}

$company="RedCrow";
  $result4=mysqli_query($conn,"SELECT  * FROM startups WHERE StartupName='$company' ");
	if ($result4->num_rows ==0) {
		$result5=mysqli_query($conn,"SELECT * FROM investors WHERE company='$company' ");
			if ($result5->num_rows ==0) {
				$result6=mysqli_query($conn,"SELECT * FROM corporates WHERE company='$company' ");
				if ($result6->num_rows ==0) {
					
					
				  }else{
			$flag='3';
				  }
					
				
			  }else{
				$flag='2';
			  }
		
	  }else{
		$flag='1';
    }


    ?>
  
    
    <?php if($flag =='1'){
      while($row99=mysqli_fetch_array($result4)){
    echo'<img src="data:image/jpeg;base64,'.base64_encode( $row99['imageType'] ).'" class="rounded-circle user_img">';
        }}elseif($flag =='2'){
          while($row98=mysqli_fetch_array($result5)){
          echo'<img src="data:image/jpeg;base64,'.base64_encode( $row98['pic'] ).'" class="rounded-circle user_img_msg">';
        }}else{while($row97=mysqli_fetch_array($result6)){
          echo'<img src="data:image/jpeg;base64,'.base64_encode( $row97['pic'] ).'" class="rounded-circle user_img_msg">';
        }
        }?>
      
    