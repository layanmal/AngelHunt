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
$_SESSION['msg']=$_GET['msg'];
$msg=$_SESSION['msg'];


$resultmy=mysqli_query($conn,"SELECT * From registration WHERE id='$id'");
if (!$resultmy) {
  printf("Error: %s\n", mysqli_error($conn));
  exit();
}


$result=mysqli_query($conn,"SELECT id,companyname,type,investwith,bio,pic,cover,imageData,website,linkedin,twitter,facebook,country,city,street,branches,cityf,countryf,stagef,focus,linked,typeinst FROM corporates WHERE companyname='$msg'");
if (!$result) {
  printf("Error: %s\n", mysqli_error($conn));
  exit();
}

$retrieve=mysqli_fetch_array($result);
$company=$retrieve['companyname'];
$type=$retrieve['type'];
$idcomp=$retrieve['id'];
$_SESSION['idcomp']=$idcomp;
$imageData=$retrieve['imageData'];
$bio=$retrieve['bio'];
$focus=$retrieve['focus'];
$facebook=$retrieve['facebook'];
$twitter=$retrieve['twitter'];
$linkedin=$retrieve['linkedin'];
$website=$retrieve['website'];
$branches=$retrieve['branches'];
$country=$retrieve['country'];
$city=$retrieve['city'];
$stagef=$retrieve['stagef'];
$investwith=$retrieve['investwith'];
$countryf=$retrieve['countryf'];
$cityf=$retrieve['cityf'];
$street=$retrieve['street'];
$linked=$retrieve['linked'];
$typeinst=$retrieve['typeinst'];
$true="";

 
$count=0;
 $result1new=mysqli_query($conn,"SELECT idname,following FROM followers");
 if (!$result1new) {
  printf("Error: %s\n", mysqli_error($conn));
  exit();
}
 while($row2new=mysqli_fetch_array($result1new)){
   if($company==$row2new['following'] ){
     $count++;
   }
   
  if($company == $row2new['following'] and $id == $row2new['idname']){
   $true=TRUE;
  }
  else{
    $true=FALSE;
  }
 
 }



?>



<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />

    <link rel="icon" type="image/png" sizes="32x32" href="logo3.png">
    <title>AngelHunt</title>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;700&display=swap" rel="stylesheet">

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    
	<!-- Canonical SEO -->
    <link rel="canonical" href="https://www.creative-tim.com/product/paper-bootstrap-wizard"/>

    <meta name="keywords" content="wizard, bootstrap wizard, creative tim, long forms, 3 step wizard, sign up wizard, beautiful wizard, long forms wizard, wizard with validation, paper design, paper wizard bootstrap, bootstrap paper wizard">
    <meta name="description" content="Paper Bootstrap Wizard is a fully responsive wizard that is inspired by our famous Paper Kit  and comes with 3 useful examples and 5 colors.">

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Paper Bootstrap Wizard by Creative Tim">
    <meta itemprop="description" content="Paper Bootstrap Wizard is a fully responsive wizard that is inspired by our famous Paper Kit  and comes with 3 useful examples and 5 colors.">
    <meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/49/opt_pbw_thumbnail.jpg">

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

	<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css?975" rel="stylesheet" />
  <link href="assets/css/paper-bootstrap-wizard.css?236273" rel="stylesheet" />
  <link href="assets/css/mystyle1.css?9767" rel="stylesheet"/>
  

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="assets/css/demo.css" rel="stylesheet" />

  <!-- Fonts and Icons -->
 
	<link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
	<link href="assets/css/themify-icons.css" rel="stylesheet">
	<!-- Google Tag Manager -->

	<!-- End Google Tag Manager -->

  <meta name='viewport' content='width=device-width, initial-scale=1'>

  
<!------ Include the above in your HEAD tag ---------->
<style>
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

body{
	background-color:#eee;
}
.msg_cotainer{
		margin-top: auto;
		margin-bottom: auto;
		margin-left: 10px;
		border-radius: 25px;
		background-color: #82ccdd;
		padding: 10px;
		position: relative;
	}
  .msg_time_send {
    position: absolute;
    right: 0;
    bottom: -15px;
    color: rgba(255,255,255,0.5);
    font-size: 10px;
}
	.msg_cotainer_send{
		margin-top: auto;
		margin-bottom: auto;
		margin-right: 10px;
		border-radius: 25px;
		background-color: #78e08f;
		padding: 10px;
    margin-left: 200px;
		position: relative;
	}
  .user_img_msg {
    height: 40px;
    width: 40px;
    border: 1.5px solid #f5f6fa;
}
.msg_time {
    position: absolute;
    left: 0;
    bottom: -15px;
    color: rgba(255,255,255,0.5);
    font-size: 10px;
}
  .justify-content-start {
    -ms-flex-pack: start!important;
    justify-content: flex-start!important;
}
.mb-4{
    margin-bottom: 1.5rem!important;
}
.d-flex {
    display: -ms-flexbox!important;
    display: flex!important;
}
.msg_card_body {
    overflow-y: auto;
}

