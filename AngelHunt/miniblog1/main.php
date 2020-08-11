 
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
 
 $id=$_SESSION['id'];

 $email=$_SESSION['email'];
 ?>
 
 
 <!DOCTYPE html>
<html lang="en">
  <head>
   
    <link rel="icon" type="image/png" sizes="32x32" href="logo3.png">
    <title>AngelHunt</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Work+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
    
    
    
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700|Playfair+Display:400,700,900" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">


  <!-- Favicons -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <!-- Nivo Slider Theme -->
  <link href="css/nivo-slider-theme.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style2.css" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="css/responsive.css" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 
  
    
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
.mama li >a{
      color:white;
      padding:10px;
      margin:5px;
  
    }
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
  <!-- header end -->

    

        <!-- The slideshow -->
        <div  style="margin-top:40px; ">
          <img   src="images/try this way.png">
        </div>
        <div class="jumbotron my-4" style="margin-top:60px; margin-left:210px;background-color: #ffffff;">
          <h6 class="display-3" style="font-size:42px;"> Seeking Investment? Hackathons? Trainings?</h6>
          <p style=" margin-left:300px;" class="lead">You have arrived to the right place..</p>
          <a href="#" style="margin-top:0px; margin-left:350px;" class="ready-btn right-btn page-scroll">Start Hunting!</a>
        </div>
        
    <div class="site-section bg-light">
      <div class="container" >
        <div class="col-12">
          <h2>Hunt Your Opportunities</h2>
        </div>
        <div class="row align-items-stretch retro-layout-2">
          <div class="col-md-4">
          <?php $result=mysqli_query($conn,"SELECT * From announcment  ORDER BY id Limit 2 ");
            while($row=mysqli_fetch_assoc($result)){?>
            <a href="valid.php?msg=<?php echo $row['company']?>" class="h-entry mb-30 v-height gradient" style="background-image: url(data:image/jpeg;base64,<?php echo base64_encode( $row['pic'])?>);"> 
              <div class="text">
                <h2><?php echo $row['title'] ?></h2>
                <span class="date"><?php echo $row['date'] ?></span>
              </div>
            </a>
            <?php }?>
             
              
  
          </div>
          <?php $result=mysqli_query($conn,"SELECT * From announcment  ORDER BY id  Desc Limit 1  ");
            while($row=mysqli_fetch_assoc($result)){
              $company = $row['company'] ;?>
          <div class="col-md-4">

          <a href="valid.php?msg=<?php echo $row['company']?>" class="h-entry mb-30 v-height h-100 gradient" style="background-image: url(data:image/jpeg;base64,<?php echo base64_encode( $row['pic'])?>);"> 
             
              <div class="text">
                <div class="post-categories mb-3">
                </div>
                <h2>The AI magically removes moving objects from videos.</h2>
                <span class="date">July 19, 2019</span>
              </div>
            </a>
          </div>
          <?php } ?>
          <div class="col-md-4">
            <a href="single.html" class="h-entry mb-30 v-height gradient" style="background-image: url('images/gsk2.png');">
              
              <div class="text">
                <h2>The 20 Biggest Fintech Companies In America 2019</h2>
                <span class="date">July 19, 2019</span>
              </div>
            </a>
            <a href="single.html" class="h-entry v-height gradient" style="background-image: url('images/Hack.jpg');">
              
              <div class="text">
                <h2>The 20 Biggest Fintech Companies In America 2019</h2>
                <span class="date">July 19, 2019</span>
              </div>
            </a>
          </div>
        </div>
      
    

  
   <!-- <div class="site-section bg-light">
      <div class="container">-->

        <div class="row align-items-stretch retro-layout" style="margin-top:15px">
          
          <div class="col-md-5 order-md-2">
            <a href="single.html" class="hentry img-1 h-100 gradient" style="background-image: url('images/angl.jpg');">
              <div class="text">
                <h2>AngelHack BECOME AN AMBASSADOR</h2>
                <span>February 12, 2019</span>
              </div>
            </a>
          </div>

          <div class="col-md-7">
            
            <a href="single.html" class="hentry img-2 v-height mb30 gradient" style="background-image: url('images/paltl.png');">
              <div class="text text-sm">
                <h2>AngelHack BECOME AN AMBASSADOR</h2>
                <span>February 12, 2019</span>
              </div>
            </a>
            
            <div class="two-col d-block d-md-flex">
              <a href="single.html" class="hentry v-height img-2 gradient" style="background-image: url('images/angl.jpg');">
                <span class="post-category text-white bg-primary">Sports</span>
                <div class="text text-sm">
                  <h2>The 20 Biggest Fintech Companies In America 2019</h2>
                  <span>October 2, 2020</span>
                </div>
              </a>
              <a href="single.html" class="hentry v-height img-2 ml-auto gradient" style="background-image: url('images/img_3.jpg');">
                <span class="post-category text-white bg-warning">Lifestyle</span>
                <div class="text text-sm">
                  <h2>GazaSkyGeeks announces TRAINING academy</h2>
                  <span>December 12, 2020</span>
                </div>
              </a>
            </div>  
            
          </div>
        </div>
        <div class="row align-items-stretch retro-layout-2" style="margin-top: 25px;">
          <div class="col-md-4">
            <a href="single.html" class="h-entry mb-30 v-height gradient" style="background-image: url('pic1.jpg');">
              
              <div class="text">
                <h2>Same Home Different Hacks.</h2>
                <span class="date">June 20, 2020</span>
              </div>
            </a>
            <a href="single.html" class="h-entry v-height gradient" style="background-image: url('pic2.jpg');">
              
              <div class="text">
                <h2>Hack the chain</h2>
                <span class="date">Augest 19, 2019</span>
              </div>
            </a>
          </div>
          <div class="col-md-4">
            <a href="single.html" class="h-entry img-5 h-100 gradient" style="background-image: url('pic3.jpg');">
              
              <div class="text">
                <div class="post-categories mb-3">
                </div>
                <h2>Hackathon in Abu Dhabi</h2>
                <span class="date">July 30, 2020</span>
              </div>
            </a>
          </div>
          <div class="col-md-4">
            <a href="single.html" class="h-entry mb-30 v-height gradient" style="background-image: url('images/hack.jpg');">
              
              <div class="text">
                <h2>Hackathon by NNUDS </h2>
                <span class="date">July 19, 2020</span>
              </div>
            </a>
            <a href="single.html" class="h-entry v-height gradient" style="background-image: url('images/img_4.jpg');">
              
              <div class="text">
                <h2>Training Opportunity by INJAZ</h2>
                <span class="date">September 1, 2020</span>
              </div>
            </a>
          </div>
        </div>
      
      </div>
    </div>

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
  
                  <p></p>
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
                    We'll help you grow your Business!
                  </p>
                  <div class="footer-contacts">
                    <p><span>Tel:</span> +970597494662</p>
                    <p><span>Email:</span> contact@angelhunt.com</p>
                    <p><span>Working Hours:</span> 9am-5pm</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- end single footer -->
         

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

  <script src="js/main.js"></script>


  </body>
</html>