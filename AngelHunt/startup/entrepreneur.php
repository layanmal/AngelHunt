<?php


?>
<title>AngelHunt | My Profile</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<head>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesgeet" href="https://rawgit.com/creativetimofficial/material-kit/master/assets/css/material-kit.css">
    <link href="assets/css/bootstrap.min.css?975" rel="stylesheet" />
    <link href="assets/css/paper-bootstrap-wizard.css?236233373" rel="stylesheet" />
    <link href="assets/css/mystyle1.css?9767" rel="stylesheet"/>
    
<style>
    html *{
    -webkit-font-smoothing: antialiased;
}


.h6, h6 {
    font-size: 50px !important;
    font-weight: 900;
    font-family: 'Quicksand', sans-serif;
    line-height: 1.5em;
    text-transform: uppercase;
}
.h6, h6 {
    font-size: .75rem !important;
    font-weight: 500;
    font-family: 'Quicksand', sans-serif;
    line-height: 1.5em;
    text-transform: uppercase;
}

.name h6 {
    margin-top: 10px;
    margin-bottom: 10px;
}

a .material-icons {
    vertical-align: middle;
}

.fixed-top {
    position: fixed;
    z-index: 1030;
    left: 0;
    right: 0;
}

.profile-page .page-header {
    height: 380px;
    background-position:center;
    background-color:#5d656d;
}

.page-header {
    height: 100vh;
    background-size: cover;
    margin: 0;
    padding: 0;
    border: 0;
    display: flex;
    align-items: center;
}

.header-filter:after, .header-filter:before {
    position: absolute;
    z-index: 1;
    width: 100%;
    height: 100%;
    display: block;
    left: 0;
    top: 0;
    content: "";
}

.header-filter::before {
    background: rgba(0,0,0,.5);
}

.main-raised {
    margin: -60px 30px 0;
    border-radius: 6px;
    box-shadow: 0 16px 24px 2px rgba(0,0,0,.14), 0 6px 30px 5px rgba(0,0,0,.12), 0 8px 10px -5px rgba(0,0,0,.2);
}

.main {
    background: #FFF;
    position: relative;
    z-index: 3;
}

.profile-page .profile {
    text-align: center;
}

.profile-page .profile img {
    width: 100%;
    margin: 0 auto;
    -webkit-transform: translate3d(0,-50%,0);
    -moz-transform: translate3d(0,-50%,0);
    -o-transform: translate3d(0,-50%,0);
    -ms-transform: translate3d(0,-50%,0);
    transform: translate3d(0,-50%,0);
}

.img-raised {
    box-shadow: 0 5px 15px -8px rgba(0,0,0,.24), 0 8px 10px -5px rgba(0,0,0,.2);
}

.rounded-circle {
    border-radius: 50%!important;
}
.img-fluid, .img-thumbnail {
    max-width: 100%;
    height: auto;
}

.title {
    margin-top: 30px;
    margin-bottom: 25px;
    min-height: 32px;
    color: black;
    font-weight: 700;
    font-family: 'Quicksand', sans-serif;}

.profile-page .description {
    margin: 1.071rem auto 0;
    max-width: 600px;
    color: #999;
    font-weight: 300;
}

p {    font-family: 'Quicksand', sans-serif;
color:black;
font-weight:500;
    font-size: 15px;
    margin: 0 0 10px;
}

.profile-page .profile-tabs {
    margin-top: 4.284rem;
}

.nav-pills, .nav-tabs {
    border: 0;
    border-radius: 3px;
    padding: 0 15px;
}

.nav .nav-item {
    position: relative;
    margin: 0 2px;
}

.nav-pills.nav-pills-icons .nav-item .nav-link {
    border-radius: 4px;
}

.nav-pills .nav-item .nav-link.active {
    color: #fff;
    background-color: #18d26e;
    box-shadow: 0 5px 20px 0 rgba(0,0,0,.2), 0 13px 24px -11px#18d26e;
}

.nav-pills .nav-item .nav-link {
    line-height: 24px;
    font-size: 12px;
    font-weight: 500;
    min-width: 100px;
    color: #555;
    transition: all .3s;
    border-radius: 30px;
    padding: 10px 15px;
    text-align: center;
}

