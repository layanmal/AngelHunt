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

$email=$_SESSION['email'];
$result=mysqli_query($conn,"SELECT firstname,lastname,id,pic FROM registration WHERE email='$email'");
$retrieve=mysqli_fetch_array($result);
$firstname=$retrieve['firstname'];
$lastname=$retrieve['lastname'];
$id=$_SESSION['id'];


$countannounc=0;

$result1=mysqli_query($conn,"SELECT id FROM announcment ");
if (!$result1) {
  printf("Error: %s\n", mysqli_error($conn));
  exit();
}
 while($row1=mysqli_fetch_array($result1)){
   
     $countannounc++;
 }
 $result22=mysqli_query($conn,"SELECT firstname,lastname FROM registration WHERE email='$email'");

 $retrieve=mysqli_fetch_array($result22);
 $firstname=$retrieve['firstname'];
 $lastname=$retrieve['lastname'];
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


?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
	<title>AngelHunt</title>
  <link rel="icon" type="image/png" sizes="32x32" href="images/logo3.png">

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Canonical SEO -->
    <link rel="canonical" href="https://www.creative-tim.com/product/paper-bootstrap-wizard"/>

    <meta name="keywords" content="wizard, bootstrap wizard, creative tim, long forms, 3 step wizard, sign up wizard, beautiful wizard, long forms wizard, wizard with validation, paper design, paper wizard bootstrap, bootstrap paper wizard">
    <meta name="description" content="Paper Bootstrap Wizard is a fully responsive wizard that is inspired by our famous Paper Kit  and comes with 3 useful examples and 5 colors.">

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Paper Bootstrap Wizard by Creative Tim">
    <meta itemprop="description" content="Paper Bootstrap Wizard is a fully responsive wizard that is inspired by our famous Paper Kit  and comes with 3 useful examples and 5 colors.">
    <meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/49/opt_pbw_thumbnail.jpg">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">

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

	<title>Font Awesome Icons</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/paper-bootstrap-wizard.css?998" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="assets/css/demo.css" rel="stylesheet" />

	<!-- Fonts and Icons -->
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
	<link href="assets/css/themify-icons.css" rel="stylesheet">
	<!-- Google Tag Manager 
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-NKDMSK6');</script>-->


	<!-- End Google Tag Manager -->	<style>
    body{
		background-color:#eee;
	}
     .footer-icons li :hover{
     background-color: #18d26e;
     color:#ffffff;
}
table tr th{
	padding :20px 70px 20px 0px;
}

	
	</style>
	</head>

	<body >

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

					  <li><a href="../startup/startup.php"> a Startup page</a></li>
					  
                       <li><a href="../startup/investor.php">an Investor page</a></li>
                    
                    <li><a href="../startup/createco.php" >a corporate page</a></li>
                    </ul> 
                  </li>
                <!--  <li>
                    <a class="page-scroll" href="#portfolio"></a>
                  </li>-->

                     <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Directories<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="../searchs/startup.php?msg=''"Startups></a></li>
		  
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

		

	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">

			<!--<div class="container">
					<div class="row profile">-->	
					<div class="col-md-3" >
							<div class="profile-sidebar" style="margin-top:50px;">
								<!-- SIDEBAR USERPIC -->
								<div class="profile-userpic">
								<?php $result22=mysqli_query($conn,"SELECT firstname,lastname,id,pic FROM registration WHERE email='$email'");
