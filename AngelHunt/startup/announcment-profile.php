
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
$countannounc=0;

$result1=mysqli_query($conn,"SELECT id FROM announcment ");
if (!$result1) {
  printf("Error: %s\n", mysqli_error($conn));
  exit();
}
 while($row1=mysqli_fetch_array($result1)){
   
     $countannounc++;
 }
$count=0;
$id=$_GET['msg'];
$email=$_SESSION['email'];

$result22=mysqli_query($conn,"SELECT * FROM registration WHERE email='$email'");

$retrieve=mysqli_fetch_array($result22);
$firstname=$retrieve['firstname'];
$lastname=$retrieve['lastname'];

$result=mysqli_query($conn,"SELECT following,idname FROM followers WHERE idname='$id'");
if (!$result) {
  printf("Error: %s\n", mysqli_error($conn));
  exit();
}
while($row=mysqli_fetch_array($result)){
   
    $count++;
}

 $countlinks=0;
 $count1=0;
 $count2=0;
 $count3=0;
 $result1=mysqli_query($conn,"SELECT StartupName FROM startups WHERE startemail='$email'");
 if (!$result1){
  printf("Error: %s\n", mysqli_error($conn));
  exit();
}
 while($row1=mysqli_fetch_array($result1)){
   
     $count1++;
 }


 $result2=mysqli_query($conn,"SELECT companyname FROM investors WHERE startemail='$email'");
 if (!$result2){
  printf("Error: %s\n", mysqli_error($conn));
  exit();
}
 while($row2=mysqli_fetch_array($result2)){
   
     $count2++;
 }

 $result3=mysqli_query($conn,"SELECT companyname FROM corporates WHERE email='$email'");
 if (!$result3){
  printf("Error: %s\n", mysqli_error($conn));
  exit();
}
 while($row3=mysqli_fetch_array($result3)){
   
     $count3++;
 }
 $countlinks=$count1+$count2+$count3;

?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="images/logo3.png">
	<title> AngelHunt </title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    
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

	<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css?975" rel="stylesheet" />
  <link href="assets/css/paper-bootstrap-wizard.css?236273" rel="stylesheet" />
  <link href="assets/css/mystyle1.css?9767" rel="stylesheet"/>
  

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="assets/css/demo.css" rel="stylesheet" />

  <!-- Fonts and Icons -->
 
	<link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
	<link href="assets/css/themify-icons.css" rel="stylesheet">
	<!-- Google Tag Manager -->

  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;700&display=swap" rel="stylesheet">

	<!-- End Google Tag Manager -->
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;700&display=swap" rel="stylesheet">
  <meta name='viewport' content='width=device-width, initial-scale=1'>
	<style>
.footer-icons li :hover{
	background-color: #18d26e;
	color:#ffffff;
}
body{
	background-color:#eee;
}
 .card{
background-color:#fff;
 }
.card11 {
  margin-top:100px;
    margin-top: 1em;
    background-color:white;
    -o-transition: 0.7s ease-out;
    transition: 0.7s ease-out;
    -webkit-transition: 0.7s ease-out;
    text-align: center!important;
}

/* IMG displaying */
.person-card11 {
    margin-top: 5em;
    padding-top: 5em;
}
.person-card11 .card-title11{
    text-align: center;
}

.service-24 {
    margin-top: 10px;
    font-family: 'Quicksand', sans-serif;
	color: #8d97ad;
  font-weight: 300;
  text-align: center!important;
}


.service-24 h1, .service-24 h2, .service-24 h3, .service-24 h4, .service-24 h5, .service-24 h6 {
  color: #3e4555;
  
}
.service-24 h6 {
 
  padding-bottom:30px;
}


.service-24 .card.card-shadow {
    -webkit-box-shadow: 0px 0px 30px rgba(115, 128, 157, 0.1);
    box-shadow: 0px 0px 30px rgba(115, 128, 157, 0.1);
    text-align: center!important;
    background-color: #ccc;
}

.service-24 a {
    text-decoration: none;
    text-align: center!important;

}

