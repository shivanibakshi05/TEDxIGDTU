<?php session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TEDxIGDTU</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link rel="apple-touch-icon" sizes="57x57" href="logos/IMG_2792.png">
    <link rel="apple-touch-icon" sizes="60x60" href="logos/IMG_2792.png">
    <link rel="apple-touch-icon" sizes="72x72" href="logos/IMG_2792.png">
    <link rel="apple-touch-icon" sizes="76x76" href="logos/IMG_2792.png">
    <link rel="apple-touch-icon" sizes="114x114" href="logos/IMG_2792.png">
    <link rel="apple-touch-icon" sizes="120x120" href="logos/IMG_2792.png">
    <link rel="apple-touch-icon" sizes="144x144" href="logos/IMG_2792.png">
    <link rel="apple-touch-icon" sizes="152x152" href="logos/IMG_2792.png">
    <link rel="apple-touch-icon" sizes="180x180" href="logos/IMG_2792.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="logos/IMG_2792.png">
    <link rel="icon" type="image/png" sizes="32x32" href="logos/IMG_2792.png">
    <link rel="icon" type="image/png" sizes="96x96" href="logos/IMG_2792.png">
    <link rel="icon" type="image/png" sizes="16x16" href="logos/IMG_2792.png">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="animate.min.css" rel="stylesheet"> <!-- Animations CSS -->
	<style>
		@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,700');
		html, body {
			font-family: 'Poppins', sans-serif;
			background-image: url('photos/ted.png');
			 background-repeat: no-repeat;
  			 background-size: contain;


		}
		.navbar {
			padding: 0.8rem;
		}
		.navbar-nav li {
  			padding-right: 20px;
		}
		.nav-link {
  			font-size: 1.1em !important;	
		}
		#ticketModal .modal-dialog {
  			max-width: 30em;
  			margin: 4em auto;
		}
		#ticketModal .modal-body {
  			position: relative;
  			padding: 1.3em;
		}
		#ticketModal .close {
  			position:absolute;
  			right:-30px;
  			top:0;
  			z-index:999;
  			font-size:2rem;
  			font-weight: normal;
  			color:#fff;
  			opacity:1;
		}
		.lead {
  			color: gray;
  			text-align: justify;
		}
		.padding {
  			padding-bottom: 1.2rem;
		}
		.welcome {
  			width: 75;
  			margin: 0 auto;
  			padding-top: 1rem; 
		}
		.welcome hr {
  			border-top: 2px solid #b4b4b4;
  			width: 95%;
  			margin-top: 0.2rem;
  			margin-bottom: 0.5rem; 
		}
    	.social a {
  			font-size: 4.5em;
  			padding: 3rem;
		}
		.fa-facebook {
  			color: #3b5998;
		}
		.fa-linkedin {
		  	color: #0e76a8;
		}
		.fa-google-plus-g {
		  	color: #dd4b39;
		}
		.fa-instagram {
		  	color: #bc2a8d;
		}
		.fa-youtube {
			color: #bb0000;
		}
		.fa-facebook:hover, 
		.fa-linkedin:hover, 
		.fa-google-plus-g:hover,
		.fa-instagram:hover,
		.fa-youtube:hover {
		  	color: #d5d5d5;
		}
		footer {
		  	background-color: BLACK;
		  	color: #d5d5d5;
		  	padding-top: 2rem;
		} 
		hr.light {
		  	border: 1px solid #d5d5d5;
		  	width:75%;
		  	margin-top: 0.8rem;
		  	margin-bottom: 1rem;
		}
		hr.light-100 {
		  	border: 1px solid #d5d5d5;
		  	width:100%;
		  	margin-top: 0.8rem;
		  	margin-bottom: 1rem;
		}
		#return-to-top {
		  	position: fixed;
		  	bottom: 20px;
		  	right: 20px;
		  	background: #bdc3c7;
		  	opacity: 0.9;
		  	width: 3em;
		  	height: 3em;
		  	display: block;
		  	text-decoration: none;
		  	-webkit-border-radius: 35px;
		  	-moz-border-radius: 35px;
		  	border-radius: 35px;
		  	display: none;
		  	-webkit-transition: all 0.3s linear;
		  	-moz-transition: all 0.3s ease;
		  	-ms-transition: all 0.3s ease;
		  	-o-transition: all 0.3s ease;
		  	transition: all 0.3s ease;
		}
		.fa-angle-double-up {
		  	color: #e74c3c;
		  	margin: 0;
		  	position: relative;
		  	left: 0.9em;
		  	top: 0.8em;
		  	font-size: 19px;
		  	-webkit-transition: all 0.3s ease;
		  	-moz-transition: all 0.3s ease;
		  	-ms-transition: all 0.3s ease;
		  	-o-transition: all 0.3s ease;
		  	transition: all 0.3s ease;
		}
		#return-to-top:hover {
		  	background: #7f8c8d;
		}
		#return-to-top:hover i {
  			color: #fff;
  			top: 5px;
		}
		/*---Media Queries --*/
		@media (max-width: 992px) {
			.social a {
				font-size: 2em;
    			padding: 0.4rem;
  			}
		}
		@media (max-width: 768px) {
			.display-4 {
		    	font-size: 200%;
		  	}
		  	.socail a {
		    	font-size: 2.5em;
		    	padding: 1.2rem;
		  	}
		}
		@media (max-width: 576px) {
		  	.display-4 {
		    	font-size: 160%;
		  	}
		  	.socail a {
		    	font-size: 2em;
		    	padding: 0.4rem;
		  	}
		}
		@media screen and (max-width: 800px) {
		    .navbar-brand {
		      	height: 15%;
		      	width: 50%;
		    }
		    .lead {
		      	font-size: 90%;
		    }
		    .welcome {
		      	padding-top: 0;
		    }
		    .social a {
		        font-size: 2em;
		        padding: 1rem;
		    }
		}
		@media screen and (max-width: 600px) {
		    .navbar-brand {
		      	height: 15%;
		      	width: 50%;
		    }
		    .lead {
		      	font-size: 90%;
		    }
		    .welcome {
		      	padding-top: 0vh;
		    }
		    .social a {
		        font-size: 2em;
		        padding: 1rem;
		    }
		}
		@media screen and (max-width: 800px) {
			.logo {
				height: 25%;
				width: 80%;
			}
			.welcome {
				padding-top: 0;
			}
    		#ticketModal .modal-dialog {
      			max-width: 20em;
      			margin: 5em auto;
			}
		    .padding {
		    	padding-top: 0.4em;
		    }
			.social a {
				font-size: 2.5em;
				padding: 0.4rem;
			}
		}
		@media screen and (max-width: 600px) {
			.logo {
      			height: 25%;
      			width: 80%;
    		}
    		.welcome {
      			padding-top: 0vh;
    		}
    		#ticketModal .modal-dialog {
      			max-width: 20em;
      			margin: 5em auto;
			}
    		.social a {
				font-size: 2.5em;
				padding: 0.4rem;
			}
    	}
    	@media screen and (max-width: 320px) {			
		    .lead {
		      	font-size: 80%;
		    }
			.social a {
				font-size: 2.5em;
				padding: 0.2rem;
			}	
    	}
    	@media screen and (min-width: 900px) and (max-width: 1200px)  {
    		.navbar-brand {
		      	height: 50%;
		      	width: 60%;
		    }
		    .padding {
		    	padding-top: 1em;
		    }
		    .logo {
      			height: 23%;
      			width: 60%;
    		}
		    .lead {
		      	font-size: 150%;
		    }
		    .welcome {
		      	padding-top: 0;
		    }
		    .social a {
		        font-size: 2.5em;
		        padding: 0.6rem;
		    }	
    	}
    	@media screen and (min-width: 320px) and (max-width: 500px) {
    		#ticketModal .modal-dialog {
    			max-width: 15em;
      			margin: 3em auto;
			}
		}
		@media screen and (min-width: 360px) and (max-width: 600px) {
			#ticketModal .modal-dialog {
      			max-width: 18em;
      			margin: 5em auto;
			}
		}
		@media screen and (min-width: 768px) and (max-width: 1000px) {
			#ticketModal .modal-dialog {
      			max-width: 30em;
      			margin: 4em auto;
			}
		}
		@media screen and (min-width: 1024px) and (max-width: 1300px) {
			#ticketModal .modal-dialog {
      			max-width: 35em;
      			margin: 4em auto;
			}
		}


		.main{
 	margin:50px 15px;
}