.nav-pills .nav-item .nav-link:not(.active):hover {
    background-color: rgba(200,200,200,.2);
}


.nav-pills .nav-item i {
    display: block;
    font-size: 30px;
    padding: 15px 0;
}

.tab-space {
    padding: 20px 0 50px;
}

.profile-page .gallery {
    margin-top: 3.213rem;
    padding-bottom: 50px;
}

.profile-page .gallery img {
    width: 100%;
    margin-bottom: 2.142rem;
}

.profile-page .profile .name{
    margin-top: -80px;
}

img.rounded {
    border-radius: 6px!important;
}

.tab-content>.active {
    display: block;
}

/*buttons*/
.btnn {
    position: relative;
    padding: 12px 30px;
    margin: .3125rem 1px;
    font-size: .75rem;
    font-weight: 400;
    line-height: 1.428571;
    text-decoration: none;
    text-transform: uppercase;
    letter-spacing: 0;
    border: 0;
    border-radius: .2rem;
    outline: 0;
    transition: box-shadow .2s cubic-bezier(.4,0,1,1),background-color .2s cubic-bezier(.4,0,.2,1);
    will-change: box-shadow,transform;
}

.btn.btn-just-icon {
    font-size: 20px;
    height: 41px;
    min-width: 41px;
    width: 41px;
    padding: 0;
    overflow: hidden;
    position: relative;
    line-height: 41px;
}

.btn.btn-just-icon fa{
    margin-top: 0;
    position: absolute;
    width: 100%;
    transform: none;
    left: 0;
    top: 0;
    height: 100%;
    line-height: 41px;
    font-size: 20px;
}
.btn.btn-link{
    background-color: transparent;
    color: #999;
}
.boxxx {
    position: relative;
    width:170px;
    height:170px;
    border: 4px solid transparent;
    border-radius: 50%;
    background: url('images/cutst.jpg');
    background-size:170px 170px;
    background-clip: padding-box;
    padding: 10px;
    /* just to show box-shadow still works fine */
    box-shadow: 0 3px 9px black, inset 0 0 9px white;
    margin-left:-300px;
   

}


.boxxx::after {
    position: absolute;
    top: -4px; bottom: -4px;
    left: -4px; right: -4px;
    background: linear-gradient(red, blue);
    content: '';
    z-index: -1;
    border-radius: 16px;
}



/* footer */


</style>
</head>

<body class="profile-page">
    
    
    <div class="main main-raised">
		<div class="profile-content">
            <div class="container">
                <div class="row">
	                <div class="col-md-6 ml-auto mr-auto">
        	           <div class="profile" >
                        <div class="twPc-div"  >
                            
                            <img style="width:1290px;height:400px;  margin-left:-375px;
                            "src="images/downloads.jpg" >
                        </div>
                       <div class="boxxx"  style="margin-top:-180px;" > </div>	
                       <div class="socialz" style="margin-left:-980px; margin-top:15px;">
                    	<a href="#pablo"style="color:#0072b1;" class="btnn btn-just-icon btn-link btn-dribbble"><i class="fa fa-linkedin"></i></a>
                       <a href="#pablo" style="color:#38A1F3" class="btnn btn-just-icon btn-link btn-twitter"><i class="fa fa-twitter"></i></a>
                       <a href="#pablo" style="color:#3b5998"class="btnn btn-just-icon btn-link btn-pinterest"><i class="fa fa-facebook-f"></i></a>

                    </div>	                        <div class="name">
                                <h3 class="title" style="margin-left:-600px;margin-top:-115px;">Masa Qzaih</h3>	
                                <p style="margin-left:-600px;margin-top:-20px;font-size:15px;">Computer Engineer</p>
							
                            </div>
                            
                        <h1  style="text-transform:none;font-weight:600;font-size:14px;float:right;margin-right:-270px;margin-top:-50px;" class="btn btn-finish btn-fill btn-danger btn-wd " data-show-count="false" data-size="large" data-show-screen-name="false" data-dnt="true">Message</h1>
                        <h1  style="text-transform:none;font-weight:600;font-size:14px;float:right;margin-right:-120px;margin-top:-50px;" class="btn btn-finish btn-fill btn-danger btn-wd " data-show-count="false" data-size="large" data-show-screen-name="false" data-dnt="true">Follow</h1>

	                    </div>
    	            </div>
                </div>
               <!-- <div class="description text-center" style="margin-top:-150px; font-weight:700px;margin-bottom:20px;">
                    <p> Palestinian Entrepreneur and computer Engineering student at An-Najah National University </p>
                </div>-->
		<div class="twPc-divStats text-center" style="display:block;margin-top:-245px;margin-left:-90px">
			<ul class="twPc-Arrange" style="margin-left:90px;">
				<li style="display:inline-block;">
				
						<span class="twPc-StatLabel twPc-block"style="font-size:12px;color:black;margin-left:-5px;margin-top:30px; margin-right:20px" >Followers</span>
						<span style="color:#18d26e;margin-left:-5px;" class="twPc-StatValue">0</span>
					
                </li>
                
                <li  style="margin-left:150px;display:inline-block;" >
						<span class="twPc-StatLabel twPc-block" style="font-size:12px;color:black;margin-left:-128px;margin-top:30px;margin-right:-10px;">Following</span>
            <span class="twPc-StatValue"style="color:#18d26e;margin-left:-128px;margin-right:-10px;">0</span>
					
				</li>
			
			</ul>
		</div>
	</div>
