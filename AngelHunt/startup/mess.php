<?php 
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dp = "starter" ;

$conn = new mysqli($servername, $username, $password,$dp);
 //Check connection
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
   
}


$email=$_SESSION['email'];

$id=$_SESSION['id'];

$idcomp=$_SESSION['idcomp'];
$company = $_GET['msg']; 
$_SESSION['company']=$company;

$result=mysqli_query($conn,"SELECT Distinct iduser FROM chat WHERE idcomp='$idcomp' ");
if (!$result) {
  printf("Error: %s\n", mysqli_error($conn));
  exit();
}



?><!DOCTYPE html>
<html>
	<head>
		<title>Chat</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js"></script>
	</head>
    <style>
	body,html{
			height: 100%;
			margin: 0;
			background: #ccc;
	      
		}

		.chat{
			margin-top: auto;
			margin-bottom: auto;
		}
		.card{
			height: 500px;
			border-radius: 15px !important;
			/*background-color: rgba(0,0,0,0.4) !important;*/
			background-color:#fafafa;
		}
		.contacts_body{
			padding:  0.75rem 0 !important;
			overflow-y: auto;
			white-space: nowrap;
			
		}
		.msg_card_body{
			overflow-y: auto;
		}
		.card-header{
			border-radius: 15px 15px 0 0 !important;
			border-bottom: 0 !important;
			background-color: rgba(0,0,0,0.7) !important;
			color:#fafafa;
			weight:600;
			font-size:40px;
		}
	 .card-footer{
		border-radius: 0 0 15px 15px !important;
			border-top: 0 !important;
	}
		.container{
			align-content: center;
		}
		.search{
			border-radius: 15px 0 0 15px !important;
			background-color: rgba(0,0,0,0.7) !important;
			border:0 !important;
			color:white !important;
		}
		.search:focus{
		     box-shadow:none !important;
           outline:0px !important;
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
	background-color: rgba(0,0,0,0.3) !important;
			border:0 !important;
			color: white !important;
			cursor: pointer;
		}
		.send_btn{
	border-radius: 0 15px 15px 0 !important;
	background-color: rgba(0,0,0,0.3) !important;
			border:0 !important;
			color: white !important;
			cursor: pointer;
		}
		.search_btn{
			border-radius: 0 15px 15px 0 !important;
			background-color: rgba(0,0,0,0.3) !important;
			border:0 !important;
			color: white !important;
			cursor: pointer;
		}
		.contacts{
			list-style: none;
			padding: 0;
		}
		.contacts li{
			width: 100% !important;
			padding: 5px 10px;
			margin-bottom: 15px !important;
		}
	.active{
			background-color: rgba(0,0,0,0.3);
	}
		.user_img{
			height: 70px;
			width: 70px;
			border:1.5px solid #f5f6fa;
		
		}
		.user_img_msg{
			height: 40px;
			width: 40px;
			border:1.5px solid #f5f6fa;
		
		}
	.img_cont{
			position: relative;
			height: 70px;
			width: 70px;
	}
	.img_cont_msg{
			height: 40px;
			width: 40px;
	}
	.online_icon{
		position: absolute;
		height: 15px;
		width:15px;
		background-color: #4cd137;
		border-radius: 50%;
		bottom: 0.2em;
		right: 0.4em;
		border:1.5px solid white;
	}
	.offline{
		background-color: #c23616 !important;
	}
	.user_info{
		margin-top: auto;
		margin-bottom: auto;
		margin-left: 15px;
	}
	.user_info span{
		font-size: 20px;
		color: white;
	}
	.user_info p{
	font-size: 10px;
	color: rgba(255,255,255,0.6);
	}
	.video_cam{
		margin-left: 50px;
		margin-top: 5px;
	}
	.video_cam span{
		color: white;
		font-size: 20px;
		cursor: pointer;
		margin-right: 20px;
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
	.msg_cotainer_send{
		margin-top: auto;
		margin-bottom: auto;
		margin-right: 10px;
		border-radius: 25px;
		background-color: #78e08f;
		padding: 10px;
		position: relative;
	}
	.msg_time{
		position: absolute;
		left: 0;
		bottom: -15px;
		color: rgba(255,255,255,0.5);
		font-size: 10px;
	}
	.msg_time_send{
		position: absolute;
		right:0;
		bottom: -15px;
		color: rgba(255,255,255,0.5);
		font-size: 10px;
	}
	.msg_head{
		position: relative;
	}
	#action_menu_btn{
		position: absolute;
		right: 10px;
		top: 10px;
		color: white;
		cursor: pointer;
		font-size: 20px;
	}
	.action_menu{
		z-index: 1;
		position: absolute;
		padding: 15px 0;
		background-color: rgba(0,0,0,0.5);
		color: white;
		border-radius: 15px;
		top: 30px;
		right: 15px;
		display: none;
	}
	.action_menu ul{
		list-style: none;
		padding: 0;
	margin: 0;
	}
	.action_menu ul li{
		width: 100%;
		padding: 10px 15px;
		margin-bottom: 5px;
	}
	.action_menu ul li i{
		padding-right: 10px;
	
	}
	.action_menu ul li:hover{
		cursor: pointer;
		background-color: rgba(0,0,0,0.2);
	}
	@media(max-width: 576px){
	.contacts_card{
		margin-bottom: 15px !important;
	}
	}

	.mama li >a{
		color:white;
		padding:10px;
		margin:5px;
	}

	.mama span >a{
		color:white;
		padding:10px;
		margin:5px;
	}
	.mama >a :hover{
		color:#18d26e;
		padding:10px;
		margin:5px;
	}

    </style>
	<!--Coded With Love By Mutiullah Samim-->
	<body>
	<header>
	<div id="navbar22">

