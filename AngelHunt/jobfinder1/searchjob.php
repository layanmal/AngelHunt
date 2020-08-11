
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
    die("Connection failed: ". $conn->connect_error);
   
}
$email=$_SESSION['email'];
$id=$_SESSION['id'];

$result='';
$msg = $_GET['msg'];
$myArray = explode(',', $msg);

if( $myArray['0'] === "StartupName" and $myArray['1']==="loc" ){
    
     if($myArray['2'] !="NULL" and $myArray['3'] ==="NULL" ){
        
           $result = mysqli_query($conn,"SELECT * FROM  jobs WHERE company='$myArray[2]'") or die('Invalid query: ' . mysqli_error($conn));
      } 
      
      else if($myArray['2'] === "NULL" and $myArray['3']!="NULL"){
      $result = mysqli_query($conn,"SELECT * FROM  jobs WHERE country='$myArray[3]'") or die('Invalid query: ' . mysqli_error($conn));
      }
      else if($myArray['2'] != "NULL" and $myArray['3'] !="NULL" ){
      $result = mysqli_query($conn,"SELECT * FROM  jobs WHERE company='$myArray[2]' and country='$myArray[3]'") or die('Invalid query: ' . mysqli_error($conn));
      }

    else if($myArray['2'] ==="NULL" and $myArray['3'] ==="NULL" ){
    $result = mysqli_query($conn,"SELECT * FROM  jobs WHERE company='$myArray[2]' and  country='$myArray[3]'") or die('Invalid query: ' . mysqli_error($conn));
    }
   
}
?>





