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

$msg=$_GET['msg'];
$email=$_SESSION['email'];
$result=mysqli_query($conn,"SELECT * FROM registration WHERE email='$email'");
$retrieve=mysqli_fetch_array($result);
$firstname=$retrieve['firstname'];
$lastname=$retrieve['lastname'];
$id=$_SESSION['id'];
$name=$firstname." ".$lastname;


//echo '<script language="javascript">';
//echo 'alert("'.$msg.'")';
//echo '</script>'
?>



<title>AngelHunt | My Profile</title>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<head>
<link href="assets/css/paper-bootstrap-wizard.css?998" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesgeet" href="https://rawgit.com/creativetimofficial/material-kit/master/assets/css/material-kit.css">
  
    <link href="assets/css/paper-bootstrap-wizard.css?236233373" rel="stylesheet" />
    <link href="assets/css/mystyle1.css?9767" rel="stylesheet"/>
    <link rel="icon" type="image/png" sizes="32x32" href="images/logo3.png">

<style>
    .nav>li>a {
    position: relative;
    display: block;
    padding: 10px 15px;
    color:white;
}
    html *{
    -webkit-font-smoothing: antialiased;
}


.h6, h6 {
    font-size: 50px !important;
    font-weight: 900;
    font-family: 'Quicksand', sans-serif;
    line-height: 1.5em;
    text-transform: uppercase;
}
.h6, h6 {
    font-size: .75rem !important;
    font-weight: 500;
    font-family: 'Quicksand', sans-serif;
    line-height: 1.5em;
    text-transform: uppercase;
}

.name h6 {
    margin-top: 10px;
    margin-bottom: 10px;
}

a .material-icons {
    vertical-align: middle;
}

.fixed-top {
    position: fixed;
    z-index: 1030;
    left: 0;
    right: 0;
}

.profile-page .page-header {
    height: 380px;
    background-position:center;
    background-color:#5d656d;
}

.page-header {
    height: 100vh;
    background-size: cover;
    margin: 0;
    padding: 0;
    border: 0;
    display: flex;
    align-items: center;
}

.header-filter:after, .header-filter:before {
    position: absolute;
    z-index: 1;
    width: 100%;
    height: 100%;
    display: block;
    left: 0;
    top: 0;
    content: "";
}

.header-filter::before {
    background: rgba(0,0,0,.5);
}

.main-raised {
    margin: -60px 30px 0;
    border-radius: 6px;
    box-shadow: 0 16px 24px 2px rgba(0,0,0,.14), 0 6px 30px 5px rgba(0,0,0,.12), 0 8px 10px -5px rgba(0,0,0,.2);
}

.main {
    background: #FFF;
    position: relative;
    z-index: 3;
}

.profile-page .profile {
    text-align: center;
}

.profile-page .profile img {
    width: 100%;
    margin: 0 auto;
    -webkit-transform: translate3d(0,-50%,0);
    -moz-transform: translate3d(0,-50%,0);
    -o-transform: translate3d(0,-50%,0);
    -ms-transform: translate3d(0,-50%,0);
    transform: translate3d(0,-50%,0);
}

.img-raised {
    box-shadow: 0 5px 15px -8px rgba(0,0,0,.24), 0 8px 10px -5px rgba(0,0,0,.2);
}

.rounded-circle {
    border-radius: 50%!important;
}
.img-fluid, .img-thumbnail {
    max-width: 100%;
    height: auto;
}

.title {
    margin-top: 30px;
    margin-bottom: 25px;
    min-height: 32px;
    color: black;
    font-weight: 700;
    font-family: 'Quicksand', sans-serif;}

.profile-page .description {
    margin: 1.071rem auto 0;
    max-width: 600px;
    color: #999;
    font-weight: 300;
}

p {    font-family: 'Quicksand', sans-serif;
color:black;
font-weight:500;
    font-size: 15px;
    margin: 0 0 10px;
}

.profile-page .profile-tabs {
    margin-top: 4.284rem;
}

.nav-pills, .nav-tabs {
    border: 0;
    border-radius: 3px;
    padding: 0 15px;
}

.nav .nav-item {
    position: relative;
    margin: 0 2px;
}

.nav-pills.nav-pills-icons .nav-item .nav-link {
    border-radius: 4px;
}

