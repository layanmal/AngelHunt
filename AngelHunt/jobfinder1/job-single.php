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
$myArray = explode(',', $msg);
$company=$myArray['1'];
$number=$myArray['0'];
$_SESSION['company']=$company;


?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <title>AngelHunt</title>
    <link rel="icon" type="image/png" sizes="32x32" href="logo3.png">
    <meta charset="utf-8">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 
  
<style>
body
{
    font-family: Quicksand, sans-serif;
}
.bg-white {

background-color: #fff!important;
border-radius:25px;
}
.form-control {
    background-color: #F3F2EE;
    border: 1px solid #e8e7e3;
    border-radius: 4px;
    color: #66615b;
    font-size: 14px;
    padding: 7px 18px;
    height: 40px;
    -webkit-box-shadow: none;
    box-shadow: none;
}
textarea.form-control {
    max-width: 100%;
    padding: 10px 18px;
    resize: none;
}

textarea.form-control {
    height: auto;
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
  
<!-- header end -->
  
    
  

    <div class="site-section bg-light">
      <div class="container"style="margin-top:-90px;">
        <div class="row">
        <?php $result = mysqli_query($conn,"SELECT *  FROM  jobs where company='$company'") or die('Invalid query: ' . mysqli_error($conn));
         while ($row = mysqli_fetch_assoc($result)) {
        ?> 
       
          <div class="col-md-12 col-lg-8 mb-5">
          
            
          
            <div class="p-5 bg-white">

              <div class="mb-4 mb-md-5 mr-5">
               <div class="job-post-item-header d-flex align-items-center">
                 <h4 class="mr-3 text-black h4"><?php echo $row['title']?></h4>
                 <div class="badge-wrap">
                   <span class="bg-warning text-white badge py-2 px-3"><?php echo $row['job']?></span>                 </div>
               </div>
               <div class="job-post-item-body d-block d-md-flex">
                 <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a style="color:#823838;"  href="#"><b><span class="icon-suitcase mr-1" style="color:#823838;"></span><?php echo $row['company']?></b></a></div> 
                 <div><span class="fl-bigmug-line-big104"></span> <b style="padding-right:15px;font-weight: 300px;"><span style="color:#823838;"><span class="icon-money mr-1"></span><?php echo $row['day']?>&mdash; <?php $row['month']?>&mdash; <?php $row['year']?></span></b></div>
                 <div><span class="fl-bigmug-line-big104"></span> <b style=" font-weight: 300px;"><span style="color:#823838;"><span class="icon-room mr-1"></span><?php echo $row['country']?>&mdash; <?php $row['city']?></span></b></div>
           

                </div>
              </div>


            
              <div class="img-border mb-5">
              
                  <img src="images/full.jpg" alt="Image" class="img-fluid rounded">
                </a>
              </div>
            
          
            <b style="font-size: 22px;">About</b>
            <p><?php
              $par="";
               $about=$row["describtion"];
              $Array = explode('.', $about);
              foreach($Array as $Array1){
                $par.= $Array1."\n";
              }
              echo $par;?>

              </p>

<br>
<br>
<B style="font-size: 22px;">Full Stack Developer Responsibilities:
</B>
<p><?php
              $par="";
               $about=$row["req"];
              $Array = explode('.', $about);
              foreach($Array as $Array1){
                $par.= $Array1."\n";
              }
              echo $par;?>

              </p>
              

            <div>
              <FORM Action="pushcv.php?msg=<?php echo $number?>" method="POST" enctype="multipart/form-data">
            
              <p class="mt-5"><a  class=" py-2 px-4"style="color:black;margin-left:-20px;">
               <b>Attach your CV Here:</b>            </p>
                  <b> <input type="file" id="myFile" name="myfile"></b> 

          
              <button type="submit" value="submit" name="submit"style="background-color:#18d26e; color:white" class=" section-scroll btn-border-w btn-circle btn">
                  Apply Now </button>
                  </FORM>
                  
            </div>
          
          </div>
            
            </div>
            
            <?php }?>
            </div>
          
            <div class="col-lg-4"style=" float:left;  margin-top:-1100px;
             margin-left:730px;
                width:100%; 
                height:100%; 
                ">
            
             
            <div class="p-4 mb-3 bg-white" >
              <h3 class="h5 text-black mb-3">Contact Info</h3>
              <p class="mb-0 font-weight-bold"style="color:black;">Address</p>
              <p class="mb-4">203 Fake St. Mountain View, San Francisco, California, USA</p>

              <p class="mb-0 font-weight-bold" style="color:black;">Phone</p>
              <p class="mb-4" >+1 232 3235 324</p>

              <p class="mb-0 font-weight-bold" style="color:black;">Email Address</p>
              <p class="mb-0">youremail@domain.com</p>
<div>
            </div>
          </div>
        </div>
      </div>
    </div>

   

<!--
    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-6" data-aos="fade" >
            <h2>Frequently Ask Questions</h2>
          </div>
        </div>
        

        <div class="row justify-content-center" data-aos="fade" data-aos-delay="100">
          <div class="col-md-8">
            <div class="accordion unit-8" id="accordion">
            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">What is the name of your company<span class="icon"></span></a>
              </h3>
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur quae cumque perspiciatis aperiam accusantium facilis provident aspernatur nisi optio debitis dolorum, est eum eligendi vero aut ad necessitatibus nulla sit labore doloremque magnam! Ex molestiae, dolor tempora, ad fuga minima enim mollitia consequuntur, necessitatibus praesentium eligendi officia recusandae culpa tempore eaque quasi ullam magnam modi quidem in amet. Quod debitis error placeat, tempore quasi aliquid eaque vel facilis culpa voluptate.</p>
                </div>
              </div>
            </div>  .accordion-item 
            
            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">How much pay for 3  months?<span class="icon"></span></a>
              </h3>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel ad laborum expedita. Nostrum iure atque enim quisquam minima distinctio omnis, consequatur aliquam suscipit, quidem, esse aspernatur! Libero, excepturi animi repellendus porro impedit nihil in doloremque a quaerat enim voluptatum, perspiciatis, quas dignissimos maxime ut cum reiciendis eius dolorum voluptatem aliquam!</p>
                </div>
              </div>
            </div> 

            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="false" aria-controls="collapseThree">Do I need to register?  <span class="icon"></span></a>
              </h3>
              <div id="collapseThree" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel ad laborum expedita. Nostrum iure atque enim quisquam minima distinctio omnis, consequatur aliquam suscipit, quidem, esse aspernatur! Libero, excepturi animi repellendus porro impedit nihil in doloremque a quaerat enim voluptatum, perspiciatis, quas dignissimos maxime ut cum reiciendis eius dolorum voluptatem aliquam!</p>
                </div>
              </div>
            </div> 

            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseFour" role="button" aria-expanded="false" aria-controls="collapseFour">Who should I contact in case of support.<span class="icon"></span></a>
              </h3>
              <div id="collapseFour" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel ad laborum expedita. Nostrum iure atque enim quisquam minima distinctio omnis, consequatur aliquam suscipit, quidem, esse aspernatur! Libero, excepturi animi repellendus porro impedit nihil in doloremque a quaerat enim voluptatum, perspiciatis, quas dignissimos maxime ut cum reiciendis eius dolorum voluptatem aliquam!</p>
                </div>
              </div>
            </div> 
          
          </div>
          </div>
        </div>
      
      </div>
    </div>-->

    


    

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

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&libraries=places&callback=initAutocomplete"
        async defer></script>

  </body>
</html>