<!DOCTYPE html>
<html lang="en">
  <head>
  <title>AngelHunt</title>
    <link rel="icon" type="image/png" sizes="32x32" href="logo3.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Work+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/flaticon.css">

    <link rel="stylesheet" href="css/extrastyle.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
    
    
    
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/mystyle.css">

    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

  </head>
  <style>
  body
{
    font-family: Quicksand, sans-serif;
}
/* Dark background */
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
body {
  background: #fff;
  font: 600 12px/1.8 ;
  font-family: Quicksand, sans-serif;

  
  color: #666;
  -webkit-font-smoothing: antialiased;
}
      :root {
	--input-padding-x: 1.5rem;
	--input-padding-y: .75rem;
  }
  
  body {
	background: white;
	background: white;
	
  }
  
  .card-signin {
	border: 0;
	border-radius: 1rem;
	box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
	width:450px;
	margin-top: -100%; /*hoon ghyrt */
	margin-left: 70%;
	margin-right: 20%;
 
  }
  
  .card-signin .card-title {
	margin-bottom: 2rem;
	font-weight: 500;
	font-size: 3rem;
	color:black;
  }
  
  .card-signin .card-body {
	padding: 2rem;
	background-color:white;
	border-radius:10px;

  }
  
  .form-signin {
	width: 100%;
  }
  
  .form-signin .btn {
	font-size: 110%;
	border-radius: 5rem;
	letter-spacing: .1rem;
	font-weight: bold;
	padding: 1rem;
	transition: all 0.2s;
  }
  
  .form-label-group {
	position: relative;
	margin-bottom: 1rem;
  }
  
  .form-label-group input {
  height: auto;
  text-transform: none;

	border-radius: 2rem;
  }
  
  .form-label-group>input,
  .form-label-group>label {
	padding: var(--input-padding-y) var(--input-padding-x);
  }
  
  .form-label-group>label {
	position: absolute;
	top: 0;
	left: 0;
	display: block;
	width: 100%;
	margin-bottom: 0;
	/* Override default `<label>` margin */
	line-height: 1.5;
	color: #495057;
	border: 1px solid transparent;
	border-radius: .25rem;
	transition: all .1s ease-in-out;
  }
  
  .form-label-group input::-webkit-input-placeholder {
	color: transparent;
  }
  
  .form-label-group input:-ms-input-placeholder {
	color: transparent;
  }
  
  .form-label-group input::-ms-input-placeholder {
	color: transparent;
  }
  
  .form-label-group input::-moz-placeholder {
	color: transparent;
  }
  
  .form-label-group input::placeholder {
	color: transparent;
  }
  
  .form-label-group input:not(:placeholder-shown) {
	padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (4 / 3));
	padding-bottom: calc(var(--input-padding-y) / 3);
  }
  
  .form-label-group input:not(:placeholder-shown)~label {
	padding-top: calc(var(--input-padding-y) / 3);
	padding-bottom: calc(var(--input-padding-y) / 3);
	font-size: 12px;
	color: #777;
  }
  
  .btn-google {
	color: white;
	background-color: #ea4335;
  }
  
  .btn-facebook {
	color: white;
	background-color: #3b5998;
  }
  .close {
  cursor: pointer;
  position: relative;
  float:right;
  color:black;
  padding: 12px 16px;
  transform: translate(0%, -50%);
}
.close:hover {background: #bbb;}
  /* Fallback for Edge
  -------------------------------------------------- */
  
  @supports (-ms-ime-align: auto) {
	.form-label-group>label {
	  display: none;
	}
	.form-label-group input::-ms-input-placeholder {
	  color: #777;
	}
  }
  
  /* Fallback for IE
  -------------------------------------------------- */
  
  @media all and (-ms-high-contrast: none),
  (-ms-high-contrast: active) {
	.form-label-group>label {
	  display: none;
	}
	.form-label-group input:-ms-input-placeholder {
	  color: #777;
	}
  }
  
  button {
    margin-bottom: 3px;
}


/* REQUIRED */
.page-alerts {
    margin-bottom: 20px;
}

.page-alerts .page-alert {
    border-radius: 0;
    margin-bottom: 0;
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
  padding:10px;
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
    color: white;
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
  </style>
  <body>
  

      
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
                <li style=" margin-left:20px; margin-top:10px;font-size:10px;" ><a  href="../invest/connect.php?msg=''" >Connect to people</a>
              
              </li>
              
              </ul>
              
            </li>
            <li ><a  href="../jobfinder1/jobmain.php?msg=''">Find A job</a>
             
            </li>
            <li ><a href="../miniblog1/main.php">Announcements</a>
     
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
                <li style=" margin-left:20px;margin-top:10px; font-size:10px;" ><a  href="../searchs/startup.php?msg=''" >Startups</a>
              
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
  
 <div class="site-blocks-cover overlay inner-page" style="background-image: url('images/hero_1.jpg');" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6 text-center" data-aos="fade">
            <h1  class="h3 mb-0">Your Dream Job</h1>
            <p class="h3 text-white mb-5">Is Waiting For You</p>
            <p><a style="width:200px; border-radius:5px;"  href="#" class="btn btn-outline-warning py-3 px-4">Find Jobs</a> <a href="#" style="border-radius:5px;width:200px;" class="btn btn-warning py-3 px-4">Apply For A Job</a></p>
            
          </div>
        </div>
      </div>
    </div>


    <div class="site-section" style="height:auto;background-color:#EDEAE0; " data-aos="fade">
      <div class="container">
    <div class="slideshow-container"style="background-color:#EDEAE0;">
      <div class="col-md-12 "style="background-color:#EDEAE0; ">
        <h2 class="font-weight-light"><b>Hunt your Job Opportunity!</b></h2>
      </div>
      <div class="form-search-wrap p-2" data-aos="fade-up" data-aos-delay="200">
      
      <form action="searchjo.php" method="post" >
          <div class="row align-items-center">
            <div class="col-lg-12 col-xl-4 no-sm-border border-right">
              <input name="startn" type="text"style="border-radius: 43px 0px 0px 43px;width:360px ; margin-right:-30px;" class="form-control" placeholder="Search By Name ">
            </div>
            <div class="col-lg-12 col-xl-3 no-sm-border border-right">
              <div class="wrap-icon">
                <span class="icon icon-room"></span>
                <input name="loc" type="text"style="border-radius: 0px 43px 43px 0px; width:480px;margin-left:-13px;" class="form-control" placeholder="Location">
              </div>
              
            </div>
            <div class="col-lg-12 col-xl-3"> 
              <div class="select-wrap">
                <input type="submit" class="btn btn-primary" style=" margin-left:65px; background-color:#18d26e; color:white; font-size:16px; opacity:1;
                "value="Search">
            </div>
          
            
          </div>
        </form>
      </div>

</div></div>

</div>
      
    <div class="site-section bg-light" style="margin-top:0px;">
      <div class="container" style="width:1500px;">
        <div class="row">
          <div class="col-md-8 mb-5 mb-md-0" data-aos="fade-up" data-aos-delay="100">
            <h2 style="font-weight: 400px; font-size:32px;color:black ">Recent Jobs</h2>

            <div class="rounded border jobs-wrap">
             <div class="form-search-wrap p-2"  style="width:1000px;"data-aos="fade-up" data-aos-delay="200">
 </div>
 <?php 
if (!$result){
  echo"there is no such result , please Try Again";
}
else{
while ($row = mysqli_fetch_assoc($result)) {
?>
      <a href="job-single.php?msg=4,<?php echo $row['company'] ?>"  class="job-item d-block d-md-flex align-items-center  border-bottom fulltime">
                <div class="company-logo blank-logo text-center text-md-left pl-3">
                <?php  echo '<img  "class="img-fluid mx-auto" src="data:image/jpeg; base64,'.base64_encode( $row['pic']).'" />';?>
        <!--<img src="images/company_logo_blank.png" alt="Image" class="img-fluid mx-auto">-->
                </div>
                <div class="job-details h-100">
                  <div class="p-3 align-self-center">
                 <div class="masa" style="display: inline-block;">  
                  <h4 style="display: inline-block;"><?php  echo $row['title'] ?></h4> 
                   <div class="badge-wrap" style="display: inline-block; margin-left: 15px; margin-top:10px;">
                   <?php if($row['job']==="Temporary"){?>
                   <span class="bg-secondary text-white badge py-2 px-3"><?php  echo $row['job'] ;?></span>
                   <?php } elseif($row['job']==="Internship"){ ?>
                    <span class="bg-danger text-white badge py-2 px-3"><?php  echo $row['job']; ?></span>
                    <?php } elseif($row['job']==="Full Time"){?>
                    <span class="bg-warning text-white badge py-2 px-3"><?php  echo $row['job']; ?></span>
                    <?php } elseif($row['job']==="Part Time"){?>
                    <span class="bg-info text-white badge py-2 px-3"><?php  echo $row['job']; ?></span>
                    <?php }else{?>
                    <span class="bg-primary text-white badge py-2 px-3"><?php  echo $row['job']; ?></span>
                    <?php }?>
                     </div></div> 
                    <div class="d-block d-lg-flex">
                      <div class="mr-3"><span class="icon-suitcase mr-1"></span><?php  echo $row['company'] ?></div>
                      <div class="mr-3"><span class="icon-room mr-1"></span> <?php  echo $row['country'] ?></div>
                      <div><span class="icon-money mr-1"></span><?php  echo $row['day']?> &mdash;<?php echo $row['month']?>&mdash;<?php echo $row['year']?> </div>
                    </div>
                  </div>
                </div>
                <div class="job-category align-self-center">
          
                  <div class="p-3" style="margin-left:-50px;">
                    <span class="btn btn-primary py-2 mr-1">Apply Job</span>

                  </div>
                </div>  
              </a>
              <?php }}?>


             <!--   <a href="job-single.html" class="job-item d-block d-md-flex align-items-center  border-bottom fulltime">
                  <div class="company-logo blank-logo text-center text-md-left pl-3">
                    <img src="images/company_logo_blank.png" alt="Image" class="img-fluid mx-auto">
                  </div>
                  <div class="job-details h-100">
                    <div class="p-3 align-self-center">
                   <div class="masa" style="display: inline-block;">  
                    <h4 style="display: inline-block;">Restaurant Crew</h4>  
                    <div class="badge-wrap" style="display: inline-block; margin-left: 15px; margin-top:10px;"> 
                      <span class="bg-danger text-white badge py-2 px-3">Temporary</span>
                    </div></div> 
                      <div class="d-block d-lg-flex">
                        <div class="mr-3"><span class="icon-suitcase mr-1"></span> Resto Bar</div>
                        <div class="mr-3"><span class="icon-room mr-1"></span> Florida</div>
                        <div><span class="icon-money mr-1"></span> $55000 &mdash; 70000</div>
                      </div>
                    </div>
                  </div>
                  <div class="job-category align-self-center">
            
                    <div class="p-3" style="margin-left:-50px;">
                      <span class="btn btn-primary py-2 mr-1">Apply Job</span>
  
                    </div>
                  </div>  
</a>


              <a href="job-single.html" class="job-item d-block d-md-flex align-items-center  border-bottom fulltime">
                <div class="company-logo blank-logo text-center text-md-left pl-3">
                  <img src="images/company_logo_blank.png" alt="Image" class="img-fluid mx-auto">
                </div>
                <div class="job-details h-100">
                  <div class="p-3 align-self-center">
                 <div class="masa" style="display: inline-block;">  <h4 style="display: inline-block;">Restaurant Crew</h4>  <div class="badge-wrap" style="display: inline-block; margin-left: 15px; margin-top:10px;"> <span class="bg-warning text-white badge py-2 px-3">Full Time</span>
                     </div></div> 
                    <div class="d-block d-lg-flex">
                      <div class="mr-3"><span class="icon-suitcase mr-1"></span> Resto Bar</div>
                      <div class="mr-3"><span class="icon-room mr-1"></span> Florida</div>
                      <div><span class="icon-money mr-1"></span> $55000 &mdash; 70000</div>
                    </div>
                  </div>
                </div>
                <div class="job-category align-self-center">
          
                  <div class="p-3" style="margin-left:-50px;">
                    <span class="btn btn-primary py-2 mr-1">Apply Job</span>

                  </div>
                </div>  
</a>

                <a href="job-single.html" class="job-item d-block d-md-flex align-items-center  border-bottom fulltime">
                  <div class="company-logo blank-logo text-center text-md-left pl-3">
                    <img src="images/company_logo_blank.png" alt="Image" class="img-fluid mx-auto">
                  </div>
                  <div class="job-details h-100">
                    <div class="p-3 align-self-center">
                   <div class="masa" style="display: inline-block;">  <h4 style="display: inline-block;">Restaurant Crew</h4>  <div class="badge-wrap" style="display: inline-block; margin-left: 15px; margin-top:10px;">                   <span class="bg-info text-white badge py-2 px-3">Freelance</span>

                       </div></div> 
                      <div class="d-block d-lg-flex">
                        <div class="mr-3"><span class="icon-suitcase mr-1"></span> Resto Bar</div>
                        <div class="mr-3"><span class="icon-room mr-1"></span> Florida</div>
                        <div><span class="icon-money mr-1"></span> $55000 &mdash; 70000</div>
                      </div>
                    </div>
                  </div>
                  <div class="job-category align-self-center">
            
                    <div class="p-3" style="margin-left:-50px;">
                      <span class="btn btn-primary py-2 mr-1">Apply Job</span>
  
                    </div>
                  </div>  
</a>


                  <a href="job-single.html" class="job-item d-block d-md-flex align-items-center  border-bottom fulltime">
                    <div class="company-logo blank-logo text-center text-md-left pl-3">
                      <img src="images/company_logo_blank.png" alt="Image" class="img-fluid mx-auto">
                    </div>
                    <div class="job-details h-100">
                      <div class="p-3 align-self-center">
                     <div class="masa" style="display: inline-block;">  <h4 style="display: inline-block;">Restaurant Crew</h4>  <div class="badge-wrap" style="display: inline-block; margin-left: 15px; margin-top:10px;">                    <span class="bg-primary text-white badge py-2 px-3">Partime</span>

                         </div></div> 
                        <div class="d-block d-lg-flex">
                          <div class="mr-3"><span class="icon-suitcase mr-1"></span> Resto Bar</div>
                          <div class="mr-3"><span class="icon-room mr-1"></span> Florida</div>
                          <div><span class="icon-money mr-1"></span> $55000 &mdash; 70000</div>
                        </div>
                      </div>
                    </div>
                    <div class="job-category align-self-center">
              
                      <div class="p-3" style="margin-left:-50px;">
                        <span class="btn btn-primary py-2 mr-1">Apply Job</span>
    
                      </div>
                    </div>  
</a>
-->
            </div>

            <div class="col-md-12 text-center mt-5">
              <a href="jobmain.php?msg=" style=" margin-left:240px; opacity:0.5; width:250px;" class="btn btn-primary rounded py-3 px-5"><span class="icon-plus-circle"></span> Show More Jobs</a>
            </div>
          </div>
      
        </div>
      </div>
    </div>


    <div class="site-blocks-cover overlay inner-page" style="background-image: url('images/bg_1.jpg');" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6 text-center" data-aos="fade">
            <h1  class="h3 mb-0">More Jobs Every Day</h1>
            <p class="h3 text-white mb-5">On AngelHunt you will find a lot of job opportunities in all fields, easy and fast!            </p>
            
          </div>
        </div>
      </div>
    </div>
    <div class="site-section" data-aos="fade">
      <div class="container" >
        <div class="row align-items-center">
          <div class="col-md-6 mb-5 mb-md-0">
            
              <div class="img-border">
                <a href="https://www.youtube.com/watch?v=JW7qj05Vql8"class="popup-vimeo image-play">
                  <span class="icon-wrap">
                    <span class="icon icon-play"></span>
                  </span>
                  <img src="images/hero_22.jpg" alt="Image" class="img-fluid rounded">
                </a>
              </div>
            
          </div>
          <div class="col-md-5 ml-auto">
            <div class="text-left mb-5 section-heading">
              <h2>'You've got to find what you love' Jobs says </h2>
            </div>

            <p class="mb-4 h5 font-italic lineheight1-5">Again, you can’t connect the dots looking forward; you can only connect them looking backward. So you have to trust that the dots will somehow connect in your future. You have to trust in something — your gut, destiny, life, karma, whatever. This approach has never let me down, and it has made all the difference in my life.              .</p>
            <p>&mdash; <strong class="text-black font-weight-bold"> Steve Jobs, </strong>founder and Apple</p>
            <p><a href="https://www.youtube.com/watch?v=JW7qj05Vql8" class="popup-vimeo text-uppercase">Watch Video <span class="icon-arrow-right small"></span></a></p>
          </div>
        </div>
      </div>
    </div>

   

    <div class="site-section site-block-feature bg-light"style="background-color:#ffff;">
      <div class="container"style="background-color:#ffff">
        
        <div class="text-center mb-5 section-heading">
          <h2>Why Choose Us</h2>
        </div>

        <div class="d-block d-md-flex border-bottom">
          <div class="text-center p-4 item border-right" data-aos="fade">
            <span class="flaticon-worker display-3 mb-3 d-block text-primary"></span>
            <h2 class="h4">More Jobs Every Day</h2>
            <p>On AngelHunt you will find a lot of job opportunities in all fields, easy and fast!</p>
            <p><a href="#">Read More <span class="icon-arrow-right small"></span></a></p>
          </div>
          <div class="text-center p-4 item" data-aos="fade">
            <span class="flaticon-wrench display-3 mb-3 d-block text-primary"></span>
            <h2 class="h4">Creative Jobs</h2>
            <p>You can find a part time job and work remotely besides your own job, and be part of a startup's success .</p>
            <p><a href="#">Read More <span class="icon-arrow-right small"></span></a></p>
          </div>
        </div>
        

    

          

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  
  <script src="js/mediaelement-and-player.min.js"></script>

  <script src="js/main.js"></script>
    

  <script>
      document.addEventListener('DOMContentLoaded', function() {
                var mediaElements = document.querySelectorAll('video, audio'), total = mediaElements.length;

                for (var i = 0; i < total; i++) {
                    new MediaElementPlayer(mediaElements[i], {
                        pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
                        shimScriptAccess: 'always',
                        success: function () {
                            var target = document.body.querySelectorAll('.player'), targetTotal = target.length;
                            for (var j = 0; j < targetTotal; j++) {
                                target[j].style.visibility = 'visible';
                            }
                  }
                });
                }
            });
    </script>


    <script>
      // This example displays an address form, using the autocomplete feature
      // of the Google Places API to help users fill in the information.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
          }
        }
      }

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
    </script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>


    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&libraries=places&callback=initAutocomplete"
        async defer></script>

  </body>
</html>