.nav-pills .nav-item .nav-link.active {
    color: #fff;
    background-color: #18d26e;
    box-shadow: 0 5px 20px 0 rgba(0,0,0,.2), 0 13px 24px -11px#18d26e;
}

.nav-pills .nav-item .nav-link {
    line-height: 24px;
    font-size: 12px;
    font-weight: 500;
    min-width: 100px;
    color: #555;
    transition: all .3s;
    border-radius: 30px;
    padding: 10px 15px;
    text-align: center;
}

.nav-pills .nav-item .nav-link:not(.active):hover {
    background-color: rgba(200,200,200,.2);
}


.nav-pills .nav-item i {
    display: block;
    font-size: 30px;
    padding: 15px 0;
}

.tab-space {
    padding: 20px 0 50px;
}

.profile-page .gallery {
    margin-top: 3.213rem;
    padding-bottom: 50px;
}

.profile-page .gallery img {
    width: 100%;
    margin-bottom: 2.142rem;
}

.profile-page .profile .name{
    margin-top: -80px;
}

img.rounded {
    border-radius: 6px!important;
}

.tab-content>.active {
    display: block;
}

/*buttons*/
.btnn {
    position: relative;
    padding: 12px 30px;
    margin: .3125rem 1px;
    font-size: .75rem;
    font-weight: 400;
    line-height: 1.428571;
    text-decoration: none;
    text-transform: uppercase;
    letter-spacing: 0;
    border: 0;
    border-radius: .2rem;
    outline: 0;
    transition: box-shadow .2s cubic-bezier(.4,0,1,1),background-color .2s cubic-bezier(.4,0,.2,1);
    will-change: box-shadow,transform;
}

.btn.btn-just-icon {
    font-size: 20px;
    height: 41px;
    min-width: 41px;
    width: 41px;
    padding: 0;
    overflow: hidden;
    position: relative;
    line-height: 41px;
}

.btn.btn-just-icon fa{
    margin-top: 0;
    position: absolute;
    width: 100%;
    transform: none;
    left: 0;
    top: 0;
    height: 100%;
    line-height: 41px;
    font-size: 20px;
}
.btn.btn-link{
    background-color: transparent;
    color: #999;
}
.boxxx {
    position: relative;
    width:170px;
    height:170px;
    border: 4px solid transparent;
    border-radius: 50%;
    background: url('images/cutst.jpg');
    background-size:170px 170px;
    background-clip: padding-box;
    padding: 10px;
    /* just to show box-shadow still works fine */
    box-shadow: 0 3px 9px black, inset 0 0 9px white;
    margin-left:-300px;
   

}


.boxxx::after {
    position: absolute;
    top: -4px; bottom: -4px;
    left: -4px; right: -4px;
    background: linear-gradient(red, blue);
    content: '';
    z-index: -1;
    border-radius: 16px;
}

.bg-dark,
.bg-dark-30,
.bg-dark-60,
.bg-dark-90,
.bg-dark .module-title,
.bg-dark-30 .module-title,
.bg-dark-60 .module-title,
.bg-dark-90 .module-title,
.bg-dark .module-subtitle,
.bg-dark-30 .module-subtitle,
.bg-dark-60 .module-subtitle,
.bg-dark-90 .module-subtitle,
.bg-dark .alt-module-subtitle h5,
.bg-dark-30 .alt-module-subtitle h5,
.bg-dark-60 .alt-module-subtitle h5,
.bg-dark-90 .alt-module-subtitle h5 {
  color: #fff;
}

.bg-dark {
  background: #111;
}

.bg-dark-30:before {
  position: absolute;
  background: rgba(2, 2, 2, 0.4);
  content: " ";
  height: 100%;
  width: 100%;
  left: 0;
  top: 0;
}

.bg-dark-60:before {
  position: absolute;
  background: rgba(34, 34, 34, 0.8);
  content: " ";
  height: 100%;
  width: 100%;
  left: 0;
  top: 0;
}

.bg-dark-90:before {
  position: absolute;
  background: rgba(34, 34, 34, 0.9);
  content: " ";
  height: 100%;
  width: 100%;
  left: 0;
  top: 0;
}

