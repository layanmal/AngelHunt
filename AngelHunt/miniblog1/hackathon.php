<?php 
 session_start();
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dp = "starter" ;

 $id=$_SESSION['id'];

 $email=$_SESSION['email'];
 // Create connection
 $conn = new mysqli($servername, $username, $password,$dp);
 
  //Check connection
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }
 $msg=$_GET['msg'];
 $result=mysqli_query($conn,"SELECT * From announcment  where company='$msg' ");
 $row=mysqli_fetch_assoc($result);
 
 $result1=mysqli_query($conn,"SELECT * From startups where StartupName='$msg'");
 $num=$result1->num_rows;
 $bio="";
 if($num===0){
 
          $result2=mysqli_query($conn,"SELECT * From investors where companyname='$msg'");
          $num=$result2->num_rows;
                 if($num===0){
                       $result3=mysqli_query($conn,"SELECT* From corporates where companyname='$msg'");
                       $num=$result3->num_rows;
                          if($num===0){ 
                          $bio="no bio ";
                           }else {
                           while($row3=mysqli_fetch_assoc($result3)){ 
                           $bio= $row3['bio'];
                            }
                               }
                 }else {
                   while($row2=mysqli_fetch_assoc($result2)){ 
                           $bio=$row2['bio'];
                  } }
   } else { while($row1=mysqli_fetch_assoc($result1)){ 
                               $bio= $row1['problem'];
                          
   }}

 ?><!DOCTYPE html>
<html lang="en">
  <head>
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
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
    
    
    
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
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->

  <!-- Libraries CSS Files -->

  <!-- Nivo Slider Theme -->
  <link href="css/nivo-slider-theme.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style2.css" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="css/responsive.css" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css?3423334">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 
    <link rel="icon" type="image/png" sizes="32x32" href="logo3.png">
    <title>AngelHunt</title>
    
  </head>
  