.card-body22 {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.25rem;
}
.card-footer{
		border-radius: 0 0 15px 15px !important;
			border-top: 0 !important;
      padding: .75rem 1.25rem;
    background-color: rgba(0,0,0,.03);
    border-top: 1px solid rgba(0,0,0,.125);
}
.input-group-append {
    margin-left: -1px;
    display: flex;
    
}
  .input-group {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -ms-flex-align: stretch;
    align-items: stretch;
    width: 100%;
}
.type_msg{
			background-color: rgba(0,0,0,0.7) !important;
			border:0 !important;
			color:white !important;
			height: 60px !important;
			overflow-y: auto;
		}
			.type_msg:focus{
		     box-shadow:none !important;
           outline:0px !important;
		}
		.attach_btn{
	border-radius: 15px 0 0 15px !important;
	background-color: rgba(0,0,0,0.7) !important;
			border:0 !important;
			color: white !important;
			cursor: pointer;
		}
		.send_btn{
	border-radius: 0 15px 15px 0 !important;
	background-color: rgba(0,0,0,0.7) !important;
			border:0 !important;
			color: white !important;
			cursor: pointer;
		}
 .input-group-text {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    padding: .375rem .75rem;
    margin-bottom: 0;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    text-align: center;
    white-space: nowrap;
    background-color: #e9ecef;
    border: 1px solid #ced4da;
    border-radius: .25rem;
}
.input-group>.form-control {
    position: relative;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    width: 1%;
    margin-bottom: 0;
}
.type_msg {
    background-color: rgba(0,0,0,0.7) !important;
    border: 0 !important;
    color: white !important;
    height: 60px !important;
    overflow-y: auto;
}
.form-control {
    display: block;
    width: 100%;
    height: calc(2.25rem + 2px);
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
.msg_head {
    position: relative;
}
.card-header:first-child {
    border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0;
}
.msg_head {
    position: relative;
}
.user_info {
    margin-top: auto;
    margin-bottom: auto;
    margin-left: 15px;
    color:#fff;
}
.card22-header {
    border-radius: 15px 15px 0 0 !important;
    border-bottom: 0 !important;
    padding: .75rem 1.25rem;
    margin-bottom: 0;
    background-color: rgba(0,0,0,0.4);
    border-bottom: 1px solid 
}

.user_img {
    height: 70px;
    width: 70px;
    border: 1.5px solid #f5f6fa;
}
.online_icon {
    position: absolute;
    height: 15px;
    width: 15px;
    background-color: #4cd137;
    border-radius: 50%;
    bottom: 0.2em;
    right: 0.4em;
    border: 1.5px solid white;
}
.rounded-circle {
    border-radius: 50%!important;
}
.img_cont {
    position: relative;
    height: 70px;
    width: 70px;
}
.close {
  cursor: pointer;
  position: absolute;
  top: 50%;
  right: 0%;
  color:#fff;
  padding: 12px 16px;
  transform: translate(0%, -50%);
}

.close:hover {background: #bbb;}
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

 .card{
background-color:#fff;
 }
.card11 {
  margin-top:100px;
    margin-top: 1em;
    background-color:white;
    -o-transition: 0.7s ease-out;
    transition: 0.7s ease-out;
    -webkit-transition: 0.7s ease-out;
    text-align: center!important;
}

/* IMG displaying */
.person-card11 {
    margin-top: 5em;
    padding-top: 5em;
}
.person-card11 .card-title11{
    text-align: center;
}
@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;700&display=swap');

.service-24 {
    margin-top: 10px;
    font-family: 'Quicksand', sans-serif;

	color: #8d97ad;
  font-weight: 300;
  text-align: center!important;
}


.service-24 h1, .service-24 h2, .service-24 h3, .service-24 h4, .service-24 h5, .service-24 h6 {
  color: #3e4555;
  
}
.service-24 h6 {
 
  padding-bottom:30px;
}


.service-24 .card.card-shadow {
    -webkit-box-shadow: 0px 0px 30px rgba(115, 128, 157, 0.1);
    box-shadow: 0px 0px 30px rgba(115, 128, 157, 0.1);
    text-align: center!important;
    background-color: #ccc;
}

.service-24 a {
    text-decoration: none;
    text-align: center!important;

}

.service-24 .card-hover:hover {
	  background: #0000;
    background: -webkit-linear-gradient(legacy-direction(to right), #2cdd9b 0%, #1dc8cc 100%);
    background: -webkit-gradient(linear, left top, right top, from(#2cdd9b), to(#1dc8cc));
    background: -webkit-linear-gradient(left, #2cdd9b 0%, #1dc8cc 100%);
    background: -o-linear-gradient(left, #2cdd9b 0%, #1dc8cc 100%);
    background: linear-gradient(to right, #2cdd9b 0%, #1dc8cc 100%);
    text-align: center!important;
}

.service-24 .card-hover:hover .bg-success-grediant {
	color: #ffffff;
    text-fill-color: #ffffff;
    -webkit-text-fill-color: #ffffff;
    text-align: center!important;
}

.service-24 .card-hover:hover .ser-title {
    color: #ffffff;
    text-align: center!important;
}

.service-24 .bg-success-grediant {
	background: #2cdd9b;
    background: -webkit-linear-gradient(legacy-direction(to right), #2cdd9b 0%, #18d26e 100%);
    background: -webkit-gradient(linear, left top, right top, from(#2cdd9b), to(#18d26e));
    background: -webkit-linear-gradient(left, #2cdd9b 0%, #18d26e 100%);
    background: -o-linear-gradient(left, #2cdd9b 0%, #18d26e 100%);
    background: linear-gradient(to right, #2cdd9b 0%, # 100%);
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
    text-fill-color: transparent;
	font-size: 18px;
	text-align:center;
}

.service-24 .wrap-service-24 .card {
    -o-transition: 0.3s ease-out;
    transition: 0.3s ease-out;
    -webkit-transition: 0.3s ease-out;
    text-align: center!important;
    background-color:#E8E8E8;
    padding-top:30px;
   
}

.service-24 .wrap-service-24 .card:hover {
    -ms-transform: translateY(-10px);
    transform: translateY(-10px);
    -webkit-transform: translateY(-10px);
    background-image: linear-gradient(to right, #2cdd9b ,#18d26e );
    text-align: center!important;
    padding-top:30px
}

.service-24 .btn-outline-success {
		color: #2cdd9b !important;
    background-color: transparent;
    border-color: #2cdd9b;
    text-align: center!important;
}

.service-24 .btn-outline-success:hover {
		background: #2cdd9b;
    border-color: #2cdd9b;
    color: #ffffff !important;
    text-align: center!important;
}

.service-24 .btn-md {
    padding: 15px 45px;
    font-size: 16px;
    text-align: center!important;
    
}
.fa-home{
margin-left:10px;
margin-right:5px;
color:green;

}

  .icon {
    font-size: 40px;
    margin-bottom: 0px;
    -webkit-transition: .3s all ease;
    -o-transition: .3s all ease;
    transition: .3s all ease; }
  
  
.jobs-wrap .job-item {
  display: block;
  border-bottom: 1px solid #ced4da !important;
  color: rgba(0, 0, 0, 0.5);
  background: #fff;
  position: relative;
  z-index: 1; }
  .jobs-wrap .job-item:hover {
    background: #fff;
    -webkit-box-shadow: 4px 0 40px 0 rgba(0, 0, 0, 0.1);
    box-shadow: 4px 0 40px 0 rgba(0, 0, 0, 0.1);
    z-index: 2; }

  .jobs-wrap .job-item.fulltime {
    border-left: 3px solid #18d26e; }
 
  .jobs-wrap .job-item .company-logo {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 100px;
    flex: 0 0 100px; }
    .jobs-wrap .job-item .company-logo img {
      max-width: 100%;
      border-radius: 4px; }
  .jobs-wrap .job-item h3 {font-size: 20px; 
 font-weight:900px;
 color:black;
    }
  .jobs-wrap .job-item .job-details {
    width: calc(100% - 250px); }
    @media (max-width: 1199.98px) {
      .jobs-wrap .job-item .job-details {
        width: 100%;
        text-align: center; } }
  .jobs-wrap .job-item .job-category {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 150px;
    flex: 0 0 150px;
    text-align: center; }
    .d-block{display:block!important}
    .d-md-flex{display:-webkit-box!important;display:-ms-flexbox!important;display:flex!important}
    .align-items-center{-webkit-box-align:center!important;-ms-flex-align:center!important;align-items:center!important}
    .border-bottom{border-bottom:1px solid #dee2e6!important}
    .text-center{text-align:center!important}
    @media (min-width:768px){.text-md-left{text-align:left!important}.text-md-right{text-align:right!important}.text-md-center{text-align:center!important}}
    .pl-3,.px-3{padding-left:1rem!important}
    .img-fluid{max-width:100%;height:auto}
    .mx-auto{margin-right:auto!important}
    .h-100{height:100%!important}
    .p-3{padding:1rem!important}
    .align-self-center{-ms-flex-item-align:center!important;align-self:center!important}
    .d-lg-flex{display:-webkit-box!important;display:-ms-flexbox!important;display:flex!important}
    .mr-3,.mx-3{margin-right:1rem!important}
    .mr-1,.mx-1{margin-right:0.25rem!important}
    .align-self-center{-ms-flex-item-align:center!important;align-self:center!important}
    .d-lg-flex{display:-webkit-box!important;display:-ms-flexbox!important;display:flex!important}
    a.text-info:focus,a.text-info:hover{color:#117a8b!important}
    .p-2{padding:0.5rem!important}
    .rounded{border-radius:0.25rem!important}.rounded-top{border-top-left-radius:0.25rem!important;border-top-right-radius:0.25rem!important}.rounded-right{border-top-right-radius:0.25rem!important;border-bottom-right-radius:0.25rem!important}.rounded-bottom{border-bottom-right-radius:0.25rem!important;border-bottom-left-radius:0.25rem!important}.rounded-left{border-top-left-radius:0.25rem!important;border-bottom-left-radius:0.25rem!important}.rounded-circle{border-radius:50%!important}.rounded-0{border-radius:0!important}
</style>
</head>
<body >
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
                      <li><a href="../startup/createstartup.php?msg=''"> a Startup page</a></li>
          <li><a href="../startup/investor.php">an Investor page</a></li>
                    
                    <li><a href="../startup/createco.php" >a corporate page</a></li>
                    </ul> 
                  </li>
                <!--  <li>
                    <a class="page-scroll" href="#portfolio"></a>
                  </li>-->

                     <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Directories<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="../searchs/startup.php?msg=''">Startups</a></li>
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
	
<div class="container" >
<div class="row">
  
<!--<h1>Twitter Profile Card</h1>
<p>You can use with Twitter API, bot or manual.</p> -->
<!-- code start -->
<div class="twPc-div">
    <!-- <a class="twPc-bg twPc-block"></a> -->
    <?php if(!empty($retrieve['cover'])) {
        echo '<img  " class="twPc-bg twPc-block" style="background-image:url(data:image/jpeg;base64,'.base64_encode( $retrieve['cover'] ).')"/>';
        
    } else { 
     
        echo '<a class="twPc-bg twPc-block"  style="background-image:url(https://www.oberlo.com/wp-content/uploads/2017/06/shutterstock_374648065-880x470-c.jpg)"/>';
}?>
	<div>
		<!-- <div class="twPc-button">

            <a   class="btn btn-finish btn-fill btn-danger btn-wd " data-show-count="false" data-size="large" data-show-screen-name="false" data-dnt="true">Follow</a>
            <a   class="btn btn-finish btn-fill btn-danger btn-wd " data-show-count="false" data-size="large" data-show-screen-name="false" data-dnt="true">Message</a>

		</div> -->
	
		<a title="profile-img"  class="twPc-avatarLink">
  <?php  echo '<img  class="twPc-avatarImg" src="data:image/jpeg;base64,'.base64_encode( $retrieve['pic'] ).'" height="170" width="170"/>';?>
		</a>

		<div class="twPc-divUser">
			<div class="twPc-divName">
      <?php if($true){
    
    echo'<a href="unfollow3.php?msg='.$company.'"  style="float:right; margin-right:7px;margin-top:30px;" class="btn btn-finish btn-fill btn-danger btn-wd " data-show-count="false" data-size="large" data-show-screen-name="false" data-dnt="true">UnFollow</a>';

}else{
    echo'<a href="follow3.php?msg='.$company.'"  style="float:right; margin-right:7px;margin-top:30px;" class="btn btn-finish btn-fill btn-danger btn-wd " data-show-count="false" data-size="large" data-show-screen-name="false" data-dnt="true">Follow</a>';
} ?>
      <a  style="float:right;margin-right:7px;margin-top:30px;" class="btn btn-finish btn-fill btn-danger btn-wd " data-show-count="false" data-size="large" data-show-screen-name="false" data-dnt="true" onclick="openForm()">Message</a>
      <a href="<?php echo $row['$website'];?>" target="_blank" style="float:right;margin-right:7px;margin-top:30px;" class="btn btn-finish btn-fill btn-danger btn-wd " data-show-count="false" data-size="large" data-show-screen-name="false" data-dnt="true">Website</a>
      <a  href="<?php echo $website ?>"> <span style="color:black; font-size:25px;margin-left:10px;margin-top:30px;"><?php 
echo $company;
?> <span></a>
            </div>
           
			<span>
				<a href="<?php $website ?>" target="_blank"><span style ="font-size:16px"><strong>my Website account</strong></span></a>
			</span>
		</div>

    <div class="twPc-divStats">
			<ul class="twPc-Arrange" style="margin-left:40px;">
				<li class="twPc-ArrangeSizeFit">
					<a href="https://twitter.com/mertskaplan"  title="9.840 Tweet" >
						<span class="twPc-StatLabel twPc-block"style="margin-top:30px; " >Article</span>
						<span class="twPc-StatValue">0</span>
					</a>
				</li>
				<li class="twPc-ArrangeSizeFit">
					<a href="https://twitter.com/mertskaplan/following" title="885 Following">
						<span class="twPc-StatLabel twPc-block" style="margin-top:30px;">Following</span>
            <span class="twPc-StatValue"><?php
            echo $count ?></span>
					</a>
				</li>
				<li class="twPc-ArrangeSizeFit">
					<a href="https://twitter.com/mertskaplan/followers" title="1.810 Followers">
						<span class="twPc-StatLabel twPc-block"style="margin-top:30px;">Followers</span>
						<span class="twPc-StatValue">0</span>
					</a>
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- code end -->
</div>
</div>
<!-- code end -->
</div>
</div>
<div class="container" style="margin-top:90px;">
<div class="row wrap-service-24">
   <div class="col-md-9" >
    <div class="card">
    <h2 class=" fas fa-info" style="color:#18d26e; padding:15px;"></h2>
    <b>   <span for="email" class="card-title11 " style="font-size:22px; font-weight:700px;text-center:center">Company Information</span></b>
  <hr>
<div class="py-5 service-24" >
  <b><span > <textarea  rows="3" cols="110" style=" font-size:15px;border-color:white">
<?php echo $bio ?>
</textarea></span></b>
    <div class="container">
        <!-- Row -->
        <div class="row wrap-service-24 col-lg-9 col-md-12">
            <!-- Column -->
            <div class="col-lg-3 col-md-6">
                <div class="card rounded card-shadow border-0 mb-4">
                    <a href="javascript:void(0)" class="card-hover py-4 text-center d-block rounded"> 
<b>												<span class="bg-success-grediant"><?php echo $type;?></span></b>
                        <h6 class="ser-title">Type of Corperation</h6>
                    </a>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-3 col-md-6">
                <div class="card card-shadow border-0 mb-4">
                    <a href="javascript:void(0)" class="card-hover py-4 text-center d-block rounded"> 
										<b>		<span class="bg-success-grediant" ><?php echo $focus;?></span></b>
                        <h6 class="ser-title">Industry focus</h6>
                    </a>
                </div>
            </div>
            
            
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-3 col-md-6">
                <div class="card card-shadow border-0 mb-4">
                    <a href="javascript:void(0)" class="card-hover py-4 text-center d-block rounded"> 
									<b>			<span class="bg-success-grediant"><?php echo $countryf?></span></b>
                        <h6 class="ser-title">Country Focus</h6>
                    </a>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-3 col-md-6">
                <div class="card card-shadow border-0 mb-4">
                    <a href="javascript:void(0)" class="card-hover py-4 text-center d-block rounded"> 
										<b>		<span class="bg-success-grediant"><?php echo $stagef;?></span></b>
                        <h6 class="ser-title">Development Focus Interest</h6>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card card-shadow border-0 mb-4">
                    <a href="javascript:void(0)" class="card-hover py-4 text-center d-block rounded"> 
									<b>			<span class="bg-success-grediant"><?php echo $investwith;?></span></b>
                        <h6 class="ser-title">Total Amount</h6>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card card-shadow border-0 mb-4">
                    <a href="javascript:void(0)" class="card-hover py-4 text-center d-block rounded"> 
					<b>	<span class="bg-success-grediant"><?php echo $linked?></span></b>
                        <h6 class="ser-title">Linked Institutions</h6>
                    </a>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-3 col-md-6">
                <div class="card card-shadow border-0 mb-4">
                    <a href="javascript:void(0)" class="card-hover py-4 text-center d-block rounded"> 
											<b>	<span class="bg-success-grediant"><?php echo $stagef;?></span></b>
                        <h6 class="ser-title">Stage Focus</h6>
                    </a>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-3 col-md-6">
                <div class="card card-shadow border-0 mb-4">
                    <a href="javascript:void(0)" class="card-hover py-4 text-center d-block rounded"> 
											<b>	<span class="bg-success-grediant"><?php echo $branches;?></span></b>
                        <h6 class="ser-title">Branches</h6>
                    </a>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            
			
        </div>
</div>
</div>
</div>
</div>
<div class=" col-lg-3 col-md-12">
            <!-- Column -->
            <div class="card">
                    <div class="card-body11" style="margin-left:20px;padding-left:5px;">
                        
                        <h2 class="	fas fa-map-marker-alt" style="color:#18d26e"> </h2>
                      <b>  <span for="email" class="card-title11 " style="font-size:19px; text-center:center">Location Information</span></b>
<hr>
                        <div class="form-group">
                            <label for="email" class="col-form-label " style="font-size:15px;">Country: </label>
                            <span for="email" class="col-form-label"style="font-size:15px;"><?php echo $country ?></span>
<br>
                            <label for="email" class="col-form-label"style="font-size:15px;">City: </label>
                            <span for="email" class="col-form-label"style="font-size:15px;"><?php echo $city ?></span>
<br>
                            <label for="email" class="col-form-label"style="font-size:15px;">Street: </label>
                            <span for="email" class="col-form-label"style="font-size:15px;"><?php echo $street ?></span>
                            <br>
 <br>
 <br>  
                        </div>
                        
                    </div>
            </div>  
            <div class="card">
                    <div class="card-body11" style="margin-left:20px;padding-left:5px;">
                        
                        <h2 class="fas fa-flag" style="color:#18d26e"> </h2>
                   <b>     <span  class="card-title11 " style="font-size:18px; text-center:center">Biography</span></B>
<hr>
                        <div class="form-group">
                            
                            <span for="email" class="col-form-label"><?php echo $bio?></span>
<br>
 <br>
 <br>     
                        </div>  
                    </div>
            </div>  
       </div>

</div>
</div>
<!--t5bes-->
<div class="container" style="margin-top:10px;">
<div class="row wrap-service-24">
   <div class="col-md-9" >
   <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Rounds</h4>
                  <p class="card-category" style="color:white;"> Listed below Investments by the Company</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          Date Raised
                        </th>
                        <th>
                          Amount
                        </th>
                        <th>
                          Currency
                        </th>
                        <th>
                          Stage
                        </th>
                        <th>
                          Startup  Name
                        </th>
                      </thead>
                      <tbody>
                      <?php     
                       $result = mysqli_query($conn,"SELECT * FROM  corprounds
                      WHERE companyname ='$StartupName'") or die('Invalid query: ' . mysqli_error($conn));
                     while ($row = mysqli_fetch_assoc($result)) {
        
                    ?>
                        <tr>
                          <td>
                            <?php echo $row['dateraised'] ?>
                          </td>
                          <td>
                          <?php echo $row['amount'] ?>
                          </td>
                          <td>
                          <?php echo $row['currency'] ?>
                          </td>
                          <td>
                          <?php echo $row['stage'] ?>
                          </td>
                          <td class="text-primary">
                          <?php echo $row['startupname'] ?>
                          </td>
                        </tr>
                        <?php }?>
                      
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
      <div class="rounded border jobs-wrap">
   <div class="card">      
   <h2 class="	fas fa-balance-scale" style="color:#18d26e; padding:15px;"></h2>
     <b><span for="email" class="card-title11 " style="font-size:22px;text-center:left">Related Investors</span>
  <hr><div class="ex3">
              <?php   $result = mysqli_query($conn,"SELECT * FROM  investors") or die('Invalid query: ' . mysqli_error($conn));
         while ($row = mysqli_fetch_assoc($result)) {
  
        ?>
                      <a href="../invest/validation2.php?msg=<?php echo $row['companyname'];?>"  class="job-item d-block d-md-flex align-items-center  border-bottom fulltime">
                        <div class="company-logo blank-logo text-center text-md-left pl-3">
                        <?php  echo '<img  "class="img-fluid mx-auto" src="data:image/jpeg; base64,'.base64_encode( $row['pic']).'" />';?>
                        </div>
                        <div class="job-details h-100">
                          <div class="p-3 align-self-center">
                            <h3>
                               <?php echo $row['companyname'];
                            $_SESSION['StartupName']=$row['companyname']?>
                            </h3>
                            <div class="d-block d-lg-flex"style="color:#823838">
                            <div class="mr-3"style="color:#823838"> 
                    <i class="fas fa-thumbtack"></i> <?php echo $row['country']?>, 
                               <?php echo $row['city']?></div>
                            </div>
                          </div>
                        </div>
                        <div class="job-category align-self-center">
                          <div class="p-3">
                          <span class="btn btn-primary btn-finish btn-danger">Visit Profile</span>
                          </div>
                        </div>  
                      </a>
        <?php
              }
              ?> </div>
        </div>
           </div>
    <div class="rounded border jobs-wrap">
   <div class="card">      
   <h2 class="	fas fa-object-group" style="color:#18d26e; padding:15px;"></h2>
     <span for="email" class="card-title11 " style="font-size:22px; text-center:left">Related Startups</span>
  <hr>
  <div class="ex3">
              <?php   $result = mysqli_query($conn,"SELECT * FROM  startups
        ORDER BY ID  DESC") or die('Invalid query: ' . mysqli_error($conn));
         while ($row = mysqli_fetch_assoc($result)) {
       
        ?> 
        
                      <a href="../searchs/validation.php?msg=<?php echo $row['StartupName'];?>"  class="job-item d-block d-md-flex align-items-center  border-bottom fulltime">
                        <div class="company-logo blank-logo text-center text-md-left pl-3">
                        <?php  echo '<img  "class="img-fluid mx-auto" src="data:image/jpeg; base64,'.base64_encode( $row['imageType']).'" />';?>
                        </div>
                        <div class="job-details h-100">
                          <div class="p-3 align-self-center">
                            <h3> <?php  echo $row['StartupName'];
                            $_SESSION['StartupName']=$row['StartupName']?></h3>
                            <div class="d-block d-lg-flex">
                            <div class="mr-3"style="color:#823838"> 
                    <i class="fas fa-thumbtack"></i> <?php echo $row['Country']?>, 
                               <?php echo $row['City']?></div>
                            </div>
                          </div>
                        </div>
                        <div class="job-category align-self-center">
                          <div class="p-3">
                          <span class="btn btn-primary btn-finish btn-danger">Visit Profile</span>
                          </div>
                        </div>  
                      </a>
        <?php
              }
              ?></div>
        </div>
    </div>
        
    <?php $result = mysqli_query($conn,"SELECT *  FROM  jobs where company='$company' ") or die('Invalid query: ' . mysqli_error($conn));
         while ($row = mysqli_fetch_assoc($result)) {
        ?>    
    <div class="rounded border jobs-wrap">
   <div class="card">      
     <h2 class="	fa fa-gears" style="color:#18d26e; padding15px;"></h2>
      <span for="email" class="card-title11 " style="font-size:18px; text-center:left">jobs</span>
        <hr>
        
        
          <a href="../jobfindernew/job-single.php?msg=1,<?php echo $row['company'];?>"  class="job-item d-block d-md-flex align-items-center  border-bottom fulltime">
         <div class="company-logo blank-logo text-center text-md-left pl-3">
           <?php  echo '<img  "class="img-fluid mx-auto" src="data:image/jpeg; base64,'.base64_encode( $retrieve['pic']).'" />';?>
          </div>
        <div class="job-details h-100">
         <div class="p-3 align-self-center">
          <h3> <?php echo $row['company'];?> </h3>
       <div class="d-block d-lg-flex">
      <div class="mr-3"><span class="icon-suitcase mr-1"></span>  <?php echo $row['country']?></div>
      <div class="mr-3"><span class="icon-room mr-1"></span> <?php echo $row['city']?></div>
      <div class="mr-3"><span class="icon-room mr-1"></span> <?php  echo $row['day'];echo $row['month'];echo $row['year']?></div>                       
       </div>
     </div>
   </div>
 <div class="job-category align-self-center">
 <div class="p-3">
  <span class="text-info p-2 rounded border border-info">Apply</span>
   </div>
    </div>  
  </a>
      
    </div>
   </div>         
   <?php
              }
              ?>

    
</div>
<div class=" col-lg-3 col-md-12">
            <!-- Column -->
            
             
            
            <div class="card"style="margin-top:10px;">
                    <div class="card-body11" style="margin-left:20px;padding-left:5px;">
                        
                        <h2 class="	fa fa-globe" style="font-size:35px;color:#18d26e"></h2>
                  <b>      <span  class="card-title11 " style="margin-left:30px;font-size:19px; text-center:center">Social Media</span></b>
<hr>
                        <div class="form-group">
                        <i class="fab fa-facebook-f" style=" color:#3b5998;font-size:25px; "></i>

<span for="email" src="" class="col-form-label" style=" margin-left:10px;font-size:14px"><a style="color:black;"href="<?php echo $facebook ?>" target="_blank">View on Facebook</a></span>
<br>
<br>

<i class="fab fa-twitter"style=" color:#1da1f2;font-size:25px; "></i>


                            <span for="email" class="col-form-label" style="margin-left:7px;font-size:14px"><a style="color:black;"href="<?php echo $twitter ?>" target="_blank">View on Twitter</a>
                            </span>
<br>
<br>
<i class="fab fa-linkedin-in" style=" color:#0072b1; font-size:25px; "></i>


                            <span for="email" class="col-form-label" style="margin-left:10px;font-size:14px"><a style="color:black;" href="<?php echo $linkedin ?>" target="_blank"> View on LinkedIn</a></span>
                            <div class="email-feedback">
                            </div>
                            <br>
                            <br>
                        </div>
                        
                    </div>
            </div>  
       </div>
       <div class="chat-popup" id="myForm" style="height: 330px;
    border-radius: 15px !important;
    background-color: rgba(0,0,0,0.8)!important;
    margin-right:70px;" >
 <form action='action_page.php?msg=to' method='post' id='myform'class="form-container" >
  <div class="card22-header msg_head " >
    <span class="close" onclick="closeForm()">x</span>
							<div class="d-flex bd-highlight">
								<div class="img_cont">
                  <?php echo'<img src="data:image/jpeg;base64,'.base64_encode( $retrieve['pic'] ).'" class="rounded-circle user_img">'
								?>
									<span class="online_icon"></span>
								</div>
								<div class="user_info" >
									<span>Chat with <?php echo $retrieve['companyname'] ?></span>
									<p></p>
								</div>
								
							</div>
							
						</div>
    <div class="card-body22 msg_card_body">
    <div class="d-flex justify-content-start mb-4">
								<div class="img_cont_msg">
								<?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $retrieve['pic'] ).'" class="rounded-circle user_img_msg">'?>
								</div>
								<div class="msg_cotainer" id="hello1">
								
									<span class="msg_time">8:40 AM, Today</span>
								</div>
							</div>
							<div class="d-flex justify-content-end mb-4">
              <div class="msg_cotainer_send" id="hello" >
									<span class="msg_time_send" >8:55 AM, Today</span>
								</div>
								<div class="img_cont_msg">
                <?php $resultmyp=mysqli_fetch_array($resultmy);
                echo '<img src="data:image/jpeg;base64,'.base64_encode( $resultmyp['pic'] ).'" class="rounded-circle user_img_msg">'?>
								</div>
              </div>
              <div class="card-footer">
							<div class="input-group">
								<div class="input-group-append">
									<span class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span>
								</div>
                <textarea name="message" id="message" class="form-control type_msg" placeholder="Type your message..."></textarea>
								<div class="input-group-append">
                <button class="input-group-text send_btn"><i id='insert'class="fas fa-location-arrow"></i></button>
										</div>
							</div>
						</div>
            </div>
   

   <!-- <button type="button" class="btn cancel" onclick="closeForm()">Close</button>-->
  </form>
       
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
  href="#"><i class="	fa fa-facebook-f"></i></a>
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

<!--t5be-->

</body>
</script>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
<script src='https://code.jquery.com/jquery-2.1.3.min.js'></script>
<script type="text/javascript">
$('#myform').submit(function(){
  $('input[type="text"], textarea').val('');
  
	return false;
});
 
$('#insert').click(function(){
	$.post(		
		$('#myform').attr('action'),
		$('#myform :input').serializeArray(),
		function(result){
			$('#success').html(result);
		}
	);
});

</script>
</script>
<script type="text/javascript">
dis();
setInterval(function(){
  dis();
},2000); 
function dis(){
  xmlhttp= new XMLHttpRequest();
  xmlhttp.open("GET","select.php",false);
  xmlhttp.send();
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
  var msg= xmlhttp.responseText.split(",");
  var i;
  var msg1 ='';
  var msg2 ='';
  //console.log(msg);
  for( i=0 ;i<msg.length;i++){
    //console.log(msg[i]);
  if(msg[i]=="to"){
    //console.log(msg[i+1]);
    
    msg1 += msg[i+1] + '<br/>';
    // console.log(zeft);
document.getElementById("hello").innerHTML =msg1;
 
}else if(msg[i]=="from"){
  //console.log(msg[i+1]);
  msg2 += msg[i+1] +'<br/>' ;
  document.getElementById("hello1").innerHTML=msg2;
}

}
}
}
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