.bg-gradient:before {
  position: absolute;
  background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2ZmZmZmZiIgc3RvcC1vcGFjaXR5PSIwIi8+CiAgICA8c3RvcCBvZmZzZXQ9Ijk1JSIgc3RvcC1jb2xvcj0iIzAwMDAwMCIgc3RvcC1vcGFjaXR5PSIwLjk1Ii8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiMwMDAwMDAiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
  /* FF3.6+ */
  /* Chrome,Safari4+ */
  /* Chrome10+,Safari5.1+ */
  /* Opera 11.10+ */
  /* IE10+ */
  background: linear-gradient(to bottom, rgba(40, 115, 113, 0.57) 25%, rgba(115, 54, 31, 0.67) 75%);
  /* W3C */
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00ffffff', endColorstr='#000000',GradientType=0 );
  /* IE6-8 */
  content: " ";
  height: 100%;
  width: 100%;
  left: 0;
  top: 0;
}

.flex-direction-nav a {
  position: absolute;
  display: block;
  height: 100%;
  width: 50%;
  top: 0;
  z-index: 10;
  overflow: hidden;
  opacity: 0;
  margin: 0;
}

.flex-direction-nav .flex-prev {
  opacity: 0;
  left: 0;
  cursor: url(../images/prev-light.png), e-resize;
}
.bg-light {
  background: #f6f6f6;
}

.flex-direction-nav a,
.flex-control-nav > li > a {
  transition: all 0.3s ease-in-out 0s;
}

.navbar
{
    background-color: rgba(10, 10, 10, 0.9);
    border: 0;
  border-radius: 0;
  z-index: 1000;
  font-family: 'Quicksand', sans-serif;
  text-transform: uppercase;
  letter-spacing: 3px;
  font-size: 11px;
  transition: background, padding 0.4s ease-in-out 0s;

}
.navbar .brand-navbar img:hover
{
    opacity: 0.7;
}
.navbar li > a {
  position: relative;
  color: rgba(255, 255, 255, 0.7);
  color:white;
}
.navbar ul
{
padding: 0px 30px 0px 0px;
}

.flex-control-nav > li {
  display: inline-block;
  margin: 5px 3px;
}

.flex-control-nav > li > a {
  background: transparent;
  border: 1px solid #fff;
  display: block;
  height: 6px;
  width: 6px;
  border-radius: 6px;
}

.flex-control-nav > li > a:hover,
.flex-control-nav > li > a.flex-active {
  background: #fff;
}
.navbar ul li a{
    color: whi;
    margin: 10px 0px 0px 10px;
    text-transform: uppercase;
    font-family:'Quicksand', sans-serif;
font-size:11px;
font-weight:700px;}

.navbar ul li a .fas{
    padding-right:5px; 
    padding-left:5px; 
}
.navbar ul li a:hover{
    color: #18d26e;
}
.navbar ul li.active > a {
    color: #18d26e;
    font-weight: bold;
    font-size: 12px;
    border-left: 3px solid #18d26e;
    border-radius: 40px;
}
.iconStyle
{
    color: #18d26e;
}
#navbar {
  background-color: #333;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

/* Add some top padding to the page content to prevent sudden quick movement (as the navigation bar gets a new position at the top of the page (position:fixed and top:0) */
.sticky + .content {
  padding-top: 60px;
}
.mama li >a{
		color:white;
		padding:10px;
		margin:5px;

	}

/* footer */


</style>
</head>
     
<header>
        <!-- header-area start -->
        <div id="navbar">