.service-24 .card-hover:hover {
	  background: #0000;
    background: -webkit-linear-gradient(legacy-direction(to right), #2cdd9b 0%, #1dc8cc 100%);
    background: -webkit-gradient(linear, left top, right top, from(#2cdd9b), to(#1dc8cc));
    background: -webkit-linear-gradient(left, #2cdd9b 0%, #1dc8cc 100%);
    background: -o-linear-gradient(left, #2cdd9b 0%, #1dc8cc 100%);
    background: linear-gradient(to right, #2cdd9b 0%, #1dc8cc 100%);
    text-align: center!important;
}

.service-24 .card-hover:hover .bg-success-grediant {
	color: #ffffff;
    text-fill-color: #ffffff;
    -webkit-text-fill-color: #ffffff;
    text-align: center!important;
}

.service-24 .card-hover:hover .ser-title {
    color: #ffffff;
    text-align: center!important;
}

.service-24 .bg-success-grediant {
	background: #2cdd9b;
    background: -webkit-linear-gradient(legacy-direction(to right), #2cdd9b 0%, #18d26e 100%);
    background: -webkit-gradient(linear, left top, right top, from(#2cdd9b), to(#18d26e));
    background: -webkit-linear-gradient(left, #2cdd9b 0%, #18d26e 100%);
    background: -o-linear-gradient(left, #2cdd9b 0%, #18d26e 100%);
    background: linear-gradient(to right, #2cdd9b 0%, # 100%);
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
    text-fill-color: transparent;
	font-size: 18px;
	text-align:center;
}

.service-24 .wrap-service-24 .card {
    -o-transition: 0.3s ease-out;
    transition: 0.3s ease-out;
    -webkit-transition: 0.3s ease-out;
    text-align: center!important;
    background-color:#E8E8E8;
    padding-top:30px;
   
}

.service-24 .wrap-service-24 .card:hover {
    -ms-transform: translateY(-10px);
    transform: translateY(-10px);
    -webkit-transform: translateY(-10px);
    background-image: linear-gradient(to right, #2cdd9b ,#18d26e );
    text-align: center!important;
    padding-top:30px
}

.service-24 .btn-outline-success {
		color: #2cdd9b !important;
    background-color: transparent;
    border-color: #2cdd9b;
    text-align: center!important;
}

.service-24 .btn-outline-success:hover {
		background: #2cdd9b;
    border-color: #2cdd9b;
    color: #ffffff !important;
    text-align: center!important;
}

.service-24 .btn-md {
    padding: 15px 45px;
    font-size: 16px;
    text-align: center!important;
    
}
.fa-home{
margin-left:10px;
margin-right:5px;
color:green;

}

  .icon {
    font-size: 40px;
    margin-bottom: 0px;
    -webkit-transition: .3s all ease;
    -o-transition: .3s all ease;
    transition: .3s all ease; }
  
  
.jobs-wrap .job-item {
  display: block;
  border-bottom: 1px solid #ced4da !important;
  color: rgba(0, 0, 0, 0.5);
  background: #fff;
  position: relative;
  z-index: 1; }
  .jobs-wrap .job-item:hover {
    background: #fff;
    -webkit-box-shadow: 4px 0 40px 0 rgba(0, 0, 0, 0.1);
    box-shadow: 4px 0 40px 0 rgba(0, 0, 0, 0.1);
    z-index: 2; }

  .jobs-wrap .job-item.fulltime {
    border-left: 3px solid #18d26e; }
 
  .jobs-wrap .job-item .company-logo {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 100px;
    flex: 0 0 100px; }
    .jobs-wrap .job-item .company-logo img {
      max-width: 100%;
      border-radius: 4px; }
  .jobs-wrap .job-item h3 {
    font-size: 17px; }
  .jobs-wrap .job-item .job-details {
    width: calc(100% - 250px); }
    @media (max-width: 1199.98px) {
      .jobs-wrap .job-item .job-details {
        width: 100%;
        text-align: center; } }
  .jobs-wrap .job-item .job-category {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 150px;
    flex: 0 0 150px;
    text-align: center; }
    .d-block{display:block!important}
    .d-md-flex{display:-webkit-box!important;display:-ms-flexbox!important;display:flex!important}
    .align-items-center{-webkit-box-align:center!important;-ms-flex-align:center!important;align-items:center!important}
    .border-bottom{border-bottom:1px solid #dee2e6!important}
    .text-center{text-align:center!important}
    @media (min-width:768px){.text-md-left{text-align:left!important}.text-md-right{text-align:right!important}.text-md-center{text-align:center!important}}
    .pl-3,.px-3{padding-left:1rem!important}
    .img-fluid{max-width:100%;height:auto}
    .mx-auto{margin-right:auto!important}
    .h-100{height:100%!important}
    .p-3{padding:1rem!important}
    .align-self-center{-ms-flex-item-align:center!important;align-self:center!important}
    .d-lg-flex{display:-webkit-box!important;display:-ms-flexbox!important;display:flex!important}
    .mr-3,.mx-3{margin-right:1rem!important}
    .mr-1,.mx-1{margin-right:0.25rem!important}
    .align-self-center{-ms-flex-item-align:center!important;align-self:center!important}
    .d-lg-flex{display:-webkit-box!important;display:-ms-flexbox!important;display:flex!important}
    a.text-info:focus,a.text-info:hover{color:#117a8b!important}
    .p-2{padding:0.5rem!important}
    .rounded{border-radius:0.25rem!important}.rounded-top{border-top-left-radius:0.25rem!important;border-top-right-radius:0.25rem!important}.rounded-right{border-top-right-radius:0.25rem!important;border-bottom-right-radius:0.25rem!important}.rounded-bottom{border-bottom-right-radius:0.25rem!important;border-bottom-left-radius:0.25rem!important}.rounded-left{border-top-left-radius:0.25rem!important;border-bottom-left-radius:0.25rem!important}.rounded-circle{border-radius:50%!important}.rounded-0{border-radius:0!important}

	</style>
	</head>

	<body>

		<div id="preloader"></div>

    <header>
  <!-- header-area start -->
  <div id="sticker" class="header-area">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12">

          <!-- Navigation -->
          <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              <!-- Brand -->
              <a class="brand-navbar" href="#"><img src="images/ism.png" alt="Responsive image" height="60px"></a>
         
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <img src="img/logo.png" alt="" title=""> -->
              </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
              <ul class="nav navbar-nav navbar-right">
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Community<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href=# >Apply for Funding</a></li>
                    
                    <li><a href="../invest/connect.php?msg=''" >Connect to People</a></li>
                  </ul>
                  <li>
                    <a class="page-scroll" href="../jobfinder1/jobmain.php?msg=''">Find a Job</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="../miniblog1/main.php">Announcements</a>
                  </li>
                  <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Create<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">

					  <li><a href="../startup/createstartup.php"> a Startup page</a></li>
					  
                       <li><a href="../startup/investor.php">an Investor page</a></li>
                    
                    <li><a href="../startup/createco.php" >a corporate page</a></li>
                    </ul> 
                  </li>
                <!--  <li>
                    <a class="page-scroll" href="#portfolio"></a>
                  </li>-->

                     <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Directories<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="../searchs/startup.php?msg=''"Startups>startups</a></li>
		  
					  <li><a href="../invest/investormain.php?msg=''">Investors</a></li>
                    
                    <li><a href="../invest/corporatesmain.php?msg=''" >corporates</a></li>
                    </ul> 
                  </li>
                
                  <li>
                    <a class="page-scroll" href="../blog.php">Home</a>
                  </li>
                  <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">More<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="../searchs/searchs.php">Contact Us</a></li>
          <li><a href="../invest/invest/investor.html">Google Map<</a></li>
                    
                    <li><a href="../invest/invest/corportes.html" >Log Out</a></li>
                    </ul> 
                </ul>
              </ul>
            </div>
            <!-- navbar-collapse -->
          </nav>
          <!-- END: Navigation -->
        </div>
      </div>
    </div>
  </div>
  <!-- header-area end -->
</header>
  <!-- header end -->

		<!-- Google Tag Manager (noscript) -->
	
	<!-- End Google Tag Manager (noscript) -->
	<div class="image-container set-full-height" >
	    <!--   Creative Tim Branding   -->
	    <a href="https://creative-tim.com">
	         <div class="logo-container">
	            <!--<div class="logo">
	                <img src="assets/img/new_logo.png">
	            </div>
	            <div class="brand">
	                Creative Tim
	            </div>-->
	        </div>
	    </a>

		
  <!-- header end -->

		<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<div class="image-container set-full-height" >
	    <!--   Creative Tim Branding   -->
	    <a href="https://creative-tim.com">
	         <div class="logo-container">
	            <!--<div class="logo">
	                <img src="assets/img/new_logo.png">
	            </div>
	            <div class="brand">
	                Creative Tim
	            </div>-->
	        </div>
	    </a>

		

	    <!--   Big container   -->
	    <div class="container" >
	        <div class="row">

			<!--<div class="container">
					<div class="row profile">-->	
						<div class="col-md-3" >
							<div class="profile-sidebar" style="margin-top:50px;">
								<!-- SIDEBAR USERPIC -->
								<div class="profile-userpic">
                <?php  if(!empty($retrieve['pic'])){   echo'<img style="  float: none;
        margin: 0 40px;
        width: 172px;
        height: 172 px;
        -webkit-border-radius: 50% !important;
        -moz-border-radius: 50% !important;
        border-radius: 50% !important;
        border: 2px solid #e8e8e8;
         border-radius: 7px;
         box-sizing: border-box;" alt=""  class="rounded-circle user_img"  src="data:image/jpeg; base64,'.base64_encode( $retrieve['pic']).'" />';}
								else{
									echo '<img src="https://www.kindpng.com/picc/m/78-785827_user-profile-avatar-login-account-male-user-icon.png" class="" style="  float: none;
                  margin: 0 40px;
                  width: 172px;rounded-circle user_img
                  height: 172 px;
                  -webkit-border-radius: 50% !important;
                  -moz-border-radius: 50% !important;
                  border-radius: 50% !important;
                  border: 2px solid #e8e8e8;
                   border-radius: 7px;
                   box-sizing: border-box;" alt="">';
								}
									?>
        
                      </div>
								<!-- END SIDEBAR USERPIC -->
								<!-- SIDEBAR USER TITLE -->
								<div class="profile-usertitle">
                <div class="profile-usertitle-name">
                  <?php
      echo $firstname." ".$lastname;
      ?>									</div>
									<div class="profile-usertitle-job">
									<?php $role ?>
									</div>
								</div>
								<!-- END SIDEBAR USER TITLE -->
								<!-- SIDEBAR BUTTONS -->
								
								<!-- END SIDEBAR BUTTONS -->
								<!-- SIDEBAR MENU -->
								<div class="profile-usermenu">
                                <ul class="nav">
                                <li >
            <a href="../blog.php">
            <i class="glyphicon "></i>
           Dashboard </a>
          </li>
          <li>
            <a href="edit.php">
            <i class="glyphicon "></i>
            My Profile </a>
          </li>
          <li class="active">
            <a href="announcment-profile.php?msg=<?php echo $id?>">
            <i class="glyphicon "></i>
            Annoucements <span style="float:right;font-size:15px;font-weight:600;color:#18de6e"><?php echo $countannounc?></span> </a>
          </li>
          <li>
            <a href="followings.php?msg=<?php echo $id?>">
            <i class="glyphicon "></i>
            Followings<span style="float:right;font-size:15px;font-weight:600;color:#18de6e"><?php echo $count?></span> </a></li>
          <li>
            <a href="links.php?msg=<?php echo $id?>" >
            <i class="glyphicon "></i>
           Links <span style="float:right;font-size:15px;font-weight:600;color:#18de6e"><?php echo $countlinks?></span> </a>
          </li>
          <li>
            <a href="#">
            <i class="glyphicon "></i>
            Help </a>
          </li>
          <li>
            <a href="../logout">
            <i class="glyphicon "></i>
            Logout </a>
          </li>
        </ul>
	</div>
								<!-- END MENU -->
	</div>
	 </div>
	
				<br>
				<br>
    <div class="col-sm-8 col-sm-offset-2" style="margin-bottom:30px; padding-left:150px;margin-top:50px;">
     <div class="container" style="margin-top:10px;"> 
<div class="row wrap-service-24">
<div class="col-md-9" >
                

    <div class="rounded border jobs-wrap">
   <div class="card">      
     <h2 class="fa fa-gears" style="color:#18d26e; padding:15px;"></h2>
      <span for="email" class="card-title11 "  style="font-weight:500;font-size:18px; text-center:left">Latest Announcement</span>
        <hr>
        <?php 
  $result4=mysqli_query($conn,"SELECT * FROM announcment ");
    if($result4==false){
    }
    else{
    while($rob=mysqli_fetch_assoc($result4)){
            
        ?>
        
          <a href="../miniblog/valid.php?msg=<?php echo $rob['company'];?>"  style="font-weight:400;color:black;"class="job-item d-block d-md-flex align-items-center  border-bottom fulltime">
         <div class="company-logo blank-logo text-center text-md-left pl-3">
           <?php  echo '<img  "class="img-fluid mx-auto" src="data:image/jpeg; base64,'.base64_encode( $rob['typepic']).'" />';?>
          </div>
        <div class="job-details h-100">
         <div class="p-3 align-self-center">
          <h3> <?php echo $rob['company'];?> </h3>
       <div class="d-block d-lg-flex">
      <div class="mr-3"><span class="icon-suitcase mr-1"></span>  <?php echo $rob['country']?></div>
      <div class="mr-3"><span class="icon-room mr-1"></span> <?php echo $rob['city']?></div>
          </div>
     </div>
   </div>
 <div class="job-category align-self-center">
 
    </div>  
  </a>
  <?php
              }}
              ?>    
    </div>
   </div>         
   </div>
            </div>
            </div>
            </div>
            </div>
            <br>
<br>
<br>
<br>
<br> 
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br><!-- row -->
	    </div> <!--  big container -->

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
    
  </footer>.

</body>

	<!--   Core JS Files   -->
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

	<script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="assets/js/demo.js" type="text/javascript"></script>
	<script src="assets/js/paper-bootstrap-wizard.js" type="text/javascript"></script>

	<!--  More information about jquery.validate here: https://jqueryvalidation.org/	 -->
	<script src="assets/js/jquery.validate.min.js" type="text/javascript"></script>

</html>