</div>
				<div class="row" style="margin-top:-100px;">
					<div class="col-md-6 ml-auto mr-auto"  >
                        <div class="profile-tabs">
                          <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#studio" role="tab" data-toggle="tab">
                                  <i class="material-icons">perm_identity</i>
                                  
                                  about
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#works" role="tab" data-toggle="tab">
                                  <i class="material-icons">business_center</i>
                                    Companies
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#favorite" role="tab" data-toggle="tab">
                                  <i class="material-icons">favorite</i>
                                    interests
                                </a>
                            </li>
                          </ul>
                        </div>
    	    	</div>
            </div>
          <div class="tab-content tab-space">
            <div class="tab-pane active  gallery" id="studio">
  				<div class="row">
                      <div class="container title ">
                          <h3 >About</h3><br>
                          <div style="display:block">
                          <h5 style="font-weight:700;display:inline-block;">What I do</h5><p style="margin-left:55px;display:inline-block;">I code and sleep</p>
                          
                        </div>
                        <div style="display:block">
                            <h5 style="font-weight:700;display:inline-block;">Experience</h5><p style="margin-left:45px;display:inline-block;">I'm still a student</p>
                            
                          </div>
                      </div>
                      <div class="container title ">
                          <h3 >Location</h3><br>
                          <div style="display:block">
                          <h5 style="font-weight:700;display:inline-block;">Country</h5><p style="margin-left:55px;display:inline-block;">Palestine</p>
                          
                        </div>
                        <div style="display:block">
                            <h5 style="font-weight:700;display:inline-block;">City</h5><p style="margin-left:90px;display:inline-block;">Nablus</p>
                            
                          </div>
                      </div>
                  </div>
                  
  			</div>
            <div class="tab-pane text-center gallery" style="margin-top:100px" id="works">
      			<div class="row">
      				<div class="col-md-3 ml-auto">
                      <img src="../searchs/images/yamsafer.jpg" class="rounded">
  					  <img src="../searchs/images/zain.jpg" class="rounded">
  					  <img src="../searchs/images/inggez.jpg" class="rounded">  					</div>
      				<div class="col-md-3 mr-auto">
                      <img src="../searchs/images/mbc.jpg" class="rounded">
                      <img src="../searchs/images/abwabi.jpg" class="rounded">
      				</div>
      			</div>
  			</div>
            <div class="tab-pane text-center gallery" style="margin-top:100px"id="favorite">
      			<div class="row">
                    <div class="col-md-3 ml-auto">
                        <img src="../searchs/images/yamsafer.jpg" class="rounded">
                          <img src="../searchs/images/zain.jpg" class="rounded">
                          <img src="../searchs/images/inggez.jpg" class="rounded">  					</div>
                        <div class="col-md-3 mr-auto">
                        <img src="../searchs/images/mbc.jpg" class="rounded">
                        <img src="../searchs/images/abwabi.jpg" class="rounded">
                        </div>
      			</div>
      		</div>
          </div>

        
            </div>
        </div>
	
	
    
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
	<script src="assets/js/entr.js" type="text/javascript"></script>

</body>