<style>
body
{
    font-family: 'Quicksand', sans-serif;
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
                <li style=" margin-left:20px; margin-top:10px;font-size:10px;" ><a  href="../invest/connect.php?msg=''">Connect to people</a>
              
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
  

  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    
    <div class="site-cover site-cover-sm same-height overlay single-page" style="background-image: url(data:image/jpeg;base64,<?php echo base64_encode( $row['pic'])?>);">
      <div class="container">
        <div class="row same-height justify-content-center">
          <div class="col-md-12 col-lg-10">
            <div class="post-entry text-center">
              <span class="post-category text-white bg-success mb-3"><?php echo $row["type"] ?></span>
              <h2 class="mb-4"><a href="#"><?php echo $row["title"] ?></a></h2>
              <div class="post-meta align-items-center text-center">
                <span class="d-inline-block mt-1">By <?php echo $row["company"] ?></span>
                <span>&nbsp;-&nbsp; <?php echo $row["date"] ?></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <section class="site-section py-lg">
      <div class="container">
        
        <div class="row blog-entries element-animate">

          <div class="col-md-12 col-lg-8 main-content">
            
            <div class="post-content-body">
              <h3>About</h3>

              <p><?php
              $par="";
               $about=$row["about"];
              $Array = explode('.', $about);
              foreach($Array as $Array1){
                $par.= $Array1."\n";
              }
              echo $par;?>

              </p>
           
          
           
             </div>
            <h3>Goal</h3>
            <p>  
            <?php
            $goal=$row["goal"];
            $par.=  nl2br ("$goal ");
            echo $par;
            // echo $par;?>
              </p>
         <p>  <?php  echo '<img  class="img-fluid rounded" src="data:image/jpeg; base64,'.base64_encode( $row['orgimage']).'" />';?> <br><BR> 
  
          Organized by
      <?php  echo $row['organizers']?> 
       <div class="row mb-5 mt-5"> 
            
          </div>
          <h4>Sponsored by:</h4>
          <div class="row mb-5 mt-5">
            <div class="col-md-12 mb-4">
              <!-- <img src="images/primary-logo-color.png" alt="Image placeholder" class="img-fluid rounded">
              -->
               <?php  echo '<img  class="img-fluid rounded" src="data:image/jpeg; base64,'.base64_encode( $row['sponsorsimage']).'" />';?> 
  
            </div>
        </div>
            
        <div class="pt-5">
<b>  <p >Categories:</span> <a href="#"><?php echo $row['type']  ?></a>, <a href="#">Travel</a>  <br>
                Tags: <a href="#">#<?php echo $row['country']  ?></a>, <a href="#">#<?php echo $row['city']  ?></a></p></b>
            </div>


     

          </div>

          <!-- END main-content -->

          <div class="col-md-12 col-lg-4 sidebar">
            <div class="sidebar-box search-form-wrap">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon fa fa-search"></span>
                  <input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div>
            <!-- END sidebar-box -->
            <div class="sidebar-box" style="border-radius:15px;">
              <div class="bio text-center">
              <?php  echo '<img  class="img-fluid mb-5" src="data:image/jpeg; base64,'.base64_encode( $row['logo']).'" />';?>
          <div class="bio-body">
                  <h5> <?php echo $row['company'] ?></h5>
                  <p class="mb-4"><?php $bio ?> </p>
                  <p style="font-size:13px;"class="mb-4"><?php echo $row['title'] ?></p>
                  <p class="text-center"><a href="<?php echo $row['website'] ?>"  class="section-scroll btn btn-border-w btn-circle"> Visit Profile</a></p>
                  <p class="social">
                    <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-youtube-play"></span></a>
                  </p>
                </div>
              </div>
            </div>
            <!-- END sidebar-box -->  
           
    
            <div class="sidebar-box">
              <div class="single-blog-page">
                <div class="left-blog">
            
             
                  <div class="p-4 mb-3 bg-white">
                    
                    <h3 class="h5 text-black mb-3" > <span style="color:#18d26e;">Contact Info</span></h3>
                    <p class="mb-0 font-weight-bold">Address</p>
                    <p class="mb-4"><?php echo $row['country']  ?><?php echo " " ?><?php echo $row['city']  ?></p>
      
                    <p class="mb-0 font-weight-bold">Phone</p>
                    <p class="mb-4"><a href="#"><?php echo $row['telephone']?></a></p>
      
                    <p class="mb-0 font-weight-bold">Email Address</p>
                    <p class="mb-0"><a href="#"><?php echo $row['email']?>/a></p>
                  </div>
                </div>
                 </div>
                </div>
            <!-- END sidebar-box -->

    
            <div class="sidebar-box">
              <div class="single-blog-page">
                <div class="left-blog">
              <h4>   <span style="color:#18d26e;" ><b> Categories</b></span></h4> 
                  <ul>
                      <li>
                        <a href="#"><span><b> Artificial intelligence </a>
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
      </div>
    </section>

    <div class="site-section bg-light">
      <div class="container" >

        <div class="row mb-5">
          <div class="col-12">
            <h2>More Related Posts</h2>
          </div>
        </div>

        <div class="row align-items-stretch retro-layout">
          
          <div class="col-md-5 order-md-2">
            <a href="single.html" class="hentry img-1 h-100 gradient" style="background-image: url('images/hijazi.jpg');">
              <span class="post-category text-white bg-danger">investment</span>
              <div class="text">
                <h2>FUEL IT is funded by the European Union Support Fund and the Belgian Development Agency BTC, which are being implemented in Palestine.</h2>
                <span>June 12, 2020</span>
              </div>
            </a>
          </div>

          <div class="col-md-7">
            
            <a href="single.html" class="hentry img-2 v-height mb30 gradient" style="background-image: url('images/geex.jpg');">
              <span class="post-category text-white bg-success">Hackathon</span>
              <div class="text text-sm">
                <h2>Geexelerator Apply NOW for GEEXELERATOR 3.0!</h2>
                <span>June 12, 2020</span>
              </div>
            </a>
            
            <div class="two-col d-block d-md-flex">
              <a href="single.html" class="hentry v-height img-2 gradient" style="background-image: url('images/gsk.png');">
                <span class="post-category text-white bg-primary">Training</span>
                <div class="text text-sm">
                  <h2>GAZA SKY GEEKS - SKYLANCER ACADEMY</h2>
                  <span>May 20, 2020</span>
                </div>
              </a>
              <a href="single.html" class="hentry v-height img-2 ml-auto gradient" style="background-image: url('images/gsk2.png');">
                <span class="post-category text-white bg-primary">Training</span>
                <div class="text text-sm">
                  <h2>GRADUATE AS A JUNIOR WEB DEVELOPER
                    GROW INTO A FUTURE TECH LEADER.   </h2>
                  <span>May 12, 2020</span>
                </div>
              </a>
            </div>  
            
          </div>
        </div>

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

  <script src="js/main.js"></script>


    
  </body>
</html>