<nav class="navbar navbar-expand-lg navStyle navbar-fixed-top mama"  role="navigation" style="background-color: rgba(10, 10, 10, 1);
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
            
            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" >Community</a>
              <ul class="dropdown-menu"style="background-color:black;">
                <li style=" margin-left:20px;margin-top:10px; font-size:10px;" ><a  href="#" data-toggle="dropdown" >Apply For Finding</a>
              
                </li>
                <li style=" margin-left:20px; margin-top:10px;font-size:10px;" ><a  href="../invest/connect.php?msg=''" data-toggle="dropdown">Connect to people</a>
              
              </li>
              
              </ul>
              
            </li>
            <li ><a  href="../jobfinder1/jobmain.php">Find A job</a>
             
            </li>
            <li ><a href="../miniblog1/index.html">Announcements</a>
     
     </li>
     <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" > Create</a>
              <ul class="dropdown-menu"style="background-color:black;">
                <li style=" margin-left:20px;margin-top:10px; font-size:10px;" ><a  href="../startup/createstartup.php" >a Startup</a>
              
                </li>
                <li style=" margin-left:20px; margin-top:10px;font-size:10px;" ><a  href="../startup/investor.php" >a Corporate</a>
              
              </li>
              <li style=" margin-left:20px ;margin-top:10px; font-size:10px;" ><a  href="../startup/corporate.php" >an Investor</a>
              
              </li>
               
              </ul>
              
            </li>
            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" >Directories</a>
              <ul class="dropdown-menu"style="background-color:black;">
                <li style=" margin-left:20px;margin-top:10px; font-size:10px;" ><a  href=".#" >Startups</a>
              
                </li>
                <li style=" margin-left:20px; margin-top:10px;font-size:10px;" ><a  href="../invest/corporatesmain.php?msg=''" >Corporates</a>
              
              </li>
              <li style=" margin-left:20px ;margin-top:10px; font-size:10px;" ><a  href="../invest/investormain.php?msg=''">Investors</a>
              
              </li>
               
              </ul>
              
            </li>
            
           
            <li ><a  href="../blog.php">Home</a>
      
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
  
  
<body class="profile-page">
    
    
    <div class="main main-raised">
        
		<div class="profile-content">
            <div class="container" >
                <div class="row">
	                <div class="col-md-6 ml-auto mr-auto">
        	           <div class="profile" >
                        <div class="twPc-div"  >
                        <?php  if(!empty($retrieve['cover'])){   echo'<img style="width:1290px;height:400px;  margin-left:-375px;
   alt=""    src="data:image/jpeg; base64,'.base64_encode( $retrieve['cover']).'" />';}
								else{
									echo '<img src="https://www.oberlo.com/wp-content/uploads/2017/06/shutterstock_374648065-880x470-c.jpg"  style="width:1290px;height:400px;  margin-left:-375px;" >';
								}
									?>
        
                            
    <div   style="margin-top:-270px;" > <?php if(!empty($retrieve['pic'])) {
        echo '<div   class="boxxx" style="background-image:url(data:image/jpeg;base64,'.base64_encode( $retrieve['pic'] ).')"/>';
        
    } else { 
     
        echo '<div class="boxxx"  style="background-image:url(https://www.kindpng.com/picc/m/78-785827_user-profile-avatar-login-account-male-user-icon.png)"/>';
}?></div>	
                       <div class="socialz" style="margin-left:-980px; margin-top:15px;">
                    	<a href="#pablo"style="color:#0072b1;" class="btnn btn-just-icon btn-link btn-dribbble"><i class="fa fa-linkedin"></i></a>
                       <a href="#pablo" style="color:#38A1F3" class="btnn btn-just-icon btn-link btn-twitter"><i class="fa fa-twitter"></i></a>
                       <a href="#pablo" style="color:#3b5998"class="btnn btn-just-icon btn-link btn-pinterest"><i class="fa fa-facebook-f"></i></a>

                    </div>	                        <div class="name">
                                <h3 class="title" style="margin-left:-600px;margin-top:-115px;"><?php echo $name?></h3>	
                                <p style="margin-left:-600px;margin-top:-20px;font-size:15px;">Entrepreneur</p>
							
                            </div>
                            <div style="margin-top:70px;">
                       <a href="createstartup.php">     <h1  style="text-transform:none;font-weight:600;font-size:14px;float:right;margin-right:-300px;margin-top:-100px; width:250px;" class="btn btn-finish btn-fill btn-danger btn-wd " data-show-count="false" data-size="large" data-show-screen-name="false" data-dnt="true">Create a Startup Profile</h1></a>
                    <a  href="createco.php">    <h1  style="text-transform:none;font-weight:600;font-size:14px;float:right;margin-top:-50px;margin-right:-300px;width:250px;" class="btn btn-finish btn-fill btn-danger btn-wd " data-show-count="false" data-size="large" data-show-screen-name="false" data-dnt="true">Create a Corporate Profile</h1></a>
                       <a href="investor.php"> <h1  style="text-transform:none;font-weight:600;font-size:14px;float:right;margin-top:3px; margin-right:-300px;width:250px;" class="btn btn-finish btn-fill btn-danger btn-wd " data-show-count="false" data-size="large" data-show-screen-name="false" data-dnt="true">Create an Investment Company </h1></a>
</div>
                        
	                    </div>
    	            </div>
                </div>
               <!-- <div class="description text-center" style="margin-top:-150px; font-weight:700px;margin-bottom:20px;">
                    <p> Palestinian Entrepreneur and computer Engineering student at An-Najah National University </p>
                </div>-->
		<div class="twPc-divStats text-center" style="display:block;margin-top:-245px;margin-left:-90px">
			<ul class="twPc-Arrange" style="margin-left:90px;">
				<li style="display:inline-block;">
				
						<span class="twPc-StatLabel twPc-block"style="font-size:12px;color:black;margin-left:-5px;margin-top:30px; margin-right:20px" >Followers</span>
						<span style="color:#18d26e;margin-left:-5px;" class="twPc-StatValue">0</span>
					
                </li>
                
                <li  style="margin-left:150px;display:inline-block;" >
						<span class="twPc-StatLabel twPc-block" style="font-size:12px;color:black;margin-left:-128px;margin-top:30px;margin-right:-10px;">Following</span>
            <span class="twPc-StatValue"style="color:#18d26e;margin-left:-128px;margin-right:-10px;">0</span>
					
				</li>
			
			</ul>
    </div>
    
	</div>
</div>
  
				<div class="row"style="margin-top:-20px;">
					<div class="col-md-6 ml-auto mr-auto">
                        <div class="profile-tabs">
                          <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#studio" role="tab" data-toggle="tab">
                                  <i class="material-icons">perm_identity</i>
                                  
                                  about
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#works" role="tab" data-toggle="tab">
                                  <i class="material-icons">business_center</i>
                                    Companies
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#favorite" role="tab" data-toggle="tab">
                                  <i class="material-icons">favorite</i>
                                    interests
                                </a>
                            </li>
                          </ul>
                        </div>
    	    	</div>
            </div>
    
          <div class="tab-content tab-space">
          <div class="tab-pane active  gallery" id="studio">
  				<div class="row">
                
                      <div class="container title ">
                          <h3 >About</h3><br>
                          <div style="display:block">
                          <h5 style="font-weight:700;display:inline-block;">What I do</h5><p style="margin-left:55px;display:inline-block;"><?php echo $retrieve['bio']?></p>
                          
                        </div>
                        <div style="display:block">
                            <h5 style="font-weight:700;display:inline-block;">Experience</h5><p style="margin-left:45px;display:inline-block;"><?php echo $retrieve['exp']?></p>
                            
                          </div>
                      </div>
                      <div class="container title ">
                          <h3 >Location</h3><br>
                           <div style="display:block">
                          <h5 style="font-weight:700;display:inline-block;">Country</h5><p style="margin-left:55px;display:inline-block;"><?php echo $retrieve['country'] ?></p>
                          
                        </div>
                        <div style="display:block">
                            <h5 style="font-weight:700;display:inline-block;">City</h5><p style="margin-left:90px;display:inline-block;"><?php echo $retrieve['city'] ?></p>
                            
                          </div>
                      </div>
                  </div>
                  
  			</div>
          <form action="update.php"  method="post" enctype="multipart/form-data">
            <div class="tab-pane active  gallery" id="studio">
            <h3 style="color:#18d26e; margin-left:47px;">Edit Profile </h3><br>
            <span style="color:Green;margin-left:47px;fone-size:70px"><?php echo $msg ?></span> 
  				<div class="row">
                      <div class="container title ">
                          <h3 >About</h3><br>
                          <div class="col-sm-12 col-sm-offset "style="margin-right:500px">
		                       <div class="form-group" style="display:block ;" >
                          <h5 style="font-weight:700;display:inline-block;">What I do</h5><textarea style="display:inline-block;" type="text" name="bio" class="form-control" placeholder="" rows="5"></textarea>
 
                           </div>
                        </div>
<div class="col-sm-12 col-sm-offset "style="margin-right:500px">
<div class="form-group" style="display:block ;" > 
  <h5 style="font-weight:700;display:inline-block;">Experience</h5><textarea style="display:inline-block;" type="text" name="exp" class="form-control" placeholder="" rows="5" ></textarea>
                          </div>
</div>
                      </div>
                      <div class="container title ">
                          <h3 >Personal </h3><br>
                          <div class="col-sm-12 col-sm-offset "style="margin-right:500px">
		                       <div class="form-group" style="display:block ;" >
                           <h5 style="font-weight:700;display:inline-block;">First Name</h5><input  name="fname"  type="text" class="form-control"   >
		                         
                           </div>
                        </div>
<div class="col-sm-12 col-sm-offset "style="margin-right:500px">
<div class="form-group" style="display:block ;" >
<h5 style="font-weight:700;display:inline-block;">Last Name</h5><input  name="lname"  type="text" class="form-control"   >
  </div>
</div>
<div class="col-sm-6 col-sm-offset "style="margin-right:500px">
<div class="form-group" style="display:block ;" >
<h5 style="font-weight:700;display:inline-block;">Profile Picture</h5><input  name="pic"  type="file" class="form-control"   >
  </div>
</div>
<div class="col-sm-6 col-sm-offset-1 "style="margin-right:500px">
<div class="form-group" style="display:block ;" >
<h5 style="font-weight:700;display:inline-block;">Cover</h5><input  name="cover"  type="file" class="form-control"   >
  </div>
</div>
                      </div>
                      <div class="container title ">
                          <h3 >Location</h3><br>
                          <div class="col-sm-12 col-sm-offset "style="margin-right:500px">
		                    <div class="form-group" style="display:block ;" >
                          <h5 style="font-weight:700;display:inline-block;">Country</h5><input  name="country"  type="text" class="form-control"   >
		                                    
                          
                        </div>
</div>
<div class="col-sm-12 col-sm-offset "style="margin-right:500px">
		                    <div class="form-group" style="display:block ;" >
                          <h5 style="font-weight:700;display:inline-block;">City</h5><input  name="city"  type="text" class="form-control"   >

                        </div>
</div>
                      </div>
                      <div class="pull-right" style="position:relative ;margin-left:130px" >
	                    <input type='submit' class='btn btn-finish btn-fill btn-danger btn-wd' name='submit' value='Update' />
									</div>

                  </div>
                  
              </div>
</form>
            <div class="tab-pane text-center gallery" style="margin-top:100px" id="works">
      			<div class="row">
      				<div class="col-md-4 ml-auto">
              <?php $result2=mysqli_query($conn,"SELECT * FROM startups WHERE startemail='$email' LIMIT 10");

while($retrieve2=mysqli_fetch_array($result2)){
echo' <a href="profilemy.php?msg='.$retrieve2['StartupName'].'"> <img   class="rounded" style="height:100px; width:100px;"
       src="data:image/jpeg; base64,'.base64_encode( $retrieve2['imageType']).'" /> </a>';
                       
}?>	 					</div>
      				<div class="col-md-4 mr-auto">
              <?php $result3=mysqli_query($conn,"SELECT * FROM Investors WHERE startemail='$email' LIMIT 20");

while($retrieve3=mysqli_fetch_array($result3)){
echo' <a href="profile2my.php?msg='.$retrieve3['companyname'].'"><img class="rounded" style="height:100px; width:100px;"
       src="data:image/jpeg; base64,'.base64_encode( $retrieve3['pic']).'" /></a>';
                       
}?>	
      				</div>
            
      			</div>
  			</div>
            <div class="tab-pane text-center gallery" style="margin-top:100px"id="favorite">
      			<div class="row">
                    <div class="col-md-3 ml-auto">
                        <img src="../searchs/images/yamsafer.jpg" class="rounded">
                          <img src="../searchs/images/zain.jpg" class="rounded">
                          <img src="../searchs/images/inggez.jpg" class="rounded">  					</div>
                        <div class="col-md-3 mr-auto">
                        <img src="../searchs/images/mbc.jpg" class="rounded">
                        <img src="../searchs/images/abwabi.jpg" class="rounded">
                        </div>
      			</div>
      		</div>
          </div>

        
            </div>
        </div>
	
	
    
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
	<script src="assets/js/entr.js" type="text/javascript"></script>

</body>