@media screen and (max-width: 768px) {
		.main{
 	margin:60px 15px;
}
body{
	background-image: url('photos/ted.png');
			 background-repeat: no-repeat;
  			 background-size: contain;

}

}

h1.title { 
	font-size: 50px;
	font-family: 'Passion One', cursive; 
	font-weight: 400; 
}

hr{
	width: 10%;
	color: #fff;
}

.form-group{
	margin-bottom: 15px;
}

label{
	margin-bottom: 15px;
}

input,
input::-webkit-input-placeholder {
    font-size: 11px;
    padding-top: 3px;
}

.main-login{
 	background-color: #fff;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);

}
.form-control {
    height: auto!important;
padding: 8px 12px !important;
}
.input-group {
    -webkit-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.21)!important;
    -moz-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.21)!important;
    box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.21)!important;
}
#button {
    border: 1px solid #ccc;
    margin-top: 28px;
    padding: 6px 12px;
    color: #666;
    text-shadow: 0 1px #fff;
    cursor: pointer;
    -moz-border-radius: 3px 3px;
    -webkit-border-radius: 3px 3px;
    border-radius: 3px 3px;
    -moz-box-shadow: 0 1px #fff inset, 0 1px #ddd;
    -webkit-box-shadow: 0 1px #fff inset, 0 1px #ddd;
    box-shadow: 0 1px #fff inset, 0 1px #ddd;
    background: -moz-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #f5f5f5), color-stop(100%, #eeeeee));
    background: -webkit-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
    background: -o-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
    background: -ms-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
    background: linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f5f5f5', endColorstr='#eeeeee', GradientType=0);
}
.main-center{
 	margin-top: 30px;
 	margin: 0 auto;
 	max-width: 500px;
    padding: 10px 40px;
	background:black;
	    color: white;
    text-shadow: none;
	-webkit-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);
