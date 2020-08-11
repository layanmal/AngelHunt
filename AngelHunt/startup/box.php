
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

$email=$_SESSION['email'];

$company=$_SESSION['company'];
$idcomp=$_SESSION['idcomp'];

$iduser =$_GET['msg']; 
$_SESSION['iduser']=$iduser;
$result=mysqli_query($conn,"SELECT Distinct iduser FROM chat WHERE idcomp='$idcomp' ");
if (!$result) {
  printf("Error: %s\n", mysqli_error($conn));
  exit();
}

$result22=mysqli_query($conn,"SELECT  * FROM registration WHERE id='$iduser' ");
if (!$result22) {
  printf("Error: %s\n", mysqli_error($conn));
  exit();
}


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

$email=$_SESSION['email'];
$id=$_SESSION['id'];
$company=$_SESSION['company'];
$idcomp=$_SESSION['idcomp'];
$iduser =$_GET['msg']; 

$result=mysqli_query($conn,"SELECT Distinct iduser FROM chat WHERE idcomp='$idcomp' ");
if (!$result) {
  printf("Error: %s\n", mysqli_error($conn));
  exit();
}

$result22=mysqli_query($conn,"SELECT  * FROM registration WHERE id='$iduser' ");
if (!$result22) {
  printf("Error: %s\n", mysqli_error($conn));
  exit();
}


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
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="assets/img/favicon.png" />
	<title>Paper Bootstrap Wizard by Creative Tim | Free Bootstrap Wizard</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Canonical SEO -->
    <link rel="canonical" href="https://www.creative-tim.com/product/paper-bootstrap-wizard"/>

    <meta name="keywords" content="wizard, bootstrap wizard, creative tim, long forms, 3 step wizard, sign up wizard, beautiful wizard, long forms wizard, wizard with validation, paper design, paper wizard bootstrap, bootstrap paper wizard">
    <meta name="description" content="Paper Bootstrap Wizard is a fully responsive wizard that is inspired by our famous Paper Kit  and comes with 3 useful examples and 5 colors.">

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Paper Bootstrap Wizard by Creative Tim">
    <meta itemprop="description" content="Paper Bootstrap Wizard is a fully responsive wizard that is inspired by our famous Paper Kit  and comes with 3 useful examples and 5 colors.">
    <meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/49/opt_pbw_thumbnail.jpg">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Paper Bootstrap Wizard by Creative Tim">
    <meta name="twitter:description" content="Paper Bootstrap Wizard is a fully responsive wizard that is inspired by our famous Paper Kit  and comes with 3 useful examples and 5 colors.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/49/opt_pbw_thumbnail.jpg">

    <!-- Open Graph data -->
    <meta property="og:title" content="Paper Bootstrap Wizard by Creative Tim | Free Boostrap Wizard" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://demos.creative-tim.com/paper-bootstrap-wizard/wizard-list-place.html" />
    <meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/49/opt_pbw_thumbnail.jpg" />
    <meta property="og:description" content="Paper Bootstrap Wizard is a fully responsive wizard that is inspired by our famous Paper Kit  and comes with 3 useful examples and 5 colors." />
    <meta property="og:site_name" content="Creative Tim" />

	<title>Font Awesome Icons</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/paper-bootstrap-wizard.css?998" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="assets/css/demo.css" rel="stylesheet" />

	<!-- Fonts and Icons -->
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
	<link href="assets/css/themify-icons.css" rel="stylesheet">
	<!-- Google Tag Manager 
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-NKDMSK6');</script>-->


	<!-- End Google Tag Manager -->


	<style>
	 <style>
	body,html{
			height: 100%;
			margin: 0;
			background: #ccc;
	      
	}
		.chat{
			margin-top: auto;
			margin-bottom: auto;
		}
		.card{
			height: 500px;
			border-radius: 15px !important;
			/*background-color: rgba(0,0,0,0.4) !important;*/
			background-color:#fafafa;
		}
		.contacts_body{
			padding:  0.75rem 0 !important;
			overflow-y: auto;
			white-space: nowrap;
		}
		.msg_card_body{
			overflow-y: auto;
		}
		.card-header{
			background-color: rgba(0,0,0,0.7);
			border-radius: 15px 15px 0 0 !important;
			border-bottom: 0 !important;
		}
	 .card-footer{
		border-radius: 0 0 15px 15px !important;
			border-top: 0 !important;
	}
		.container{
			align-content: center;
		}
		.search{
			border-radius: 15px 0 0 15px !important;
			background-color: rgba(0,0,0,0.3) !important;
			border:0 !important;
			color:white !important;
		}
		.search:focus{
		     box-shadow:none !important;
           outline:0px !important;
		}
		.type_msg{
			background-color: rgba(0,0,0,0.7) !important;
			border:0 !important;
			color:white !important;
			height: 60px !important;
			overflow-y: auto;
		}
			.type_msg:focus{
		     box-shadow:none !important;
           outline:0px !important;
		}
		.attach_btn{
	border-radius: 15px 0 0 15px !important;
	background-color: rgba(0,0,0,0.7) !important;
			border:0 !important;
			color: white !important;
			cursor: pointer;
		}
		.send_btn{
	border-radius: 0 15px 15px 0 !important;
	background-color: rgba(0,0,0,0.7) !important;
			border:0 !important;
			color: white !important;
			cursor: pointer;
		}
		.search_btn{
			border-radius: 0 15px 15px 0 !important;
			background-color: rgba(0,0,0,0.7) !important;
			border:0 !important;
			color: white !important;
			cursor: pointer;
		}
		.contacts{
			list-style: none;
			padding: 0;
		}
		.contacts li{
			width: 100% !important;
			padding: 5px 10px;
			margin-bottom: 15px !important;
		}
	.active{
			background-color: rgba(0,0,0,0.7);
	}
		.user_img{
			height: 70px;
			width: 70px;
			border:1.5px solid #f5f6fa;
		
		}
		.user_img_msg{
			height: 40px;
			width: 40px;
			border:1.5px solid #f5f6fa;
		
		}
	.img_cont{
			position: relative;
			height: 70px;
			width: 70px;
	}
	.img_cont_msg{
			height: 40px;
			width: 40px;
	}
	.online_icon{
		position: absolute;
		height: 15px;
		width:15px;
		background-color: #4cd137;
		border-radius: 50%;
		bottom: 0.2em;
		right: 0.4em;
		border:1.5px solid white;
	}
	.offline{
		background-color: #c23616 !important;
	}
	.user_info{
		margin-top: auto;
		margin-bottom: auto;
		margin-left: 15px;
	}
	.user_info span{
		font-size: 20px;
		color: white;
	}
	.user_info p{
	font-size: 10px;
	color: rgba(255,255,255,0.6);
	}
	.video_cam{
		margin-left: 50px;
		margin-top: 5px;
	}
	.video_cam span{
		color: white;
		font-size: 20px;
		cursor: pointer;
		margin-right: 20px;
	}
	.msg_cotainer{
		margin-top: auto;
		margin-bottom: auto;
		margin-left: 10px;
		border-radius: 25px;
		background-color: #82ccdd;
		padding: 10px;
		position: relative;
	}
	.msg_cotainer_send{
		margin-top: auto;
		margin-bottom: auto;
		margin-right: 10px;
		border-radius: 25px;
		background-color: #78e08f;
		padding: 10px;
		position: relative;
	}
	.msg_time{
		position: absolute;
		left: 0;
		bottom: -15px;
		color: rgba(255,255,255,0.5);
		font-size: 10px;
	}
	.msg_time_send{
		position: absolute;
		right:0;
		bottom: -15px;
		color: rgba(255,255,255,0.5);
		font-size: 10px;
	}
	.msg_head{
		position: relative;
	}
	#action_menu_btn{
		position: absolute;
		right: 10px;
		top: 10px;
		color: white;
		cursor: pointer;
		font-size: 20px;
	}
	.action_menu{
		z-index: 1;
		position: absolute;
		padding: 15px 0;
		background-color: rgba(0,0,0,0.5);
		color: white;
		border-radius: 15px;
		top: 30px;
		right: 15px;
		display: none;
	}
	.action_menu ul{
		list-style: none;
		padding: 0;
	margin: 0;
	}
	.action_menu ul li{
		width: 100%;
		padding: 10px 15px;
		margin-bottom: 5px;
	}
	.action_menu ul li i{
		padding-right: 10px;
	
	}
	.action_menu ul li:hover{
		cursor: pointer;
		background-color: rgba(0,0,0,0.2);
	}
	@media(max-width: 576px){
	.contacts_card{
		margin-bottom: 15px !important;
	}
	}

