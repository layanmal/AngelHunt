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

$msg=$_GET['msg'];

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
      <link rel="stylesheet" href="css/mystyle.css">

    <link rel="stylesheet" href="css/mystyleee.css">  
    
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
                <li style=" margin-left:20px; margin-top:10px;font-size:10px;" ><a  href="../invest/connect.php?msg=''"  data-toggle="dropdown">Connect to people</a>
              
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
  

    <div class="site-blocks-cover overlay" style="height:500px;background-image: url(images/heroo.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10">
            
            
            <div class="row justify-content-center mb-4"  >
              <div class="col-md-8 text-center">
                <h1 data-aos="fade-up">Hunt The Perfect Investment Opportunity </h1>
              
              </div>
            </div>

        

          </div>
        </div>
      </div>
    </div>  


    <div class="site-section" style="height:auto;background-color:#EDEAE0;" data-aos="fade">
      <div class="container"style="margin-top:-10px;background-color:#EDEAE0;">
    <div class="slideshow-container"style="background-color:#EDEAE0;">
      <div class="col-md-7 ">
        <h2 class="font-weight-light"><b>Hunt your Opportunity!</b></h2>
      </div>
      <div class="form-search-wrap p-2" data-aos="fade-up" data-aos-delay="200">
      
        <form method="post" action="test2.php">
          <div class="row align-items-center">
            <div class="col-lg-12 col-xl-4 no-sm-border border-right">
              <input type="text" class="form-control"  name="name" placeholder="Search By Name ">
            </div>
            <div class="col-lg-12 col-xl-3 no-sm-border border-right">
              <div class="wrap-icon">
                <span class="icon icon-room"></span>
                <input type="text" class="form-control" name="loc" placeholder="Location">
              </div> 
            </div>
            <div class="col-lg-12 col-xl-3">
              <div class="select-wrap">
                <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                <select class="form-control" name="cat" id="">
                  <option value="">All Categories</option>
                  <option value="Venture Capital">Venture Capital</option>
                  <option value="Angel Group">Angel Group</option>
                  <option value="Asset Managment">Asset Managment</option>
                  <option value="Crowd Funder">Crowd Funder</option>
                  <option value="Holding Comapny">Holding Comapny</option>
                  <option value="investmet Company">investmet Company</option>
                  <option value="Family Office">Family Office</option>
                  <option value="Govermnet Initiative">Govermnet Initiative</option>
                  <option value="Fund of funds">Fund of funds</option>                  
                </select>
              </div>
            </div>
            <div class="col-lg-12 col-xl-2 ml-auto text-right">
              <input type="submit" name="submit" class="btn btn-primary" style=" background-color:#18d26e; color:white; font-size:16px; opacity:1;
            "value="Search">
            </div>
            
          </div>
        </form>
      </div>
      <div class="row blog" style="margin-top:15px; background-color: #EDEAE0;">
        <div class="col-md-12"style="background-color:#EDEAE0;">
          <div id="blogCarousel" class="carousel slide container-blog" data-ride="carousel">
        
            <!-- Carousel items -->
           
 <!--first-->
 <span style="color:red;text-align:center;"><?php echo $msg ?></span>      
 <div class="row"style="margin-top:45px;">
 <?php
$result = mysqli_query($conn,"SELECT * FROM  investors" );
  while ($row = mysqli_fetch_assoc($result)){
   ?>
  <div class="col-md-4" >
    <div class="container-blog" style="margin-top:15px; background-color: #ffffff;">
    <div class="item-box-blog">
   

      <div class="item-box-blog-imaged">
        <!--Date-->
        <div class=" bg-blue-ui white" style="  position: absolute;
        z-index: 5;
        padding: 4px 20px;
        top: -20px;
        right: 8px;" > <span class="mon"><?php  echo $row['type'];?></span> </div>
        <!--Image-->
        <figure> <?php  echo '<img  "class="img-fluid mx-auto" src="data:image/jpeg; base64,'.base64_encode( $row['picture']).'" />';?></figure>
      </div>
      <div class="item-box-blog-body">
        <!--Heading-->
        <div class="item-box-blog-heading">
          <a href="validation2.php?msg=<?php echo $row['companyname'];?>" tabindex="0">
            <h5><?php  echo $row['companyname'];?></h5>
          </a>
        </div>
        <!--Data-->
        <div class="item-box-blog-data" style="padding: px 15px;">
      <b>   <p > <i class="fa fa-map-pin" style="font-size:14px; color:black;"></i>
       <?php  echo $row['city'];echo $row['country'] ?>   </p> </b>
        </div>
        <!--Text-->
        <div class="item-box-blog-text">
        <p style="font-size:12px;"> TPConnects is the new generation travel booking and distribution solution: an innovative cloud based travel booking and distribution..</p>
        </div>
            <button type="button" class="btn btn-primary" style=" border-radius: 15px;"> <a href="#" class="bookmark" data-toggle="tooltip" data-placement="left" title="Connect"><span class="icon-plus"></span></a>
            </button>
            <a href="notify1.php?msg=<?php echo $row['startemail']?>,<?php echo $row['companyname'] ?>" type="button" class="btn btn-primary"style=" border-radius:15px;">Nudge</a>
            <button type="button" class="btn btn-primary"style=" border-radius:15px;">More Details</button>


        <!--Read More Button-->
      </div>
    </div>
    </div>
  </div>
 <?php }?>
  <!---end of first -->
  
</div>

<!--.row-->
<!--end of third-->
<!--.item-->

<!--.item-->

<!--.carousel-inner-->

<!--.Carousel-->
</div>
</div>
<!--.item-->

<!--.carousel-inner-->

<!--.Carousel-->
</div>
</div>

            
      
    
      <!-- Next and previous buttons -->
     
    
    <!-- The dots/circles -->
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
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

  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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