-moz-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);
box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);

}
span.input-group-addon i {
    color: #009edf;
    font-size: 17px;
}

.login-button{
	margin-top: 5px;
}

.login-register{
	font-size: 11px;
	text-align: center;
}
.red-text{
	color: red;
}
	</style>

</head>
<body style="background-color: black;">

	<!-- Navigation -->
	<nav class="navbar navbar-dark bg-black fixed-top animated slow slideInDown" style="background-color: black;">
		<div class="container-fluid">
			<a href="index.php" class="navbar-brand" title="Go to TEDxIGDTU homepage"><img class="img-fluid logo" src="logos/IMG_2792.png" alt="TEDxIGDTU logo" width="20%" height="5%"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link tab" href="about.html">About<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link tab" href="theme.html">Theme</a>
					</li>
					<li class="nav-item">
						<a class="nav-link tab" href="events.html">Events</a>
					</li>
					<li class="nav-item">
						<a class="nav-link tab" href="https://tedxigdtu.wordpress.com/" target="_blank">Blog</a>
					</li>
					<li class="nav-item">
						<a class="nav-link tab" href="speakers.html">Speakers</a>
					</li>
					<li class="nav-item">
						<a class="nav-link tab" href="team.html">Team</a>
					</li>
					<li class="nav-item">
						<a class="nav-link tab" href="#contact">Contact</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="padding"></div>
	<div class="padding"></div>
	<div class="padding"></div>
	<div class="padding"></div>
					<!--<div class="container" style="width: 50%; background-color: white;">
						<form method="POST" action="register.php">
							
								<div class="form-group">
										<div class="input-group-addon mb-2 mr-sm-2 mb-sm-0" style="width: 2.6rem"><i class="fa fa-user"></i></div>
										<input class="form-control" placeholder="Enter Full Name"name="Name" type="text" id="inputUserName" pattern="^[a-zA-Z ]{2,30}$" title="Must contain only letters" required="Please enter the details"/>
									</div>
									<div class="form-group">
										<div class="input-group-addon mb-2 mr-sm-2 mb-sm-0" style="width: 2.6rem"><i class="fa fa-at"></i></div>
										<input class="form-control" placeholder="Enter Email Id"name="Email" type="text" id="req" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Provide the correct email" required="Please enter the details"/>
									</div>
									<div class="form-group">
										<div class="input-group-addon mb-2 mr-sm-2 mb-sm-0" style="width: 2.6rem"><i class="fa fa-phone"></i></div>
										<input class="form-control" placeholder="Enter Phone Number" name="Phone_Number" type="tel" id="inputNumber" pattern="^(7|8|9)\d{9}$" title="Must contain only digits" required="Please enter the details"/>
									</div>
								</form>
								</div>-->

		<div class="container">
			<div class="row main">
				<div class="main-login main-center">
				<p>Greetings! 
					This is to inform you that,  you will be sent an email from the official email id of TEDxIGDTU (tedxigdtu2019@gmail.com) after your application is shortlisted. It will also contain the further details you will have to follow.<br/><br/><span class="red-text" >*Required</span>
				</p>
					<form class="" method="post" action="tickettemp.php">
					
						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Your Email <span class="red-text" >*</span></label>
							<div class="cols-sm-10">
								<div class="input-group">
								<input type="text" class="form-control" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Enter your Email" title="Provide the correct email" required/>
								</div>
							</div>
						</div>
	
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Your Name<span class="red-text" >*</span></label>
							<div class="cols-sm-10">
								<div class="input-group">
									<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name" required/>
								</div>
							</div>
						</div>

					
						<div class="form-group">
							<label for="profession" class="cols-sm-2 control-label">Your Profession<span class="red-text" >*</span></label>
							<div class="cols-sm-10">
								
									   <input type="radio" name="optradio" checked value="Student">Student <br>
									    <input type="radio" name="optradio" value="Employed">Employed

   					
							</div>
						</div>
						<div class="form-group">
							<label for="Organisationname" class="cols-sm-2 control-label">Name of your Organisation<span class="red-text" >*</span></label>
							<div class="cols-sm-10">
								<div class="input-group">
									<input type="text" class="form-control" name="oname" id="oname"  placeholder="Enter your Organisation" required/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="q1" class="cols-sm-2 control-label">Have you been to a TEDx Talk before?<span class="red-text" >*</span></label>
							<div class="cols-sm-10">
								
									   <input type="radio" name="optradio1" checked value="Yes">Yes<br>
									    <input type="radio" name="optradio1" value="no">No

   					
							</div>
						</div>
						
						<div class="form-group">
							<label for="q2" class="cols-sm-2 control-label">Links to three of your most favorite TEDx talks, stating what you like about it the most.</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<input type="text" class="form-control" name="q2" id="q2"  placeholder="Enter your answer" />
								</div>
							</div>
						</div>

					<div class="form-group">
							<label for="q2" class="cols-sm-2 control-label">How do you relate with our theme?<span class="red-text" >*</span></label>
							<div class="cols-sm-10">
								<div class="input-group">
									<input type="text" class="form-control" name="q3" id="q3"  placeholder="Enter your answer" required/>
								</div>
							</div>
						</div>
					<div class="form-group">
							<label for="q2" class="cols-sm-2 control-label">What do you wish to take away from the TEDxIGDTU 2019 experience?<span class="red-text" >*</span></label>
							<div class="cols-sm-10">
								<div class="input-group">
									<input type="text" class="form-control" name="q4" id="q4"  placeholder="Enter your answer" required/>
								</div>
							</div>
						</div>

						<div class="form-group ">
							<input  type="submit" class="btn btn-primary"></button>
						</div>
						
					</form>
				</div>
			</div>
		</div>