/*------------*/
.footer-icons li :hover{
	background-color: #18d26e;
	color:#ffffff;
}
	</style>
	</head>

	<body>

		<div id="preloader"></div>

    <header>
        <!-- header-area start -->
        <div id="navbar">

<nav class="navbar navbar-expand-lg navStyle navbar-fixed-top"  role="navigation" style="background-color: rgba(10, 10, 10, 1);
      border: 0;
      border-radius: 0;
      z-index: 1000;
      font-family: 'Quicksand', sans-serif;
      text-transform: uppercase;
      letter-spacing: 3px;
      font-size: 11px;
      height:70px;
      transition: background, padding 0.4s ease-in-out 0s;">
          <a class="brand-navbar" href="#"><img src="images/ism.png" alt="Responsive image" height="60px"></a>
          <button class="navbar-toggler" data-toggle="collapse" data-target="#mainMenu">
              <span><i class="fas fa-align-right iconStyle"></i></span>
          </button>
          <div class="collapse navbar-collapse" id="mainMenu">
              <ul class="navbar-nav ml-auto navList">
              <div class="container">
     
              <div class="collapse navbar-collapse" id="custom-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li ><a  href="#" data-toggle="dropdown">Home</a>
       
            </li>
            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" >Join us</a>
              <ul class="dropdown-menu"style="background-color:black;">
                <li style=" margin-left:20px;margin-top:10px; font-size:10px;" ><a  href="#" data-toggle="dropdown" >Login</a>
              
                </li>
                <li style=" margin-left:20px; margin-top:10px;font-size:10px;" ><a  href="#" data-toggle="dropdown">Register</a>
              
              </li>
              
              </ul>
              
            </li>
            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" >Search</a>
              <ul class="dropdown-menu"style="background-color:black;">
                <li style=" margin-left:20px;margin-top:10px; font-size:10px;" ><a  href="../searchs/startup.php" >Startups</a>
              
                </li>
                <li style=" margin-left:20px; margin-top:10px;font-size:10px;" ><a  href="corporatesmain.php?msg=''" >Corporates</a>
              
              </li>
              <li style=" margin-left:20px ;margin-top:10px; font-size:10px;" ><a  href="corporatesmain.php?msg=''">Investors</a>
              
              </li>
               
              </ul>
              
            </li>
            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" > Create</a>
              <ul class="dropdown-menu"style="background-color:black;">
                <li style=" margin-left:20px;margin-top:10px; font-size:10px;" ><a  href="#" data-toggle="dropdown" >a Startup</a>
              
                </li>
                <li style=" margin-left:20px; margin-top:10px;font-size:10px;" ><a  href="#" data-toggle="dropdown">a Corporate</a>
              
              </li>
              <li style=" margin-left:20px ;margin-top:10px; font-size:10px;" ><a  href="#" data-toggle="dropdown">an Investor</a>
              
              </li>
               
              </ul>
              
            </li>
           
            <li ><a  href="../blog.php">Blog</a>
      
            </li>
            <li ><a href="../miniblog1/index.html">Announcements</a>
     
            </li>
            <li ><a  href="../jobfinder1/jobmain.php">Jobs</a>
             
            </li>
         
            <li class="dropdown"><a class="dropdown-toggle" href="documentation.html" data-toggle="dropdown">More</a>
              <ul class="dropdown-menu" style="background-color:black;">>
                <li style=" margin-left:20px ;margin-top:10px; font-size:10px;"><a href="documentation.html#contact">Contact Form</a></li>

                <li style=" margin-left:20px ;margin-top:10px; font-size:10px;"><a href="documentation.html#gmap">Google Map</a></li>
                                <li style=" margin-left:20px ;margin-top:10px; font-size:10px;"><a href="documentation.html#mailchimp">Log out</a></li>  
              </ul>
            </li>
          </ul>
        </div>
      </div>
          </div>
      </nav>
      </div>      </header>
        <script>
        window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("navbar");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}

        </script>
  
	
	  

		

	    <!--   Big container   -->
	    <div class="container" >
	        <div class="row">

			<div class="container-fluid h-100">
			<div class="row justify-content-center h-100">
				<div class="col-md-4 col-xl-3 chat"><div class="card mb-sm-3 mb-md-0 contacts_card">
					<div class="card-header">
						
					</div>
					<div class="card-body contacts_body">
						<ui class="contacts">
						<?php while($retrieve=mysqli_fetch_array($result)){
							$start=$retrieve['iduser'];
							$result2=mysqli_query($conn,"SELECT * FROM registration WHERE id='$start'");
							while($row=mysqli_fetch_array($result2)){
							$name= $row['firstname']." ".$row['lastname'];
?>
						<li class="active">
							<div class="d-flex bd-highlight">
								<div class="img_cont">
								<?php  if(!empty($row['pic'])){   echo'<img  class="rounded-circle user_img" src="data:image/jpeg; base64,'.base64_encode( $row['pic']).'" />';}
								else{
									echo '<img src="https://previews.123rf.com/images/imagevectors/imagevectors1602/imagevectors160200185/52757072-white-user-profile-icon-with-long-shadow-on-green-circle.jpg" class="rounded-circle user_img">';
								}
									?>
									<span class="online_icon"></span>
								</div>
								<div class="user_info">
									<span><?php echo $name; ?></span>
									<p><?php echo $name; ?> is online</p>
								</div>
							</div>
						</li>
						
						<?php }}?>
						</ui>
					</div>
					<div class="card-footer"></div>
				</div></div>
				<div class="col-md-8 col-xl-6 chat">
				<form action='action_page.php?msg=from' method='post' id='myform'class="form-container" >
					<div class="card">
					<?php 
							$result33=mysqli_query($conn,"SELECT * FROM registration WHERE id='$iduser'");
							while($row33=mysqli_fetch_array($result33)){
							$name= $row33['firstname']." ".$row33['lastname'];
?>
						<div class="card-header msg_head">

							<div class="d-flex bd-highlight">
								<div class="img_cont">
								<?php  if(!empty($row33['pic'])){   echo'<img  class="rounded-circle user_img" src="data:image/jpeg; base64,'.base64_encode( $row33['pic']).'" />';}
								else{
									echo '<img src="https://previews.123rf.com/images/imagevectors/imagevectors1602/imagevectors160200185/52757072-white-user-profile-icon-with-long-shadow-on-green-circle.jpg" class="rounded-circle user_img">';
								}
									?>

									<span class="online_icon"></span>
								</div>
								<div class="user_info">
									<span>Chat with <?php echo $name; ?></span>
									<p>1767 Messages</p>
								</div>
								<div class="video_cam">
									<span><i class="fas fa-video"></i></span>
									<span><i class="fas fa-phone"></i></span>
								</div>
							</div>
							<span id="action_menu_btn"><i class="fas fa-ellipsis-v"></i></span>
							<div class="action_menu">
								<ul>
									<li><i class="fas fa-user-circle"></i> View profile</li>
									<li><i class="fas fa-users"></i> Add to close friends</li>
									<li><i class="fas fa-plus"></i> Add to group</li>
									<li><i class="fas fa-ban"></i> Block</li>
								</ul>
							</div>
							<?php }?>
						</div>
						<div class="card-body msg_card_body">
						<?php 
							$result44=mysqli_query($conn,"SELECT * FROM registration WHERE id='$iduser'");
							while($row44=mysqli_fetch_array($result44)){
							$name= $row44['firstname']." ".$row44['lastname'];
?>
							<div class="d-flex justify-content-start mb-4">
								<div class="img_cont_msg">
									<?php  if(!empty($row44['pic'])){   echo'<img  class="rounded-circle user_img_msg" src="data:image/jpeg; base64,'.base64_encode( $row44['pic']).'" />';}
								else{
									echo '<img src="https://previews.123rf.com/images/imagevectors/imagevectors1602/imagevectors160200185/52757072-white-user-profile-icon-with-long-shadow-on-green-circle.jpg" class="rounded-circle user_img">';
								}
									?>
								</div>
								<div class="msg_cotainer" id="hello">
									
									<span class="msg_time">8:40 AM, Today</span>
								</div>
							</div>
							<?php }?>
							<div class="d-flex justify-content-end mb-4">
								<div class="msg_cotainer_send" id="hello1">
								
									<span class="msg_time_send">8:55 AM, Today</span>
								</div>
								
								<div class="img_cont_msg">
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
							
								</div>
							</div>
	
						</div>
						<div class="card-footer">
							<div class="input-group">
								<div class="input-group-append">
									<span class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span>
								</div>
								<textarea name="message" id="message"  class="form-control type_msg" placeholder="Type your message..."></textarea>
								<div class="input-group-append">
									<button class="input-group-text send_btn" ><i id='insert' class="fas fa-location-arrow"></i></button>
								</div>
							</div>
						</div>
					</div>
				</div>
				</form>
			</div>
		</div>
        <script>	$(document).ready(function(){
$('#action_menu_btn').click(function(){
	$('.action_menu').toggle();
});
	});
    </script>
	</body>

		</div>
	</div>
	  <!-- Start Footer bottom Area -->
	  <footer >
    <div class="footer-area" style="padding: 40px 0;
  background: #f9f9f9;">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content" style="display: block;
  overflow: hidden;"> 
              <div class="footer-head" style="color: #444;font-size: 16px; letter-spacing: 2px; padding-bottom: 10px;  padding-bottom: 10px;
  text-transform: uppercase;">

                <div class="footer-logo" style=" padding-bottom: 20px;">
                  <h2 style="color: #222; padding: 0; margin: 0;font-size: 36px;  font-weight: bold; line-height: 1;">
            <span style=" color: #18d26e;">Angel</span>Hunt</h2>
                </div>

                <p></p>
                <div class="footer-icons" style=" margin-top: 30px;">
                  <ul>
                    <li style=" display: inline-block;">
                      <a  style="border: 1px solid #444;color: #444;  display: block;  font-size: 16px; height: 40px;  line-height: 38px;margin-right: 5px;text-align: center;  width: 40px;  border-radius: 50%;"
  href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li style=" display: inline-block;">
                      <a style="border: 1px solid #444;color: #444;  display: block;  font-size: 16px; height: 40px;  line-height: 38px;margin-right: 5px;text-align: center;  width: 40px;  border-radius: 50%;" href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li style=" display: inline-block;">
                      <a  style="border: 1px solid #444;color: #444;  display: block;  font-size: 16px; height: 40px;  line-height: 38px;margin-right: 5px;text-align: center;  width: 40px;  border-radius: 50%;"href="#"><i class="fa fa-google"></i></a>
                    </li >
                    <li style=" display: inline-block;">
                      <a style="border: 1px solid #444;color: #444;  display: block;  font-size: 16px; height: 40px;  line-height: 38px;margin-right: 5px;text-align: center;  width: 40px;  border-radius: 50%;" href="#"><i class="fa fa-pinterest"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content" style="display: block;
  overflow: hidden;">
              <div class="footer-head" style="color: #444;font-size: 16px; letter-spacing: 2px; padding-bottom: 10px;  padding-bottom: 10px;
  text-transform: uppercase;">
                <h4>information</h4>
			
                <p style=" color: #444">
                  We'll help you grow your Business!
                </p>
                <div class="footer-contacts">
                  <p style=" color: #444"><span style="color: #18d26e;font-weight: 700;font-weight: 700;">
  Tel:</span> +970597494662</p>
                  <p style=" color: #444"><span style="color: #18d26e;font-weight: 700;font-weight: 700;">>Email:</span> contact@angelhunt.com</p>
                  <p style=" color: #444"><span style="color: #18d26e;font-weight: 700;font-weight: 700;">>Working Hours:</span> 9am-5pm</p>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content" style="display: block;
  overflow: hidden;">
              <div class="footer-head" style="color: #444;font-size: 16px; letter-spacing: 2px; padding-bottom: 10px;  padding-bottom: 10px;
  text-transform: uppercase;">
                <h4>Instagram</h4>
                <div class="flicker-img" >
                  <a  href="#"><img style="float: left;padding: 1px; width: 33.33%;" src="../img/portfolio/1.png" alt=""></a>
                  <a  href="#"><img style="float: left;padding: 1px; width: 33.33%;" src="../img/portfolio/zeft1.jpg" alt=""></a>
                  <a href="#"><img style="float: left;padding: 1px; width: 33.33%;"src="../img/portfolio/zeft.jpg" alt=""></a>
                  <a href="#"><img style="float: left;padding: 1px; width: 33.33%;"src="../img/portfolio/7.png" alt=""></a>
                  <a href="#"><img style="float: left;padding: 1px; width: 33.33%;"src="../img/portfolio/5.png" alt=""></a>
				  <a href="#"><img style="float: left;padding: 1px; width: 33.33%;"src="../img/portfolio/6.png" alt=""></a>
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          
            </div>
           
          </div>
        </div>
      </div>
    </div>
  </footer>.

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
	$(document).ready(function(e){
		 var html='<p/><div><div id="hey"><div class="row"><div class="col-sm-5 col-sm-offset-1"><div class="form-group"><label>Date Closed</label><input  class="form-control" value="N/A" id="childdateraised" type="date" name="dateraised[]"  placeholder="-date-"></input></div></div><div class="col-sm-5"><div class="form-group"><label>Amount</label><input  class="form-control"  value="N/A" id="childAmount" type="text" name="Amount[]"  placeholder="1000"></input></div></div><div class="col-sm-3 col-sm-offset-1"><div class="form-group"><label>Currency</label><select class="form-control" name="currency[]" id="childcurrency" value="N/A"><option disabled="" selected="">- Currency -</option><option value="EUR">EUR</option><option value="USD">USD</option></select></div></div><div class="col-sm-3 "><div class="form-group"><label>Funding Stage</label><select class="form-control" name="funding_stage[]" id="childfunding_stage" value="N/A"><option disabled="" selected="">- response -</option> <option value="Self Funded">Self Funded</option><option value="Friends and Family">Friends and Family </option><option value="Seed">pre Seed</option><option value="Seed">Seed</option><option value="PRE-series A ">PRE-series A </option><option value="series A">series A </option><option value="series B">series B </option><option value="series C"> series C</option><option value="series D"> series D</option><option value="Convertable Note">Convertable Note</option><option value="Launch">Launch</option></select></div></div><div class="col-sm-3"><div class="form-group"><label>Company Name</label><input  class="form-control"  value="N/A" id="childcompany" type="text" name="company[]"  placeholder="-type your startup name-"></input></div></div><div class="col-sm-1"><br><i class="fa fa-minus" style="font-size:48px;color:#18d26e" id="remove"></i></div></div></div></div>';

		 
	$("#add").click(function(e){
		$("#con").append(html);
	});

	$("#con").on('click','#remove',function(e){
		$("#hey").parent('div').remove();
	});





	});
	</script>
	<!--   Core JS Files   -->
	<script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="assets/js/demo.js" type="text/javascript"></script>
	<script src="assets/js/paper-bootstrap-wizard.js" type="text/javascript"></script>

	<!--  More information about jquery.validate here: https://jqueryvalidation.org/	 -->
	<script src="assets/js/jquery.validate.min.js" type="text/javascript"></script>
	<script src='https://code.jquery.com/jquery-2.1.3.min.js'></script>
<script type="text/javascript">
$('#myform').submit(function(){
  $('input[type="text"], textarea').val('');
  
	return false;
});
 
$('#insert').click(function(){
	$.post(		
		$('#myform').attr('action'),
		$('#myform :input').serializeArray(),
		function(result){
			$('#success').html(result);
		}
	);
});

</script>
<script type="text/javascript">
dis();
setInterval(function(){
  dis();
},2000); 
function dis(){
  xmlhttp= new XMLHttpRequest();
  xmlhttp.open("GET","select.php",false);
  xmlhttp.send();
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
  var msg= xmlhttp.responseText.split(",");
  var i;
  var msg1 ='';
  var msg2 ='';
  //console.log(msg);
  for( i=0 ;i<msg.length;i++){
    //console.log(msg[i]);
  if(msg[i]=="to"){
    //console.log(msg[i+1]);
    
    msg1 += msg[i+1] + '<br/>';
    // console.log(zeft);
document.getElementById("hello").innerHTML =msg1;
 
}else if(msg[i]=="from"){
  //console.log(msg[i+1]);
  msg2 += msg[i+1] +'<br/>' ;
  document.getElementById("hello1").innerHTML=msg2;
}

}
}
}
</script>
</html>
