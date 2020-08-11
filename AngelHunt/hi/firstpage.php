<?php
session_start();
include_once("connection.php");

?><!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  
    Document Title
    =============================================
    -->
    <title>AngelHunt</title>
    <!--  
    Favicons
    =============================================
    -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/logo3.png">
    <!--<link rel="manifest" href="/manifest.json">-->
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/images/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link href="asset/css/stylee.css" rel="stylesheet">

    <!-- Responsive Stylesheet File -->
  
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
    <style>
      body {
  background: #fff;
  font: 600 12px/1.8 "Open Sans", sans-serif;
  
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
    </style>
  </head>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      <nav class="navbar navbar-custom navbar-fixed-top navbar-transparent" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="index.html">AngelHunt</a>
          </div>
          <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Join Us</a>
                <ul class="dropdown-menu">
                  <li ><a id="hiz">Sign in </a></li>
                  <script>
                      
                      document.getElementById('hiz').addEventListener("click", function() {
                        document.querySelector('.titan-caption').style.filter= "blur(35px)";
                        document.querySelector('.limiter').style.display = "flex";
                      });
                      </script>
                  <li><a id="hello">Register</a></li>
                
                </ul>
              </li>
              <script>
                      
                      document.getElementById('hello').addEventListener("click", function() {
                        document.querySelector('.titan-caption').style.filter= "blur(35px)";
                        document.querySelector('.limiterr').style.display = "flex";
                      });
                      </script>
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Search</a>
                <ul class="dropdown-menu">
                  <li class="dropdown"><a class="dropdown-toggle" href="../searchs/startup.php" data-toggle="dropdown">Startups</a>
                   
                  </li>
                  <li class="dropdown"><a class="dropdown-toggle" href="../invest/corporatesmain.php" data-toggle="dropdown">Corporates</a>
                  
                  </li>
                  <li class="dropdown"><a class="dropdown-toggle" href="../invest/investormain.php" data-toggle="dropdown">Investors</a>
                  
                  </li>
               
                </ul>
              </li>
              <li class="dropdown"><a  class="dropdown-toggle" onclick="openPOP()" data-toggle="dropdown">Create</a>
                <ul class="dropdown-menu">
                  <li class="dropdown"><a  class="dropdown-toggle" onclick="openPOP()" data-toggle="dropdown">Startup</a>
            
                  </li>
                  <li class="dropdown"><a class="dropdown-toggle"onclick="openPOP()"data-toggle="dropdown">Corporate</a>
          
                  </li>
                  <li class="dropdown"><a class="dropdown-toggle" onclick="openPOP()" data-toggle="dropdown">Investor</a>
               
                  </li>
                  
                
                 </ul>
              
              <li ><a id="checkLog11"   onclick="openPOP()">Profile</a>
              <script>
                  
                
function openPOP() {
  document.getElementById("pop").style.display = "block";
  document.querySelector('.home22').style.filter= "blur(3px)"
  document.querySelector('pop').style.filter= "blur(0px)"

}

      
      </script>
              </li>
              <li><a  href="../miniblog/index.html" >Announcements</a>
              
              </li>
              <li ><a href="../jobfinder1/jobmain.php" >Job</a>
       
                
              </li>
            
              <li class="dropdown"><a class="dropdown-toggle" href="documentation.html" data-toggle="dropdown">More</a>
                <ul class="dropdown-menu">
                  <li><a href="firstpage.php#contact">Contact Form</a></li>
                  <li><a href="documentation.html#reservation">Google Map</a></li>
                  <li><a href="documentation.html#mailchimp">Sign out</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <div class="home22">
      <section  class="home-section home-parallax home-fade home-full-height bg-dark-60 agency-page-header" id="home" data-background="assets/images/agency/2.png">
           
      
        <div class="titan-caption" >
          <div class="caption-content" >
     
            
            <div class="font-alt mb-30 titan-title-size-1" >Grow your awesome idea</div>
            <div class="font-alt mb-40 titan-title-size-3">Make business <span class="rotate">easy | simple | flexible</span>
            </div><a class="section-scroll btn btn-border-w btn-circle" id="buttonR" >Register</a>
            <a class="section-scroll btn btn-border-w btn-circle" id="button">Login</a>
            <script>
                      
              document.getElementById('button').addEventListener("click", function() {
                document.querySelector('.titan-caption').style.filter= "blur(35px)";
                document.querySelector('.limiter').style.display = "flex";
              });
                document.getElementById('buttonR').addEventListener("click", function() {
                document.querySelector('.titan-caption').style.filter= "blur(35px)";
                document.querySelector('.limiterr').style.display = "flex";
              
}
);

</script>
          </div>
        </div>
        <!--POP UP--->
        <body>

    

  <body>

    <div class="limiter" style="display:none;">
      <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-5 mx-auto">
          <div class="card card-signin my-5">
            <div class="card-body">
               <button id="hill"style="color:black;" class="close" onclick="closeForm()"> <a >x</a></button>
              <h2 class="card-title text-center">Sign In</h2> 
              <?php
               $error =Null;
                if (isset($_POST['submit'])){  
                include("connection.php");
                $email=$_POST['email'];
                $pass=$_POST['pass'];
                $p=md5($pass);
                
         $sql = "SELECT * FROM registration WHERE email = '$email' and password = '$p'";
         $result = mysqli_query($conn,$sql);
         if($result->num_rows != 0){
          $row=$resultSet->fetch_assoc($result);
          $verified=$row['verified'];
          $email=$row['email'];
          $date=$row['createdate'];
          $date=strtotime($date);
    
          if($verified==1){
            header("location: ../blog.php");
          }
          else{
          $error="This account has not yet been verified, An email was sent to $email on $date";
          }
          }
          else{
          $error="The username or password you entered is incorrect";
          }}
                ?> 
              <script>
                      
                document.getElementById('hill').addEventListener("click", function() {
                  document.querySelector('.limiter').style.display = "none";
                  document.querySelector('.titan-caption').style.filter= "blur(0px)";

                
                
  }
  );
  
  </script>
              <form class="form-signin" action="" method="POST">
                <div class="form-label-group">
                  <input type="email" onkeyup="return forceLower(this);" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
                  <label for="inputEmail">Email address</label>
               
                </div>
  
                <div class="form-label-group">
                  <input type="password" name="pass" id="inputPassword" class="form-control" placeholder="Password" required>
                  <label for="inputPassword">Password</label>
                </div>
  
              <div class="custom-control custom-checkbox mb-3">
                  <input name="check" type="checkbox" class="custom-control-input" id="customCheck1">
                  <label class="custom-control-label" for="customCheck1" style="color:black">Remember password</label>
                </div>
                <button class="btn btn-lg btn-primary btn-block " style="margin-top:10px;margin-left:150px;border:white;color:white;width:120px;background-color:#18d26e;"type="submit" name="submit"value="submit">Sign in</button>
 
                <hr class="my-4">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </body>

  <body>
    <div class="limiterr" style="display:none; margin-top:-50px;">
      <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-5 mx-auto">
          <div class="card card-signin my-5">
            <div class="card-body">                             <button id="hiR"style="color:black;" class="close" onclick="closeForm()"> <a >x</a></button>
              <h2 class="card-title text-center">Register</h2>
            
              <script>
                      
                document.getElementById('hiR').addEventListener("click", function() {
                  document.querySelector('.limiterr').style.display = "none";
                  document.querySelector('.titan-caption').style.filter= "blur(0px)";

                
                
  }
  );
  
  </script>
              <form class="form-signin" action="process2.php" method="POST">
                 <label style="Color:black;" >
                  Email Address</label>
                <div class="form-label-group"> 
                 

                  <input type="text" id="inputEmail" name="email"class="form-control" placeholder="Email address" required autofocus>
                </div>                
                  <label style="Color:black;" >First Name</label>

                <div class="form-label-group" style="margin-top:0px;">

                  <input type="text" name="fname"id="inputFName" class="form-control" placeholder="First Name" required autofocus>
                </div>                  <label style="Color:black;" >Last Name</label>

                <div class="form-label-group" style="margin-top:0px;">

                  <input type="text" name="lname" id="inputLName"class="form-control" placeholder="Last Name" required autofocus>
                </div>
                
                                 <label style="Color:black;" >Password</label>

  
                <div class="form-label-group">

                  <input type="password" id="inputPassword" name="pass" class="form-control" placeholder="Password" required>

                </div>
   <label style="Color:black;" >Confirm Password</label>
                <div class="form-label-group">
                  <input  name="pass2" type="password" id="inputPassword" class="form-control" placeholder="Confirm Password" required>
                 
                </div>
                <button class="btn btn-lg btn-primary btn-block " style=" border:white; color:white;font-size:17px;margin-top:10px;margin-left:150px;color:white;width:120px;background-color:#18d26e"value="submit" name="submit"type="submit">Register</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </body>

      </section>
 </div>
 <div class="limiterPOP" id="pop" style="display:none;">
  <div class="container">
  <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-5 mx-auto">
      <div class="card card-signin my-5">
        <div class="card-body">
           <button id="hi"style="color:black;" class="close" onclick="closeForm()"> <a >x</a></button>
          <h3 class="card-title text-center">Alert</h3> 
          <p class="text-center" style="color:red;font-size:14px;"> You must Log in to view this page</p>
          <script>
                  
                  document.getElementById('hi').addEventListener("click", function() {
                    document.querySelector('.titan-caption').style.filter= "blur(0px)";
                    document.querySelector('.limiterPOP').style.display = "none";
            
                  
      }
      );
      
      </script>
         
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</body>
<!-- end of popup-->
    

      <div class="main" >
        <section class="module">
          <div class="container">
            <div class="row multi-columns-row">
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="features-item">
                  <div class="features-icon"><span class="icon-lightbulb"></span></div>
                  <h3 class="features-title font-alt">Ideas and concepts</h3>Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="features-item">
                  <div class="features-icon"><span class="icon-tools"></span></div>
                  <h3 class="features-title font-alt">Designs &amp; interfaces</h3>Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="features-item">
                  <div class="features-icon"><span class="icon-tools-2"></span></div>
                  <h3 class="features-title font-alt">Coding &amp; development</h3>Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="features-item">
                  <div class="features-icon"><span class="icon-lifesaver"></span></div>
                  <h3 class="features-title font-alt">Dedicated support</h3>Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="module pt-0 pb-0" id="about">
          <div class="row position-relative m-0">
            <div class="col-xs-12 col-md-6 side-image" data-background="assets/images/agency/miimi.jpg"></div>
            <div class="col-xs-12 col-md-6 col-md-offset-6 side-image-text">
              <div class="row">
                <div class="col-sm-12">
                  <h1 class="module-title font-alt align-left">About Us</h1>
                  <div class="module-subtitle font-serif align-left">AngelHunt is an online website that helps connect entrepreneurs and their startups with investors to help them succeed, with money, connections and expertise.We put together companies seeking investment and investors.

                  </div>
                <ul>
                    <li style="size:15px;">
                      <p style="font-size:15px;">       <i class="fa fa-check" style="color:#18d26e"></i> Promote Your Startup
                    </li>
                    <li style="size:15px;">
                      <p style="font-size:15px;"> 
                      <i class="fa fa-check" style="color:#18d26e"></i> Foster Your Services
                    </li>
                    <li style="size:15px;">
                      <p style="font-size:15px;"> 
                      <i class="fa fa-check" style="color:#18d26e"></i>Seek Investment Opportunities
                    </li>
                    <li style="size:15px;">
                      <p style="font-size:15px;"> 
                      <i class="fa fa-check" style="color:#18d26e"></i>Offer and get Job Opportunities
                    </li>
                    <li style="size:15px;">
                      <p style="font-size:15px;"> 
                      <i class="fa fa-check" style="color:#18d26e"></i> Seek Trainings and Hackathons
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>
        <div class="main">
          <section class="module" id="alt-features">
            <div class="container">
              <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                  <h2 class="module-title font-alt">Our features</h2>
                  <div class="module-subtitle font-serif"></div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 col-md-3 col-lg-3">
                  <h3 style="font-family: 'Quicksand', sans-serif;">Find a Team That will help you</h3>
                  <div class="alt-features-item" style="font-family: 'Quicksand', sans-serif;">
                    <div class="alt-features-icon"><span class="icon-strategy"></span></div>
                    <h3 class="alt-features-title font-alt">Branding </h3> Establish an image of your company in your customers’ eyes.
                  </div>
                  <div class="alt-features-item" style="font-family: 'Quicksand', sans-serif;">
                    <div class="alt-features-icon"><span class="icon-tools-2"></span></div>
                    <h3 class="alt-features-title font-alt">Development</h3> Develop your mobile app, website through the team you can find.
                  </div>
                  <div class="alt-features-item" style="font-family: 'Quicksand', sans-serif;">
                    <div class="alt-features-icon"><span class="icon-presentation"></span></div>
                    <h3 class="alt-features-title font-alt">Marketing</h3>Meet marketing experts that will help you promote your services.
                  </div>
                  <div class="alt-features-item" style="font-family: 'Quicksand', sans-serif;">
                    <div class="alt-features-icon"><span class="icon-tools"></span></div>
                    <h3 class="alt-features-title font-alt">Design</h3> Who can absorb visual trends and deploy them in fresh and exciting ways.
                  </div>
                </div>
                <div class="col-md-6 col-lg-6 hidden-xs hidden-sm">
                  <div class="alt-services-image align-center"><img src="assets/images/agency/angl.png" alt="Feature Image"></div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3" style="font-family: 'Quicksand', sans-serif;">
<h3 style="font-family: 'Quicksand', sans-serif;">And you will be able to BUILD a great business</h3>
                  <div class="alt-features-item" style="font-family: 'Quicksand', sans-serif;">
                    <div class="alt-features-icon"><span class="icon-target"></span></div>
                    <h3 class="alt-features-title font-alt">Hunt your Investment Opportunity</h3>Connect with investors and corporates.
                  </div>
                  <div class="alt-features-item" style="font-family: 'Quicksand', sans-serif;">
                    <div class="alt-features-icon"><span class="icon-wallet"></span></div>
                    <h3 class="alt-features-title font-alt">Business Consulting</h3> To help grow your new business and to help seek investments.
                  </div>
                  <div class="alt-features-item" style="font-family: 'Quicksand', sans-serif;">
                    <div class="alt-features-icon"><span class="icon-mobile"></span></div>
                    <h3 class="alt-features-title font-alt">Notifications</h3> About new jobs, announcements, hackathons and trainings.
                  </div>
                  <div class="alt-features-item" style="font-family: 'Quicksand', sans-serif;">
                    <div class="alt-features-icon"><span class="icon-search"></span></div>
                    <h3 class="alt-features-title font-alt">Search</h3>Startups and Investors in the Middle East and Worldwide, Job Opportunities and Latest News.
                  </div>
                </div>
              </div>
            </div>
          </section>
  
        <section class="module-small bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-8 col-lg-6 col-lg-offset-2">
                <div class="callout-text font-alt">
                  <h3 class="callout-title">Want to explore us more?</h3>
                  <p>We are always open to interesting projects.</p>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-2">
                <div class="callout-btn-box"><a class="btn btn-w btn-round" href="portfolio_boxed_gutter_col_3.html">Register NOW</a></div>
              </div>
            </div>
          </div>
        </section>
        <section class="module" id="news">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Latest News posts</h2>
              </div>
            </div>
            <div class="row multi-columns-row post-columns">
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="post mb-20">
                  <div class="post-thumbnail"><a href="#"><img src="assets/images/finance/banot.jpg" alt="Blog-post Thumbnail"/></a></div>
                  <div class="post-header font-alt">
                  <b>  <h1 class="post-title"><a href="#">New strategic partnership between two startups to help support women in business in MENA region

                    </a></h1></b>
                    <div class="post-meta">By&nbsp;<a href="#">Press Release</a>&nbsp;| 20 April | 3 Comments
                    </div>
                  </div>
                  <div class="post-entry">
<p>Two start-ups in the UAE have joined forces to create a strategic partnership in helping women across the region to advance their skills, their business ideas, and their careers.

  Nisa Soul, founded by Sara Mohamed has announced a strategic partnership with Signature Network founded by Mounir Berhmani.
  
      </p>    </div>
                  <div class="post-more">            <a style="margin-left:80px;"class="section-scroll btn btn-border-w btn-circle" id="button">Read More</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="post mb-20">
                  <div class="post-thumbnail"><a href="#"><img src="assets/images/finance/khaleeji.jpg" alt="Blog-post Thumbnail"/></a></div>
                  <div class="post-header font-alt">
                    <h2 class="post-title"><a href="#">USD 100M ADIO investment brings four global AgTech pioneers to develop next generation agriculture in Abu Dhabi .

                    </a></h2>
                    <div class="post-meta">By&nbsp;<a href="#">Mamo Pay</a>&nbsp;| 22 April | 4 Comments
                    </div>
                  </div>
                  <div class="post-entry">
                    <p href="../article3.html">Mamo Pay, the peer-to-peer payments app that users will love for its simplicity and utility, has raised $1.5M from investors supporting its efforts with partners and regulators in the run-up to launch this year. Global Founders Capital (GFC) led the investment round, with Global Ventures..</p>
                  </div>
                  <div class="post-more">   <a class="section-scroll btn btn-border-w btn-circle"style="margin-left:80px;" id="button">Read More</a></div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="post mb-20">
                  <div class="post-thumbnail"><a href="#"><img src="assets/images/finance/fintik.jpg" alt="Blog-post Thumbnail"/></a></div>
                  <div class="post-header font-alt">
                   <h2 class="post-title"><a href="../article3.html">FinTech startup Mamo Pay raises $1.5M, prepares to revolutionise MENA payments
                  </a></h2>
                  <div class="post-meta">By&nbsp;<a href="../article3.html">Mamo Pay</a>&nbsp;| 22 April | 4 Comments
                  </div>
                </div>
                <div class="post-entry">
                  <p>Mamo Pay, the peer-to-peer payments app that users will love for its simplicity and utility, has raised $1.5M from investors supporting its efforts with partners and regulators in the run-up to launch this year. Global Founders Capital (GFC) led the investment round, with Global Ventures..</p>
                  500 Startups, and angel investors also participating.</div>
                  <div class="post-more">   <a href="../article3.html"style="margin-left:80px;"class="section-scroll btn btn-border-w btn-circle" id="button">Read More</a></div>
                </div>
              </div>
            </div>
          </div>
        </section>        <hr class="divider-w">
        <!--hi-->
<!--  <section class="module bg-dark-60 pt-0 pb-0 parallax-bg testimonial" data-background="assets/images/testimonial_bg.jpg">
          <div class="testimonials-slider pt-140 pb-140">
            <ul class="slides">
              <li>
                <div class="container">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="module-icon"><span class="icon-quote"></span></div>
                    </div>
                  </div>
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                      <blockquote class="testimonial-text font-alt">I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine.</blockquote>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4 col-sm-offset-4">
                      <div class="testimonial-author">
                        <div class="testimonial-caption font-alt">
                          <div class="testimonial-title">Jack Woods</div>
                          <div class="testimonial-descr">SomeCompany INC, CEO</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="container">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="module-icon"><span class="icon-quote"></span></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                      <blockquote class="testimonial-text font-alt">I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now.</blockquote>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4 col-sm-offset-4">
                      <div class="testimonial-author">
                        <div class="testimonial-caption font-alt">
                          <div class="testimonial-title">Jim Stone</div>
                          <div class="testimonial-descr">SomeCompany INC, CEO</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="container">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="module-icon"><span class="icon-quote"></span></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                      <blockquote class="testimonial-text font-alt">I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</blockquote>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4 col-sm-offset-4">
                      <div class="testimonial-author">
                        <div class="testimonial-caption font-alt">
                          <div class="testimonial-title">Adele Snow</div>
                          <div class="testimonial-descr">SomeCompany INC, CEO</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </section>-->
        <section class="module" id="contact">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Contact us</h2>
                <div class="module-subtitle font-serif"></div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-8">
                <form id="contactForm" role="form" method="post" action="php/contact.php">
                  <div class="form-group">
                    <label class="sr-only" for="name">Name</label>
                    <input class="form-control" type="text" id="name" name="name" placeholder="Your Name*" required="required" data-validation-required-message="Please enter your name."/>
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <label class="sr-only" for="email">Email</label>
                    <input class="form-control" type="email" id="email" name="email" placeholder="Your Email*" required="required" data-validation-required-message="Please enter your email address."/>
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" rows="7" id="message" name="message" placeholder="Your Message*" required="required" data-validation-required-message="Please enter your message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="text-center">
                    <button class="btn btn-block btn-round btn-d" style="background-color: #18d26e;" id="cfsubmit" type="submit">Submit</button>
                  </div>
                </form>
                <div class="ajax-response font-alt" id="contactFormResponse"></div>
              </div>
              <div class="col-sm-4">
                <div class="alt-features-item mt-0">
                  <div class="alt-features-icon"><span class="icon-megaphone"></span></div>
                  <h3 class="alt-features-title font-alt">Where to meet</h3>AngelHunt Company<br/>An-Najah National University<br/>Nablus, Academey Street
                </div>
                <div class="alt-features-item mt-xs-60">
                  <div class="alt-features-icon"><span class="icon-map"></span></div>
                  <h3 class="alt-features-title font-alt">Say Hello</h3>Email: AngelHunt@info.com<br/>Phone:+970 597494662
                </div>
              </div>
            </div>
          </div>
        </section>
        <div class="module-small bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-3">
                <div class="widget">
                  <h5 class="widget-title font-alt">About Titan</h5>
                  <p>The languages only differ in their grammar, their pronunciation and their most common words.</p>
                  <p>Phone: +1 234 567 89 10</p>Fax: +1 234 567 89 10
                  <p>Email:<a href="#">somecompany@example.com</a></p>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="widget">
                  <h5 class="widget-title font-alt">Recent Comments</h5>
                  <ul class="icon-list">
                    <li>Maria on <a href="#">Designer Desk Essentials</a></li>
                    <li>John on <a href="#">Realistic Business Card Mockup</a></li>
                    <li>Andy on <a href="#">Eco bag Mockup</a></li>
                    <li>Jack on <a href="#">Bottle Mockup</a></li>
                    <li>Mark on <a href="#">Our trip to the Alps</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="widget">
                  <h5 class="widget-title font-alt">Blog Categories</h5>
                  <ul class="icon-list">
                    <li><a href="#">Photography - 7</a></li>
                    <li><a href="#">Web Design - 3</a></li>
                    <li><a href="#">Illustration - 12</a></li>
                    <li><a href="#">Marketing - 1</a></li>
                    <li><a href="#">Wordpress - 16</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="widget">
                  <h5 class="widget-title font-alt">Popular Posts</h5>
                  <ul class="widget-posts">
                    <li class="clearfix">
                      <div class="widget-posts-image"><a href="#"><img src="assets/images/rp-1.jpg" alt="Post Thumbnail"/></a></div>
                      <div class="widget-posts-body">
                        <div class="widget-posts-title"><a href="#">Designer Desk Essentials</a></div>
                        <div class="widget-posts-meta">23 january</div>
                      </div>
                    </li>
                    <li class="clearfix">
                      <div class="widget-posts-image"><a href="#"><img src="assets/images/rp-2.jpg" alt="Post Thumbnail"/></a></div>
                      <div class="widget-posts-body">
                        <div class="widget-posts-title"><a href="#">Realistic Business Card Mockup</a></div>
                        <div class="widget-posts-meta">15 February</div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr class="divider-d">
        <footer class="footer bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
              </div>
              <div class="col-sm-6">
                <div class="footer-social-links"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a>
                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>
      <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    </main>
    <!--  
    JavaScripts
    =============================================
    -->
 
    <script src="assets/lib/jquery/dist/jquery.js"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/lib/wow/dist/wow.js"></script>
    <script src="assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script>
    <script src="assets/lib/isotope/dist/isotope.pkgd.js"></script>
    <script src="assets/lib/imagesloaded/imagesloaded.pkgd.js"></script>
    <script src="assets/lib/flexslider/jquery.flexslider.js"></script>
    <script src="assets/lib/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="assets/lib/smoothscroll.js"></script>
    <script src="assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
    <script src="assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>