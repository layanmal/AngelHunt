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

$id=$_SESSION['id'];
$email=$_SESSION['email'];
$result=mysqli_query($conn,"SELECT * FROM registration WHERE email='$email'");
$retrieve=mysqli_fetch_array($result);
$firstname=$retrieve['firstname'];
$lastname=$retrieve['lastname'];


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

$result1=mysqli_query($conn,"SELECT following,idname FROM followers WHERE idname='$id'");
if (!$result1) {
  printf("Error: %s\n", mysqli_error($conn));
  exit();
}
 while($row1=mysqli_fetch_array($result1)){
   
     $count++;
 }
 $countlinks=0;
 $count1=0;
 $count2=0;
 $count3=0;
 $result2=mysqli_query($conn,"SELECT StartupName FROM startups WHERE startemail='$email'");
 if (!$result2){
  printf("Error: %s\n", mysqli_error($conn));
  exit();
}
 while($row2=mysqli_fetch_array($result2)){
   
     $count1++;
 }
 $result3=mysqli_query($conn,"SELECT companyname FROM investors WHERE startemail='$email'");
 if (!$result3){
  printf("Error: %s\n", mysqli_error($conn));
  exit();
}
 while($row3=mysqli_fetch_array($result3)){
   
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

 $countn2=0;
 $countn1=0;
 $result11=mysqli_query($conn,"SELECT * FROM notify3 WHERE email='$email' ");
$row11=mysqli_fetch_array($result11);
$title= $row11['job'];
$result12=mysqli_query($conn,"SELECT * FROM jobs WHERE title='$title'");
$countn2=$result12->num_rows;
 
$result9=mysqli_query($conn,"SELECT * FROM notify1 WHERE email='$email' || email='' ");
 
 $countn1=$result9->num_rows;

 $result10=mysqli_query($conn,"SELECT * FROM followers WHERE emailcomp='$email'  ");
 $countn3=$result10->num_rows;
 $countn=$countn1+$countn2+$countn3;
   
 
 
?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>AngelHunt</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->

  <!-- Bootstrap CSS File --><link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;700&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;700&display=swap" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.transitions.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">

  <!-- Nivo Slider Theme -->
  <link href="css/nivo-slider-theme.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css?4987" rel="stylesheet">
  <link href="css/styles.css?3987" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="css/responsive.css" rel="stylesheet">


  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <link href="asset/css/stylee.css" rel="stylesheet">

    <!-- Responsive Stylesheet File -->
    <link href="asset/css/responsive.css" rel="stylesheet">
    <link href="asset/css/util.css" rel="stylesheet">
  
    <!--  
    Stylesheets
    =============================================
    
    -->
    <!-- Default stylesheets-->
    <link href="assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Template specific stylesheets-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="assets/lib/animate.css/animate.css" rel="stylesheet">
    <link href="assets/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/lib/et-line-font/et-line-font.css" rel="stylesheet">
    <link href="assets/lib/flexslider/flexslider.css" rel="stylesheet">
    <link href="assets/lib/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="assets/lib/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
    <link href="assets/lib/simple-text-rotator/simpletextrotator.css" rel="stylesheet">
    <!-- Main stylesheet and color file-->
    <link href="assets/css/style.css" rel="stylesheet">
    <link id="color-scheme" href="assets/css/colors/default.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- drop down-->

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<link rel="icon" type="image/png" sizes="16x16" href="img/blog/logo3.png">

<style>
/* Dark background */

/*=====================================Slier============================================*/



.box {
    position:absolute;
    top:60%;
    left:100%;
    transform:translate(-50%,-80%);
    
}
.notifications {
  font-family: Arial, Helvetica, sans-serif !important ;;
  position:relative;
   width:50px;
    height:50px;
    background:#000;
    border-radius:30px;
    box-sizing:border-box;
    text-align:center;
    margin-top:80px;
  margin-right:100px;
    box-shadow:0 2px 5px rgba(0,0,0,.2);

}
.notifications:hover {
  
  position:relative;
  margin-right:380px;
  margin-top:300px;
    width:300px;
    height:auto;
    text-align:left;
    padding:0 15px;
    background:#333;
    
    border-bottom-left-radius:0;
    border-bottom-right-radius:0;
}
.notifications:hover .fa {
    color:#18d26e;
}
.notifications .fa {
    color:#cecece;
    line-height:60px;
    font-size:20px;
}
.notifications .num {
  position:absolute;
    top:0;
    right:-5px;
    width:25px;
    height:25px;
    border-radius:50%;
    background:#18d26e;
    color:#fff;
    line-height:25px;
    font-family:sans-serif;
    text-align:center;
}
.notifications:hover .num {
    position:relative;
    background:transparent;
    color:#fff;
    font-size:16px;
    top:-4px;
}
.notifications:hover .num:after {
    content:' Notification';
    font-size:16px;
}
.ul1 {
    position:absolute;
    left:0;
    top:50px;
    right:100px;
    margin:0;
    width:100%;
    background:#fff;
    box-shadow:0 5px 15px rgba(0,0,0,.5);
    padding:20px;
    box-sizing:border-box;
    border-bottom-left-radius:30px;
    border-bottom-right-radius:30px;
    display:none;
}
.notifications:hover .ul1 {
    display:block;
}

ul li:last-child {
    border-bottom:none;
   
}
.ul1 > li {
    list-style:none;
    
    border-bottom:1px solid rgba(0,0,0,.1);
    padding:8px 0;
    display:flex;
}
.ul1 li .icon {
    width:110px;
    height:50px; 
    background:#333;
    border-radius:50%;
    text-align:center;
    line-height:24px;
    margin-right:15px;
}
.ul1 > li .icon .fa {
  margin-top:15px;
  text-align:center;
    color:#18e26d;
    font-size:16px;
    line-height:24px;
}
.ul1 > li .text {
    position:relative;
    font-family:sans-serif;
    top:3px;
    cursor:pointer;
}
.ul1 > li:hover .text {
    font-weight:bold;
    color:#000;
}


input[type=search] {
  margin-top:9px;
	background: #555 url(http://hp-proliant.co.uk/qual_images/mob-search-icon.png) no-repeat 9px center;
	border: solid 1px #ccc;
	padding: 1px 11px 1px 1px;
	width: 70px;
}
input[type=search]:focus {
	width: 240px;
	background-color: #ccc;
	border-color: #333;
	border: solid 1px #fff;
}

</style>
</head>
<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
<div id="preloader"></div>

  <header>
    <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
      <main>
       <!-- <div class="page-loader">
          <div class="loader">Loading...</div>
        </div>-->
        <nav class="navbar navbar-custom navbar-fixed-top navbar-transparent" role="navigation" style="background-color: rgba(10, 10, 10,1);
      border: 0;
      border-radius: 0;
      z-index: 1000;
      font-family: 'Quicksand', sans-serif;
      text-transform: uppercase;
      letter-spacing: 3px;
      font-size: 11px;
      height:70px;
      transition: background, padding 0.4s ease-in-out 0s;">
          <div class="container">
            <div class="navbar-header">
              <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="index.html">AngelHunt</a>
            </div>
            <div class="box">
    <div class="notifications">
        <i class="fa fa-bell"></i>
        <span class="num"><?php echo $countn ?></span>
        <ul class="ul1">
          <?php $result9=mysqli_query($conn,"SELECT * FROM notify1 WHERE email='$email' || email='' ");
          while($row9=mysqli_fetch_array($result9)){ 
          if (!empty($row9['email'])){?>
            <li class="icon">
              
                <span class="icon"><i class="fa fa-user" ></i></span>
                <span class="text" style="margin-bottom:30px;"><a href="startup/personal.php?msg=<?php echo $row9['user'];?>" > <?php echo $row9['user']?></a> Nudged your company <a href="invest/validation2.php?msg=<?php echo $row9['company'];?>" > <?php echo $row9['company']?></a></span>
            </li>
          <?php }else{ ?>
            <li class="icon">
              
                <span class="icon"><i class="fa fa-user"></i></span>
                <span class="text"  style="  margin-bottom:30px;">a new company was created you may be intrested in <a href="searchs/validation.php?msg=<?php echo $row9['company'];?>" > <?php echo $row9['company']?></a></span>
            </li>
          <?php  }}?>
          <?php 
          while($row12=mysqli_fetch_array($result12)){ 
          ?>
            <li class="icon">
              
                <span class="icon"><i class="fa fa-user"></i></span>
                <span class="text"  style=" margin-bottom:30px;color:black"> <a href="jobfinder1/job-single.php?msg=1,<?php echo $row12['company'];?>" > <?php echo $row12['company']?> is offering a new job </a></span>
            </li>
          <?php } ?>
          <?php 

$result13=mysqli_query($conn,"SELECT * from followers where emailcomp = '$email' ");
while($row13=mysqli_fetch_array($result13)){ 
 $idname=$row13['idname'];
 $num=$row13['num'];
 $result14=mysqli_query($conn,"SELECT * FROM registration where id='$idname' ");
 if($result14->num_rows >0){
      while($row14=mysqli_fetch_array($result14)){ 
         
         $name= $row14['firstname']." ".$row14['lastname'];
?>
  <li class="icon">
      <span class="icon"><i class="fa fa-user"></i></span>
      <?php if($num=='1'){?>
      <span class="text"  style=" margin-bottom:30px;color:black"> <a href="invest/connect.php?msg=<?php echo $name ?>"> <?php echo $name?> </a>has followed your company<a href="searchs/validation.php?msg= <?php echo $row13['following']?>"> <?php echo $row13['following']?></a></span>
      <?php }elseif($num=='1'){?>
      <span class="text"  style=" margin-bottom:30px;color:black"> <a href="invest/connect.php?msg=<?php echo $name ?>"> <?php echo $name?></a> has followed your company <a href="invest/validation2.php?msg= <?php echo $row13['following']?>"> <?php echo $row13['following']?></a></span>
      <?php }else{?>
           <span class="text"  style=" margin-bottom:30px;color:black"> <a href="invest/connect.php?msg=<?php echo $name ?>"> <?php echo $name?> </a>has followed your company <a href="invest/validation3.php?msg= <?php echo $row13['following']?>"> <?php echo $row13['following']?></a></span>
      <?php }?>  
    </li>
<?php }}} ?>
        </ul>
    </div>
</div>
            <div class="collapse navbar-collapse" id="custom-collapse">
              <ul class="nav navbar-nav navbar-right">
    
   <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Community</a>
                  <ul class="dropdown-menu">
                    <li ><a href="searchs/startup.php">Apply For Funding</a>
                  
                    </li>
                    <li ><a  href="invest/connect.php?msg=''">Connect to people</a>
                  
                  </li>
               
                   
                  </ul>
                  
                </li>
                <li ><a  href="jobfinder1/jobmain.php?msg=''" > Find A Job</a>
                 
                 </li>
                 <li ><a href="miniblog1/main.php">Announcements</a>
         
         </li>
         <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Create</a>
                  <ul class="dropdown-menu">
                    <li ><a href="startup/createstartup.php">A startup</a>
                  
                    </li>
                    <li ><a  href="startup/investor.php"> An investor</a>
                  
                  </li>
                  <li ><a href="startup/createco.php">a corporate</a>
                  
                  </li>
                   
                  </ul>
                  
                </li>
                <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Directories</a>
                  <ul class="dropdown-menu">
                    <li ><a href="searchs/startup.php"> Startups</a>
                  
                    </li>
                    <li ><a  href="invest/corporatesmain.php"> Corporates</a>
                  
                  </li>
                  <li ><a href="invest/corporatesmain.php"> Investors</a>

                  </li>                 
                  </ul>                 
                </li> 
                <li ><a  href="#" >Home</a>
          
                </li>
                             <li class="dropdown"><a class="dropdown-toggle" href="hi/firstpage.php" data-toggle="dropdown">More</a>
                  <ul class="dropdown-menu">
                    <li><a href="hi/firstpage.php#contact">Contact Form</a></li>
                    <li><a href="documentation.html#gmap">Google Map</a></li>
                    <li><a href="documentation.html#changelog">Log out</a></li>
                  </ul>
                </li>
              </ul>
         

            </div>
          </div>
        </nav>
  <div class="header-bg page-area">

    
    <!--<div class="home-overly"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="slider-content text-center">
            <div class="header-bottom">
              <div class="layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
                <h1 class="title2">My Blog</h1>
              </div>
              <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
                <h2 class="title3">Profesional Blog Page</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>-->
  </div>
  <!-- END Header -->
  <div class="blog-page area-padding" style="font-family: 'Quicksand', sans-serif;">
    <div class="container"style="font-family: 'Quicksand', sans-serif;">
      <div class="row"style="font-family: 'Quicksand', sans-serif;">
        
          <!--<div class="container">
					<div class="row profile">-->	
				


          <div class="col-md-3">
    <div class="profile-sidebar ">
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
      ?>
        </div>
        <div class="profile-usertitle-job">
         
        </div>
      </div>
      <!-- END SIDEBAR USER TITLE -->
      <!-- SIDEBAR BUTTONS -->
      
      <!-- END SIDEBAR BUTTONS -->
      <!-- SIDEBAR MENU -->
      <div class="profile-usermenu">
        <ul class="nav">
          <li class="active">
            <a href="blog.php">
            <i class="glyphicon "></i>
          Home </a>
          </li>
          <li>
            <a href="startup/edit.php?msg=''">
            <i class="glyphicon "></i>
            My Profile </a>
          </li>
          <li>
            <a href="startup/announcment-profile.php?msg=<?php echo $id?>">
            <i class="glyphicon "></i>
            Annoucements <span style="float:right;font-size:15px;font-weight:600;color:#18de6e"><?php echo $countannounc?></span> </a>
          </li>
          <li>
            <a href="startup/followings.php?msg=<?php echo $id?>">
            <i class="glyphicon "></i>
            Followings<span style="float:right;font-size:15px;font-weight:600;color:#18de6e"><?php echo $count?></span> </a></li>
          <li>
            <a href="startup/links.php?msg=<?php echo $id?>" >
            <i class="glyphicon "></i>
           Links <span style="float:right;font-size:15px;font-weight:600;color:#18de6e"><?php echo $countlinks?></span> </a>
          </li>
          <li>
            <a href="#">
            <i class="glyphicon "></i>
            Help </a>
          </li>
          <li>
            <a href="logout.php">
            <i class="glyphicon "></i>
            Logout </a>
          </li>
        </ul>
      </div>
      <!-- END MENU -->
    </div>
  </div>
					<!--</div>
				</div>-->
        
        <!-- End left sidebar -->
        <!-- Start single blog -->
        
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="row">
         
          <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                <h2 id="latestn" Style="margin-left:3px; margin-top:7px;">Latest News</h2>
                  <hr >
                  <a href="article1.html">
											<img src="img/blog/eg.jpg" alt="">
										</a>
                </div>
                <div class="blog-meta">
                  <span class="comments-type">
											<i class="fa fa-comment-o"></i>
											<a href="#">6 Comments</a>
										</span>
                  <span class="date-type">
											<i class="fa fa-calendar"></i> April 8,2020
										</span>
                </div>
                <div class="blog-text">
                  <h4>
                  <B>		<a href="article1.html" style="font-weight:900px;"> Stakeholders offer innovative support for Egypt’s entrepreneurs
</a></b>
										</h4>
                  <p>
                  From financing to business and psychological support, the stakeholders are using an array of online tools and functions to push the entrepreneurial ecosystem forward.
Stakeholders in Egypt’s entrepreneurship ecosystem are now offering numerous opportunities and support mechanisms for local start-ups grappling with slowing markets due to the ongoing coronavirus (COVID-19) pandemic.



                  </p>
                </div>
                <span>
										<a href="article1.html" class="section-scroll btn-border-w btn-circle btn">Read more</a>
									</span>
              </div>
            </div>

            <!-- End single blog -->
         
            <!-- Start single blog -->
           <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="blog-details.html">
											<img src="img/blog/fintik.jpg" alt="">
										</a>
                </div>
                <div class="blog-meta">
                  <span class="comments-type">
											<i class="fa fa-comment-o"></i>
											<a href="#">13 comments</a>
										</span>
                  <span class="date-type">
											<i class="fa fa-calendar"></i> April 8,2020
										</span>
                </div>
                <div class="blog-text">
                  <h4>
                  <B>		<a href="#" style="font-weight:900px;"> FinTech startup Mamo Pay raises $1.5M, prepares to revolutionise MENA payments
</a></b>
										</h4>
                  <p>
                  Mamo Pay, the peer-to-peer payments app that users will love for its simplicity and utility, has raised $1.5M from investors supporting its efforts with partners and regulators in the run-up to launch this year.
                  Global Founders Capital (GFC) led the investment round, with Global Ventures, VentureSouq, MSA Capital, Dubai Angel Investors (DAI), 500 Startups, and angel investors also participating.



                  </p>
                </div>
                <span>
										<a href="article3.html" class="section-scroll btn-border-w btn-circle btn">Read more</a>
									</span>
              </div>
            </div>
            
            <!-- End single blog -->
           <!-- <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="blog-details.html">
											<img src="img/blog/4.jpg" alt="">
										</a>
                </div>
                <div class="blog-meta">
                  <span class="comments-type">
											<i class="fa fa-comment-o"></i>
											<a href="#">1 comments</a>
										</span>
                  <span class="date-type">
											<i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
										</span>
                </div>
                <div class="blog-text">
                  <h4>
											<a href="#">Post my imagine Items</a>
										</h4>
                  <p>
                    Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit.
                  </p>
                </div>
                <span>
										<a href="blog-details.html" class="ready-btn">Read more</a>
									</span>
              </div>
            </div>-->
            <!-- Start single blog -->
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="blog-details.html">
											<img src="img/blog/banot.jpg" alt="">
										</a>
                </div>
                <div class="blog-meta">
                  <span class="comments-type">
											<i class="fa fa-comment-o"></i>
											<a href="#">10 comments</a>
										</span>
                  <span class="date-type">
											<i class="fa fa-calendar"></i>April 8,2020
										</span>
                </div>
                <div class="blog-text">
                  <h4>
                  <B>		<a href="#" style="font-weight:900px;">New strategic partnership between two startups to help support women in business in MENA region
</a></b>
										</h4>
                  <p>
                  Two start-ups in the UAE have joined forces to create a strategic partnership in helping women across the region to advance their skills, their business ideas, and their careers.

</p>

<p>Nisa Soul, founded by Sara Mohamed has announced a strategic partnership with Signature Network founded by Mounir Berhmani.

</p>
<p>The two UAE based companies are set to provide support and practical resources to women across the region in order to help them access the best tools, best mentorship and services in order to open businesses, pivot current businesses, find motivation, mental balance and more.


</p>
                </div>
                <span>
										<a href="article4.html" class="section-scroll btn-border-w btn-circle btn">Read more</a>
									</span>
              </div>
            </div>
            
            <!-- End single blog -->
            <div class="blog-pagination">
              <ul class="pagination">
                <li><a href="#">&lt;</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
        
     
    <div class="col-md-3 col-sm-3 col-xs-12">
     <div class="single-blog-page">
        <!-- recent start -->
        <div class="right-blog">
        <h4><b>recent post</b></h4>
                <div class="recent-post">
                <!-- start single post -->
                <div class="recent-single-post">
                  <div class="post-img">
                    <a href="#">
                         <img src="img/blog/banot.jpg" alt="">
                      </a>
                  </div>
                  <div class="pst-content">
                    <p><a href="article4.html" > New strategic partnership between two startups to help support women in business in MENA region
                  </a></p>
                  </div>
                </div>
                <!-- End single post -->
                <!-- start single post -->
                <div class="recent-single-post">
                  <div class="post-img">
                    <a href="#">
                         <img src="img/blog/fintik.jpg" alt="">
                      </a>
                  </div>
                  <div class="pst-content">
                    <p><a href="article3.html"> FinTech startup Mamo Pay raises $1.5M, prepares to revolutionise MENA payments
                  </a></p>
                  </div>
                </div>
                <!-- End single post -->
                <!-- start single post -->
                <div class="recent-single-post">
                  <div class="post-img">
                    <a href="#">
                         <img src="img/blog/khaleeji.jpg" alt="">
                      </a>
                  </div>
                  <div class="pst-content">
                    <p><a href="#"> USD 100M ADIO investment brings four global AgTech pioneers to develop next generation agriculture in Abu Dhabi
                      .</a></p>
                  </div>
                </div>
                <!-- End single post -->
                <!-- start single post -->
                <div class="recent-single-post">
                  <div class="post-img">
                    <a href="article2.html">
                         <img src="img/blog/6.jpg" alt="">
                      </a>
                  </div>
                  <div class="pst-content">
                    <p><a href="article1.html"> Stakeholders offer innovative support for Egypt’s entrepreneurship
                  </a></p>
              </div>
            </div>
            <!-- End single post -->
            <!-- start single post 
            <div class="recent-single-post">
              <div class="post-img1">
                <a href="#">
                     <img src="img/blog/4.jpg" alt="">
                  </a>
              </div>
              <div class="pst-content1">
                <p><a href="#"> Redug Lerse dolor sit amet consect adipis elit.</a></p>
              </div>
            </div>
            <!-- End single post -->
             <!-- start single post 
             <div class="recent-single-post">
              <div class="post-img1">
                <a href="#">
                     <img src="img/blog/4.jpg" alt="">
                  </a>
              </div>
              <div class="pst-content1">
                <p><a href="#"> Redug Lerse dolor sit amet consect adipis elit.</a></p>
              </div>
            </div>
            <!-- End single post -->
        
          </div>
        </div>
        <!-- recent end -->
      </div>
      <div class="single-blog-page">
        <div class="right-blog1">
          <h4><b>Categories</b></h4>
          <ul>
            <li>
              <a href="#">Atrificial intelligence </a>
            </li>
            <li>
              <a href="#">Blockchain</a>
            </li>
            <li>
              <a href="#">E-commerce</a>
            </li>
            <li>
              <a href="#">Education</a>
            </li>
            <li>
              <a href="#">Finance/Banking</a>
            </li>
            <li>
              <a href="#">Gaming</a>
            </li>
            <li>
              <a href="#">Advertising </a>
            </li>
            <li>
              <a href="#"> See More </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="single-blog-page">
        <div class="right-blog2">
          <h4>archive</h4>
          <ul>
            <li>
              <a href="#">30 May 2020</a>
            </li>
            <li>
              <a href="#">29 May 2020</a>
            </li>
            <li>
              <a href="#">13 May 2020</a>
            </li>
            <li>
              <a href="#">10 May 2020</a>
            </li>
            <li>
              <a href="#">09 May 2020</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="single-blog-page">
        <div class="right-tags blog-tags">
          <div class="popular-tag right-side-tags right-blog3">
            <h4>popular tags</h4>
            <ul>
              <li>
                <a href="#">يا مسافر </a>
              </li>
              <li>
                <a href="#">Paltel</a>
              </li>
              <li>
                <a href="#">Edubook</a>
              </li>
              <li>
                <a href="#">wazza</a>
              </li>
              <li>
                <a href="#">MockApp</a>
              </li>
              <li>
                <a href="#">webteb</a>
              </li>
              <li>
                <a href="#">doroob</a>
              </li>
              <li>
                <a href="#">Gamiphy</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div> 
   </div>
 </div>
  
  <!-- End Blog Area -->
  

     
  <div class="clearfix"></div>

  <!-- Start Footer bottom Area -->
  <footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h2><span>Angel</span>Hunt</h2>
                </div>

                <p>Sed ut perspiciatis unde omnis iste natsus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
                <div class="footer-icons">
                  <ul>
                    <li>
                      <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-google"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-pinterest"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>information</h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                </p>
                <div class="footer-contacts">
                  <p><span>Tel:</span> +123 456 789</p>
                  <p><span>Email:</span> contact@example.com</p>
                  <p><span>Working Hours:</span> 9am-5pm</p>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Instagram</h4>
                <div class="flicker-img">
                  <a href="#"><img src="img/portfolio/1.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/2.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/3.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/4.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/5.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/6.jpg" alt=""></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/knob/jquery.knob.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/parallax/parallax.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
  <script src="lib/appear/jquery.appear.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <script src="js/main.js"></script>
</body>

</html>