$retrieve22=mysqli_fetch_array($result22); if(!empty($retrieve22['pic'])){   echo'<img style="  float: none;
        margin: 0 40px;
        width: 172px;
        height: 172 px;
        -webkit-border-radius: 50% !important;
        -moz-border-radius: 50% !important;
        border-radius: 50% !important;
        border: 2px solid #e8e8e8;
         border-radius: 7px;
         box-sizing: border-box;" alt=""  class="rounded-circle user_img"  src="data:image/jpeg; base64,'.base64_encode( $retrieve22['pic']).'" />';}
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
                                <li class="active">
            <a href="blog.php">
            <i class="glyphicon "></i>
           Dashboard </a>
          </li>
          <li>
            <a href="user-profile.html">
            <i class="glyphicon "></i>
            My Profile </a>
          </li>
          <li>
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
            <a href="#">
            <i class="glyphicon "></i>
            Logout </a>
		  </li>   
     </ul>
	</div>
	</div>
	</div>
					
				<br>
				<br>
	
		        <div class="col-sm-8 col-sm-offset-2"  style="margin-bottom:30px;margin-top:50px;">

		            <!--      Wizard container        -->
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="red" id="wizard">
		                <form action="push.php" method="POST" enctype="multipart/form-data">
		                <!--        You can switch " data-color="green" "  with one of the next bright colors: "blue", "azure", "orange", "red"       -->

		                    	<div class="wizard-header">
		                        	<h3 class="wizard-title" style="color:#000;
    weight: 600;" >Create your Startup Company</h3>
									<p class="category"style="color:black;font-weight:300" >This information will let us know more about your company.</p>
									<br>
		                    	</div>
								<div class="wizard-navigation">
									<div class="progress-with-circle">
									    <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="4" style="width: 15%;"></div>
									</div>
									<ul>
			                            <li>
											<a href="#location" data-toggle="tab">
												<div class="icon-circle">
													<i class="">1</i>
												</div>
												Type
											</a>
										</li>
			                            <li>
											<a href="#type" data-toggle="tab">
												<div class="icon-circle">
													<i ><span style="margin-top:20px;">2</span></i>
												</div>
												Company Information
											</a>
										</li>
			                            <li>
											<a href="#facilities" data-toggle="tab">
												<div class="icon-circle">
													<i >3</i>
												</div>
												Funding Information
											</a>
										</li>
			                            <li>
											<a href="#description" data-toggle="tab">
												<div class="icon-circle">
													<i class="">4</i>
												</div>
												Business Details 
											</a>
										</li>
			                        </ul>
								</div>
		                        <div class="tab-content">
		                            <div class="tab-pane" id="location">
		                            	<div class="row">
		                                	<div class="col-sm-12">

											<hr>
											<?php  
											 if(isset($_GET['msg'])){
												$Message = "please enter your startup name";
												echo $Message;
											}
											?>
											<h6 class="info-text1" style="margin-left:60px;"> Basic Information </h6>
											<br>
		                            		</div>
										
		                                	<div class="col-sm-5 col-sm-offset-1">
		                                    	<div class="form-group">
		                                        	<label>Start up Name</label>
		                                        	<input  name="startup_name"  type="text" class="form-control"  placeholder="What is the name of your startup?" >
		                                    	</div>
		                                	</div>
		                                	
											<div class="col-sm-5">
													<div class="form-group">
														<label>Type</label><br>
														<select name="Type" class="form-control " required>
															<option disabled="" selected="">- Startup Type -</option>
															<option value="Agriculture"> Agriculture </option>	
															<option value="">All Categories</option>
                                                            <option value="Construction/Real Estate">Construction & Real Estate</option>
                                                           <option value="Transportation">Transportation</option>
                                                           <option value="Energy/Water">Energy &amp; Water </option>
                                                           <option value="Healthcare">Healthcare</option>
                                                           <option value="E-commerce">E-commerce</option>
                                                          <option value="Marketing/Advertising">Marketing &amp; Advertising </option>
															<option value="Education">Education</option>
														 	<option value="travel">Travel</option>
															<option value="Fintech">Fintech</option>
															<option value="Blockchain">Blockchain</option>
															<option value="Data analysis">Data analysis</option>
														<option value="Entertainment/Music">Entertainment/Music</option>
														<option value="Robotics">Robotics</option>
														<option value="Gaming">Gaming</option>
														<option value="Security">Security</option>
														<option value="human Resources">human resources</option>
														<option value="Apps">Apps</option>
														</select>
													</div>
		                                	</div>
		                                	<div class="col-sm-10 col-sm-offset-1">
		                                    	<div class="form-group">
		                                        	<label>Cofounders</label>
		                                        	<select class="form-control" name="Cofounders" required>
			                                            <option disabled="" selected="">- persons -</option>
			                                            <option>1 Person</option>
			                                            <option>2 Persons </option>
			                                            <option>3 Persons</option>
			                                            <option>4 Persons</option>
			                                            <option>5 Persons</option>
			                                            <option>6+ Persons</option>
		                                        	</select>
		                                    	</div>
		                                	</div>
		                                
											<div class="col-sm-5 col-sm-offset-1">
											
		                                    	<div class="form-group">
		                                        	<label>Insert an Image</label>
		                                        	<div class="input-group" >
		                                            	<input  name="pic" type="file" class="form-control" required>
		                                            
		                                        	</div>
												</div>
	                                           
											</div>
											<div class="col-sm-5">
											
		                                    	<div class="form-group">
		                                        	<label>Insert a Cover</label>
		                                        	<div class="input-group" >
		                                            	<input  name="cover" type="file" class="form-control" >
		                                            
		                                        	</div>
												</div>
	                                           
											</div>
											<div class="col-sm-5 col-sm-offset-1">
		                                    	<div class="form-group">
		                                        	<label>Team Members</label>
		                                        	<select class="form-control" name="team" >
			                                            <option disabled="" selected="">- number-</option>
			                                            <option>1-10 </option>
			                                            <option>10-20 </option>
			                                            <option>30-40</option>
			                                            <option>40-50</option>
			                                            <option>50-60</option>
														<option>60-70</option>
														<option>70-80</option>
														<option>90-100</option>
														<option>more than 100</option>
		                                        	</select>
		                                    	</div>
											</div>
											<div class="col-sm-5 ">
		                                    	<div class="form-group">
		                                        	<label>Linked Institution</label>
		                                        	<input  class="form-control" type="text" name="linked"  placeholder="-date-"></input>
		                                    	</div>
		                                	</div>
		                            	</div>
									</div>
									
		                            <div class="tab-pane" id="type">
		
		                                <div class="row">
											<div class="col-sm-12">
												<hr>
								            <h6 class="info-text1" Style="margin-left:60px; text-align:left"> startup company information </h6>
											<br>
										</div>
											<div class="col-sm-5 col-sm-offset-1">	
												<div class="form-group">
		                                        	<label>Date Founded</label>
		                                        	<input name="Datefounded" type="date" class="form-control" id="exampleInputEmail1" placeholder="-date-" required>
		                                    	</div>
		                                	</div>
		                                	
												<div class="col-sm-5 ">	
													<div class="form-group">
														<label>at what stage of development is your startup</label><br>
														<select name="stage" class="form-control" required>
															<option disabled="" selected="">- stage -</option>
															<option value="Idea exploration"> Idea exploration </option>
															<option value="Idea Development"> Idea Development </option>
															<option value="prototype testing"> prototype testing </option>
															<option value="launch"> launch </option>
															<option value="Seed"> Seed </option>
															<option value="Growth"> Growth </option>
															<option value="Maturity"> Maturity </option>
															<option value="Maturity"> Venture </option>
															<option value="POCT"> POCT </option>
															<option value="...">...</option>
														</select>
													</div>
													</div>
											
											<div class="col-sm-5 col-sm-offset-1">
												<div class="form-group">
													<label>is your Startup revenue generating</label><br>
													<select name="startup_generating" class="form-control" >
														<option disabled="" selected="">--- -</option>
														<option value="Yes"> Yes </option>
														<option value="No"> No </option>
				
														<option value="...">...</option>
													</select>
												</div>
											</div>
		                                	
											<div class="col-sm-5 ">
		                                    	<div class="form-group" >
		                                            <label>Country</label><br>
		                                            <select name="country" class="form-control" Required>
													<option value="Afganistan">Afghanistan</option>
   <option value="Albania">Albania</option>
   <option value="Algeria">Algeria</option>
   <option value="American Samoa">American Samoa</option>
   <option value="Andorra">Andorra</option>
   <option value="Angola">Angola</option>
   <option value="Anguilla">Anguilla</option>
   <option value="Antigua & Barbuda">Antigua & Barbuda</option>
   <option value="Argentina">Argentina</option>
   <option value="Armenia">Armenia</option>
   <option value="Aruba">Aruba</option>
   <option value="Australia">Australia</option>
   <option value="Austria">Austria</option>
   <option value="Azerbaijan">Azerbaijan</option>
   <option value="Bahamas">Bahamas</option>
   <option value="Bahrain">Bahrain</option>
   <option value="Bangladesh">Bangladesh</option>
   <option value="Barbados">Barbados</option>
   <option value="Belarus">Belarus</option>
   <option value="Belgium">Belgium</option>
   <option value="Belize">Belize</option>
   <option value="Benin">Benin</option>
   <option value="Bermuda">Bermuda</option>
   <option value="Bhutan">Bhutan</option>
   <option value="Bolivia">Bolivia</option>
   <option value="Bonaire">Bonaire</option>
   <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
   <option value="Botswana">Botswana</option>
   <option value="Brazil">Brazil</option>
   <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
   <option value="Brunei">Brunei</option>
   <option value="Bulgaria">Bulgaria</option>
   <option value="Burkina Faso">Burkina Faso</option>
   <option value="Burundi">Burundi</option>
   <option value="Cambodia">Cambodia</option>
   <option value="Cameroon">Cameroon</option>
   <option value="Canada">Canada</option>
   <option value="Canary Islands">Canary Islands</option>
   <option value="Cape Verde">Cape Verde</option>
   <option value="Cayman Islands">Cayman Islands</option>
   <option value="Central African Republic">Central African Republic</option>
   <option value="Chad">Chad</option>
   <option value="Channel Islands">Channel Islands</option>
   <option value="Chile">Chile</option>
   <option value="China">China</option>
   <option value="Christmas Island">Christmas Island</option>
   <option value="Cocos Island">Cocos Island</option>
   <option value="Colombia">Colombia</option>
   <option value="Comoros">Comoros</option>
   <option value="Congo">Congo</option>
   <option value="Cook Islands">Cook Islands</option>
   <option value="Costa Rica">Costa Rica</option>
   <option value="Cote DIvoire">Cote DIvoire</option>
   <option value="Croatia">Croatia</option>
   <option value="Cuba">Cuba</option>
   <option value="Curaco">Curacao</option>
   <option value="Cyprus">Cyprus</option>
   <option value="Czech Republic">Czech Republic</option>
   <option value="Denmark">Denmark</option>
   <option value="Djibouti">Djibouti</option>
   <option value="Dominica">Dominica</option>
   <option value="Dominican Republic">Dominican Republic</option>
   <option value="East Timor">East Timor</option>
   <option value="Ecuador">Ecuador</option>
   <option value="Egypt">Egypt</option>
   <option value="El Salvador">El Salvador</option>
   <option value="Equatorial Guinea">Equatorial Guinea</option>
   <option value="Eritrea">Eritrea</option>
   <option value="Estonia">Estonia</option>
   <option value="Ethiopia">Ethiopia</option>
   <option value="Falkland Islands">Falkland Islands</option>
   <option value="Faroe Islands">Faroe Islands</option>
   <option value="Fiji">Fiji</option>
   <option value="Finland">Finland</option>
   <option value="France">France</option>
   <option value="French Guiana">French Guiana</option>
   <option value="French Polynesia">French Polynesia</option>
   <option value="French Southern Ter">French Southern Ter</option>
   <option value="Gabon">Gabon</option>
   <option value="Gambia">Gambia</option>
   <option value="Georgia">Georgia</option>
   <option value="Germany">Germany</option>
   <option value="Ghana">Ghana</option>
   <option value="Gibraltar">Gibraltar</option>
   <option value="Great Britain">Great Britain</option>
   <option value="Greece">Greece</option>
   <option value="Greenland">Greenland</option>
   <option value="Grenada">Grenada</option>
   <option value="Guadeloupe">Guadeloupe</option>
   <option value="Guam">Guam</option>
   <option value="Guatemala">Guatemala</option>
   <option value="Guinea">Guinea</option>
   <option value="Guyana">Guyana</option>
   <option value="Haiti">Haiti</option>
   <option value="Hawaii">Hawaii</option>
   <option value="Honduras">Honduras</option>
   <option value="Hong Kong">Hong Kong</option>
   <option value="Hungary">Hungary</option>
   <option value="Iceland">Iceland</option>
   <option value="Indonesia">Indonesia</option>
   <option value="India">India</option>
   <option value="Iran">Iran</option>
   <option value="Iraq">Iraq</option>
   <option value="Ireland">Ireland</option>
   <option value="Isle of Man">Isle of Man</option>
   <option value="Italy">Italy</option>
   <option value="Jamaica">Jamaica</option>
   <option value="Japan">Japan</option>
   <option value="Jordan">Jordan</option>
   <option value="Kazakhstan">Kazakhstan</option>
   <option value="Kenya">Kenya</option>
   <option value="Kiribati">Kiribati</option>
   <option value="Korea North">Korea North</option>
   <option value="Korea Sout">Korea South</option>
   <option value="Kuwait">Kuwait</option>
   <option value="Kyrgyzstan">Kyrgyzstan</option>
   <option value="Laos">Laos</option>
   <option value="Latvia">Latvia</option>
   <option value="Lebanon">Lebanon</option>
   <option value="Lesotho">Lesotho</option>
   <option value="Liberia">Liberia</option>
   <option value="Libya">Libya</option>
   <option value="Liechtenstein">Liechtenstein</option>
   <option value="Lithuania">Lithuania</option>
   <option value="Luxembourg">Luxembourg</option>
   <option value="Macau">Macau</option>
   <option value="Macedonia">Macedonia</option>
   <option value="Madagascar">Madagascar</option>
   <option value="Malaysia">Malaysia</option>
   <option value="Malawi">Malawi</option>
   <option value="Maldives">Maldives</option>
   <option value="Mali">Mali</option>
   <option value="Malta">Malta</option>
   <option value="Marshall Islands">Marshall Islands</option>
   <option value="Martinique">Martinique</option>
   <option value="Mauritania">Mauritania</option>
   <option value="Mauritius">Mauritius</option>
   <option value="Mayotte">Mayotte</option>
   <option value="Mexico">Mexico</option>
   <option value="Midway Islands">Midway Islands</option>
   <option value="Moldova">Moldova</option>
   <option value="Monaco">Monaco</option>
   <option value="Mongolia">Mongolia</option>
   <option value="Montserrat">Montserrat</option>
   <option value="Morocco">Morocco</option>
   <option value="Mozambique">Mozambique</option>
   <option value="Myanmar">Myanmar</option>
   <option value="Nambia">Nambia</option>
   <option value="Nauru">Nauru</option>
   <option value="Nepal">Nepal</option>
   <option value="Netherland Antilles">Netherland Antilles</option>
   <option value="Netherlands">Netherlands (Holland, Europe)</option>
   <option value="Nevis">Nevis</option>
   <option value="New Caledonia">New Caledonia</option>
   <option value="New Zealand">New Zealand</option>
   <option value="Nicaragua">Nicaragua</option>
   <option value="Niger">Niger</option>
   <option value="Nigeria">Nigeria</option>
   <option value="Niue">Niue</option>
   <option value="Norfolk Island">Norfolk Island</option>
   <option value="Norway">Norway</option>
   <option value="Oman">Oman</option>
   <option value="Pakistan">Pakistan</option>
   <option value="Palau Island">Palau Island</option>
   <option value="Palestine">Palestine</option>
   <option value="Panama">Panama</option>
   <option value="Papua New Guinea">Papua New Guinea</option>
   <option value="Paraguay">Paraguay</option>
   <option value="Peru">Peru</option>
   <option value="Phillipines">Philippines</option>
   <option value="Pitcairn Island">Pitcairn Island</option>
   <option value="Poland">Poland</option>
   <option value="Portugal">Portugal</option>
   <option value="Puerto Rico">Puerto Rico</option>
   <option value="Qatar">Qatar</option>
   <option value="Republic of Montenegro">Republic of Montenegro</option>
   <option value="Republic of Serbia">Republic of Serbia</option>
   <option value="Reunion">Reunion</option>
   <option value="Romania">Romania</option>
   <option value="Russia">Russia</option>
   <option value="Rwanda">Rwanda</option>
   <option value="St Barthelemy">St Barthelemy</option>
   <option value="St Eustatius">St Eustatius</option>
   <option value="St Helena">St Helena</option>
   <option value="St Kitts-Nevis">St Kitts-Nevis</option>
   <option value="St Lucia">St Lucia</option>
   <option value="St Maarten">St Maarten</option>
   <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
   <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
   <option value="Saipan">Saipan</option>
   <option value="Samoa">Samoa</option>
   <option value="Samoa American">Samoa American</option>
   <option value="San Marino">San Marino</option>
   <option value="Sao Tome & Principe">Sao Tome & Principe</option>
   <option value="Saudi Arabia">Saudi Arabia</option>
   <option value="Senegal">Senegal</option>
   <option value="Seychelles">Seychelles</option>
   <option value="Sierra Leone">Sierra Leone</option>
   <option value="Singapore">Singapore</option>
   <option value="Slovakia">Slovakia</option>
   <option value="Slovenia">Slovenia</option>
   <option value="Solomon Islands">Solomon Islands</option>
   <option value="Somalia">Somalia</option>
   <option value="South Africa">South Africa</option>
   <option value="Spain">Spain</option>
   <option value="Sri Lanka">Sri Lanka</option>
   <option value="Sudan">Sudan</option>
   <option value="Suriname">Suriname</option>
   <option value="Swaziland">Swaziland</option>
   <option value="Sweden">Sweden</option>
   <option value="Switzerland">Switzerland</option>
   <option value="Syria">Syria</option>
   <option value="Tahiti">Tahiti</option>
   <option value="Taiwan">Taiwan</option>
   <option value="Tajikistan">Tajikistan</option>
   <option value="Tanzania">Tanzania</option>
   <option value="Thailand">Thailand</option>
   <option value="Togo">Togo</option>
   <option value="Tokelau">Tokelau</option>
   <option value="Tonga">Tonga</option>
   <option value="Trinidad & Tobago">Trinidad & Tobago</option>
   <option value="Tunisia">Tunisia</option>
   <option value="Turkey">Turkey</option>
   <option value="Turkmenistan">Turkmenistan</option>
   <option value="Turks & Caicos Is">Turks & Caicos Is</option>
   <option value="Tuvalu">Tuvalu</option>
   <option value="Uganda">Uganda</option>
   <option value="United Kingdom">United Kingdom</option>
   <option value="Ukraine">Ukraine</option>
   <option value="United Arab Erimates">United Arab Emirates</option>
   <option value="United States of America">United States of America</option>
   <option value="Uraguay">Uruguay</option>
   <option value="Uzbekistan">Uzbekistan</option>
   <option value="Vanuatu">Vanuatu</option>
   <option value="Vatican City State">Vatican City State</option>
   <option value="Venezuela">Venezuela</option>
   <option value="Vietnam">Vietnam</option>
   <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
   <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
   <option value="Wake Island">Wake Island</option>
   <option value="Wallis & Futana Is">Wallis & Futana Is</option>
   <option value="Yemen">Yemen</option>
   <option value="Zaire">Zaire</option>
   <option value="Zambia">Zambia</option>
   <option value="Zimbabwe">Zimbabwe</option>
		                                            </select>
												</div>
												</div>
												<div class="col-sm-5 col-sm-offset-1" require>
													<div class="form-group">
		                                        	<label>City*</label>
		                                        	<input name="city"  type="text" class="form-control"  placeholder="-Name of the city-" required>
		                                    	   </div>
												</div>
												<div class="col-sm-5 ">
													<div class="form-group" >
		                                        	<label>Street*</label>
		                                        	<input name="street"  type="text" class="form-control" id="exampleInputEmail1" placeholder="-Name of the street-">
		                                    	   </div>
		                                	    </div>
											
											<div class="col-sm-12 col-sm-offset-1">
											<hr>
		                                    	<h6 class="info-text1" Style=" text-align:left"> Expand Your Team</h6>
												<div class="col-sm-3 col-sm-offset">
                                               <input type="checkbox" id="vehicle1" name="A[]" value="Co-Founder">
												 <label for="vehicle1"> Co-Founder</label><br>
												</div>
												<div class="col-sm-3 col-sm-offset-1">
													<input type="checkbox" id="vehicle2" name="A[]" value="IT developer">
													  <label for="vehicle1"> IT developer</label><br>
													 </div>
													 <div class="col-sm-3 col-sm-offset-1">
														<input type="checkbox" id="vehicle2" name="A[]" value="Graphic Designer">
														  <label for="vehicle1"> Graphic Designer</label><br>
												 </div>
												 <div class="col-sm-3 col-sm-offset">
													<input type="checkbox" id="vehicle2" name="A[]" value="Accounting">
													  <label for="vehicle1">Accounting</label><br>
											 </div>
											 <div class="col-sm-3 col-sm-offset-1">
												<input type="checkbox" id="vehicle2" name="A[]" value="Lawyer">
												  <label for="vehicle1"> Lawyer</label><br>
										 </div>
										 <div class="col-sm-3 col-sm-offset-1">
											<input type="checkbox" id="vehicle2" name="A[]" value="Marketing">
											  <label for="vehicle1">Marketing</label><br>
									 </div>
									 
											</div>
											<div class="col-sm-12 col-sm-offset-1">
											<hr>
		                                    	<h6 class="info-text1" Style=" text-align:left"> Social Media</h6>
												</div>
												<div class="col-sm-5 col-sm-offset-1">
												<a href="#" class="fa fa-facebook"></a>
												<input  class="form-control" type="url" id="facebook" name="facebook"  placeholder="-Facebook-">
												
												 </div>
												 <div class="col-sm-5 ">
												 <a href="#" class="fa fa-twitter"></a>
												 <input  class="form-control" type="url"  id="twitter" name="twitter"  placeholder="-Twitter-">
                                                </div>
												<div class="col-sm-5 col-sm-offset-1">
												<a href="#" class="fa fa-linkedin"></a>
												<input  class="form-control" type="url"  id="linkedin" name="linked_in" placeholder="-Linkedin-">
												 </div> 
												 <div class="col-sm-5 ">
													<i class="fa fa-globe" style="font-size:15px;color:#18d26e;"></i>
												 <input  class="form-control"  type="url"  id="website" name="website"  placeholder="-Website-">

												</div>
											</div>
		                                </div>
									
		                            <div class="tab-pane" id="facilities">
									<hr>
		                             <h6 class="info-text" Style="margin-left:60px;text-align:left"> funding information </h6>
		                            		<br>
		                                <div class="row">
		                                    <div class="col-sm-5 col-sm-offset-1">
		                                    	<div class="form-group">
		                                        	<label>is your startup now fundraising</label>
		                                        	<select class="form-control" name="startup_fund" required>
			                                            <option disabled="" selected="">- please select -</option>
			                                            <option value="yes">yes</option>
			                                            <option value="no"> No </option>
			                                            
		                                        	</select>
		                                    	</div>
		                                    </div>
		                                    <div class="col-sm-5">
		                                    	<div class="form-group">
		                                        	<label>total money raised</label>
		                                        	<select class="form-control" name="money" required>
			                                            <option disabled="" selected="">- select please -</option>
			                                            <option value="No Funding" >No Funding</option>
														<option value="0-25k">0-25k</option>
														<option value="26k-50k">26k-50k</option>
														<option value="51k-100k">51k-100k</option>
														<option value="101k-500k">101k-500k</option>
														<option value="501k-1M">501k-1M</option>
														<option value="2.5M-5M">2.5M-5M</option>
														<option value="5M-7.5M">5M-7.5M</option>
														<option value="7.5M-10M">7.5M-10M</option>
														<option value="more than 10M">more than 10M</option>
		                                        	</select>
		                                    	</div>
											</div>
		                                </div>
										<hr>
										<div style="clear:both;display:both;">
										
		                                 <h6 class="info-text1" Style="margin-left:55px; text-align:left"> Add rounds </h6>
										 
		                                </div>
										<div id="con">
		                                <div class="row">
		                                    <div class="col-sm-5 col-sm-offset-1">
		                                    	<div class="form-group">
													<label>Date Closed</label>
													<input  class="form-control" value="N/A" id="dateclosed" type="date" name="dateclosed[]"  placeholder="-date-"></input>
		                                        
		                                    	</div>
		                                    </div>
		                                    <div class="col-sm-5">
		                                    	<div class="form-group">
													<label>Amount</label>
													<input  class="form-control"  value="N/A" id="Amount" type="text" name="Amount[]"  placeholder="1000"></input>
		                                    	</div>
											</div>
											<div class="col-sm-3 col-sm-offset-1">
		                                    	<div class="form-group">
													<label>Currency</label>
		                                        	<select class="form-control" name="currency[]" id="currency" value="N/A">
			                                            <option disabled="" selected="">- Currency -</option>
			                                            <option value="EUR">EUR</option>
			                                            <option value="USD">USD</option>
		                                        	</select>
		                                    	</div>
											</div>
											<div class="col-sm-3 ">
		                                    	<div class="form-group">
													<label>Funding Stage</label>
		                                        	<select class="form-control" name="funding_stage[]" id="funding_stage" value="N/A">
			                                            <option disabled="" selected="">- response -</option>
			                                            <option value="Self Funded">Self Funded</option>
														<option value="Friends and Family">Friends and Family </option>
														<option value="Seed">pre Seed</option>
														<option value="Seed">Seed</option>
														<option value="PRE-series A ">PRE-series A </option>
														<option value="series A">series A </option>
														<option value="series B">series B </option>
														<option value="series C"> series C</option>
														<option value="series D"> series D</option>
														<option value="Convertable Note">Convertable Note</option>
														<option value="Launch">Launch</option>
		                                        	</select>
		                                    	</div>
											</div>
											<div class="col-sm-3">
		                                    	<div class="form-group">
													<label>Investor Name</label>
													<input  class="form-control"  value="N/A" id="investor" type="text" name="investor[]"  placeholder="-type your investor'name-"></input>
													
												   </div>
											</div>
											<div class="col-sm-1">
												<br>
											<i class="fa fa-plus" style="font-size:48px;color:#18d26e" id="add"></i>
											</div> 
									
										   </div>
										</div>
										
		                            </div>
		                            <div class="tab-pane" id="description">
		                                <div class="row">
										<hr>
										 <h6 class="info-text1" Style="margin-left:60px; text-align:left"> Tell us more about your company </h6>
										 <br>
		                            	<div class="col-sm-10 col-sm-offset-1">
		                                        <div class="form-group">
		                                            <label> Write us a small description about your company</label>
		                                            <textarea  type="text" name="problem" class="form-control" placeholder="" rows="5" required></textarea>
		                                        </div>
											</div>
											
											<div class="col-sm-10 col-sm-offset-1">
		                                        <div class="form-group">
		                                            <label>what is your future plan </label>
		                                            <textarea name="future" class="form-control" placeholder="" rows="5" required></textarea>
		                                        </div>
											</div>
											
		                                    
		                                    </div>
		                                </div>
		                            </div>

									<div class="wizard-footer">
                                                                    
 
	                            	<div class="pull-right" style="position:relative ;margin-left:130px" >
	                                    <input type='button' class='btn btn-next btn-fill btn-danger btn-wd' name='next' value='Next' />
	                                    <input type='submit' class='btn btn-finish btn-fill btn-danger btn-wd' name='submit' value='Finish' />
									</div>

	                                <div class="pull-left" >
	                                    <input  type='button' class='btn btn-previous btn-default btn-wd' name='previous' value='Previous' />
	                                </div>
	                                <div class="clearfix"></div>
		                        </div>
		                        </div>
		                        
		                    </form>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	        </div> <!-- row -->
	    </div> <!--  big container -->

		
		<!--<div class="fixed-plugin">
			<div class="dropdown open">
				<a href="#" data-toggle="dropdown">
					<i class="fa fa-cog fa-2x"> </i>
				</a>
				<ul class="dropdown-menu">
					<li class="header-title">Examples</li>
					<li>
						<a href="wizard-create-profile.html">
						   <img src="assets/img/wizard-create-profile.png">
						   Create Profile
						</a>
					</li>
					<li>
						<a href="wizard-find-desk.html">
						   <img src="assets/img/wizard-find-desk.png">
  						   Find Desk
						</a>
					</li>
					<li class="active">
						<a href="wizard-list-place.html">
						   <img src="assets/img/wizard-list-place.png">
						   List Your Place
						</a>
					</li>
					<li class="header-title">Colors</li>
					<li class="adjustments-line">
						<a href="javascript:void(0)" class="switch-trigger">
							<div class="text-center">
								<span class="badge filter badge-blue" data-color="blue"></span>
								<span class="badge filter badge-azure" data-color="azure"></span>
								<span class="badge filter badge-green" data-color="green"></span>
								<span class="badge filter badge-orange" data-color="orange"></span>
								<span class="badge filter badge-red active" data-color="red"></span>
							</div>
							<div class="clearfix"></div>
						</a>
					</li>
				   <li class="tutorial">
						<div class="text-center">
							<a href="documentation/elements.html" target="_blank" class="btn btn-default btn-fill btn-block">Documentation</a>
						</div>
					</li>
					<li class="license">
						Personal License
						<div class="text-center">
							<a href="https://www.creative-tim.com/product/paper-bootstrap-wizard" target="_blank" class="btn btn-info btn-fill btn-block">Download, it's free!</a>
						</div>
					</li>
				</ul>
			</div>-->
		</div>
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
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          
            </div>
           
          </div>
        </div>
      </div>
    </div>
  </footer>.

</body>
	<!--   Core JS Files   -->
<!--	<script>
		function addHTMLRow(){
		
	   var table=document.getElementById("table");
		
		if(table.style.display==="none"){
			table.style.display="block";
		}
	   if(table.style.display==="block" ){
		newRow=table=table.insertRow(table.length);
		cell1=newRow.insertCell(0);
		cell2=newRow.insertCell(1);
		cell3=newRow.insertCell(2);
		cell4=newRow.insertCell(3);
		cell5=newRow.insertCell(4);
		dateclosed =document.getElementById("dateclosed").value;
		Amount =document.getElementById("Amount").value;
		currency =document.getElementById("currency").value;
		stage=document.getElementById("funding_stage").value; 
		investor=document.getElementById("investor").value;
		cell1.innerHTML= dateclosed;
		cell2.innerHTML= Amount;
		cell3.innerHTML= currency;
		cell4.innerHTML= stage;
		cell5.innerHTML= investor; 
       } 
}-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
	$(document).ready(function(e){
		 var html='<p/><div><div id="hey"><div class="row"><div class="col-sm-5 col-sm-offset-1"><div class="form-group"><label>Date Closed</label><input  class="form-control" value="N/A" id="childdateclosed" type="date" name="dateclosed[]"  placeholder="-date-"></input></div></div><div class="col-sm-5"><div class="form-group"><label>Amount</label><input  class="form-control"  value="N/A" id="childAmount" type="text" name="Amount[]"  placeholder="1000"></input></div></div><div class="col-sm-3 col-sm-offset-1"><div class="form-group"><label>Currency</label><select class="form-control" name="currency[]" id="childcurrency" value="N/A"><option disabled="" selected="">- Currency -</option><option value="EUR">EUR</option><option value="USD">USD</option></select></div></div><div class="col-sm-3 "><div class="form-group"><label>Funding Stage</label><select class="form-control" name="funding_stage[]" id="childfunding_stage" value="N/A"><option disabled="" selected="">- response -</option> <option value="Self Funded">Self Funded</option><option value="Friends and Family">Friends and Family </option><option value="Seed">pre Seed</option><option value="Seed">Seed</option><option value="PRE-series A ">PRE-series A </option><option value="series A">series A </option><option value="series B">series B </option><option value="series C"> series C</option><option value="series D"> series D</option><option value="Convertable Note">Convertable Note</option><option value="Launch">Launch</option></select></div></div><div class="col-sm-3"><div class="form-group"><label>Investor Name</label><input  class="form-control"  value="N/A" id="childinvestor" type="text" name="investor[]"  placeholder="-type your investor name-"></input></div></div><div class="col-sm-1"><br><i class="fa fa-minus" style="font-size:48px;color:#18d26e" id="remove"></i></div></div></div></div>';

		 
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
