
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

if($myArray['0'] === "Type" and $myArray['1'] === "StartupName" and $myArray['2']==="loc" ){
    
     if($myArray['3'] !="NULL" and $myArray['4'] ==="NULL" and $myArray['5'] ==="NULL"){
        
           $result = mysqli_query($conn,"SELECT * FROM  startups WHERE Type='$myArray[3]'") or die('Invalid query: ' . mysqli_error($conn));
      } 
      
      else if($myArray['3'] === "NULL" and $myArray['4'] ==="NULL" and $myArray['5']!="NULL"){
     $result = mysqli_query($conn,"SELECT * FROM  startups WHERE Country='$myArray[5]'") or die('Invalid query: ' . mysqli_error($conn));
    }
      else if($myArray['3'] === "NULL" and $myArray['4'] !="NULL" and $myArray['5'] === "NULL"){
      $result = mysqli_query($conn,"SELECT * FROM  startups WHERE StartupName='$myArray[4]'") or die('Invalid query: ' . mysqli_error($conn));
      }

    else if($myArray['3'] ==="NULL" and $myArray['4'] !="NULL" and $myArray['5'] !="NULL"){
    $result = mysqli_query($conn,"SELECT * FROM  startups WHERE StartupName='$myArray[4]' and  Country='$myArray[5]'") or die('Invalid query: ' . mysqli_error($conn));
    }
   else if($myArray['3'] !="NULL" and $myArray['4'] ==="NULL" and $myArray['5'] !="NULL"){
   $result = mysqli_query($conn,"SELECT * FROM  startups WHERE Type='$myArray[3]' and  Country='$myArray[5]'") or die('Invalid query: ' . mysqli_error($conn));
   }
  else if($myArray['3'] !="NULL" and $myArray['4'] !="NULL" and $myArray['5'] ==="NULL"){
   $result = mysqli_query($conn,"SELECT * FROM  startups WHERE Type='$myArray[3]' and  StartupName='$myArray[4]'") or die('Invalid query: ' . mysqli_error($conn));
   }

  else if($myArray['3'] !="NULL" and $myArray['4'] !="NULL" and $myArray['5'] !="NULL"){
   $result = mysqli_query($conn,"SELECT * FROM  startups WHERE Type='$myArray[3]' and StartupName='$myArray[4]' and  Country='$myArray[5]'") or die('Invalid query: ' . mysqli_error($conn));
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
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/rangeslider.css">
      <link rel="stylesheet" href="css/searchstyle.css">

    <link rel="stylesheet" href="css/searchstyless.css">  
    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
/*=====================================Slier============================================*/


header .carousel-inner .item
{
    height: 100vh;
}
.carousel-caption
{
    padding-bottom: 130px;
}
.carousel-caption h1
{
    font-size: 70px;
    font-weight: 1000;
    text-shadow: 3px 3px #15b000;;
    text-transform: uppercase;
    animation-delay: 1s;
    animation-duration: 2s;
}
.carousel-caption p
{
    animation-delay: 1s;
}

.carousel-caption .btn
{
    animation-delay: 1s;
    border-radius: 20px;
    background-color: transparent;
    border: 2px solid white;
    color: white;
    margin-top: 20px;
    animation-duration: 2s;
}

.carousel-control-prev {
    width: 48px;
    height: 48px;
    top: auto;
    bottom: 0;
    font-size: 2rem;
}
.carousel-control-next {
    width: 48px;
    height: 48px;
    top: auto;
    bottom: 0;
    font-size: 2rem;
}
.mama li >a{
      color:white;
      padding:10px;
      margin:5px;
  
    }
/*=====================================Slier============================================*/



  </style>
  </head>

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
                <li style=" margin-left:20px;margin-top:10px; font-size:10px;" ><a  href="startup.php?msg=''" >Startups</a>
              
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


    <div class="site-blocks-cover overlay" style="height:500px;background-image: url(images/hero_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10">
            
            
            <div class="row justify-content-center mb-4">
              <div class="col-md-12 text-center">
                <h1 data-aos="fade-up">Hunt your Startup Attraction </h1>
              
              </div>
            </div>

        

          </div>
        </div>
      </div>
    </div>  


    <div class="site-section" style="height:auto;background-color:#EDEAE0;" data-aos="fade">
      <div class="container"style="background-color:#EDEAE0;">
    <div class="slideshow-container"style="background-color:#EDEAE0;">
      <div class="col-md-7 ">
        <h2 class="font-weight-light"><b>Hunt your Startup Attraction!</b></h2>
      </div>
      <div class="form-search-wrap p-2" data-aos="fade-up" data-aos-delay="200">
      
        <form method="post" action="tests.php">
          <div class="row align-items-center">
            <div class="col-lg-12 col-xl-4 no-sm-border border-right">
              <input name="startn" type="text" class="form-control" placeholder="Search By Name ">
            </div>
            <div class="col-lg-12 col-xl-3 no-sm-border border-right">
              <div class="wrap-icon">
                <span class="icon icon-room"></span>
                <input name="loc" type="text" class="form-control" placeholder="Location">
              </div>
              
            </div>
            <div class="col-lg-12 col-xl-3">
              <div class="select-wrap">
                <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                <select name ="cat" class="form-control" name="" id="">
                <option value="">All Categories</option>
                        <option value="Construction & Real Estate">Construction & Real Estate</option>
                        <option value="Transportation">Transportation</option>
                        <option value="Energy & Water">Energy &amp; Water </option>
                        <option value="Healthcare">Healthcare</option>
                        <option value="E-commerce">E-commerce</option>
                        <option value="Marketing & Advertising">Marketing &amp; Advertising </option>
                        <option value="Education">Education</option>
               
                </select>
              </div>
            </div>
            <div class="col-lg-12 col-xl-2 ml-auto text-right">
              <input type="submit" name="submit"class="btn btn-primary" style=" background-color:#18d26e; color:white; font-size:16px; opacity:1;
            "value="submit">
            </div>
            
          </div>
        </form>
      </div>
      <div class="site-section" style="background-color:#EDEAE0;"data-aos="fade">
        <div class="container">
      <div class="slideshow-container">
  
        <!-- Full-width images with number and caption text -->
        <div class="mySlides">
          <div class="numbertext">1 / 3</div>
          <div class="row justify-content-center mb-5">
        <!--    <div class="col-md-7 text-center border-primary">
              <h2 class="font-weight-light text-primary" style="font-size:50px;margin-top:20px;">All Categories</h2>
              <p class="color-black-opacity-5"></p>
            </div>
          </div>-->
  
          <div class="row">
          <?php  while ($row = mysqli_fetch_assoc($result)){
          ?>
            <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">
              
              <div  style="margin-top:15px"class="listing-item">
                <div class="listing-image">
                <?php  if(!empty($row['Pic'])){ echo '<img  "class="img-fluid mx-auto" src="data:image/jpeg; base64,'.base64_encode( $row['Pic']).'" />';}else{
                 echo '<img  "class="img-fluid mx-auto" src="data:image/jpeg; base64,'.base64_encode( $row['imageType']).'" />'; }?>
 
                </div>
                <div class="listing-item-content">
                <a ] class="bookmark" data-toggle="tooltip" data-placement="left" title="Follow"><span class="icon-plus"></span></a>
                <a class="px-3 mb-3 category" ><?php echo $row['Type'] ?></a>
                <h2 class="mb-1"><a href="validation.php?msg=<?php echo $row['StartupName']?>"><?php echo $row['StartupName'] ?></a></h2>
                  
                <span class="address"><?php echo $row['Country'];echo $row['City'] ?></span>
                </div>
              </div>
            </div>
            <?php }?>
            <!-- <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">
              
              <div class="listing-item">
                 <div class="listing-image">
                  <img src="images/umakkee.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="listing-item-content">
                  <a href="#" class="bookmark" data-toggle="tooltip" data-placement="left" title="Follow"><span class="icon-plus"></span></a>
  
                  <a class="px-3 mb-3 category" href="#">Coworking Space</a>
                  <h2 class="mb-1"><a href="#">uMake يوميك</a></h2>
                  <span class="address">Ramallah,Palestine</span>
                </div>
              </div>
  
            </div>
            <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">
              
              <div class="listing-item">
                <div class="listing-image">
                  <img src="images/inggez.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="listing-item-content">
                  <a href="#" class="bookmark" data-toggle="tooltip" data-placement="left" title="Follow"><span class="icon-plus"></span></a>
                  <a class="px-3 mb-3 category" href="#">Healthcare</a>
                  <h2 class="mb-1"><a href="#">Inggez انجز</a></h2>
                  <span class="address">Ramallah, Palestine</span>
                </div>
              </div>
  
            </div>
  
            <div class="row" style="margin-top: 45px; margin-left: 0px; margin-right:0px">
              <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">
                
                <div class="listing-item">
                  <div class="listing-image">
                    <img src="images/dozan.jpg" alt="Image" class="img-fluid">
                  </div>
                  <div class="listing-item-content">
                    <a href="#" class="bookmark" data-toggle="tooltip" data-placement="left" title="Follow"><span class="icon-plus"></span></a>
                    <a class="px-3 mb-3 category" href="#">Education</a>
                    <h2 class="mb-1"><a href="#">Cerati سيرتي</a></h2>
                    <span class="address">Ramallah, Palestine</span>
                  </div>
                </div>
    
              </div>
              <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">
                
                <div class="listing-item">
                   <div class="listing-image">
                    <img src="images/yamsafer.jpg" alt="Image" class="img-fluid">
                  </div>
                  <div class="listing-item-content">
                    <a href="#" class="bookmark" data-toggle="tooltip" data-placement="left" title="Follow"><span class="icon-plus"></span></a>
    
                    <a class="px-3 mb-3 category" href="#">Coworking Space</a>
                    <h2 class="mb-1"><a href="#">uMake يوميك</a></h2>
                    <span class="address">Ramallah,Palestine</span>
                  </div>
                </div>
    
              </div>
              <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">
                
                <div class="listing-item">
                  <div class="listing-image">
                    <img src="images/beitibeitak.jpg" alt="Image" class="img-fluid">
                  </div>
                  <div class="listing-item-content">
                    <a href="#" class="bookmark" data-toggle="tooltip" data-placement="left" title="Follow"><span class="icon-plus"></span></a>
                    <a class="px-3 mb-3 category" href="#">Healthcare</a>
                    <h2 class="mb-1"><a href="#">Inggez انجز</a></h2>
                    <span class="address">Ramallah, Palestine</span>
                  </div>
                </div>
    
              </div>        
            </div>
  
  
            
            <div class="row" style="margin-top: 45px; margin-left: 0px; margin-right:0px">
              <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">
                
                <div class="listing-item">
                  <div class="listing-image">
                    <img src="images/toothpic.jpg" alt="Image" class="img-fluid">
                  </div>
                  <div class="listing-item-content">
                    <a href="#" class="bookmark" data-toggle="tooltip" data-placement="left" title="Follow"><span class="icon-plus"></span></a>
                    <a class="px-3 mb-3 category" href="#">Education</a>
                    <h2 class="mb-1"><a href="#">Cerati سيرتي</a></h2>
                    <span class="address">Ramallah, Palestine</span>
                  </div>
                </div>
    
              </div>
              <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">
                
                <div class="listing-item">
                   <div class="listing-image">
                    <img src="images/receet.jpg" alt="Image" class="img-fluid">
                  </div>
                  <div class="listing-item-content">
                    <a href="#" class="bookmark" data-toggle="tooltip" data-placement="left" title="Follow"><span class="icon-plus"></span></a>
    
                    <a class="px-3 mb-3 category" href="#">Coworking Space</a>
                    <h2 class="mb-1"><a href="#">uMake يوميك</a></h2>
                    <span class="address">Ramallah,Palestine</span>
                  </div>
                </div>
    
              </div>
              <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">
                
                <div class="listing-item">
                  <div class="listing-image">
                    <img src="images/sun.png" alt="Image" class="img-fluid">
                  </div>
                  <div class="listing-item-content">
                    <a href="#" class="bookmark" data-toggle="tooltip" data-placement="left" title="Follow"><span class="icon-plus"></span></a>
                    <a class="px-3 mb-3 category" href="#">Healthcare</a>
                    <h2 class="mb-1"><a href="#">Inggez انجز</a></h2>
                    <span class="address">Ramallah, Palestine</span>
                  </div>
                </div>
    
              </div>        
            </div>
            
            <div class="row" style="margin-top: 45px; margin-left: 0px; margin-right:0px">
              <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">
                
                <div class="listing-item">
                  <div class="listing-image">
                    <img src="images/doroob.png" alt="Image" class="img-fluid">
                  </div>
                  <div class="listing-item-content">
                    <a href="#" class="bookmark" data-toggle="tooltip" data-placement="left" title="Follow"><span class="icon-plus"></span></a>
                    <a class="px-3 mb-3 category" href="#">Education</a>
                    <h2 class="mb-1"><a href="#">Cerati سيرتي</a></h2>
                    <span class="address">Ramallah, Palestine</span>
                  </div>
                </div>
    
              </div>
              <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">
                
                <div class="listing-item">
                   <div class="listing-image">
                    <img src="images/lyv.jpg" alt="Image" class="img-fluid">
                  </div>
                  <div class="listing-item-content">
                    <a href="#" class="bookmark" data-toggle="tooltip" data-placement="left" title="Follow"><span class="icon-plus"></span></a>
    
                    <a class="px-3 mb-3 category" href="#">Coworking Space</a>
                    <h2 class="mb-1"><a href="#">uMake يوميك</a></h2>
                    <span class="address">Ramallah,Palestine</span>
                  </div>
                </div>
    
              </div>
              <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">
                
                <div class="listing-item">
                  <div class="listing-image">
                    <img src="images/abwab.jpg" alt="Image" class="img-fluid">
                  </div>
                  <div class="listing-item-content">
                    <a href="#" class="bookmark" data-toggle="tooltip" data-placement="left" title="Follow"><span class="icon-plus"></span></a>
                    <a class="px-3 mb-3 category" href="#">Healthcare</a>
                    <h2 class="mb-1"><a href="#">Inggez انجز</a></h2>
                    <span class="address">Ramallah, Palestine</span>
                  </div>
                  
                </div>
    
              </div>    
            </div>-->
          
        </div>
      </div> 
             <div class="mySlides">
          <div class="numbertext">2 / 3</div>
          <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center border-primary">
              <h2 class="font-weight-light text-primary">Most Visited Startups</h2>
              <p class="color-black-opacity-5"></p>
            </div>
          </div>
  
          <div class="row">
            <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">
              
              <div class="listing-item">
                <div class="listing-image">
                  <img src="images/yamsafer.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="listing-item-content">
                  <a href="#" class="bookmark" data-toggle="tooltip" data-placement="left" title="Follow"><span class="icon-plus"></span></a>
                  <a class="px-3 mb-3 category" href="#">E-Commerce</a>
                  <h2 class="mb-1"><a href="#">yamsafer يا مسافر</a></h2>
                  <span class="address">Ramallah, Palestine</span>
                </div>
              </div>
  
            </div>
            <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">
              
              <div class="listing-item">
                 <div class="listing-image">
                  <img src="images/receet.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="listing-item-content">
                  <a href="#" class="bookmark" data-toggle="tooltip" data-placement="left" title="Follow"><span class="icon-plus"></span></a>
  
                  <a class="px-3 mb-3 category" href="#">Technology</a>
                  <h2 class="mb-1"><a href="#">Receet</a></h2>
                  <span class="address">Ohio,United States</span>
                </div>
              </div>
  
            </div>
            <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">
              
              <div class="listing-item">
                <div class="listing-image">
                  <img src="images/doroob.png" alt="Image" class="img-fluid">
                </div>
                <div class="listing-item-content">
                  <a href="#" class="bookmark" data-toggle="tooltip" data-placement="left" title="Follow"><span class="icon-plus"></span></a>
                  <a class="px-3 mb-3 category" href="#">Transportation</a>
                  <h2 class="mb-1"><a href="#">Doroob Navigation دروب</a></h2>
                  <span class="address">Ramallah, Palestine</span>
                </div>
              </div>
  
            </div>
  
          </div>
        </div>
      
        <div class="mySlides ">
          <div class="numbertext">3 / 3</div>
          <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center border-primary">
              <h2 class="font-weight-light text-primary">Most Visited Startups</h2>
              <p class="color-black-opacity-5"></p>
            </div>
          </div>
  
          <div class="row">
            <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">
              
              <div class="listing-item">
                <div class="listing-image">
                  <img src="images/sun.png" alt="Image" class="img-fluid">
                </div>
                <div class="listing-item-content">
                  <a href="#" class="bookmark" data-toggle="tooltip" data-placement="left" title="Follow"><span class="icon-plus"></span></a>
                  <a class="px-3 mb-3 category" href="#">Energy & Water</a>
                  <h2 class="mb-1"><a href="#">SunBox</a></h2>
                  <span class="address">Gaza, Palestine</span>
                </div>
              </div>
  
            </div>
           <!-- <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">
              
              <div class="listing-item">
                 <div class="listing-image">
                  <img src="images/umakkee.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="listing-item-content">
                  <a href="#" class="bookmark" data-toggle="tooltip" data-placement="left" title="Follow"><span class="icon-plus"></span></a>
  
                  <a class="px-3 mb-3 category" href="#">Coworking Space</a>
                  <h2 class="mb-1"><a href="#">uMake يوميك</a></h2>
                  <span class="address">Ramallah,Palestine</span>
                </div>
              </div>
  
            </div>
            <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">
              
              <div class="listing-item">
                <div class="listing-image">
                  <img src="images/inggez.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="listing-item-content">
                  <a href="#" class="bookmark" data-toggle="tooltip" data-placement="left" title="Follow"><span class="icon-plus"></span></a>
                  <a class="px-3 mb-3 category" href="#">Healthcare</a>
                  <h2 class="mb-1"><a href="#">Inggez انجز</a></h2>
                  <span class="address">Ramallah, Palestine</span>
                </div>
              </div>
            -->
            </div>
          </div>
        </div>
      
        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
      <br>
      
      <!-- The dots/circles -->
      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
      </div>
        </div>
      </div>
  
      
      <div class="site-section" style="background-color:#EDEAE0;">
        <div class="container">
          <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center border-primary">
              <h2 class="font-weight-light text-primary">Popular Categories</h2>
              <p class="color-black-opacity-5"></p>
            </div>
          </div>
  
          <div class="row align-items-stretch">
            <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
              <a href="#" class="popular-category h-100">
                <span class="icon"><span class="fas fa-heartbeat"></span></span>
                <span class="caption mb-2 d-block">Healthcare</span>
                <span class="number"></span>
              </a>
            </div>
            <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
              <a href="#" class="popular-category h-100">
                <span class="icon"><span class="fas fa-user-graduate"></span></span>
                <span class="caption mb-2 d-block">Education</span>
                <span class="number"></span>
              </a>
            </div>
            <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
              <a href="#" class="popular-category h-100">
                <span class="icon"><span class="fas fa-ad"></span></span>
                <span class="caption mb-2 d-block">Marketing & Advertising</span>
                <span class="number"></span>
              </a>
            </div>
            <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
              <a href="#" class="popular-category h-100">
                <span class="icon"><span class="fas fa-tools"></span></span>
                <span class="caption mb-2 d-block">Construction & Real Estate</span>
                <span class="number"></span>
              </a>
            </div>
            <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
              <a href="#" class="popular-category h-100">
                <span class="icon"><span class="fab fa-stripe-s"></span></span>
                <span class="caption mb-2 d-block">E-commerce</span>
                <span class="number"></span>
              </a>
            </div>
            <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
              <a href="#" class="popular-category h-100">
                <span class="icon"><span class="fas fa-solar-panel"></span></span>
                <span class="caption mb-2 d-block">Energy & Water</span>
                <span class="number"></span>
              </a>
            </div>
            <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
              <a href="#" class="popular-category h-100">
                <span class="icon"><span class="fas fa-bus-alt"></span></span>
                <span class="caption mb-2 d-block">Transportation</span>
                <span class="number"></span>
              </a>
          </div>
          <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
            <a href="#" class="popular-category h-100">
              <span class="icon"><span class="fas fa-wifi"></i></span></span>
              <span class="caption mb-2 d-block">Technology</span>
              <span class="number"></span>
            </a>
        </div>
        <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
          <a href="#" class="popular-category h-100">
            <span class="icon"><span class="fas fa-tractor"></span></span>
            <span class="caption mb-2 d-block">Agriculture</span>
            <span class="number"></span>
            </a>
      </div>
      <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
        <a href="#" class="popular-category h-100">
          <span class="icon"><span class="fas fa-robot"></span></span>
          <span class="caption mb-2 d-block">Robotics</span>
          <span class="number"></span>
          </a>
          
    </div>
    <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
      <a href="#" class="popular-category h-100">
        <span class="icon"><span class="fas fa-gamepad"></span></span>
        <span class="caption mb-2 d-block">Gaming</span>
        <span class="number"></span>
        </a>
  </div>
  <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
    <a href="#" class="popular-category h-100">
      <span class="icon"><span class="fas fa-user-tie"></span></span>
      <span class="caption mb-2 d-block">Human Resources</span>
      <span class="number"></span>
      </a>
  </div>
        </div>
        </div>
      </div>
        
    
    
  
  
  
      <div class="site-section">
        <div class="container">
          <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center border-primary">
              <h2 class="font-weight-light text-primary">Our Blog</h2>
              <p class="color-black-opacity-5">See Our Daily News &amp; Updates</p>
            </div>
          </div>
          <div class="row mb-3 align-items-stretch">
            <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
              <div class="h-entry">
                <img src="images/m.png" alt="Image" class="img-fluid">
                <h2 class="font-size-regular"><a href="#">COVID-19's Reshaping of Market Dynamics - Lessons from 10 Weeks in the Future
                </a></h2>
                <div class="meta mb-4"><b>by MAGNITT</b> <span class="mx-2">&bullet;</span> <b>April 8, 2020 at 2:00 pm</b> <span class="mx-2">&bullet;</span> <a href="#"><b>News</b></a></div>
<b>                <p>In difficult times, it can be helpful to look to the past (or the future) to understand how similar situations were handled and overcome. In our latest webinar, MAGNiTT’s Philip Bahoshy catches up with Walid Faza, Partner & COO at China’s MSA Capital, to talk about lessons from 10 weeks in the future and how we can learn from China’s ecosystem, as well as how the current crisis is reshaping the market dynamics.
</b>

              </div> 
            </div>
            <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
              <div class="h-entry">
                <img src="images/s.jpg" alt="Image" class="img-fluid">
                <h2 class="font-size-regular"><a href="#">Hotel Data Cloud raises $350K in seed financing to support hotels in post COVID-19 recovery

                </a></h2>
                <div class="meta mb-4">by Hotel Data Cloud <span class="mx-2">&bullet;</span> Apr 12, 2020, at 10:00 AM <span class="mx-2">&bullet;</span> <a href="#">News</a></div>
              <b> <p>UAE-based, award winning travel-tech start-up Hotel Data Cloud (HDC) has successfully secured $350K in seed funding from both local and international investors, to support hotels in re-engaging with customers in post COVID-19 recovery. Ensuring that potential travelers are informed and always up to date, HDC is a centralized global database for descriptive hotel content that disseminates hotels’ information.</p></b> 
              </div>
            </div>
          </div>
        </div>
      </div>
          
  
     <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  
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
    <script src="js/rangeslider.min.js"></script>
    <script src="js/slider.js"></script>
  
  
    <script src="js/typed.js"></script>
              <script>
              var typed = new Typed('.typed-words', {
              strings: ["Appartments"," Restaurants"," Hotels", " Events"],
              typeSpeed: 80,
              backSpeed: 80,
              backDelay: 4000,
              startDelay: 1000,
              loop: true,
              showCursor: true
              });
              </script>
  
    <script src="js/main.js"></script>
      
    </body>
  </html>