<nav class="navbar 
navbar-expand-lg navStyle navbar-fixed-top mama"  role="navigation" style="background-color: rgba(10, 10, 10, 1);
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
         
            <li class="dropdown"><a  class="dropbtn0 dropdown-toggle" onclick="comm()" href="#" data-toggle="dropdown">Community</a>
			
			<ul id="myDropdown0" class="dropdown-menu drop0" style="background-color:black;">
			  
                <li style=" margin-left:20px;margin-top:10px; font-size:10px;" ><a  href="#" data-toggle="dropdown" >Apply For Funding</a>
              
                </li>
                <li style=" margin-left:20px; margin-top:10px;font-size:10px;" ><a  href="../invest/connect.php?msg=''" data-toggle="dropdown">Connect to people</a>
              
              </li>
              
              </ul>
              
			</li>
			</li>
			<li ><a  href="../jobfinder1/jobmain.php?msg=''">Find A job</a>
             
			 </li>
			  <li ><a href="../miniblog1/index.html">Announcements</a>
     
	 </li>
	 <li class="dropdown"><a  class="dropbtn1 dropdown-toggle" onclick="create()" href="#" data-toggle="dropdown">Create</a>
			
			<ul id="myDropdown1" class="dropdown-menu drop1" style="background-color:black;">
			  
                <li style=" margin-left:20px;margin-top:10px; font-size:10px;" ><a  href="../startup/createstartup.php" data-toggle="dropdown" >a Startup</a>
              
                </li>
                <li style=" margin-left:20px; margin-top:10px;font-size:10px;" ><a   href="../startup/createco.php" data-toggle="dropdown">a Corporate</a>
              
              </li>
              <li style=" margin-left:20px ;margin-top:10px; font-size:10px;" ><a   href="../startup/investor.php" data-toggle="dropdown">an Investor</a>
              
              </li>
               
              </ul>
              
            </li>
            <li class="dropdown"><a  class="dropbtn2 dropdown-toggle" onclick="Direct()" href="#" data-toggle="dropdown">Directories</a>
			
			<ul id="myDropdown2" class="dropdown-menu drop2" style="background-color:black;">
			  
                <li style=" margin-left:20px;margin-top:10px; font-size:10px;" ><a  href="../searchs/startup.php">Startups</a>
              
                </li>
                <li style=" margin-left:20px; margin-top:10px;font-size:10px;" ><a  href="../invest/corporatesmain.php?msg=''">Corporates</a>
              
              </li>
              <li style=" margin-left:20px ;margin-top:10px; font-size:10px;" ><a href="../invest/investormain.php?msg=''">Investors</a>
              
              </li>
               
              </ul>
              
            </li>
           
           
            <li ><a  href="../blog.php">Home</a>
      
            </li>
          
 
            <li class="dropdown"><a  class="dropbtn dropdown-toggle" onclick="myFunction()" href="#" data-toggle="dropdown">More</a>
			
			<ul id="myDropdown" class="dropdown-menu drop3" style="background-color:black;">
			  
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
	  <script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropd3");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function create() {
  document.getElementById("myDropdown1").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn1')) {
    var dropdowns = document.getElementsByClassName("drop1");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function Direct() {
  document.getElementById("myDropdown2").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn2')) {
    var dropdowns = document.getElementsByClassName("drop2");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function comm() {
  document.getElementById("myDropdown0").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn0')) {
    var dropdowns = document.getElementsByClassName("drop0");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
		<div class="container-fluid h-100">
			<div class="row justify-content-center h-100">
				<div class="col-md-11 col-xl-11 chat">
					<div class="card mb-sm-3 mb-md-0 contacts_card">
					<div class="card-header why">	
					<ui class="contacts">
					Message Box
</ui>	
					

					</div>
				
						<ui class="contacts">
						<?php while($retrieve=mysqli_fetch_array($result)){
							$start=$retrieve['iduser'];
							$result2=mysqli_query($conn,"SELECT * FROM registration WHERE id='$start'");
							while($row=mysqli_fetch_array($result2)){
							$name= $row['firstname']." ".$row['lastname'];
?>
					<div class="card-body contacts_body">
						<li class="active" style="background-color: rgba(0,0,0,0.7) !important" >
							
							<div class="d-flex bd-highlight" >
								<div class="img_cont">
								<?php  if(!empty($row['pic'])){   echo'<img  class="rounded-circle user_img" src="data:image/jpeg; base64,'.base64_encode( $row['pic']).'" />';}
								else{
									echo '<img src="https://previews.123rf.com/images/imagevectors/imagevectors1602/imagevectors160200185/52757072-white-user-profile-icon-with-long-shadow-on-green-circle.jpg" class="rounded-circle user_img">';
								}
									?>
									<span class="online_icon"></span>
								</div>
								<div style="margin-left:20dp "class="user_info mama">
									<span><a href="message.php?msg=<?php echo $start?>"><?php echo $name ?> </a></span>
									<p><?php echo $name ?> is online</p>
								</div>
							</div>
						</li>
						
						<?php }}?>
							
						</ui>
						
					</div>
					
					<div class="card-footer"></div>
				</div>
				
            </div>
            </div>
            </div>
            </body>
            </html>