<?php
	if(isset($_SESSION['varname'])){
	$var_value = $_SESSION['varname'];
	if($var_value=="success"){
		 $message="Submission Successful! We will contact you shortly!!";
        
        echo "<script type='text/javascript'>alert('$message');</script>";
        unset($_SESSION['varname']);
       
	}
	}
?>	
				
	<!--- Footer -->
	<footer>
		<div class="container-fluid padding" id="contact">
			<div class="row welcome text-center">
				<div class="col-12">
					<h2 class="display-4 animated slow delay-2s flipInX">Contact</h2>
				</div>
				<div class="col-12 social animated slow delay-2s zoomInDown">
					<a href="https://www.facebook.com/TEDxIGDTU/" target="_blank"><i class="fab fa-facebook"></i></a>
					<a href="https://instagram.com/tedx_igdtu?utm_source=ig_profile_share&igshid=yzz49l19aes9" target="_blank"><i class="fab fa-instagram" ></i></a>
					<a href="https://www.linkedin.com/company/tedxigdtu" target="_blank"><i class="fab fa-linkedin"></i></a>
				</div>
			</div>
		</div>
		<div class="col-12 text-center">
			<hr class="light-100">
			<h6 class="last animated slow delay-2s slideInUp">This independent TEDx event is operated under license from TED.</h6>
		</div>
	</footer>
	
	<a href="javascript:" id="return-to-top"><i class="fa fa-angle-double-up"></i></a>

	<script>
		$(window).scroll(function() {
			if ($(this).scrollTop() >= 50) { 
				$('#return-to-top').fadeIn(200);  
			} else {
				$('#return-to-top').fadeOut(200); 
			}
		});
		$('#return-to-top').click(function() { 
			$('body,html').animate({
				scrollTop : 0                
			}, 500);
		});
	</script>

</body>
</html>