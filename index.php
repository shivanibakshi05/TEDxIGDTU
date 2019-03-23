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
    <link href='http://fonts.googleapis.com/css?family=Oleo+Script' rel='stylesheet' type='text/css'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="styles.css" rel="stylesheet"> <!-- Main CSS -->
	<link href="blog_style.css" rel="stylesheet"> <!-- Blog CSS -->
	<link href="style.css" rel="stylesheet"> <!-- Loader CSS -->
	<link href="animate.min.css" rel="stylesheet"> <!-- Animations CSS -->
	<style>
	img.spons {
    width: 18% !important;
	}
    
		html, body {
			overflow-x: hidden;
		}
		@media screen and (max-width: 800px) {
    .welcome {
      padding-top: 0;
    }
    #ticketModal .modal-dialog {
      	max-width: 20em;
      	margin: 5em auto;
	}
    .theme-line {
      font-size: 120%; 
    }
    .social a {
        font-size: 2.5em;
        padding: 0.4rem;
      }
}
@media screen and (max-width: 600px) {
	#ticketModal .modal-dialog {
      	max-width: 20em;
      	margin: 5em auto;
	}
    .welcome {
      padding-top: 0vh;
    }
    .figures {
      padding-top: 10vh;
    }
    .theme-line {
      font-size: 120%; 
    }
    .social a {
        font-size: 2.5em;
        padding: 0.4rem;
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
.card-container-outer {
  margin: 1em auto;
  width: 100%;
  max-width: 1300px;
  height: 300px;
  display: flex;
  overflow: hidden;
  background-image: linear-gradient(-180deg, rgba(240,0,0,0), rgba(240,0,0,1));
  background-position: center;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 1300px 600px;
}
.card-container-inner {
  min-width: 200%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: nowrap;
  overflow: hidden;
  position: relative;
  transform: none;
  transition: transform 0.5s;
}
.card {
  z-index: 1;
  flex-shrink: 1;
  outline: none;
  height: 170px;
  width: 170px;
  margin-left: -40px; /* Stacks the cards on top of each other */
  margin-right: -40px; /* Stacks the cards on top of each other */
  transform: rotateY(60deg) skewY(-5deg) scale(0.8);
  box-shadow: 1px 1px 5px 1px rgba(0,0,0,1);
  filter: blur(2px);
  opacity: 1;
  transition: transform 1s, 
              margin-left 1s, 
              margin-right 1s, 
              box-shadow 1s, 
              filter 1s, 
              opacity 0.6s, 
              flex-shrink 1s,
              z-index 1s;
}
.card.js-active,
.card:active,
.card:focus {
  transform: none;
  margin-left: 40px;
  margin-right: 40px;
  box-shadow: 2px 2px 10px 1px rgba(0,0,0,0.3);
  filter: none;
  flex-shrink: 0;
  z-index: 2;
}
.card:hover:not(:active):not(:focus):not(.active) {
  margin-left: -20px;
  margin-right: -20px;
  box-shadow: 2px 2px 10px 1px rgba(0,0,0,0.3);
  filter: none;
  cursor: pointer;
}
.card:hover {
	opacity: 0.5;
}
@media screen and (min-width: 600px) {
  .card {
    height: 200px;
    width: 200px;
    margin-left: -80px;
    margin-right: -80px;
  }
  .card.active,
  .card:active,
  .card:focus {
    margin-left: 80px;
    margin-right: 80px;
  }
}
.card img {
  width: 100%;
  min-height: 100%;
  object-fit: cover;
}
.card:after {
  position: absolute;
  content: "";
  top: 5vw;
  left: 0;
  right: 0;
  z-index: -1;
  height: 100%;
  width: 100%;
  margin: 0 auto;
  transform: scale(0.75);
  -webkit-filter: blur(5vw);
  -moz-filter: blur(5vw);
  -ms-filter: blur(5vw);
  filter: blur(5vw);
  background: linear-gradient(270deg, #e74c3c, #95a5a6);
  background-size: 300% 300%;
  animation: animateGlow 10s ease infinite;
}
@keyframes animateGlow {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}
@keyframes textColor {
  0% {
    color: #95a5a6;
  }
  50% {
    color: #e74c3c;
  }
  100% {
    color: #95a5a6;
  }
}
.overlay1, .overlay2, .overlay3, .overlay4, .overlay5, .overlay6, .overlay7 {
  position: absolute; 
  bottom: 0; 
  background: rgb(0, 0, 0);
  background: rgba(0, 0, 0, 0.5); /* Black see-through */
  color: #f1f1f1; 
  width: 100%;
  transition: .5s ease;
  opacity:0;
  color: white;
  font-weight: bold;
  font-size: 16px;
  padding: 18px;
  text-align: center;
}
.card:hover .overlay1, .card:hover .overlay2, .card:hover .overlay3, .card:hover .overlay4, .card:hover .overlay5, .card:hover .overlay6, .card:hover .overlay7 {
  opacity: 1;
}
</style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50" style="background-color: black;">
	<!-- Loader -->
	<div id="loading">
		<section>
			<div class="loader loader-21">
				<div class="css-times times1"></div>
				<div class="css-times times2"></div>
				<div class="css-times times3"></div>
			</div>
		</section>
	</div>

	<!-- Navigation -->
	<nav class="navbar navbar-expand-md navbar-dark bg-black fixed-top animated slow delay-2s slideInDown" style="background-color: black;">
		<div class="container-fluid">
			<a href="index.php" class="navbar-brand"><img class="img-fluid logo" src="logos/IMG_2792.png" alt="TEDxIGDTU logo" width="60%" height="5%"></a>
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
						<a class="nav-link tab" href="#blogs">Blog</a>
					</li>
					<li class="nav-item">
						<a class="nav-link tab" href="#speakers">Speakers</a>
					</li>
					<li class="nav-item">
						<a class="nav-link tab" href="team.html">Team</a>
					</li>
					<li class="nav-item">
						<a class="nav-link tab" href="#partners">Partners</a>
					</li>
					<li class="nav-item">
						<a class="nav-link tab" href="#contact">Contact</a>
					</li>
					<li class="nav-item">
						<a class="nav-link tab" href="positions.html">Positions</a>
					</li>
					<li>
						<!--<button class="btn btn-secondary" data-target="#ticketModal" data-toggle="modal">Get Tickets</button>-->
						<button class="btn btn-secondary" ><a class="nav-link tab" href="ticket.php">Get Tickets</a></button>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	
	<!-- Modal -->
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="modal fade" tabindex="-1" id="ticketModal" data-keyboard="false" data-backdrop="static">
					<div class="modal-dialog modal-md">
						<div class="modal-content">
							<form method="POST" action="register.php">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title text-center">TEDxIGDTU on 23<sup>rd</sup> January, 2019</h4>
								</div>
								<div class="modal-body">
									<!-- <div class="form-group">
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
									</div>     -->
									Registration starts on 3rd January.
								</div>
								<!-- <div class="modal-footer">
									<button type="submit" class="btn btn-danger">Submit</button>
								</div> -->
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Figures -->
	<div class="container-fluid figures" style="position: relative;">
		<a href="theme.html" style="text-decoration: none;"><h1 class="theme-line theme-typewriter" style="z-index: 999; top: 4em; left: 0.5%;">THEME: SUI GENERIS</h1></a>
		<br><br>
		<svg xmlns="http://www.w3.org/2000/svg" width="3364" height="2700" viewBox="0 0 3364 2700" preserveAspectRatio="xMidYMid meet" style="width: 100%; height: 100%;">
			<defs>
				<clipPath id="animationMask_tgSixphdXU">
					<rect width="3364" height="2700" x="0" y="0"></rect>
				</clipPath>
				<clipPath id="cp_WDD5H4tj">
					<path d="M0,0 L600,0 L600,600 L0,600z"></path>
				</clipPath>
				<clipPath id="cp_Nz2NtdiY">
					<path d="M0,0 L600,0 L600,600 L0,600z"></path>
				</clipPath>
				<clipPath id="cp_jNJiewxN">s
					<path d="M0,0 L600,0 L600,600 L0,600z"></path>
				</clipPath>
				<clipPath id="cp_QP3zwHWG">
					<path d="M0,0 L600,0 L600,600 L0,600z"></path>
				</clipPath>
			</defs>
			<g clip-path="url(#animationMask_tgSixphdXU)">
				<g transform="matrix(1,0,0,1,1682,1132)" opacity="1" style="user-select: none;"> <!-- ball1 -->
					<g opacity="1" transform="matrix(1,0,0,1,-1194,880)">
						<path class="animated bounceInLeft slow" fill="rgb(250,0,0)" fill-opacity="1" d="M0 0 M0,-640 C353.21599999999995,-640 640,-353.21599999999995 640,0 C640,353.21599999999995 353.21599999999995,640 0,640 C-353.21599999999995,640 -640,353.21599999999995 -640,0 C-640,-353.21599999999995 -353.21599999999995,-640 0,-640z"></path>
					</g>
				</g>
				<g transform="matrix(0.15,0,0,0.15,1291.1,872)" opacity="1" style="user-select: none;"> <!-- ball2 -->
					<g opacity="1" transform="matrix(1,0,0,1,-1194,880)">
						<path class="animated infinite rotateInDownLeft slow" fill="rgb(250,0,0)" fill-opacity="1" d="M0 0 M0,-640 C353.21599999999995,-640 640,-353.21599999999995 640,0 C640,353.21599999999995 353.21599999999995,640 0,640 C-353.21599999999995,640 -640,353.21599999999995 -640,0 C-640,-353.21599999999995 -353.21599999999995,-640 0,-640z"></path>
					</g>
				</g>
				<g transform="matrix(0.07,0,0,0.07,1595.58,1730.4)" opacity="1" style="user-select: none;"> <!-- ball3 -->
					<g opacity="1" transform="matrix(1,0,0,1,-1194,880)">
						<path class="animated infinite swing slow" fill="rgb(250,0,0)" fill-opacity="1" d="M0 0 M0,-640 C353.21599999999995,-640 640,-353.21599999999995 640,0 C640,353.21599999999995 353.21599999999995,640 0,640 C-353.21599999999995,640 -640,353.21599999999995 -640,0 C-640,-353.21599999999995 -353.21599999999995,-640 0,-640z"></path>
					</g>
				</g>
				<g transform="matrix(0.07,0,0,0.07,2691.58,2018.4)" opacity="1" style="user-select: none;"> <!-- ball4 -->
					<g opacity="1" transform="matrix(1,0,0,1,-1194,880)">
						<path class="animated infinite swing slow" fill="rgb(250,0,0)" fill-opacity="1" d="M0 0 M0,-640 C353.21599999999995,-640 640,-353.21599999999995 640,0 C640,353.21599999999995 353.21599999999995,640 0,640 C-353.21599999999995,640 -640,353.21599999999995 -640,0 C-640,-353.21599999999995 -353.21599999999995,-640 0,-640z">
						</path>
					</g>
				</g>
				<g transform="matrix(1.23,0,0,1.23,4132.62,-10.399999999999864)" opacity="1" style="user-select: none;"> <!-- ball5 -->
					<g opacity="1" transform="matrix(1,0,0,1,-1194,880)">
						<path class="animated infinite shake slow" fill="rgb(250,0,0)" fill-opacity="1" d="M0 0 M0,-640 C353.21599999999995,-640 640,-353.21599999999995 640,0 C640,353.21599999999995 353.21599999999995,640 0,640 C-353.21599999999995,640 -640,353.21599999999995 -640,0 C-640,-353.21599999999995 -353.21599999999995,-640 0,-640z">
						</path>
					</g>
				</g>
				<g transform="matrix(0.55,0,0,0.55,3752.7,1816)" opacity="1" style="user-select: none;"> <!-- ball6 -->
					<g opacity="1" transform="matrix(1,0,0,1,-1194,880)">
						<path class="animated delay-2s bounceInRight slow" fill="rgb(250,0,0)" fill-opacity="1" d="M0 0 M0,-640 C353.21599999999995,-640 640,-353.21599999999995 640,0 C640,353.21599999999995 353.21599999999995,640 0,640 C-353.21599999999995,640 -640,353.21599999999995 -640,0 C-640,-353.21599999999995 -353.21599999999995,-640 0,-640z">
						</path>
					</g>
				</g>
				<g clip-path="url(#cp_QP3zwHWG)" transform="matrix(2.7,0,0,2.7,-234,570)" opacity="1">
					<g transform="matrix(0.9659258262890683,-0.25881904510252074,0.25881904510252074,0.9659258262890683,177.42123241512152,229.2564038323665)" opacity="1" style="user-select: none;"> <!-- first figure inner hand -->
						<g opacity="1" transform="matrix(1,0,0,1,22.956,24.526)">
							<path fill="rgb(255,255,255)" fill-opacity="1" d="M0 0 M10.319,-18.059 C11.231000000000002,-18.035 11.767000000000001,-18.632 11.928,-19.321 C12.205,-19.533 12.415,-19.84 12.481,-20.284 C13.986,-30.409 4.598,-49.099000000000004 -0.805,-56.679 C-1.552,-57.727000000000004 -2.956,-57.18 -3.125,-55.935 C-3.543,-56.410000000000004 -3.9529999999999994,-56.891 -4.379,-57.356 C-5.151999999999999,-58.201 -6.572,-57.092999999999996 -6.282,-55.891 C-6.243,-55.731 -6.213,-55.568 -6.176,-55.418 C-6.3100000000000005,-55.599 -6.455,-55.766 -6.59,-55.949 C-7.564,-57.265 -9.084,-55.937999999999995 -8.644,-54.364 C-8.634,-54.337999999999994 -8.631,-54.318 -8.624,-54.293 C-8.906,-54.595 -9.193,-54.884 -9.494,-55.174 C-10.372,-56.021 -11.598,-54.931000000000004 -11.429,-53.673 C-10.67,-48.032000000000004 -6.239,-33.319 -6.183,-27.558 C-6.77,-27.033 -6.948,-26.113999999999997 -6.064,-25.56 C-1.0069999999999997,-22.393 4.075000000000001,-18.248 10.319,-18.059z">
							</path>
							<path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="10" stroke="rgb(0,0,0)" stroke-opacity="1" stroke-width="2" d="M0 0 M10.319,-18.059 C11.231000000000002,-18.035 11.767000000000001,-18.632 11.928,-19.321 C12.205,-19.533 12.415,-19.84 12.481,-20.284 C13.986,-30.409 4.598,-49.099000000000004 -0.805,-56.679 C-1.552,-57.727000000000004 -2.956,-57.18 -3.125,-55.935 C-3.543,-56.410000000000004 -3.9529999999999994,-56.891 -4.379,-57.356 C-5.151999999999999,-58.201 -6.572,-57.092999999999996 -6.282,-55.891 C-6.243,-55.731 -6.213,-55.568 -6.176,-55.418 C-6.3100000000000005,-55.599 -6.455,-55.766 -6.59,-55.949 C-7.564,-57.265 -9.084,-55.937999999999995 -8.644,-54.364 C-8.634,-54.337999999999994 -8.631,-54.318 -8.624,-54.293 C-8.906,-54.595 -9.193,-54.884 -9.494,-55.174 C-10.372,-56.021 -11.598,-54.931000000000004 -11.429,-53.673 C-10.67,-48.032000000000004 -6.239,-33.319 -6.183,-27.558 C-6.77,-27.033 -6.948,-26.113999999999997 -6.064,-25.56 C-1.0069999999999997,-22.393 4.075000000000001,-18.248 10.319,-18.059z">
							</path>
						</g>
						<g opacity="1" transform="matrix(1,0,0,1,53.368,65.983)">
							<path fill="rgb(255,255,255)" fill-opacity="1" d="M0 0 M13.618,60.162 C-2.574,51.924 -8.925999999999998,43.751999999999995 -11.245,20.266 C-11.655999999999999,16.098999999999997 -8.261,5.009 -11.567,1.65 C-13.290000000000001,-10.475 -13.086,-18.961000000000002 -14.746,-31.109 C-16.285,-42.374 -14.291,-48.272 -17.805,-60.693 C-17.941,-61.175 -17.884,-61.533 -18.169,-61.754 C-18.427,-62.394999999999996 -19.052999999999997,-62.918 -19.848,-62.809 C-26.082,-61.955999999999996 -31.197000000000003,-66.809 -36.112,-69.937 C-36.295,-70.14699999999999 -36.806,-70.633 -36.796,-70.363 C-36.046,-49.185 -30.025,-21.43 -30.107,-6.526 C-30.108,-6.3229999999999995 -30.224,-6.175 -30.256,-6 C-30.694,-5.683 -30.737,-5.069 -30.514,-4.585 C-30.518,-4.54 -30.538,-4.505 -30.538,-4.459 C-30.428,0.15700000000000003 -41.037,21.491 -41.86,26.009 C-43.296,33.895 -42.642,50.416 -40.832,58.4 C-37.497,73.107 -27.34,83.36 -27.003,83.346 C-24.814,85.453 4.237,66.897 7.151,66.976 C9.825,67.041 13.826,65.413 13.928,62.372 C13.928,62.356 13.916,62.345 13.916,62.327 C14.367,61.687 14.535,60.629 13.618,60.162z">
							</path>
							<path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="10" stroke="rgb(0,0,0)" stroke-opacity="1" stroke-width="2" d="M0 0 M13.618,60.162 C-2.574,51.924 -8.925999999999998,43.751999999999995 -11.245,20.266 C-11.655999999999999,16.098999999999997 -8.261,5.009 -11.567,1.65 C-13.290000000000001,-10.475 -13.086,-18.961000000000002 -14.746,-31.109 C-16.285,-42.374 -14.291,-48.272 -17.805,-60.693 C-17.941,-61.175 -17.884,-61.533 -18.169,-61.754 C-18.427,-62.394999999999996 -19.052999999999997,-62.918 -19.848,-62.809 C-26.082,-61.955999999999996 -31.197000000000003,-66.809 -36.112,-69.937 C-36.295,-70.14699999999999 -36.806,-70.633 -36.796,-70.363 C-36.046,-49.185 -30.025,-21.43 -30.107,-6.526 C-30.108,-6.3229999999999995 -30.224,-6.175 -30.256,-6 C-30.694,-5.683 -30.737,-5.069 -30.514,-4.585 C-30.518,-4.54 -30.538,-4.505 -30.538,-4.459 C-30.428,0.15700000000000003 -41.037,21.491 -41.86,26.009 C-43.296,33.895 -42.642,50.416 -40.832,58.4 C-37.497,73.107 -27.34,83.36 -27.003,83.346 C-24.814,85.453 4.237,66.897 7.151,66.976 C9.825,67.041 13.826,65.413 13.928,62.372 C13.928,62.356 13.916,62.345 13.916,62.327 C14.367,61.687 14.535,60.629 13.618,60.162z">
							</path>
						</g>
					</g>
					<g transform="matrix(0.6427876096865394,-0.766044443118978,0.766044443118978,0.6427876096865394,338.1863697348446,248.80337477464224)" opacity="1" style="user-select: none;"> <!-- first figure inner leg -->
						<g opacity="1" transform="matrix(1,0,0,1,20.483,20.135)">
							<path class="animated infinite bounceIn slow" fill="rgb(255,255,255)" fill-opacity="1" d="M0 0 M21.63,-16.145 C22.369999999999997,-17.703 19.913999999999998,-19.431 18.839,-18.091 C16.522,-15.205000000000002 15.449,-13 12.685,-10.608 C1.9160000000000004,0.6419999999999995 -7.852000000000001,3.78 -13.351,4.529 C-14.548000000000002,4.386 -15.279,5.529 -15.423,6.323 C-16.444,11.786000000000001 -16.126,7.0639999999 -14.507,12.373 C-13.971,14.129 -13.295,14.369 -12.844,14.338 C-5.196,13.805 2.407,10.084999999999999 5.88,7.286 C6.3229999999999995,6.928999999999999 11.440999999999999,1.593 11.844,1.123 C17.363,-5.313 18.733,-10.042 21.63,-16.145z">
							</path>
							<path class="animated infinite bounceIn slow" stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="10" stroke="rgb(0,0,0)" stroke-opacity="1" stroke-width="2" d="M0 0 M21.63,-16.145 C22.369999999999997,-17.703 19.913999999999998,-19.431 18.839,-18.091 C16.522,-15.205000000000002 15.449,-13 12.685,-10.608 C1.9160000000000004,0.6419999999999995 -7.852000000000001,3.78 -13.351,4.529 C-14.548000000000002,4.386 -15.279,5.529 -15.423,6.323 C-16.444,11.786000000000001 -16.126,7.063999999999999 -14.507,12.373 C-13.971,14.129 -13.295,14.369 -12.844,14.338 C-5.196,13.805 2.407,10.084999999999999 5.88,7.286 C6.3229999999999995,6.928999999999999 11.440999999999999,1.593 11.844,1.123 C17.363,-5.313 18.733,-10.042 21.63,-16.145z">							
							</path>
						</g>
					</g>
					<g transform="matrix(1,0,0,1,242.994,325.031)" opacity="1" style="user-select: none;"> <!-- first figure inner thigh -->
						<g opacity="1" transform="matrix(1,0,0,1,85.621,32.478)">
							<path fill="rgb(225,0,0)" fill-opacity="1" d="M0 0 M-26.406,-32.58 C-33.769999999999996,-25.451 -42.365,-25.009 -51.802,-25.728 C-61.115,-28.509 -69.32600000000001,-22.927 -72.781,-19.176 C-80.62100000000001,-10.668999999999999 -71.36500000000001,18.991 -39.877,12.772 C-16.615000000000002,6.7410000000000005 23.046,-60.928000000000004 42.378,-91.733 C42.667,-92.193 42.534,-92.652 42.229,-92.967 C42.108,-93.314 41.876,-93.637 41.451,-93.86 C35.876,-96.778 37.178,-97.437 31.119,-99.214 C30.364,-99.431 29.788999999999998,-98.899 29.601,-98.264 C19.134999999999998,-83.759 -0.29699999999999704,-57.852999999999994 -26.406,-32.58z"></path>
							<path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="10" stroke="rgb(0,0,0)" stroke-opacity="1" stroke-width="2" d="M0 0 M-26.406,-32.58 C-33.769999999999996,-25.451 -42.365,-25.009 -51.802,-25.728 C-61.115,-28.509 -69.32600000000001,-22.927 -72.781,-19.176 C-80.62100000000001,-10.668999999999999 -71.36500000000001,18.991 -39.877,12.772 C-16.615000000000002,6.7410000000000005 23.046,-60.928000000000004 42.378,-91.733 C42.667,-92.193 42.534,-92.652 42.229,-92.967 C42.108,-93.314 41.876,-93.637 41.451,-93.86 C35.876,-96.778 37.178,-97.437 31.119,-99.214 C30.364,-99.431 29.788999999999998,-98.899 29.601,-98.264 C19.134999999999998,-83.759 -0.29699999999999704,-57.852999999999994 -26.406,-32.58z"></path>
						</g>
					</g>
					<g transform="matrix(-0.6560590289905072,-0.7547095802227721,0.7547095802227721,-0.6560590289905072,356.7208265837627,271.93968644773145)" opacity="1" style="user-select: none;"> <!-- first figure outer leg -->
						<g opacity="1" transform="matrix(1,0,0,1,23.321,18.143)">
							<path class="animated infinite bounceIn slow" fill="rgb(255,255,255)" fill-opacity="1" d="M0 0 M20.356,15.558 C18.349,12.915 16.000999999999998,11.35 13.062,10.298 C5.087,5.389 0.55,-0.020000000000000018 -1.184,-3.585 C-2.474,-6.242 -3.1009999999999995,-9.142000000000001 -4.568,-11.723 C-5.145,-12.741000000000001 -6.165,-12.894 -7,-12.55 C-9.396,-12.464 -8.112,-12.054 -10.371,-11.266 C-12.603000000000002,-10.491 -12.136000000000001,-11.569 -14.054,-10.163 C-14.175,-10.073 -14.277000000000001,-9.953000000000001 -14.371,-9.836 C-14.76,-9.532 -14.968,-8.931999999999999 -14.811,-8.437 C-14.791,-7.949 -14.629999999999999,-7.486 -14.277,-7.2 C-11.517,-1.0899999999999999 -9.365,5.852000000000001 -2.548,10.351 C0.004999999999999893,12.036000000000001 5.282000000000001,14.444 8.021,15.566 C11.703000000000001,17.073 14.63,17.622 18.565,18.38 C20.077,18.671 21.302000000000003,16.803 20.356,15.558z">
							</path>
							<path class="animated infinite bounceIn slow" stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="10" stroke="rgb(0,0,0)" stroke-opacity="1" stroke-width="2" d="M0 0 M20.356,15.558 C18.349,12.915 16.000999999999998,11.35 13.062,10.298 C5.087,5.389 0.55,-0.020000000000000018 -1.184,-3.585 C-2.474,-6.242 -3.1009999999999995,-9.142000000000001 -4.568,-11.723 C-5.145,-12.741000000000001 -6.165,-12.894 -7,-12.55 C-9.396,-12.464 -8.112,-12.054 -10.371,-11.266 C-12.603000000000002,-10.491 -12.136000000000001,-11.569 -14.054,-10.163 C-14.175,-10.073 -14.277000000000001,-9.953000000000001 -14.371,-9.836 C-14.76,-9.532 -14.968,-8.931999999999999 -14.811,-8.437 C-14.791,-7.949 -14.629999999999999,-7.486 -14.277,-7.2 C-11.517,-1.0899999999999999 -9.365,5.852000000000001 -2.548,10.351 C0.004999999999999893,12.036000000000001 5.282000000000001,14.444 8.021,15.566 C11.703000000000001,17.073 14.63,17.622 18.565,18.38 C20.077,18.671 21.302000000000003,16.803 20.356,15.558z">
							</path>
						</g>
					</g>
					<g transform="matrix(1,0,0,1,232.424,307.056)" opacity="1" style="user-select: none;"> <!-- first figure outer thigh -->
						<g opacity="1" transform="matrix(1,0,0,1,84.288,38.379)">
							<path fill="rgb(225,0,0)" fill-opacity="1" d="M0 0 M3.205,-15.152 C11.514,-27.403 22.285999999999994,-46.477000000000004 36.038,-72.06 C36.038,-72.06 39.855999999999995,-79.50399999999999 42.931,-85.466 C42.931,-85.466 43.956,-87.45299999999999 41.969,-88.478 C39.982,-89.503 34.645,-91.87 34.645,-91.87 C34.645,-91.87 32.039,-93.452 31.014,-91.465 C29.989,-89.47800000000001 23.44,-79.195 23.44,-79.195 C11.788000000000002,-61.43499999999999 1.9239999999999995,-45.983000000000004 -23.273,-20.04 C-35.815,-7.126999999999999 -40.712,-7.1850000000000005 -44.649,-11.154 C-49.212,-15.434999999999999 -47.525,-18.499000000000002 -53.294,-17.137 C-58.592,-15.888 -61.69800000000001,-11.921 -65.153,-8.17 C-72.99300000000001,0.3360000000000003 -79.288,13.643999999999998 -68.157,22.354 C-67.91,22.549 -67.659,22.673 -67.393,22.737 C-67.279,22.84 -67.193,22.949 -67.036,23.029 C-56.851,28.178 -36.397000000000006,31.215000000000003 -25.202,19.745 C-17.462000000000003,11.814 -6.131,-1.3869999999999987 3.205,-15.152z">
							</path>
							<path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="10" stroke="rgb(0,0,0)" stroke-opacity="1" stroke-width="2" d="M0 0 M3.205,-15.152 C11.514,-27.403 22.285999999999994,-46.477000000000004 36.038,-72.06 C36.038,-72.06 39.855999999999995,-79.50399999999999 42.931,-85.466 C42.931,-85.466 43.956,-87.45299999999999 41.969,-88.478 C39.982,-89.503 34.645,-91.87 34.645,-91.87 C34.645,-91.87 32.039,-93.452 31.014,-91.465 C29.989,-89.47800000000001 23.44,-79.195 23.44,-79.195 C11.788000000000002,-61.43499999999999 1.9239999999999995,-45.983000000000004 -23.273,-20.04 C-35.815,-7.126999999999999 -40.712,-7.1850000000000005 -44.649,-11.154 C-49.212,-15.434999999999999 -47.525,-18.499000000000002 -53.294,-17.137 C-58.592,-15.888 -61.69800000000001,-11.921 -65.153,-8.17 C-72.99300000000001,0.3360000000000003 -79.288,13.643999999999998 -68.157,22.354 C-67.91,22.549 -67.659,22.673 -67.393,22.737 C-67.279,22.84 -67.193,22.949 -67.036,23.029 C-56.851,28.178 -36.397000000000006,31.215000000000003 -25.202,19.745 C-17.462000000000003,11.814 -6.131,-1.3869999999999987 3.205,-15.152z">
							</path>
						</g>
					</g>
					<g transform="matrix(0.9961946980917455,0.08715574274765817,-0.08715574274765817,0.9961946980917455,191.42599637367053,222.56146877467984)" opacity="1" style="user-select: none;"> <!-- first figure neck -->
						<g opacity="1" transform="matrix(1,0,0,1,20.244,36.602)">
							<path fill="rgb(255,255,255)" fill-opacity="1" d="M0 0 M6.573,11.222 C5.864000000000001,9.966999999999999 5.212,8.545 4.459,7.186 C4.5809999999999995,7.114 4.6979999999999995,7.0280000000000005 4.816,6.924 C12.946000000000002,-0.5139999999999993 15.244,-10.678999999999998 9.569,-20.342 C5.295000000000001,-27.616 -4.7139999999999995,-31.602 -11.844,-26.017 C-12.256,-25.7 -12.275,-25.28 -12.103,-24.913 C-11.099,-18.313000000000002 -9.997,-12.923 -11.946,-6.35 C-13.145999999999999,-2.2889999999999997 -14.377,1.298 -14.683,5.535 C-15.244,13.156 -9.922,21.293 -6.942,27.925 C-6.738,28.366 -6.439,28.605 -6.114,28.75 C-4.381,31.601 1.835,30.019000000000002 4.322,29.315 C7.369,28.452 11.86,26.113 11.769,22.503 C12.036,21.989 12.078999999999999,21.36 11.722,20.706 C10,17.552 8.345,14.353 6.573,11.222z">
							</path>
							<path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="10" stroke="rgb(0,0,0)" stroke-opacity="1" stroke-width="2" d="M0 0 M6.573,11.222 C5.864000000000001,9.966999999999999 5.212,8.545 4.459,7.186 C4.5809999999999995,7.114 4.6979999999999995,7.0280000000000005 4.816,6.924 C12.946000000000002,-0.5139999999999993 15.244,-10.678999999999998 9.569,-20.342 C5.295000000000001,-27.616 -4.7139999999999995,-31.602 -11.844,-26.017 C-12.256,-25.7 -12.275,-25.28 -12.103,-24.913 C-11.099,-18.313000000000002 -9.997,-12.923 -11.946,-6.35 C-13.145999999999999,-2.2889999999999997 -14.377,1.298 -14.683,5.535 C-15.244,13.156 -9.922,21.293 -6.942,27.925 C-6.738,28.366 -6.439,28.605 -6.114,28.75 C-4.381,31.601 1.835,30.019000000000002 4.322,29.315 C7.369,28.452 11.86,26.113 11.769,22.503 C12.036,21.989 12.078999999999999,21.36 11.722,20.706 C10,17.552 8.345,14.353 6.573,11.222z">
							</path>
						</g>
					</g>
					<g transform="matrix(0.9659258262890683,-0.25881904510252074,0.25881904510252074,0.9659258262890683,196.97451407416753,278.84217327990336)" opacity="1" style="user-select: none;"> <!-- first figure chest -->
						<g opacity="1" transform="matrix(1,0,0,1,34.327,48.167)">
							<path fill="rgb(255,255,255)" fill-opacity="1" d="M0 0 M24.134,17.937 C10.572000000000001,16.128 10.094999999999999,-2.0389999999999997 4.502,-11.049 C4.505999999999999,-11.061 4.514,-11.07 4.522,-11.084 C6.95,-17.41 8.506,-22.635 2.428,-27.486 C0.10199999999999987,-29.337 -2.761,-30.493 -5.338,-31.938 C-9.777000000000001,-34.435 -10.856,-39.25 -14.134,-42.701 C-14.236,-42.814 -14.378,-42.878 -14.515,-42.919 C-14.88,-43.131 -15.346,-43.167 -15.789,-42.877 C-17.84,-41.583000000000006 -19.417,-39.924 -21.734,-38.985 C-23.966,-38.077 -26.491999999999997,-37.937 -28.586,-36.738 C-28.930999999999997,-36.544 -29.068,-36.174 -29.061,-35.813 C-29.304,-35.368 -28.758,-34.947 -28.923,-34.396 C-31.503,-25.764000000000003 -28.352999999999998,-11.027000000000001 -26.662,0.805 C-25.525,8.786 -23.791999999999998,18.057 -21.141,25.68 C-19.215,31.21 -15.74,36.189 -13.273,41.49 C-13.068999999999999,41.92 -12.76,42.16 -12.438,42.291 C-12.073,42.892999999999994 -11.422,42.737 -10.528,42.982 C-4.453,44.624 1.798000000000001,41.994 8.351,34.309 C12.085,29.935999999999996 17.498,23.437 24.134,18.725 C24.996,18.111 25.028,18.054000000000002 24.134,17.937z">
							</path>
							<path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="10" stroke="rgb(0,0,0)" stroke-opacity="1" stroke-width="2" d="M0 0 M24.134,17.937 C10.572000000000001,16.128 10.094999999999999,-2.0389999999999997 4.502,-11.049 C4.505999999999999,-11.061 4.514,-11.07 4.522,-11.084 C6.95,-17.41 8.506,-22.635 2.428,-27.486 C0.10199999999999987,-29.337 -2.761,-30.493 -5.338,-31.938 C-9.777000000000001,-34.435 -10.856,-39.25 -14.134,-42.701 C-14.236,-42.814 -14.378,-42.878 -14.515,-42.919 C-14.88,-43.131 -15.346,-43.167 -15.789,-42.877 C-17.84,-41.583000000000006 -19.417,-39.924 -21.734,-38.985 C-23.966,-38.077 -26.491999999999997,-37.937 -28.586,-36.738 C-28.930999999999997,-36.544 -29.068,-36.174 -29.061,-35.813 C-29.304,-35.368 -28.758,-34.947 -28.923,-34.396 C-31.503,-25.764000000000003 -28.352999999999998,-11.027000000000001 -26.662,0.805 C-25.525,8.786 -23.791999999999998,18.057 -21.141,25.68 C-19.215,31.21 -15.74,36.189 -13.273,41.49 C-13.068999999999999,41.92 -12.76,42.16 -12.438,42.291 C-12.073,42.892999999999994 -11.422,42.737 -10.528,42.982 C-4.453,44.624 1.798000000000001,41.994 8.351,34.309 C12.085,29.935999999999996 17.498,23.437 24.134,18.725 C24.996,18.111 25.028,18.054000000000002 24.134,17.937z">
							</path>
						</g>
					</g>
					<g transform="matrix(0.9659258262890683,-0.25881904510252074,0.25881904510252074,0.9659258262890683,118.17010916902052,266.76290956264063)" opacity="1" style="user-select: none;"> <!-- first figure outer hand -->
						<g opacity="1" transform="matrix(1,0,0,1,38.258,16.871)">
							<path fill="rgb(255,255,255)" fill-opacity="1" d="M0 0 M-4.225,-71.274 C-4.252,-71.216 -4.274,-71.158 -4.302,-71.097 C-4.335,-71.19399999999999 -4.352,-71.293 -4.394,-71.381 C-4.864,-72.8 -6.602,-72.851 -7.189,-71.501 C-7.253,-71.354 -7.316999999999999,-71.205 -7.382,-71.048 C-7.641,-71.767 -8.039,-72.32100000000001 -8.666,-72.519 C-9.547,-72.79700000000001 -10.889999999999999,-72.69800000000001 -11.174,-71.575 C-12.622,-65.842 -13.887,-61.143 -14.739,-55.145 C-15.752,-48.012 -14.983,-37.512 -12.89,-30.555 C-12.41,-28.96 -10.541,-28.822 -9.601,-29.639 C-7.267000000000001,-29.436999999999998 -4.075,-31.098 -2.415,-31.834 C-0.06300000000000017,-32.877 4.640000000000001,-34.719 5.57,-37.354 C5.639,-37.55 5.654999999999999,-37.731 5.656,-37.92 C5.936,-38.237 6.034,-38.678 5.725,-39.144 C0.07899999999999974,-47.662 0.7520000000000001,-59.90100000000001 1.479,-69.174 C1.598,-70.691 -0.41999999999999993,-71.15899999999999 -1.222,-70.026 C-1.318,-69.892 -1.393,-69.78399999999999 -1.477,-69.666 C-1.56,-70.161 -1.662,-70.661 -1.785,-71.178 C-2.0949999999999998,-72.481 -3.7479999999999998,-72.39 -4.225,-71.274z">
							</path>
							<path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="10" stroke="rgb(0,0,0)" stroke-opacity="1" stroke-width="2" d="M0 0 M-4.225,-71.274 C-4.252,-71.216 -4.274,-71.158 -4.302,-71.097 C-4.335,-71.19399999999999 -4.352,-71.293 -4.394,-71.381 C-4.864,-72.8 -6.602,-72.851 -7.189,-71.501 C-7.253,-71.354 -7.316999999999999,-71.205 -7.382,-71.048 C-7.641,-71.767 -8.039,-72.32100000000001 -8.666,-72.519 C-9.547,-72.79700000000001 -10.889999999999999,-72.69800000000001 -11.174,-71.575 C-12.622,-65.842 -13.887,-61.143 -14.739,-55.145 C-15.752,-48.012 -14.983,-37.512 -12.89,-30.555 C-12.41,-28.96 -10.541,-28.822 -9.601,-29.639 C-7.267000000000001,-29.436999999999998 -4.075,-31.098 -2.415,-31.834 C-0.06300000000000017,-32.877 4.640000000000001,-34.719 5.57,-37.354 C5.639,-37.55 5.654999999999999,-37.731 5.656,-37.92 C5.936,-38.237 6.034,-38.678 5.725,-39.144 C0.07899999999999974,-47.662 0.7520000000000001,-59.90100000000001 1.479,-69.174 C1.598,-70.691 -0.41999999999999993,-71.15899999999999 -1.222,-70.026 C-1.318,-69.892 -1.393,-69.78399999999999 -1.477,-69.666 C-1.56,-70.161 -1.662,-70.661 -1.785,-71.178 C-2.0949999999999998,-72.481 -3.7479999999999998,-72.39 -4.225,-71.274z">
							</path>
						</g>
						<g opacity="1" transform="matrix(1,0,0,1,58.349,76.499)">
							<path fill="rgb(255,255,255)" fill-opacity="1" d="M0 0 M25.322,10.582 C22.329,-5.431999999999999 29.781,-25.235999999999997 16.191,-36.674 C16.144,-37.635 14.981,-36.563 14.113,-37.103 C-12.385000000000002,-53.584 -9.725999999999999,-89.993 -14.027,-100.157 C-14.144,-100.43299999999999 -14.594,-100.076 -14.82,-99.967 C-15.473,-100.054 -16.166,-99.86 -16.674,-99.232 C-18.683999999999997,-96.749 -21.273,-95.02 -24.151,-93.704 C-26.88,-92.455 -30.200000000000003,-92.195 -32.743,-90.633 C-32.789,-90.607 -32.823,-90.56400000000001 -32.862,-90.536 C-33.58,-90.322 -34.041000000000004,-89.69500000000001 -33.914,-88.799 C-31.678,-73.025 -28.464,-58.017 -23.247,-46.56 C-16.453,-31.639000000000003 -15.095,-22.217000000000002 -9.634,-2.463 C-2.5020000000000007,18.686 10.302000000000003,43.341 38.2,53.967 C38.776,54.187 39.266999999999996,53.763999999999996 39.565,53.416 C39.796,53.26 40,53.058 40.177,52.774 C28.484,29.578 29.351,32.138999999999996 25.322,10.582z">
							</path>
							<path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="10" stroke="rgb(0,0,0)" stroke-opacity="1" stroke-width="2" d="M0 0 M25.322,10.582 C22.329,-5.431999999999999 29.781,-25.235999999999997 16.191,-36.674 C16.144,-37.635 14.981,-36.563 14.113,-37.103 C-12.385000000000002,-53.584 -9.725999999999999,-89.993 -14.027,-100.157 C-14.144,-100.43299999999999 -14.594,-100.076 -14.82,-99.967 C-15.473,-100.054 -16.166,-99.86 -16.674,-99.232 C-18.683999999999997,-96.749 -21.273,-95.02 -24.151,-93.704 C-26.88,-92.455 -30.200000000000003,-92.195 -32.743,-90.633 C-32.789,-90.607 -32.823,-90.56400000000001 -32.862,-90.536 C-33.58,-90.322 -34.041000000000004,-89.69500000000001 -33.914,-88.799 C-31.678,-73.025 -28.464,-58.017 -23.247,-46.56 C-16.453,-31.639000000000003 -15.095,-22.217000000000002 -9.634,-2.463 C-2.5020000000000007,18.686 10.302000000000003,43.341 38.2,53.967 C38.776,54.187 39.266999999999996,53.763999999999996 39.565,53.416 C39.796,53.26 40,53.058 40.177,52.774 C28.484,29.578 29.351,32.138999999999996 25.322,10.582z">
							</path>
						</g>
					</g>
					<g transform="matrix(0.9961946980917455,0.08715574274765817,-0.08715574274765817,0.9961946980917455,205.72325990795892,239.46387616034852)" opacity="1" style="user-select: none;"> <!-- first figure eyes -->
						<g opacity="1" transform="matrix(1,0,0,1,8.123,8.263)">
							<path fill="rgb(0,0,0)" fill-opacity="1" d="M0 0 M-2.359,-6.904 C-2.967,-8.013 -4.725,-7.251 -4.388,-6.051 C-4.223,-5.472 -3.8179999999999996,-4.692 -4.092,-4.086 C-4.39,-3.4190000000000005 -5.492999999999999,-4.079999999999999 -5.866,-4.294 C-6.941,-4.919 -7.874,-3.304 -6.835,-2.643 C-5.537,-1.8129999999999997 -3.8979999999999997,-1.4020000000000001 -2.674,-2.564 C-1.545,-3.635 -1.673,-5.6530000000000005 -2.359,-6.904z">
							</path>
						</g>
						<g opacity="1" transform="matrix(1,0,0,1,8.123,8.263)">
							<path fill="rgb(0,0,0)" fill-opacity="1" d="M0 0 M5.776,3.627 C4.901,4.125 4.286,4.886 3.215,4.994 C2.2969999999999997,5.085999999999999 1.4180000000000001,4.886 0.552,4.597 C-0.5429999999999999,4.237 -1.201,5.882 -0.217,6.435 C2.1799999999999997,7.779999999999999 5.8,8.013 7.337,5.186 C7.874,4.184 6.787,3.054 5.776,3.627z">
							</path>
						</g>
					</g>
					<g transform="matrix(0.9961946980917455,0.08715574274765817,-0.08715574274765817,0.9961946980917455,167.56296521296633,215.24382271715152)" opacity="1" style="user-select: none;"> <!-- first figure hair -->
						<g opacity="1" transform="matrix(1,0,0,1,26.626,49.841)">
							<path fill="rgb(225,0,0)" fill-opacity="1" d="M0 0 M20.635926471730297,-31.933751515693796 C17.165571597948254,-32.09289675840211 11.631554574526298,-32.84418811190418 7.525343524834074,-32.747298997127615 C12.790899207337898,-4.2488533886879125 1.0029979255426724,7.6184574026149905 -4.935085772948611,12.161068002204823 C-10.420385722733265,14.948163353373666 -12.631699936363134,19.253298418949026 -26.975223703406478,22.433492671288644 C-41.773498901572005,29.224767072117608 -58.74368582783841,9.7648596637097 -47.08702909895762,-1.7538563019500728 C-42.55634259291117,-10.359643276194895 -32.40988944615167,-14.511030926611468 -25.413430462686314,-20.93750818297402 C-19.40383482588387,-26.458373414216876 -18.402319965764093,-30.925445516956703 -12.059393176481445,-36.3399116642634 C-3.1001580879350272,-44.115141699617766 13.095,-44.56 22.774,-33.524 C23.619,-32.56 21.377901331809955,-31.920611079374044 20.635926471730297,-31.933751515693796z">
							</path>
							<path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="10" stroke="rgb(0,0,0)" stroke-opacity="1" stroke-width="2" d="M0 0 M20.635926471730297,-31.933751515693796 C17.165571597948254,-32.09289675840211 11.631554574526298,-32.84418811190418 7.525343524834074,-32.747298997127615 C12.790899207337898,-4.2488533886879125 1.0029979255426724,7.6184574026149905 -4.935085772948611,12.161068002204823 C-10.420385722733265,14.948163353373666 -12.631699936363134,19.253298418949026 -26.975223703406478,22.433492671288644 C-41.773498901572005,29.224767072117608 -58.74368582783841,9.7648596637097 -47.08702909895762,-1.7538563019500728 C-42.55634259291117,-10.359643276194895 -32.40988944615167,-14.511030926611468 -25.413430462686314,-20.93750818297402 C-19.40383482588387,-26.458373414216876 -18.402319965764093,-30.925445516956703 -12.059393176481445,-36.3399116642634 C-3.1001580879350272,-44.115141699617766 13.095,-44.56 22.774,-33.524 C23.619,-32.56 21.377901331809955,-31.920611079374044 20.635926471730297,-31.933751515693796z">
							</path>
						</g>
					</g>
				</g>
				<g clip-path="url(#cp_jNJiewxN)" transform="matrix(-2.9999945999999995,0,0,2.9999945999999995,3383.99895,-591.9981199999997)" opacity="1">
					<g transform="matrix(0.45399049973954686,-0.8910065241883678,0.8910065241883678,0.45399049973954686,112.00599751926433,338.35580863052246)" opacity="1" style="user-select: none;"> <!-- third figure inner hand -->
						<g opacity="1" transform="matrix(1,0,0,1,22.956,24.526)">
							<path class="animated infinite pulse slow" fill="rgb(255,255,255)" fill-opacity="1" d="M0 0 M-32.289,-33.543 C-31.69,-34.231 -31.812,-35.025000000000006 -32.241,-35.587 C-32.229,-35.935 -32.332,-36.294000000000004 -32.633,-36.627 C-39.492000000000004,-44.226 -57.611000000000004,-51.623999999999995 -67.656,-51.349 C-69.04400000000001,-51.311 -69.713,-49.639 -68.883,-48.689 C-69.574,-48.597 -70.263,-48.51499999999999 -70.953,-48.41 C-72.206,-48.218999999999994 -72.453,-46.176 -71.3,-45.685 C-71.146,-45.620000000000005 -70.99600000000001,-45.544000000000004 -70.852,-45.484 C-71.096,-45.473 -71.337,-45.442 -71.583,-45.431 C-73.355,-45.349 -73.511,-43.074 -71.954,-42.488 C-71.92699999999999,-42.481 -71.909,-42.47 -71.884,-42.461 C-72.336,-42.387 -72.781,-42.3 -73.239,-42.201 C-74.574,-41.911 -74.685,-40.064 -73.583,-39.424 C-68.64,-36.554 -54.595,-30.462 -50.112,-26.843 C-50.080000000000005,-26.057 -49.484,-25.334 -48.494,-25.665 C-42.834,-27.555999999999997 -36.405,-28.843 -32.289,-33.543z">
							</path>
							<path class="animated infinite pulse slow" stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="10" stroke="rgb(0,0,0)" stroke-opacity="1" stroke-width="1.6" d="M0 0 M-32.289,-33.543 C-31.69,-34.231 -31.812,-35.025000000000006 -32.241,-35.587 C-32.229,-35.935 -32.332,-36.294000000000004 -32.633,-36.627 C-39.492000000000004,-44.226 -57.611000000000004,-51.623999999999995 -67.656,-51.349 C-69.04400000000001,-51.311 -69.713,-49.639 -68.883,-48.689 C-69.574,-48.597 -70.263,-48.51499999999999 -70.953,-48.41 C-72.206,-48.218999999999994 -72.453,-46.176 -71.3,-45.685 C-71.146,-45.620000000000005 -70.99600000000001,-45.544000000000004 -70.852,-45.484 C-71.096,-45.473 -71.337,-45.442 -71.583,-45.431 C-73.355,-45.349 -73.511,-43.074 -71.954,-42.488 C-71.92699999999999,-42.481 -71.909,-42.47 -71.884,-42.461 C-72.336,-42.387 -72.781,-42.3 -73.239,-42.201 C-74.574,-41.911 -74.685,-40.064 -73.583,-39.424 C-68.64,-36.554 -54.595,-30.462 -50.112,-26.843 C-50.080000000000005,-26.057 -49.484,-25.334 -48.494,-25.665 C-42.834,-27.555999999999997 -36.405,-28.843 -32.289,-33.543z">
							</path>
						</g>
						<g opacity="1" transform="matrix(1,0,0,1,53.368,65.983)">
							<path class="animated infinite pulse slow" fill="rgb(255,255,255)" fill-opacity="1" d="M0 0 M16.368,45.783 C4.383999999999999,32.81 4.952,28.936999999999998 -2.085,14.745 C-4.625,9.623 -7.833,-0.5270000000000001 -10.198,-7.54 C-14.753,-28.427 -27.509999999999998,-44.653 -34.61,-52.452 C-41.522,-60.044 -51.519999999999996,-70.298 -62.156,-77.514 C-62.57,-77.795 -62.854000000000006,-77.987 -63.206,-77.907 C-63.865,-78.116 -64.666,-77.965 -65.087,-77.282 C-68.391,-71.92699999999999 -75.389,-71.065 -80.928,-69.259 C-81.206,-69.251 -81.64999999999999,-69.268 -81.692,-69.001 C-82.946,-61.043000000000006 -53.994,-57.534 -28.136,-9.969 C-28.038999999999998,-9.790999999999999 -58.965999999999994,-5.618 -55.916,4.276 C-53.529999999999994,12.016 -51.336,28.792 -48.16,36.337 C-43.81399999999999,46.67700000000001 -34.707,59.35 -20.435,65.742 C-6.1629999999999985,72.134 10.261,55.909 13.831,54.803 C16.386,54.010999999999996 17.93,52.589 18.032,49.548 C18.032,49.532000000000004 17.067,46.539 16.368,45.783z">
							</path>
							<path class="animated infinite pulse slow" stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="10" stroke="rgb(0,0,0)" stroke-opacity="1" stroke-width="1.6" d="M0 0 M16.368,45.783 C4.383999999999999,32.81 4.952,28.936999999999998 -2.085,14.745 C-4.625,9.623 -7.833,-0.5270000000000001 -10.198,-7.54 C-14.753,-28.427 -27.509999999999998,-44.653 -34.61,-52.452 C-41.522,-60.044 -51.519999999999996,-70.298 -62.156,-77.514 C-62.57,-77.795 -62.854000000000006,-77.987 -63.206,-77.907 C-63.865,-78.116 -64.666,-77.965 -65.087,-77.282 C-68.391,-71.92699999999999 -75.389,-71.065 -80.928,-69.259 C-81.206,-69.251 -81.64999999999999,-69.268 -81.692,-69.001 C-82.946,-61.043000000000006 -53.994,-57.534 -28.136,-9.969 C-28.038999999999998,-9.790999999999999 -58.965999999999994,-5.618 -55.916,4.276 C-53.529999999999994,12.016 -51.336,28.792 -48.16,36.337 C-43.81399999999999,46.67700000000001 -34.707,59.35 -20.435,65.742 C-6.1629999999999985,72.134 10.261,55.909 13.831,54.803 C16.386,54.010999999999996 17.93,52.589 18.032,49.548 C18.032,49.532000000000004 17.067,46.539 16.368,45.783z">
							</path>
						</g>
						<g opacity="1" transform="matrix(1,0,0,1,37.529,64.244)">
							<path class="animated infinite pulse slow" fill="rgb(255,255,255)" fill-opacity="1" d="M0 0 M5.293,-7.306 C0.2110000000000003,-8.968 -6.265000000000001,-10.652 -11.563,-9.074 C-12.734,-8.725 -12.45,-7.234999999999999 -11.347,-7.066 C-9.004999999999999,-6.707 -6.573,-6.885 -4.199,-6.734 C-1.2069999999999999,-6.544 1.7759999999999994,-5.942 4.645,-5.081 C6.076,-4.651000000000001 6.713,-6.841 5.293,-7.306z">
							</path>
							<path class="animated infinite pulse slow" stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="10" stroke="rgb(0,0,0)" stroke-opacity="1" stroke-width="1.6" d="M0 0 M5.293,-7.306 C0.2110000000000003,-8.968 -6.265000000000001,-10.652 -11.563,-9.074 C-12.734,-8.725 -12.45,-7.234999999999999 -11.347,-7.066 C-9.004999999999999,-6.707 -6.573,-6.885 -4.199,-6.734 C-1.2069999999999999,-6.544 1.7759999999999994,-5.942 4.645,-5.081 C6.076,-4.651000000000001 6.713,-6.841 5.293,-7.306z">
							</path>
						</g>
					</g>
					<g transform="matrix(0.8090169943749475,0.5877852522924731,-0.5877852522924731,0.8090169943749475,410.8514160829842,378.32416136514803)" opacity="1" style="user-select: none;"> <!-- third figure inner leg -->
						<g opacity="1" transform="matrix(1,0,0,1,20.483,20.135)">
							<path class="animated infinite pulse slow" fill="rgb(255,255,255)" fill-opacity="1" d="M0 0 M14.896,-12.865 C14.770000000000001,-14.585 12.700000000000001,-15.135 11.723,-13.722 C9.609000000000002,-10.648 8.597,-7.244 7.55,-3.742 C1.774,-4.215 -6.4159999999999995,-4.286 -12.193,-4.837 C-13.39,-4.9799999999999995 -14.121,-3.836 -14.265,-3.042 C-15.286000000000001,2.4210000000000003 -15.483,7.831 -13.864,13.14 C-13.328000000000001,14.896 -12.652000000000001,15.136000000000001 -12.201,15.105 C-4.553000000000001,14.572000000000001 7.467,14.481 11.856,13.708 C12.417,13.61 13.008000000000001,13.081999999999999 13.098,12.469 C14.298,4.075999999999999 15.484,-4.3740000000000006 14.896,-12.865z">
							</path>
							<path class="animated infinite pulse slow" stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="10" stroke="rgb(0,0,0)" stroke-opacity="1" stroke-width="1.6" d="M0 0 M14.896,-12.865 C14.770000000000001,-14.585 12.700000000000001,-15.135 11.723,-13.722 C9.609000000000002,-10.648 8.597,-7.244 7.55,-3.742 C1.774,-4.215 -6.4159999999999995,-4.286 -12.193,-4.837 C-13.39,-4.9799999999999995 -14.121,-3.836 -14.265,-3.042 C-15.286000000000001,2.4210000000000003 -15.483,7.831 -13.864,13.14 C-13.328000000000001,14.896 -12.652000000000001,15.136000000000001 -12.201,15.105 C-4.553000000000001,14.572000000000001 7.467,14.481 11.856,13.708 C12.417,13.61 13.008000000000001,13.081999999999999 13.098,12.469 C14.298,4.075999999999999 15.484,-4.3740000000000006 14.896,-12.865z">
							</path>
						</g>
					</g>
					<g transform="matrix(1,0,0,1,242.994,325.031)" opacity="1" style="user-select: none;"> <!-- third figure inner thigh -->
						<g opacity="1" transform="matrix(1,0,0,1,85.621,32.478)">
							<path class="animated infinite pulse slow" fill="rgb(225,0,0)" fill-opacity="1" d="M0 0 M-24.364,-19.67 C-37.365,-23.759 -55.489000000000004,-28.195 -69.302,-28.728 C-78.36500000000001,-29.259 -85.36500000000001,-28.759 -86.031,-22.426 C-87.241,-10.920999999999998 -87.36500000000001,14.991 -56.627,12.522 C4.134999999999998,2.9909999999999997 45.635000000000005,34.991 69.492,54.435 C69.91300000000001,54.778000000000006 70.367,54.757 70.733,54.515 C71.096,54.46 71.456,54.291000000000004 71.753,53.914 C75.644,48.968 79.32900000000001,45.695 82.673,40.339 C83.08500000000001,39.671 82.72900000000001,38.973 82.168,38.621 C40.635000000000005,5.241 -7.824999999999999,-14.468000000000002 -24.364,-19.67z">
							</path>
							<path class="animated infinite pulse slow" stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="10" stroke="rgb(0,0,0)" stroke-opacity="1" stroke-width="1.6" d="M0 0 M-24.364,-19.67 C-37.365,-23.759 -55.489000000000004,-28.195 -69.302,-28.728 C-78.36500000000001,-29.259 -85.36500000000001,-28.759 -86.031,-22.426 C-87.241,-10.920999999999998 -87.36500000000001,14.991 -56.627,12.522 C4.134999999999998,2.9909999999999997 45.635000000000005,34.991 69.492,54.435 C69.91300000000001,54.778000000000006 70.367,54.757 70.733,54.515 C71.096,54.46 71.456,54.291000000000004 71.753,53.914 C75.644,48.968 79.32900000000001,45.695 82.673,40.339 C83.08500000000001,39.671 82.72900000000001,38.973 82.168,38.621 C40.635000000000005,5.241 -7.824999999999999,-14.468000000000002 -24.364,-19.67z">
							</path>
						</g>
					</g>
					<g transform="matrix(0.8746197071393957,-0.48480962024633706,0.48480962024633706,0.8746197071393957,386.1973032122846,411.2776806462968)" opacity="1" style="user-select: none;"> <!-- third figure outer leg -->
						<g opacity="1" transform="matrix(1,0,0,1,23.321,18.143)">
							<path class="animated infinite pulse slow" fill="rgb(255,255,255)" fill-opacity="1" d="M0 0 M16.94,8.28 C14.006,6.728999999999999 11.218,6.299 8.109,6.583 C6.265,3.08 4.144,-0.26900000000000013 2.41,-3.834 C1.12,-6.491 0.4930000000000001,-9.391 -0.974,-11.972 C-1.551,-12.99 -2.571,-13.142999999999999 -3.406,-12.799 C-5.802,-12.713 -8.112,-12.054 -10.371,-11.266 C-12.603000000000002,-10.491 -15.489,-9.793000000000001 -17.407,-8.387 C-17.528,-8.297 -17.63,-8.177000000000001 -17.724,-8.06 C-18.113,-7.756 -18.321,-7.156 -18.164,-6.661 C-18.144000000000002,-6.173 -17.983,-5.71 -17.63,-5.424 C-14.87,0.6859999999999999 -10.493,9.334 -4.32,11.952 C-1.5030000000000001,13.143 1.88,12.692 4.837,12.559 C8.811,12.375 12.614999999999998,12.555 16.505,11.594 C17.999,11.221 18.321,9.013 16.94,8.28z">					
							</path>
							<path class="animated infinite pulse slow" stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="10" stroke="rgb(0,0,0)" stroke-opacity="1" stroke-width="1.6" d="M0 0 M16.94,8.28 C14.006,6.728999999999999 11.218,6.299 8.109,6.583 C6.265,3.08 4.144,-0.26900000000000013 2.41,-3.834 C1.12,-6.491 0.4930000000000001,-9.391 -0.974,-11.972 C-1.551,-12.99 -2.571,-13.142999999999999 -3.406,-12.799 C-5.802,-12.713 -8.112,-12.054 -10.371,-11.266 C-12.603000000000002,-10.491 -15.489,-9.793000000000001 -17.407,-8.387 C-17.528,-8.297 -17.63,-8.177000000000001 -17.724,-8.06 C-18.113,-7.756 -18.321,-7.156 -18.164,-6.661 C-18.144000000000002,-6.173 -17.983,-5.71 -17.63,-5.424 C-14.87,0.6859999999999999 -10.493,9.334 -4.32,11.952 C-1.5030000000000001,13.143 1.88,12.692 4.837,12.559 C8.811,12.375 12.614999999999998,12.555 16.505,11.594 C17.999,11.221 18.321,9.013 16.94,8.28z">
							</path>
						</g>
					</g>
					<g transform="matrix(1,0,0,1,232.42399999999998,307.056)" opacity="1" style="user-select: none;"> <!-- third figure outer thigh -->
						<g opacity="1" transform="matrix(1,0,0,1,84.288,38.379)">
							<path class="animated infinite pulse slow" fill="rgb(225,0,0)" fill-opacity="1" d="M0 0 M1.27,28.898 C17.788,32.814 46.129000000000005,49.190999999999995 67.042,64.94 C67.042,64.94 74.087,70.589 79.671,74.307 C79.671,74.307 81.533,75.546 82.772,73.685 C84.01100000000001,71.824 92.797,62.765 92.797,62.765 C92.797,62.765 95.04400000000001,60.903 93.183,59.664 C91.322,58.425000000000004 81.566,51.189 81.566,51.189 C66.236,39.747 30.076,15.068999999999999 11.458,6.27 C-6.9620000000000015,-2.4350000000000005 -21.712000000000003,-6.9350000000000005 -35.149,-9.654 C-46.212,-11.685 -50.509,-13.093 -56.294,-14.387 C-63.211999999999996,-15.935 -70.69800000000001,-17.921 -74.153,-14.17 C-81.99300000000001,-5.664 -88.788,11.643999999999998 -77.657,20.354 C-77.41,20.549 -77.159,20.673 -76.893,20.737 C-76.779,20.84 -76.712,21.019 -76.536,21.029 C-67.462,21.564 -59.729,33.723 -30.474,28.595 C-17.462,26.314 -9.367,26.376 1.27,28.898z">
							</path>
							<path class="animated infinite pulse slow" stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="10" stroke="rgb(0,0,0)" stroke-opacity="1" stroke-width="1.6" d="M0 0 M1.27,28.898 C17.788,32.814 46.129000000000005,49.190999999999995 67.042,64.94 C67.042,64.94 74.087,70.589 79.671,74.307 C79.671,74.307 81.533,75.546 82.772,73.685 C84.01100000000001,71.824 92.797,62.765 92.797,62.765 C92.797,62.765 95.04400000000001,60.903 93.183,59.664 C91.322,58.425000000000004 81.566,51.189 81.566,51.189 C66.236,39.747 30.076,15.068999999999999 11.458,6.27 C-6.9620000000000015,-2.4350000000000005 -21.712000000000003,-6.9350000000000005 -35.149,-9.654 C-46.212,-11.685 -50.509,-13.093 -56.294,-14.387 C-63.211999999999996,-15.935 -70.69800000000001,-17.921 -74.153,-14.17 C-81.99300000000001,-5.664 -88.788,11.643999999999998 -77.657,20.354 C-77.41,20.549 -77.159,20.673 -76.893,20.737 C-76.779,20.84 -76.712,21.019 -76.536,21.029 C-67.462,21.564 -59.729,33.723 -30.474,28.595 C-17.462,26.314 -9.367,26.376 1.27,28.898z">
							</path>
						</g>
					</g>
					<g transform="matrix(0.17364817766693041,-0.984807753012208,0.984807753012208,0.17364817766693041,97.34254206559618,369.94981128081906)" opacity="1" style="user-select: none;"> <!-- third figure face -->
						<g opacity="1" transform="matrix(1,0,0,1,22.277,36.585)">
							<path class="animated infinite pulse slow" fill="rgb(255,255,255)" fill-opacity="1" d="M0 0 M8.606,11.205 C7.897,9.95 7.245,8.527999999999999 6.492,7.169 C6.614,7.0969999999999995 6.731,7.0120000000000005 6.849,6.908 C14.979000000000001,-0.5299999999999994 17.277,-10.696000000000002 11.602,-20.359 C7.328,-27.633000000000003 -4.247,-31.585 -9.811,-26.034 C-14.886,-20.971 -16.886,-15.471 -17.136,-7.971 C-17.276999999999997,-3.7380000000000004 -14.83,-1.2090000000000005 -15.136,3.029 C-15.697,10.649000000000001 -7.888999999999999,21.276000000000003 -4.909,27.908 C-4.705,28.349 -4.406000000000001,28.588 -4.081,28.733 C-2.3480000000000003,31.584 3.8680000000000003,30.002 6.355,29.298 C9.402000000000001,28.435 13.892999999999999,26.096 13.802,22.486 C14.068999999999999,21.972 14.112,21.343 13.755,20.689 C12.033000000000001,17.535 10.378,14.336 8.606,11.205z">					
							</path>
							<path class="animated infinite pulse slow" stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="10" stroke="rgb(0,0,0)" stroke-opacity="1" stroke-width="1.6" d="M0 0 M8.606,11.205 C7.897,9.95 7.245,8.527999999999999 6.492,7.169 C6.614,7.0969999999999995 6.731,7.0120000000000005 6.849,6.908 C14.979000000000001,-0.5299999999999994 17.277,-10.696000000000002 11.602,-20.359 C7.328,-27.633000000000003 -4.247,-31.585 -9.811,-26.034 C-14.886,-20.971 -16.886,-15.471 -17.136,-7.971 C-17.276999999999997,-3.7380000000000004 -14.83,-1.2090000000000005 -15.136,3.029 C-15.697,10.649000000000001 -7.888999999999999,21.276000000000003 -4.909,27.908 C-4.705,28.349 -4.406000000000001,28.588 -4.081,28.733 C-2.3480000000000003,31.584 3.8680000000000003,30.002 6.355,29.298 C9.402000000000001,28.435 13.892999999999999,26.096 13.802,22.486 C14.068999999999999,21.972 14.112,21.343 13.755,20.689 C12.033000000000001,17.535 10.378,14.336 8.606,11.205z">
							</path>
						</g>
					</g>
					<g transform="matrix(0.37460659341591196,-0.9271838545667874,0.9271838545667874,0.37460659341591196,148.36044099299443,360.48683913624404)" opacity="1" style="user-select: none;"> <!-- third figure chest -->
						<g opacity="1" transform="matrix(1,0,0,1,34.327,48.167)">
							<path class="animated infinite pulse slow" fill="rgb(255,255,255)" fill-opacity="1" d="M0 0 M31.912,30.928 C18.948,1.6430000000000007 10.094999999999999,-2.0389999999999997 4.502,-11.049 C4.505999999999999,-11.061 4.514,-11.07 4.522,-11.084 C6.95,-17.41 3.657,-30.198 -3.769,-34.15 C-6.393000000000001,-35.547 -6.587,-35.957 -9.164,-37.402 C-13.603,-39.899 -10.856,-39.25 -14.134,-42.701 C-14.236,-42.814 -14.378,-42.878 -14.515,-42.919 C-14.88,-43.131 -15.346,-43.167 -15.789,-42.877 C-17.84,-41.583000000000006 -19.417,-39.924 -21.734,-38.985 C-23.966,-38.077 -26.491999999999997,-37.937 -28.586,-36.738 C-28.930999999999997,-36.544 -29.068,-36.174 -29.061,-35.813 C-29.304,-35.368 -29.326999999999998,-34.806 -28.923,-34.396 C-19.872,-25.29 -29.436,-14.67 -19.448,0.927 C-14.628,8.454 -11.439,12.867999999999999 -8.788,20.491 C-6.862,26.021 -5.414,31.438000000000002 -6.153,40.033 C-6.194,40.507 -5.64,40.703 -5.318,40.834 C-4.952999999999999,41.436 -4.302,41.28 -3.408,41.525 C2.6670000000000003,43.167 10.509999999999998,44.478 17.063,36.793 C20.796999999999997,32.42 25.831,32.027 31.912,31.716 C32.969,31.662000000000003 32.277,31.752000000000002 31.912,30.928z">
							</path>
							<path class="animated infinite pulse slow" stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="10" stroke="rgb(0,0,0)" stroke-opacity="1" stroke-width="1.6" d="M0 0 M31.912,30.928 C18.948,1.6430000000000007 10.094999999999999,-2.0389999999999997 4.502,-11.049 C4.505999999999999,-11.061 4.514,-11.07 4.522,-11.084 C6.95,-17.41 3.657,-30.198 -3.769,-34.15 C-6.393000000000001,-35.547 -6.587,-35.957 -9.164,-37.402 C-13.603,-39.899 -10.856,-39.25 -14.134,-42.701 C-14.236,-42.814 -14.378,-42.878 -14.515,-42.919 C-14.88,-43.131 -15.346,-43.167 -15.789,-42.877 C-17.84,-41.583000000000006 -19.417,-39.924 -21.734,-38.985 C-23.966,-38.077 -26.491999999999997,-37.937 -28.586,-36.738 C-28.930999999999997,-36.544 -29.068,-36.174 -29.061,-35.813 C-29.304,-35.368 -29.326999999999998,-34.806 -28.923,-34.396 C-19.872,-25.29 -29.436,-14.67 -19.448,0.927 C-14.628,8.454 -11.439,12.867999999999999 -8.788,20.491 C-6.862,26.021 -5.414,31.438000000000002 -6.153,40.033 C-6.194,40.507 -5.64,40.703 -5.318,40.834 C-4.952999999999999,41.436 -4.302,41.28 -3.408,41.525 C2.6670000000000003,43.167 10.509999999999998,44.478 17.063,36.793 C20.796999999999997,32.42 25.831,32.027 31.912,31.716 C32.969,31.662000000000003 32.277,31.752000000000002 31.912,30.928z">
							</path>
						</g>
					</g>
					<g transform="matrix(0.25881904510252074,-0.9659258262890683,0.9659258262890683,0.25881904510252074,93.66512469598419,425.0528679288854)" opacity="1" style="user-select: none;"> <!-- third figure outer hand -->
						<g opacity="1" transform="matrix(1,0,0,1,38.258,16.871)">
							<path class="animated infinite pulse slow" fill="rgb(255,255,255)" fill-opacity="1" d="M0 0 M-39.275,-38.587 C-39.228,-38.542 -39.178999999999995,-38.501999999999995 -39.129,-38.455 C-39.247,-38.452 -39.361,-38.465 -39.474,-38.451 C-41.202,-38.427 -42.145,-36.71 -41.029,-35.703 C-40.907000000000004,-35.593 -40.784,-35.483 -40.653,-35.369 C-41.539,-35.336 -42.323,-35.112 -42.851,-34.549 C-43.592999999999996,-33.758 -44.176,-32.388 -43.143,-31.754 C-37.873000000000005,-28.517000000000003 -35.256,-23.957 -29.941,-20.292 C-23.738999999999997,-16.015 -20.237000000000002,-9.706 -16.632,-5.987 C-15.472000000000001,-4.791 -13.725,-6.237 -13.558,-7.471 C-11.672,-8.86 -10.370999999999999,-12.216000000000001 -9.61,-13.865 C-8.532,-16.201 -6.2170000000000005,-20.69 -7.258,-23.283 C-7.336,-23.476000000000003 -7.4430000000000005,-23.621 -7.567,-23.764 C-7.566,-24.186999999999998 -7.923,-24.339 -8.323,-24.729 C-15.884,-32.096 -24.808,-39.991 -34.159,-43.616 C-35.688,-44.209 -37.21,-42.343999999999994 -36.432,-41.19 C-36.34,-41.052 -36.267,-40.944 -36.186,-40.823 C-36.747,-40.895 -37.323,-40.949999999999996 -37.928,-40.989 C-39.452999999999996,-41.086999999999996 -40.201,-39.412000000000006 -39.275,-38.587z">
							</path>
							<path class="animated infinite pulse slow" stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="10" stroke="rgb(0,0,0)" stroke-opacity="1" stroke-width="1.6" d="M0 0 M-39.275,-38.587 C-39.228,-38.542 -39.178999999999995,-38.501999999999995 -39.129,-38.455 C-39.247,-38.452 -39.361,-38.465 -39.474,-38.451 C-41.202,-38.427 -42.145,-36.71 -41.029,-35.703 C-40.907000000000004,-35.593 -40.784,-35.483 -40.653,-35.369 C-41.539,-35.336 -42.323,-35.112 -42.851,-34.549 C-43.592999999999996,-33.758 -44.176,-32.388 -43.143,-31.754 C-37.873000000000005,-28.517000000000003 -35.256,-23.957 -29.941,-20.292 C-23.738999999999997,-16.015 -20.237000000000002,-9.706 -16.632,-5.987 C-15.472000000000001,-4.791 -13.725,-6.237 -13.558,-7.471 C-11.672,-8.86 -10.370999999999999,-12.216000000000001 -9.61,-13.865 C-8.532,-16.201 -6.2170000000000005,-20.69 -7.258,-23.283 C-7.336,-23.476000000000003 -7.4430000000000005,-23.621 -7.567,-23.764 C-7.566,-24.186999999999998 -7.923,-24.339 -8.323,-24.729 C-15.884,-32.096 -24.808,-39.991 -34.159,-43.616 C-35.688,-44.209 -37.21,-42.343999999999994 -36.432,-41.19 C-36.34,-41.052 -36.267,-40.944 -36.186,-40.823 C-36.747,-40.895 -37.323,-40.949999999999996 -37.928,-40.989 C-39.452999999999996,-41.086999999999996 -40.201,-39.412000000000006 -39.275,-38.587z">
							</path>
						</g>
						<g opacity="1" transform="matrix(1,0,0,1,58.349,76.499)">
							<path class="animated infinite pulse slow" fill="rgb(255,255,255)" fill-opacity="1" d="M0 0 M27.801,10.325 C28.308,-5.958000000000002 29.326999999999998,-23.811 14.471,-42.448 C14.424,-43.409 12.97,-42.033 12.393,-42.877 C6.297000000000001,-51.804 -3.3859999999999992,-68.621 -29.075,-85.622 C-29.325,-85.787 -29.447000000000003,-85.18599999999999 -29.545,-84.955 C-30.093000000000004,-84.589 -30.485000000000003,-83.986 -30.452,-83.179 C-30.321,-79.987 -31.125,-76.979 -32.417,-74.09 C-33.642,-71.35000000000001 -35.964,-68.96300000000001 -36.842,-66.111 C-36.859,-66.061 -36.855999999999995,-66.006 -36.867,-65.959 C-37.265,-65.324 -37.291000000000004,-64.419 -36.511,-63.96 C-28.271,-59.106 -14.113,-45.558 -7.25,-35.004 C-1.6440000000000001,-26.381999999999998 0.14300000000000002,-13.92 0.513,-3.626 C1.258,21.014 6.2719999999999985,47.589 30.761,61.441 C31.298,61.745000000000005 31.828,61.238 32.126,60.89 C32.357,60.734 32.561,60.532 32.738,60.248 C34.818,43.04599999999999 26.999,36.083 27.801,10.325z">
							</path>
							<path class="animated infinite pulse slow" stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="10" stroke="rgb(0,0,0)" stroke-opacity="1" stroke-width="1.6" d="M0 0 M27.801,10.325 C28.308,-5.958000000000002 29.326999999999998,-23.811 14.471,-42.448 C14.424,-43.409 12.97,-42.033 12.393,-42.877 C6.297000000000001,-51.804 -3.3859999999999992,-68.621 -29.075,-85.622 C-29.325,-85.787 -29.447000000000003,-85.18599999999999 -29.545,-84.955 C-30.093000000000004,-84.589 -30.485000000000003,-83.986 -30.452,-83.179 C-30.321,-79.987 -31.125,-76.979 -32.417,-74.09 C-33.642,-71.35000000000001 -35.964,-68.96300000000001 -36.842,-66.111 C-36.859,-66.061 -36.855999999999995,-66.006 -36.867,-65.959 C-37.265,-65.324 -37.291000000000004,-64.419 -36.511,-63.96 C-28.271,-59.106 -14.113,-45.558 -7.25,-35.004 C-1.6440000000000001,-26.381999999999998 0.14300000000000002,-13.92 0.513,-3.626 C1.258,21.014 6.2719999999999985,47.589 30.761,61.441 C31.298,61.745000000000005 31.828,61.238 32.126,60.89 C32.357,60.734 32.561,60.532 32.738,60.248 C34.818,43.04599999999999 26.999,36.083 27.801,10.325z">
							</path>
						</g>
					</g>
					<g transform="matrix(0.17364817766693041,-0.984807753012208,0.984807753012208,0.17364817766693041,112.25280033483348,353.2969561699187)" opacity="1" style="user-select: none;"> <!-- third figure facial features -->
						<g opacity="1" transform="matrix(1,0,0,1,8.555,11.427)">
							<path class="animated infinite pulse slow" fill="rgb(0,0,0)" fill-opacity="1" d="M0 0 M6.661,2.664 C5.8469999999999995,3.833 5.226,4.001 4.195,4.105 C3.3120000000000003,4.1930000000000005 1.904,4.0009999999999994 1.07,3.723 C0.017000000000000126,3.376 -0.42999999999999994,4.273 0.517,4.805 C2.824,6.099 6.308,6.324 7.788,3.602 C8.305,2.638 7.3,1.746 6.661,2.664z">
							</path>
						</g>
						<g opacity="1" transform="matrix(1,0,0,1,8.555,11.427)">
							<path class="animated infinite pulse slow" fill="rgb(0,0,0)" fill-opacity="1" d="M0 0 M-2.997,-5.256 C-3.582,-6.324 -4.773,-5.902 -4.449,-4.747 C-4.29,-4.1899999999999995 -3.4029999999999996,-3.229 -4.103,-2.356 C-4.543,-1.807 -6.2,-2.225 -6.559,-2.431 C-7.593,-3.033 -8.305,-1.79 -7.304,-1.153 C-6.055,-0.355 -4.477,0.040000000000000036 -3.299,-1.079 C-2.2119999999999997,-2.11 -2.3369999999999997,-4.0520000000000005 -2.997,-5.256z">
							</path>
						</g>
						<g opacity="1" transform="matrix(1,0,0,1,10.872,5.14)">
							<path class="animated infinite pulse slow" fill="rgb(0,0,0)" fill-opacity="1" d="M0 0 M-4.74,-3.099 C-5.862,-3.567 -5.33,-4.89 -4.16,-4.481 C-2.324,-3.8409999999999997 2.838,-1.194 4.775,-1.328 C5.378,-1.37 5.862,-0.7120000000000001 5.825,-0.161 C5.739,1.271 5.209,2.428 4.441,3.622 C3.62,4.89 1.87,4.103 2.721,2.856 C3.061,2.3579999999999997 4.0329999999999995,0.929 4.249,0.4 C2.6239999999999997,0.28200000000000003 -3.216,-2.4770000000000003 -4.74,-3.099z">
							</path>
						</g>
					</g>
					<g transform="matrix(0.17364817766693041,-0.984807753012208,0.984807753012208,0.17364817766693041,74.65674798797758,378.4678729774661)" opacity="1" style="user-select: none;"> <!-- third figure hair -->
						<g opacity="1" transform="matrix(1,0,0,1,18.949,37.721)">
							<path class="animated infinite pulse slow" fill="rgb(225,0,0)" fill-opacity="1" d="M0 0 M9.166,-13.794 C-13.677,-43.632000000000005 -22.139,-12.439 -12.953,-1.36 C-12.54,3.1309999999999993 -18.086000000000002,3.3470000000000004 -16.536,7.924 C-13.531000000000002,16.794 -5.055,16.788000000000004 3.081,30.844 C3.4899999999999998,31.551000000000002 4.781,31.009 5.358,30.545 C6.762,29.431 6.9910000000000005,29.439 6.964,27.812 C6.938000000000001,26.206 7.921,23.857999999999997 8.138,22.269 C7.844,22.358999999999998 7.550000000000001,22.461000000000002 7.227,22.513 C5.872,22.720000000000002 4.462,22.222 3.627,21.39 C1.404,19.187 1.653,14.834999999999999 4.987,13.915 C5.117,13.875 5.24,13.873 5.368,13.872 C5.478000000000001,13.813 5.601,13.767 5.735,13.737 C6.11,13.634 6.446000000000001,13.645 6.764,13.696 C5.867,6.739 3.885,7.468 2.271,4.683 C7.365,2.8529999999999998 10.184,-4.0489999999999995 10.558,-9.087 C10.893,-11.731 10.186,-12.461 9.166,-13.794z">
							</path>
							<path class="animated infinite pulse slow" stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="10" stroke="rgb(0,0,0)" stroke-opacity="1" stroke-width="1.6" d="M0 0 M9.166,-13.794 C-13.677,-43.632000000000005 -22.139,-12.439 -12.953,-1.36 C-12.54,3.1309999999999993 -18.086000000000002,3.3470000000000004 -16.536,7.924 C-13.531000000000002,16.794 -5.055,16.788000000000004 3.081,30.844 C3.4899999999999998,31.551000000000002 4.781,31.009 5.358,30.545 C6.762,29.431 6.9910000000000005,29.439 6.964,27.812 C6.938000000000001,26.206 7.921,23.857999999999997 8.138,22.269 C7.844,22.358999999999998 7.550000000000001,22.461000000000002 7.227,22.513 C5.872,22.720000000000002 4.462,22.222 3.627,21.39 C1.404,19.187 1.653,14.834999999999999 4.987,13.915 C5.117,13.875 5.24,13.873 5.368,13.872 C5.478000000000001,13.813 5.601,13.767 5.735,13.737 C6.11,13.634 6.446000000000001,13.645 6.764,13.696 C5.867,6.739 3.885,7.468 2.271,4.683 C7.365,2.8529999999999998 10.184,-4.0489999999999995 10.558,-9.087 C10.893,-11.731 10.186,-12.461 9.166,-13.794z">
							</path>
						</g>
					</g>
				</g>
				<g clip-path="url(#cp_Nz2NtdiY)" transform="matrix(2.5,0,0,2.5,832,82)" opacity="1">
					<g transform="matrix(1,0,0,1,279.942,464.262)" opacity="1" style="user-select: none;"> <!-- second figure legs -->
						<g opacity="1" transform="matrix(1,0,0,1,15.827,36.653)">
							<path fill="rgb(255,255,255)" fill-opacity="1" d="M0 0 M-2.877,-15.898 C-4.49,0.7199999999999989 -6.138999999999999,20.322 -4.999,27.886 C-4.8839999999999995,28.657999999999998 -4.409,29.076 -3.862,29.231 C-2.007,31.243000000000002 3.681,29.564 5.625,29.161 C5.83,29.113000000000003 6.005000000000001,29.038999999999998 6.158,28.955 C6.871,28.819 7.5249999999999995,28.332 7.712,27.427 C9.864,16.993000000000002 12.225,2.011000000000001 14.818,-13.148 C17.683,-29.897 -1.908,-25.886 -2.877,-15.898z">
							</path>
							<path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="10" stroke="rgb(0,0,0)" stroke-opacity="1" stroke-width="2" d="M0 0 M-2.877,-15.898 C-4.49,0.7199999999999989 -6.138999999999999,20.322 -4.999,27.886 C-4.8839999999999995,28.657999999999998 -4.409,29.076 -3.862,29.231 C-2.007,31.243000000000002 3.681,29.564 5.625,29.161 C5.83,29.113000000000003 6.005000000000001,29.038999999999998 6.158,28.955 C6.871,28.819 7.5249999999999995,28.332 7.712,27.427 C9.864,16.993000000000002 12.225,2.011000000000001 14.818,-13.148 C17.683,-29.897 -1.908,-25.886 -2.877,-15.898z">
							</path>
						</g>
						<g opacity="1" transform="matrix(1,0,0,1,62.979,39.869)">
							<path fill="rgb(255,255,255)" fill-opacity="1" d="M0 0 M10.023,22.653 C10.088,22.506999999999998 10.158999999999999,22.364 10.187,22.19 C11.049999999999999,16.848000000000003 10.188,1.8340000000000014 11.144,-11.142 C12.067,-23.677 -12.552,-20.45 -10.363,-9.135 C-7.978,3.1899999999999995 -6.67,14.369 -5.565,26.826 C-5.430000000000001,28.35 -4.207,28.935 -3.097,28.519 C-2.695,28.689999999999998 -2.228,28.732 -1.741,28.557 C2.169,27.151 6.086,26.047 9.493,23.576 C9.836,23.331 9.991999999999999,23.000999999999998 10.023,22.653z">
							</path>
							<path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="10" stroke="rgb(0,0,0)" stroke-opacity="1" stroke-width="2" d="M0 0 M10.023,22.653 C10.088,22.506999999999998 10.158999999999999,22.364 10.187,22.19 C11.049999999999999,16.848000000000003 10.188,1.8340000000000014 11.144,-11.142 C12.067,-23.677 -12.552,-20.45 -10.363,-9.135 C-7.978,3.1899999999999995 -6.67,14.369 -5.565,26.826 C-5.430000000000001,28.35 -4.207,28.935 -3.097,28.519 C-2.695,28.689999999999998 -2.228,28.732 -1.741,28.557 C2.169,27.151 6.086,26.047 9.493,23.576 C9.836,23.331 9.991999999999999,23.000999999999998 10.023,22.653z">
							</path>
						</g>
						<g opacity="1" transform="matrix(1,0,0,1,42.007,62.976)">
							<path fill="rgb(225,0,0)" fill-opacity="1" d="M0 0 M-18.373,3.848 C-23.23,5.753 -29.086,6.312 -34.26,6.509 C-36.778,6.607 -37.007,3.0839999999999996 -34.83,2.328 C-33.991,2.041 -33.221000000000004,1.716 -32.442,1.452 C-32.597,0.8089999999999999 -32.77,0.174 -33.084,-0.431 C-34.127,-2.457 -30.995,-4.2330000000000005 -30.046,-2.2 C-29.823,-1.8450000000000002 -29.648,-1.4809999999999999 -29.486,-1.111 C-29.115000000000002,-0.393 -28.730999999999998,0.31700000000000006 -28.334,1.02 C-28.258,1.164 -28.232,1.3010000000000002 -28.201,1.429 C-25.287,0.9530000000000001 -22.406000000000002,0.348 -19.568,-0.483 C-16.729000000000003,-1.322 -15.735000000000001,2.812 -18.373,3.848z">
							</path>
							<path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="10" stroke="rgb(0,0,0)" stroke-opacity="1" stroke-width="2" d="M0 0 M-18.373,3.848 C-23.23,5.753 -29.086,6.312 -34.26,6.509 C-36.778,6.607 -37.007,3.0839999999999996 -34.83,2.328 C-33.991,2.041 -33.221000000000004,1.716 -32.442,1.452 C-32.597,0.8089999999999999 -32.77,0.174 -33.084,-0.431 C-34.127,-2.457 -30.995,-4.2330000000000005 -30.046,-2.2 C-29.823,-1.8450000000000002 -29.648,-1.4809999999999999 -29.486,-1.111 C-29.115000000000002,-0.393 -28.730999999999998,0.31700000000000006 -28.334,1.02 C-28.258,1.164 -28.232,1.3010000000000002 -28.201,1.429 C-25.287,0.9530000000000001 -22.406000000000002,0.348 -19.568,-0.483 C-16.729000000000003,-1.322 -15.735000000000001,2.812 -18.373,3.848z">
							</path>
						</g>
						<g opacity="1" transform="matrix(1,0,0,1,42.007,62.976)">
							<path fill="rgb(225,0,0)" fill-opacity="1" d="M0 0 M31.652,1.033 C27.967000000000002,1.875 24.184,1.907 20.417,1.82 C20.386000000000003,0.9480000000000001 20.458000000000002,0.126 20.448,-0.692 C20.444,-0.818 20.45,-0.937 20.438,-1.07 C20.430999999999997,-1.228 20.409000000000002,-1.3880000000000001 20.388,-1.546 C20.375,-1.691 20.362000000000002,-1.823 20.344,-1.98 C20.330000000000002,-2.067 20.285,-2.1319999999999997 20.261,-2.207 C20.239,-2.29 20.24,-2.3659999999999997 20.218,-2.449 C20.207,-2.448 20.188000000000002,-2.442 20.181,-2.439 C19.451,-4.313000000000001 16.423000000000002,-3.73 16.574,-1.48 C16.612000000000002,-0.736 16.522000000000002,0.02300000000000002 16.431,0.782 C15.993,0.904 15.544,0.968 15.079,0.898 C13.687000000000001,0.687 12.529,1.9620000000000002 12.682,3.309 C12.71,3.588 12.74,3.8680000000000003 12.765,4.144 C12.872,5.074 13.705,5.952 14.646,6.015 C20.507,6.404 26.480000000000004,7.016 32.258,5.632 C35.136,4.943 34.578,0.3649999999999999 31.652,1.033z">
							</path>
							<path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="10" stroke="rgb(0,0,0)" stroke-opacity="1" stroke-width="2" d="M0 0 M31.652,1.033 C27.967000000000002,1.875 24.184,1.907 20.417,1.82 C20.386000000000003,0.9480000000000001 20.458000000000002,0.126 20.448,-0.692 C20.444,-0.818 20.45,-0.937 20.438,-1.07 C20.430999999999997,-1.228 20.409000000000002,-1.3880000000000001 20.388,-1.546 C20.375,-1.691 20.362000000000002,-1.823 20.344,-1.98 C20.330000000000002,-2.067 20.285,-2.1319999999999997 20.261,-2.207 C20.239,-2.29 20.24,-2.3659999999999997 20.218,-2.449 C20.207,-2.448 20.188000000000002,-2.442 20.181,-2.439 C19.451,-4.313000000000001 16.423000000000002,-3.73 16.574,-1.48 C16.612000000000002,-0.736 16.522000000000002,0.02300000000000002 16.431,0.782 C15.993,0.904 15.544,0.968 15.079,0.898 C13.687000000000001,0.687 12.529,1.9620000000000002 12.682,3.309 C12.71,3.588 12.74,3.8680000000000003 12.765,4.144 C12.872,5.074 13.705,5.952 14.646,6.015 C20.507,6.404 26.480000000000004,7.016 32.258,5.632 C35.136,4.943 34.578,0.3649999999999999 31.652,1.033z">				
							</path>
						</g>
					</g>
					<g transform="matrix(1,0,0,1,277.629,276.568)" opacity="1" style="user-select: none;"> <!-- second figure thighs -->
						<g opacity="1" transform="matrix(1,0,0,1,42.166,115.497)">
							<path fill="rgb(255,255,255)" fill-opacity="1" d="M0 0 M36.37371346153845,108.22972500000009 C35.25471346153845,98.9397250000001 36.47902819999992,-67.7342114692313 34.389,-86.737 C33.60676430000002,-95.1419578923077 32.33,-105.065 29.484,-111.353 C28.792,-112.88199999999999 26.854000000000003,-114.3 25.664,-113.832 C16.267000000000003,-114.452 -14.438999999999998,-109.52900000000001 -22.214,-110.376 C-23.241999999999997,-110.497 -24.626928069230768,-108.65727543846153 -24.682,-108.342 C-30.518561538461448,-75.58444423076936 -32.74028653846155,91.1257250000001 -32.77328653846155,112.2317250000001 C-32.77328653846155,113.20672500000009 -31.922286538461545,114.12772500000008 -30.917286538461546,114.0837250000001 C-23.887286538461545,113.76572500000009 -15.881861392307698,114.21872500000009 -9.4528613923077,117.2737250000001 C-7.789861392307699,118.06772500000008 -6.289286538461545,116.55572500000008 -6.376286538461545,115.2027250000001 C-6.297286538461545,115.0287250000001 -6.240286538461546,114.8467250000001 -6.221286538461546,114.63472500000009 C-5.140286538461546,100.23472500000008 0.6367152384615165,-38.16529230769237 0.38571523846151645,-74.41029230769237 C0.7637152384615165,-74.29029230769237 4.8557192307692745,-75.57814615384618 5.510719230769275,-75.41214615384618 C6.593719230769275,-16.74014615384618 5.999713461538454,99.8997250000001 8.142713461538454,113.8627250000001 C8.565713461538454,116.62872500000009 11.240713461538453,116.1907250000001 12.170713461538453,115.78272500000008 C15.946713461538453,114.11172500000009 20.007713461538454,113.21172500000011 24.059713461538454,112.53172500000011 C28.122713461538453,111.84372500000009 31.47771346153845,112.56972500000009 35.36771346153845,111.22372500000009 C36.56171346153845,110.80772500000009 37.06071346153845,109.15272500000009 36.37371346153845,108.22972500000009z">
							</path>
							<path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="10" stroke="rgb(0,0,0)" stroke-opacity="1" stroke-width="2" d="M0 0 M36.37371346153845,108.22972500000009 C35.25471346153845,98.9397250000001 36.47902819999992,-67.7342114692313 34.389,-86.737 C33.60676430000002,-95.1419578923077 32.33,-105.065 29.484,-111.353 C28.792,-112.88199999999999 26.854000000000003,-114.3 25.664,-113.832 C16.267000000000003,-114.452 -14.438999999999998,-109.52900000000001 -22.214,-110.376 C-23.241999999999997,-110.497 -24.626928069230768,-108.65727543846153 -24.682,-108.342 C-30.518561538461448,-75.58444423076936 -32.74028653846155,91.1257250000001 -32.77328653846155,112.2317250000001 C-32.77328653846155,113.20672500000009 -31.922286538461545,114.12772500000008 -30.917286538461546,114.0837250000001 C-23.887286538461545,113.76572500000009 -15.881861392307698,114.21872500000009 -9.4528613923077,117.2737250000001 C-7.789861392307699,118.06772500000008 -6.289286538461545,116.55572500000008 -6.376286538461545,115.2027250000001 C-6.297286538461545,115.0287250000001 -6.240286538461546,114.8467250000001 -6.221286538461546,114.63472500000009 C-5.140286538461546,100.23472500000008 0.6367152384615165,-38.16529230769237 0.38571523846151645,-74.41029230769237 C0.7637152384615165,-74.29029230769237 4.8557192307692745,-75.57814615384618 5.510719230769275,-75.41214615384618 C6.593719230769275,-16.74014615384618 5.999713461538454,99.8997250000001 8.142713461538454,113.8627250000001 C8.565713461538454,116.62872500000009 11.240713461538453,116.1907250000001 12.170713461538453,115.78272500000008 C15.946713461538453,114.11172500000009 20.007713461538454,113.21172500000011 24.059713461538454,112.53172500000011 C28.122713461538453,111.84372500000009 31.47771346153845,112.56972500000009 35.36771346153845,111.22372500000009 C36.56171346153845,110.80772500000009 37.06071346153845,109.15272500000009 36.37371346153845,108.22972500000009z">
							</path>
						</g>
					</g>
					<g transform="matrix(0.984807753012208,-0.17364817766693033,0.17364817766693033,0.984807753012208,233.61056691207875,169.12670730123506)" opacity="1" style="user-select: none;"> <!-- second figure hands -->
						<g opacity="1" transform="matrix(1,0,0,1,17.862,24.36)">
							<path fill="rgb(255,255,255)" fill-opacity="1" d="M0 0 M4.510729394092856,83.84142055663526 C5.3569333761620195,93.32604397955394 7.206826240895025,96.09684732741044 10.234440848580087,105.09007333548689 C10.604085109259696,106.1887686689684 11.730280882295194,106.51612440828879 12.513681528584637,105.94389370761068 C13.142562655775171,105.82662103434916 13.703356903413217,105.32174196243623 13.705799522286094,104.60285085591926 C13.707593769924141,104.11279391434613 13.734610794191436,103.62484586625601 13.742405041829482,103.13656614805365 C13.876093330370136,103.40355616872719 14.037724677337673,103.65265508288375 14.160635742507576,103.92747926850116 C14.778636621615584,105.30860019658823 16.77254475239987,104.79260636242107 16.94543497980885,103.41208889859978 C17.806091275092527,103.9495215381462 19.09321719284283,103.39963953184765 19.225236272387733,102.24268150443109 C19.240671846319774,102.12962456285797 19.24549603193719,102.01140178622872 19.26209744092536,101.89173345634097 C19.45487965395934,101.94010709903667 19.65571381890321,101.94564657678849 19.848268265644712,101.92540883116956 C19.89126826564471,101.92446078307945 19.94165687733009,101.91690134667472 19.98865687733009,101.91734191026998 C20.07459993575697,101.89805720240439 20.151320217554606,101.87060665948266 20.23604049935224,101.84293333993169 C20.327926616206003,101.80403724375147 20.413481062947504,101.78452975925664 20.503698849913526,101.72863366307642 C20.543807743396535,101.70229700330093 20.579916636879545,101.6681831201547 20.62763691867718,101.64462368374996 C20.7154091523847,101.57172758756974 20.812404162721474,101.50960871476028 20.886508066541257,101.41654678352393 C20.9944980872148,101.28698235745597 21.0858197780006,101.13547487296113 21.141084527213284,100.9724698832979 C21.141084527213284,100.9724698832979 21.19596066474059,100.81046489363467 21.19596066474059,100.81046489363467 C21.275997647660795,100.57618018576908 21.298868795524875,100.35467769093745 21.27601966159132,100.15673463251058 C23.311833285835867,94.9731144410391 22.561242747358936,84.82331520373783 21.486729988216045,76.34854590441591 C21.419576187763983,75.81610534082066 20.84933844214505,75.63376163610432 20.43860818102096,75.54929406891532 C20.148075748209976,75.14920513408521 19.68388496483771,74.86768561498631 19.073221624613197,74.92690134667473 C15.891904923490623,75.23576720781398 12.877680091583764,75.99634337142442 9.95860906012897,77.28885760379849 C7.6263522349651325,78.32182443437192 4.850083375197229,79.91549452247565 3.8099413122876395,82.34536155978452 C3.5407684322906725,82.9731067898983 3.9514866588106963,83.60363129866045 4.510729394092856,83.84142055663526z">
							</path>
							<path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="10" stroke="rgb(0,0,0)" stroke-opacity="1" stroke-width="2" d="M0 0 M4.510729394092856,83.84142055663526 C5.3569333761620195,93.32604397955394 7.206826240895025,96.09684732741044 10.234440848580087,105.09007333548689 C10.604085109259696,106.1887686689684 11.730280882295194,106.51612440828879 12.513681528584637,105.94389370761068 C13.142562655775171,105.82662103434916 13.703356903413217,105.32174196243623 13.705799522286094,104.60285085591926 C13.707593769924141,104.11279391434613 13.734610794191436,103.62484586625601 13.742405041829482,103.13656614805365 C13.876093330370136,103.40355616872719 14.037724677337673,103.65265508288375 14.160635742507576,103.92747926850116 C14.778636621615584,105.30860019658823 16.77254475239987,104.79260636242107 16.94543497980885,103.41208889859978 C17.806091275092527,103.9495215381462 19.09321719284283,103.39963953184765 19.225236272387733,102.24268150443109 C19.240671846319774,102.12962456285797 19.24549603193719,102.01140178622872 19.26209744092536,101.89173345634097 C19.45487965395934,101.94010709903667 19.65571381890321,101.94564657678849 19.848268265644712,101.92540883116956 C19.89126826564471,101.92446078307945 19.94165687733009,101.91690134667472 19.98865687733009,101.91734191026998 C20.07459993575697,101.89805720240439 20.151320217554606,101.87060665948266 20.23604049935224,101.84293333993169 C20.327926616206003,101.80403724375147 20.413481062947504,101.78452975925664 20.503698849913526,101.72863366307642 C20.543807743396535,101.70229700330093 20.579916636879545,101.6681831201547 20.62763691867718,101.64462368374996 C20.7154091523847,101.57172758756974 20.812404162721474,101.50960871476028 20.886508066541257,101.41654678352393 C20.9944980872148,101.28698235745597 21.0858197780006,101.13547487296113 21.141084527213284,100.9724698832979 C21.141084527213284,100.9724698832979 21.19596066474059,100.81046489363467 21.19596066474059,100.81046489363467 C21.275997647660795,100.57618018576908 21.298868795524875,100.35467769093745 21.27601966159132,100.15673463251058 C23.311833285835867,94.9731144410391 22.561242747358936,84.82331520373783 21.486729988216045,76.34854590441591 C21.419576187763983,75.81610534082066 20.84933844214505,75.63376163610432 20.43860818102096,75.54929406891532 C20.148075748209976,75.14920513408521 19.68388496483771,74.86768561498631 19.073221624613197,74.92690134667473 C15.891904923490623,75.23576720781398 12.877680091583764,75.99634337142442 9.95860906012897,77.28885760379849 C7.6263522349651325,78.32182443437192 4.850083375197229,79.91549452247565 3.8099413122876395,82.34536155978452 C3.5407684322906725,82.9731067898983 3.9514866588106963,83.60363129866045 4.510729394092856,83.84142055663526z">
							</path>
						</g>
						<g opacity="1" transform="matrix(1,0,0,1,57.575,86.673)">
							<path fill="rgb(255,255,255)" fill-opacity="1" d="M0 0 M-11.989,16.455 C-14.841000000000001,25.497999999999998 -21.08244056359527,45.09583033937347 -22.62844056359527,54.63383033937347 C-22.82244056359527,55.83083033937347 -21.57044056359527,56.46383033937347 -20.57244056359527,56.33583033937347 C-20.437440563595267,56.38783033937347 -20.33544056359527,56.46383033937347 -20.17544056359527,56.48583033937347 C-9.726440563595268,56.99783033937347 2.2905594364047324,58.194830339373475 11.539559436404733,61.33883033937347 C17.93855943640473,63.50183033937347 31.683170824719355,67.51783033937348 37.52617082471936,66.39083033937348 C38.54417082471936,66.14383033937348 39.308170824719355,66.08444172768809 39.40017082471935,64.79944172768809 C40.439170824719355,50.35844172768809 42.18158496676729,27.98636864095569 45.812098617094954,10.81461343151546 C48.50387172991049,-2.055087758660495 41.41189462294902,-15.960031993256978 31.396,-22.573 C23.354449663813718,-27.90495421392294 10.385611388314624,-26.372502494831615 8.628,-26.639 C-15.376773658631622,-30.25259788047936 -36.15543668971777,-5.255546570999757 -35.921944804566124,20.065418501357648 C-35.833934825239666,20.190745181806676 -35.73259317580095,20.28862630899721 -35.61875402119385,20.35906188292925 C-34.91736247512286,21.064229773262987 -33.62657028276242,21.20301609685219 -32.937204564115575,20.19584732741044 C-30.41821424638044,16.513192208296367 -24.079066314699613,15.380294650961726 -19.99828204638802,14.635022274761791 C-19.20706924908523,14.492014350712946 -18.995527716055797,13.615217168689282 -19.350240952912596,13.043521835207791 C-19.349245942575823,12.980910446893166 -19.331805378980558,12.932853505320049 -19.333810368643785,12.867853505320046 C-16.174776605094017,3.447299355640136 -8.253,-8.548000000000002 -4.474,-11.316 C-4.8340000000000005,-10.474 -9.873000000000001,9.742999999999999 -11.989,16.455z">
							</path>
							<path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="10" stroke="rgb(0,0,0)" stroke-opacity="1" stroke-width="2" d="M0 0 M-11.989,16.455 C-14.841000000000001,25.497999999999998 -21.08244056359527,45.09583033937347 -22.62844056359527,54.63383033937347 C-22.82244056359527,55.83083033937347 -21.57044056359527,56.46383033937347 -20.57244056359527,56.33583033937347 C-20.437440563595267,56.38783033937347 -20.33544056359527,56.46383033937347 -20.17544056359527,56.48583033937347 C-9.726440563595268,56.99783033937347 2.2905594364047324,58.194830339373475 11.539559436404733,61.33883033937347 C17.93855943640473,63.50183033937347 31.683170824719355,67.51783033937348 37.52617082471936,66.39083033937348 C38.54417082471936,66.14383033937348 39.308170824719355,66.08444172768809 39.40017082471935,64.79944172768809 C40.439170824719355,50.35844172768809 42.18158496676729,27.98636864095569 45.812098617094954,10.81461343151546 C48.50387172991049,-2.055087758660495 41.41189462294902,-15.960031993256978 31.396,-22.573 C23.354449663813718,-27.90495421392294 10.385611388314624,-26.372502494831615 8.628,-26.639 C-15.376773658631622,-30.25259788047936 -36.15543668971777,-5.255546570999757 -35.921944804566124,20.065418501357648 C-35.833934825239666,20.190745181806676 -35.73259317580095,20.28862630899721 -35.61875402119385,20.35906188292925 C-34.91736247512286,21.064229773262987 -33.62657028276242,21.20301609685219 -32.937204564115575,20.19584732741044 C-30.41821424638044,16.513192208296367 -24.079066314699613,15.380294650961726 -19.99828204638802,14.635022274761791 C-19.20706924908523,14.492014350712946 -18.995527716055797,13.615217168689282 -19.350240952912596,13.043521835207791 C-19.349245942575823,12.980910446893166 -19.331805378980558,12.932853505320049 -19.333810368643785,12.867853505320046 C-16.174776605094017,3.447299355640136 -8.253,-8.548000000000002 -4.474,-11.316 C-4.8340000000000005,-10.474 -9.873000000000001,9.742999999999999 -11.989,16.455z">
							</path>
						</g>
						<g opacity="1" transform="matrix(1,0,0,1,65.115,133.391)">
							<path fill="rgb(0,0,0)" fill-opacity="1" d="M0 0 M31.09117082471936,12.64183033937347 C21.04417082471936,14.97783033937347 8.157170824719355,9.77683033937347 -1.3828291752806432,6.948830339373471 C-10.283829175280644,4.318830339373472 -19.09282917528064,3.987830339373471 -28.26982917528064,3.011830339373471 C-29.433829175280643,2.890830339373471 -29.69882917528064,4.871830339373471 -28.54582917528064,5.053830339373471 C-17.25182917528064,6.890830339373471 -6.920829175280643,7.67483033937347 4.105170824719357,10.96283033937347 C12.141170824719355,13.35983033937347 23.400170824719357,16.73183033937347 31.68117082471936,14.781830339373471 C33.079170824719355,14.45583033937347 32.478170824719356,12.316830339373471 31.09117082471936,12.64183033937347z">
							</path>
						</g>
					</g>
					<g transform="matrix(0.984807753012208,-0.17364817766693033,0.17364817766693033,0.984807753012208,289.02650188010335,160.24692737042233)" opacity="1" style="user-select: none;"> <!-- second figure face -->
						<g opacity="1" transform="matrix(1,0,0,1,23.332,38.58)">
							<path fill="rgb(255,255,255)" fill-opacity="1" d="M0 0 M-21.60354800800063,-27.785272673261527 C-15.619762563519437,-45.54452510288532 0.2548913915018114,-49.93386792849364 15.111414439109526,-46.68026240895025 C16.712857057982404,-46.32938627142295 17.303391546070994,-44.93882477974061 17.14861931236347,-43.67748107502428 C17.78248547056432,-40.9664669851426 18.164527443147755,-38.328950400429314 19.33459641932494,-35.752542709199034 C20.780266804490292,-32.569823306509406 23.323120048979067,-31.008935134378035 26.089854420658376,-29.14766832988774 C26.45511916987106,-28.90662136764108 26.664000297061595,-28.557745230113774 26.77544086065686,-28.187091869215713 C27.031265046274275,-27.787272673261526 33.22699618650637,-19.509732898448114 33.163887293023365,-18.866478128561887 C31.18840270156705,1.1760261365625189 21.802474315068263,5.491742022820111 21.201551215294295,5.922115665515802 C17.582903735244244,10.60022720839961 11.422,16.692 9.468,22.241 C5.4879999999999995,33.58 -10.177,26.072 -11.52,20.139 C-12.722,14.828 -10.86015498869844,11.523263300135035 -10.171568548699955,5.729193147788248 C-23.424648977434792,-1.2798890391626054 -24.48650016664596,-19.229468149235434 -21.60354800800063,-27.785272673261527z">
							</path>
							<path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="10" stroke="rgb(0,0,0)" stroke-opacity="1" stroke-width="2" d="M0 0 M-21.60354800800063,-27.785272673261527 C-15.619762563519437,-45.54452510288532 0.2548913915018114,-49.93386792849364 15.111414439109526,-46.68026240895025 C16.712857057982404,-46.32938627142295 17.303391546070994,-44.93882477974061 17.14861931236347,-43.67748107502428 C17.78248547056432,-40.9664669851426 18.164527443147755,-38.328950400429314 19.33459641932494,-35.752542709199034 C20.780266804490292,-32.569823306509406 23.323120048979067,-31.008935134378035 26.089854420658376,-29.14766832988774 C26.45511916987106,-28.90662136764108 26.664000297061595,-28.557745230113774 26.77544086065686,-28.187091869215713 C27.031265046274275,-27.787272673261526 33.22699618650637,-19.509732898448114 33.163887293023365,-18.866478128561887 C31.18840270156705,1.1760261365625189 21.802474315068263,5.491742022820111 21.201551215294295,5.922115665515802 C17.582903735244244,10.60022720839961 11.422,16.692 9.468,22.241 C5.4879999999999995,33.58 -10.177,26.072 -11.52,20.139 C-12.722,14.828 -10.86015498869844,11.523263300135035 -10.171568548699955,5.729193147788248 C-23.424648977434792,-1.2798890391626054 -24.48650016664596,-19.229468149235434 -21.60354800800063,-27.785272673261527z">
							</path>
						</g>
					</g>
					<g transform="matrix(0.984807753012208,-0.17364817766693033,0.17364817766693033,0.984807753012208,298.5327160180165,169.5231167693156)" opacity="1" style="user-select: none;"> <!-- second figure facial features -->
						<g opacity="1" transform="matrix(1,0,0,1,9.263,10.795)">
							<path fill="rgb(0,0,0)" fill-opacity="1" d="M0 0 M9.331071340593164,-3.9115867129065287 C6.3830871886908565,-5.831392995148642 5.499847387794315,-2.5158693654945132 7.1046116974529925,-1.2782559219022795 C8.220230130708455,-0.41818195606186626 9.728553876771866,-1.0476545129141117 9.794439993625627,-2.60130992908978 C9.81021721699638,-2.966460795156225 9.582227196322837,-3.7484828090867475 9.331071340593164,-3.9115867129065287zM0 0 M-9.061275025600732,6.65143032343754 C-9.58217317705856,8.501877052865638 -7.029114762254246,11.145796339145981 -5.437308480012133,11.959000333291918 C-3.229924560928391,13.131537173719714 0.11016937564170926,13.544236617756429 1.6529198924803055,12.805981550808607 C3.090243638543717,12.176564759359879 3.0326692331493,10.901068430361095 1.2070466893386178,11.204666904963645 C-0.530903129044282,11.532833916189375 -2.007099199141374,11.778740870804057 -4.25220956585558,10.335775501385058 C-6.304371587418083,9.0248532807191 -7.084428826052796,7.453664255562846 -7.5491221042566785,6.700850928379895 C-8.194560612574335,5.672285326142331 -8.778911362231497,5.647685972431775 -9.061275025600732,6.65143032343754z">
							</path>
						</g>
						<g opacity="1" transform="matrix(1,0,0,1,0.763,5.92)">
							<path fill="rgb(0,0,0)" fill-opacity="1" d="M0 0 M4.59500616583283,-8.530212785226016 C3.2962538907782184,-8.841762242304293 2.389994131228764,-6.159537410397435 3.372196949205099,-5.098391533994219 C4.4039542139229395,-3.983691210849498 6.309028179763352,-5.740267671521526 6.258862344707224,-7.240849121856781 C6.247473733021848,-7.68928469578882 4.952110069652612,-8.444881115113759 4.59500616583283,-8.530212785226016z">
							</path>
						</g>
						<g opacity="1" transform="matrix(1,0,0,1,6.014,5.44)">
							<path fill="rgb(0,0,0)" fill-opacity="1" d="M0 0 M7.112417385571917,-3.0087531420858453 C7.996394492533387,-4.320970049943857 7.569703269607114,-6.0849630050030195 6.383030829164151,-4.9905603034359665 C3.6254980992915744,-2.448230391539725 -0.8783818638061321,1.0523751280036628 -3.4057687172754925,1.0523751280036628 C-4.193698861990299,1.0537637396890385 -5.537190498387449,2.769111554960583 -5.444532147826163,3.483103630911736 C-5.204609048052194,5.334550360339834 -2.366503373939622,9.041180246152948 -0.8288949200106163,10.033473175128982 C0.9800921662773097,11.200062846574678 2.8418282961726353,10.553653397128382 0.8623208116777932,8.217235429510051 C0.3600410934754267,7.623993573335899 -3.8330686911923655,5.293549184170232 -3.136408285353469,3.4271593963152527 C-1.0362612327806504,3.1264640628337603 5.4961165325470365,-0.6102993677169102 7.112417385571917,-3.0087531420858453z">
							</path>
						</g>
					</g>
					<g transform="matrix(0.984807753012208,-0.17364817766693033,0.17364817766693033,0.984807753012208,297.6135287380523,142.3346784959548)" opacity="1" style="user-select: none;"> <!-- second figure hair -->
						<g opacity="1" transform="matrix(1,0,0,1,21.86,31.391)">
							<path fill="rgb(225,0,0)" fill-opacity="1" d="M0 0 M24.04691402370907,1.834548590047043 C23.28062550234985,-2.250071898486029 20.347457624092883,-8.93311739957827 16.69325392700854,-11.44876196939625 C13.87312887628947,-18.987162900670512 4.395283282941496,-26.911441145641678 -4.138272934092798,-29.753887578008182 C-6.505871408695349,-30.559071316439613 -8.658295530069736,-30.94881449127578 -9.673101230265434,-29.50057763684163 C-9.892043409584307,-29.26520517031554 -12.626688264387106,-30.44886821347846 -12.402118848655917,-30.066940124041263 C-14.23982533763347,-30.605500439554007 -16.06444993672176,-30.11699794472239 -17.164212191102827,-29.767624302026697 C-19.285117387501494,-29.092896975288227 -20.339756076471463,-27.01219401481948 -20.292168757364973,-25.11594922425971 C-17.550680946538222,-10.063764012597083 -5.0215353671966,-6.015645697680483 1.7317684322906728,-1.4171452702032539 C3.6017112057327347,0.13889406505615742 6.473025269531284,0.913183738431431 7.214109820898116,3.9163847981917503 C7.357052879324996,3.9371000903261555 13.087394231702117,7.611383052052509 9.647125668995809,14.615883788668107 C8.652769929675417,16.708581474488806 5.957173795335298,17.947677157198147 2.8983607531371662,17.442056371603478 C1.416759344148999,17.291844453408697 -0.43740413856792504,17.956024972469688 -1.5720924271085805,17.094758167979396 C-5.332131465306397,28.929202532991514 6.3218294723422375,30.268525114962102 7.764643678633197,30.312093651585283 C9.23176196939625,30.4311866969706 13.189616080916258,28.998350773810714 14.030462280464196,28.3996525059436 C20.756943070503656,23.79796186506374 26.095776653401114,12.75799943003036 24.04691402370907,1.834548590047043z">
							</path>
							<path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="10" stroke="rgb(0,0,0)" stroke-opacity="1" stroke-width="2" d="M0 0 M24.04691402370907,1.834548590047043 C23.28062550234985,-2.250071898486029 20.347457624092883,-8.93311739957827 16.69325392700854,-11.44876196939625 C13.87312887628947,-18.987162900670512 4.395283282941496,-26.911441145641678 -4.138272934092798,-29.753887578008182 C-6.505871408695349,-30.559071316439613 -8.658295530069736,-30.94881449127578 -9.673101230265434,-29.50057763684163 C-9.892043409584307,-29.26520517031554 -12.626688264387106,-30.44886821347846 -12.402118848655917,-30.066940124041263 C-14.23982533763347,-30.605500439554007 -16.06444993672176,-30.11699794472239 -17.164212191102827,-29.767624302026697 C-19.285117387501494,-29.092896975288227 -20.339756076471463,-27.01219401481948 -20.292168757364973,-25.11594922425971 C-17.550680946538222,-10.063764012597083 -5.0215353671966,-6.015645697680483 1.7317684322906728,-1.4171452702032539 C3.6017112057327347,0.13889406505615742 6.473025269531284,0.913183738431431 7.214109820898116,3.9163847981917503 C7.357052879324996,3.9371000903261555 13.087394231702117,7.611383052052509 9.647125668995809,14.615883788668107 C8.652769929675417,16.708581474488806 5.957173795335298,17.947677157198147 2.8983607531371662,17.442056371603478 C1.416759344148999,17.291844453408697 -0.43740413856792504,17.956024972469688 -1.5720924271085805,17.094758167979396 C-5.332131465306397,28.929202532991514 6.3218294723422375,30.268525114962102 7.764643678633197,30.312093651585283 C9.23176196939625,30.4311866969706 13.189616080916258,28.998350773810714 14.030462280464196,28.3996525059436 C20.756943070503656,23.79796186506374 26.095776653401114,12.75799943003036 24.04691402370907,1.834548590047043z">
							</path>
						</g>
					</g>
					<g transform="matrix(1.0810838175776187,-0.15193642210560643,0.15193642210560643,1.0810838175776187,252.03629693706498,124.23262244738393)" opacity="1" style="user-select: none;"> <!-- microscope -->
						<g opacity="1" transform="matrix(1,0,0,1,39.149,102.435)">
							<path class="animated infinite tada slow" fill="rgb(255,255,255)" fill-opacity="1" d="M0 0 M3.803,-7.84 C2.971,-8.982 0.957,-9.284 0.121,-7.787 C0.076,-7.704 0.031,-7.6209999999999996 -0.014,-7.537 C-0.793,-8.504999999999999 -2.698,-8.656 -3.28,-7.363 C-3.352,-7.213 -3.4010000000000002,-7.053999999999999 -3.466,-6.903 C-3.466,-6.903 -3.478,-6.903 -3.478,-6.903 C-3.478,-6.895 -3.481,-6.8870000000000005 -3.484,-6.873 C-4.8420000000000005,-3.8110000000000004 -5.989999999999999,-0.6950000000000003 -6.935,2.51 C-7.1659999999999995,3.311 -6.69,3.9619999999999997 -6.051,4.234 C-5.968,5.254 -5.234999999999999,5.926 -4.366,6.077 C-4.3469999999999995,7.196 -3.4619999999999997,8.216999999999999 -2.448,8.443 C-1.515,9.214 0.027000000000000024,9.283000000000001 0.927,7.937 C3.524,4.059 5.749,-0.6429999999999998 6.77,-5.217 C7.167,-6.992999999999999 5.194,-8.4 3.803,-7.84z">
							</path>
							<path class="animated infinite tada slow" stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="10" stroke="rgb(0,0,0)" stroke-opacity="1" stroke-width="2" d="M0 0 M3.803,-7.84 C2.971,-8.982 0.957,-9.284 0.121,-7.787 C0.076,-7.704 0.031,-7.6209999999999996 -0.014,-7.537 C-0.793,-8.504999999999999 -2.698,-8.656 -3.28,-7.363 C-3.352,-7.213 -3.4010000000000002,-7.053999999999999 -3.466,-6.903 C-3.466,-6.903 -3.478,-6.903 -3.478,-6.903 C-3.478,-6.895 -3.481,-6.8870000000000005 -3.484,-6.873 C-4.8420000000000005,-3.8110000000000004 -5.989999999999999,-0.6950000000000003 -6.935,2.51 C-7.1659999999999995,3.311 -6.69,3.9619999999999997 -6.051,4.234 C-5.968,5.254 -5.234999999999999,5.926 -4.366,6.077 C-4.3469999999999995,7.196 -3.4619999999999997,8.216999999999999 -2.448,8.443 C-1.515,9.214 0.027000000000000024,9.283000000000001 0.927,7.937 C3.524,4.059 5.749,-0.6429999999999998 6.77,-5.217 C7.167,-6.992999999999999 5.194,-8.4 3.803,-7.84z">
							</path>
						</g>
						<g opacity="1" transform="matrix(1,0,0,1,54.809,53.668)">
							<path class="animated infinite tada slow" fill="rgb(244,67,54)" fill-opacity="1" d="M0 0 M44.325,-16.479 C40.636,-27.456 33.13,-35.105999999999995 23.468,-39.574 C7.216000000000001,-48.668 -14.79,-46.415 -28.874,-33.33 C-49.809,-13.893999999999998 -46.782,20.426 -25.441,37.684 C-23.427,39.317 -19.564,42.855 -8.421,45.123 C10.219999999999999,48.668 30.990000000000002,39.408 41.777,23.495 C49.809,11.642000000000001 48.714000000000006,-3.4769999999999985 44.325,-16.479zM0 0 M33.987,18.793 C22.924,38.72 -5.288,42.417 -22.199,28.711 C-38.845,15.232 -37.148,-9.351 -25.007,-24.954 C-11.332,-42.522000000000006 11.66,-38.394999999999996 27.12,-26.541 C39.631,-15.572000000000001 43.221000000000004,2.1549999999999976 33.987,18.793z">
							</path>
							<path class="animated infinite tada slow" stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="10" stroke="rgb(0,0,0)" stroke-opacity="1" stroke-width="2" d="M0 0 M44.325,-16.479 C40.636,-27.456 33.13,-35.105999999999995 23.468,-39.574 C7.216000000000001,-48.668 -14.79,-46.415 -28.874,-33.33 C-49.809,-13.893999999999998 -46.782,20.426 -25.441,37.684 C-23.427,39.317 -19.564,42.855 -8.421,45.123 C10.219999999999999,48.668 30.990000000000002,39.408 41.777,23.495 C49.809,11.642000000000001 48.714000000000006,-3.4769999999999985 44.325,-16.479zM0 0 M33.987,18.793 C22.924,38.72 -5.288,42.417 -22.199,28.711 C-38.845,15.232 -37.148,-9.351 -25.007,-24.954 C-11.332,-42.522000000000006 11.66,-38.394999999999996 27.12,-26.541 C39.631,-15.572000000000001 43.221000000000004,2.1549999999999976 33.987,18.793z">
							</path>
						</g>
						<g opacity="1" transform="matrix(1,0,0,1,26.816,130.953)">
							<path class="animated infinite tada slow" fill="rgb(244,67,54)" fill-opacity="1" d="M0 0 M16.594,-22.017 C11.998000000000001,-23.559 8.52,-27.203 3.523,-27.656 C2.7190000000000003,-27.732 2.1430000000000002,-27.127 1.969,-26.447 C1.852,-26.317999999999998 1.74,-26.16 1.649,-25.986 C-6.141,-10.753 -11.126999999999999,2.9139999999999997 -17.715,18.698 C-18.063,19.523 -17.749,20.641000000000002 -16.982,21.132 C-12.684,23.907 -8.1,25.797 -3.273,27.468 C-2.6350000000000002,27.687 -1.741,27.732000000000003 -1.356,27.158 C2.59,21.193 5.885999999999999,11.971 8.581,6.15 C12.542,-2.4299999999999997 14.888000000000002,-9.498000000000001 17.3,-19.038 C18.063000000000002,-19.961 18.049,-21.54 16.594,-22.017z">
							</path>
							<path class="animated infinite tada slow" stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="10" stroke="rgb(0,0,0)" stroke-opacity="1" stroke-width="2" d="M0 0 M16.594,-22.017 C11.998000000000001,-23.559 8.52,-27.203 3.523,-27.656 C2.7190000000000003,-27.732 2.1430000000000002,-27.127 1.969,-26.447 C1.852,-26.317999999999998 1.74,-26.16 1.649,-25.986 C-6.141,-10.753 -11.126999999999999,2.9139999999999997 -17.715,18.698 C-18.063,19.523 -17.749,20.641000000000002 -16.982,21.132 C-12.684,23.907 -8.1,25.797 -3.273,27.468 C-2.6350000000000002,27.687 -1.741,27.732000000000003 -1.356,27.158 C2.59,21.193 5.885999999999999,11.971 8.581,6.15 C12.542,-2.4299999999999997 14.888000000000002,-9.498000000000001 17.3,-19.038 C18.063000000000002,-19.961 18.049,-21.54 16.594,-22.017z">
							</path>
						</g>
						<g opacity="1" transform="matrix(1,0,0,1,70.927,59.221)">
							<path class="animated infinite tada slow" fill="rgb(255,255,255)" fill-opacity="1" d="M0 0 M-15.173,22.879 C-15.234,22.864 -15.302,22.856 -15.366,22.841 C-16.867,22.553 -18.375,23.499000000000002 -18.375,25.132 C-18.375,26.765 -16.867,27.709000000000003 -15.366,27.414 C-15.302,27.406000000000002 -15.234,27.391000000000002 -15.173,27.376 C-12.932,26.953000000000003 -12.932,23.303 -15.173,22.879zM0 0 M16.078,-19.992 C15.075999999999999,-22.108 13.556999999999999,-23.929000000000002 11.947,-25.6 C9.917,-27.709000000000003 7.115,-24.656 8.82,-22.486 C10.021,-20.959 11.051,-19.288 11.871,-17.535 C12.703000000000001,-15.758000000000001 12.600000000000001,-13.997 14.672,-13.211 C15.304,-12.961 16.069000000000003,-13.264 16.53,-13.702 C18.375,-15.448 16.97,-18.102 16.078,-19.992z">
							</path>
							<path class="animated infinite tada slow" stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="10" stroke="rgb(0,0,0)" stroke-opacity="1" stroke-width="2" d="M0 0 M-15.173,22.879 C-15.234,22.864 -15.302,22.856 -15.366,22.841 C-16.867,22.553 -18.375,23.499000000000002 -18.375,25.132 C-18.375,26.765 -16.867,27.709000000000003 -15.366,27.414 C-15.302,27.406000000000002 -15.234,27.391000000000002 -15.173,27.376 C-12.932,26.953000000000003 -12.932,23.303 -15.173,22.879zM0 0 M16.078,-19.992 C15.075999999999999,-22.108 13.556999999999999,-23.929000000000002 11.947,-25.6 C9.917,-27.709000000000003 7.115,-24.656 8.82,-22.486 C10.021,-20.959 11.051,-19.288 11.871,-17.535 C12.703000000000001,-15.758000000000001 12.600000000000001,-13.997 14.672,-13.211 C15.304,-12.961 16.069000000000003,-13.264 16.53,-13.702 C18.375,-15.448 16.97,-18.102 16.078,-19.992z">
							</path>
						</g>
					</g>
					<g transform="matrix(0.984807753012208,-0.17364817766693033,0.17364817766693033,0.984807753012208,225.9619344201401,213.57616554318957)" opacity="1" style="user-select: none;"> <!-- second figure hands -->
						<g opacity="1" transform="matrix(1,0,0,1,19.992,24.942)">
							<path fill="rgb(255,255,255)" fill-opacity="1" d="M0 0 M54.8611969492051,52.9363756496662 C45.7365198161605,51.14903017465709 50.328683595939026,51.62014347575692 41.62705254603308,48.389758083441976 C40.289173474120155,47.89314757423536 38.76312240131827,49.31000257694015 39.713791610314026,50.625259402103985 C40.02632903278823,51.05523445378785 40.32802730065534,51.420432282100954 40.640393898410196,51.80318455715557 C39.91243587099363,51.6676899863728 39.17392339683556,51.54825235716315 38.41852480582373,51.459260281211996 C37.6201262148119,51.37221625335095 36.736896393241814,51.96734803987249 36.85219401481948,52.85845194369227 C36.92245670875455,53.33566973065829 37.06065747145328,53.73143697470259 37.23852157437652,54.089256170656775 C36.93629380808404,54.033503895602166 36.65323187684769,53.968471902345186 36.36100411055522,53.91227407403208 C34.94508805572209,53.63994827269106 34.2696783092142,55.390510643481406 35.22875814382585,56.301487750442874 C35.51394892719812,56.57713113201447 35.812471380682645,56.835328960327594 36.107605222481794,57.0945267886407 C35.068553270571904,57.172336884376435 34.23126445215109,58.381800341010226 34.99261901530188,59.264460746849124 C40.828985018933544,66.0302095054717 46.813560006374374,70.66499524701449 54.82301935245295,72.5428241373103 C55.73526208773511,72.75708096247415 56.21341001941594,71.86131577370747 56.27857292008645,71.15480828921262 C56.638392116040635,70.9729441862894 56.95919634300513,70.62158257819776 57.127094494462966,70.06573344426421 C58.54475725264106,65.3682670532448 59.15973289844811,58.4753060914426 55.89581919595418,54.348347766964444 C55.959489581119534,53.73245167078423 55.65743469482403,53.09203106584187 54.8611969492051,52.9363756496662z">
							</path>
							<path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="10" stroke="rgb(0,0,0)" stroke-opacity="1" stroke-width="2" d="M0 0 M54.8611969492051,52.9363756496662 C45.7365198161605,51.14903017465709 50.328683595939026,51.62014347575692 41.62705254603308,48.389758083441976 C40.289173474120155,47.89314757423536 38.76312240131827,49.31000257694015 39.713791610314026,50.625259402103985 C40.02632903278823,51.05523445378785 40.32802730065534,51.420432282100954 40.640393898410196,51.80318455715557 C39.91243587099363,51.6676899863728 39.17392339683556,51.54825235716315 38.41852480582373,51.459260281211996 C37.6201262148119,51.37221625335095 36.736896393241814,51.96734803987249 36.85219401481948,52.85845194369227 C36.92245670875455,53.33566973065829 37.06065747145328,53.73143697470259 37.23852157437652,54.089256170656775 C36.93629380808404,54.033503895602166 36.65323187684769,53.968471902345186 36.36100411055522,53.91227407403208 C34.94508805572209,53.63994827269106 34.2696783092142,55.390510643481406 35.22875814382585,56.301487750442874 C35.51394892719812,56.57713113201447 35.812471380682645,56.835328960327594 36.107605222481794,57.0945267886407 C35.068553270571904,57.172336884376435 34.23126445215109,58.381800341010226 34.99261901530188,59.264460746849124 C40.828985018933544,66.0302095054717 46.813560006374374,70.66499524701449 54.82301935245295,72.5428241373103 C55.73526208773511,72.75708096247415 56.21341001941594,71.86131577370747 56.27857292008645,71.15480828921262 C56.638392116040635,70.9729441862894 56.95919634300513,70.62158257819776 57.127094494462966,70.06573344426421 C58.54475725264106,65.3682670532448 59.15973289844811,58.4753060914426 55.89581919595418,54.348347766964444 C55.959489581119534,53.73245167078423 55.65743469482403,53.09203106584187 54.8611969492051,52.9363756496662z">
							</path>
						</g>
						<g opacity="1" transform="matrix(1,0,0,1,59.277,47.27)">
							<path fill="rgb(255,255,255)" fill-opacity="1" d="M0 0 M42.86990666962986,0.23450893357248948 C40.09576313348907,13.964928374422017 38.7110777551805,30.816906633399537 16.341023190100124,29.84003106584187 C15.83768653032464,29.807511546742965 15.514986207179916,30.088323697756312 15.3256794853838,30.408618384948362 C14.762253890778217,30.6499999516929 14.370910186061893,31.197034879335497 14.700638391908374,31.91617576607549 C16.047390369901393,34.85384820651845 16.549723798229667,37.469813278875854 16.22594128813409,40.714516536406194 C15.969824173540642,43.28371230944169 14.895313457598586,45.823532384503885 14.889030507949007,48.39326264562798 C14.884219236043666,49.31198791708884 15.531321084585839,49.83898997236645 16.26961078211466,49.957650378205344 C16.390563819868,50.055640398878886 16.53707130436284,50.13835070135006 16.720185187509077,50.16611295573113 C43.10850361061734,52.23952360550058 57.879309941166554,37.409523308438985 59.111000582046415,9.02720574028518">
							</path>
							<path stroke-linecap="round" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="10" stroke="rgb(0,0,0)" stroke-opacity="1" stroke-width="2" d="M0 0 M42.86990666962986,0.23450893357248948 C40.09576313348907,13.964928374422017 38.7110777551805,30.816906633399537 16.341023190100124,29.84003106584187 C15.83768653032464,29.807511546742965 15.514986207179916,30.088323697756312 15.3256794853838,30.408618384948362 C14.762253890778217,30.6499999516929 14.370910186061893,31.197034879335497 14.700638391908374,31.91617576607549 C16.047390369901393,34.85384820651845 16.549723798229667,37.469813278875854 16.22594128813409,40.714516536406194 C15.969824173540642,43.28371230944169 14.895313457598586,45.823532384503885 14.889030507949007,48.39326264562798 C14.884219236043666,49.31198791708884 15.531321084585839,49.83898997236645 16.26961078211466,49.957650378205344 C16.390563819868,50.055640398878886 16.53707130436284,50.13835070135006 16.720185187509077,50.16611295573113 C43.10850361061734,52.23952360550058 57.879309941166554,37.409523308438985 59.111000582046415,9.02720574028518">
							</path>
						</g>
					</g>
				</g>
			</svg>
		</div>

	<!--- Welcome Section -->
	<div id="about" class="container-fluid">
		<div class="row welcome text-center">
			<div class="col-12">
				<h1 class="display-4 animated slow delay-2s flipInX" style="color: gray;">TEDx</h1>
			</div>
			<hr class="light-100">
			<div class="col-12">
				<blockquote class="blockquote">
					<p class="lead" style="color: gray;">
						In the spirit of ideas worth spreading, TED has created a program called TEDx. TEDx is a program of local, self-organized events that bring people together to share a TED-like experience. Our event is called TEDxIGDTU, where x = independently organized TED event. At our TEDxIGDTU event, TED Talks video and live speakers will combine to spark deep discussion and connection in a small group. The TED Conference provides general guidance for the TEDx program, but individual TEDx events, including ours, are self-organized. &nbsp;&nbsp;<a href="about.html" class="more">Read More..</a>
					</p>
				</blockquote>
				<hr class="light-100">
			</div>
		</div>
	</div>

	<!-- Blog Section -->
	<div id="blogs" class="container-fluid">
		<div class="text--center blog-slice__content row welcome">
			<div class="col-12">
				<h1 class="display-4 animated slow delay-3s flipInX" style="color: gray;">Blogs</h1>
			</div>
			<hr>
		</div>
	<section class="text--center parallax">
		<div class="blog-slice">
			<div class="padding--sides">
				<div class="grid grid--half-padding text--center">
            		<div class="[ grid__item lap-wide-and-up-three-fifths desk-one-half desk-wide-two-fifths ] blog-slice__grid-item margin-half--bottom animated slow delay-4s fadeInLeft">
						<article class="blog-item">
							<a class="blog-item__link" target="_blank" href="https://tedxigdtu.wordpress.com/2018/11/28/letter-from-a-man-who-cares/">
								<div class="blog-item__image" style="background-image: url('https://tedxigdtu.files.wordpress.com/2018/11/whatsapp-image-2018-11-28-at-6-55-54-pm.jpeg?w=1080&h=400&crop=1')">
								</div>
								<div class="blog-item__overlay"></div>
								<div class="blog-item__content-container">
									<div class="blog-item__content has-image">
										<div class="blog-item__avatar-container">
											<img class="blog-item__avatar" src="http://2.gravatar.com/avatar/fcaf43d62b43977d1c972df0b73fe978" alt
												="">
										</div>
										<h1 class="blog-item__title">Letter From A Man Who Cares</h1>
										<h6>~Bhavya Jain</h6>
										<time class="blog-item__date" datetime="2018-11-28T15:19" itemprop="dateCreated">Wednesday 28<sup>th</sup>November 2018</time>
									</div>
								</div>
							</a>
				        </article>
					</div>
            		<div class="[ grid__item lap-and-up-one-half lap-wide-and-up-two-fifths desk-one-quarter desk-wide-one-fifth ] blog-slice__grid-item margin-half--bottom animated slow delay-4s fadeInUp">
						<article class="blog-item">
							<a class="blog-item__link" target="_blank" href="https://tedxigdtu.wordpress.com/2018/12/03/tattoo/">
								<div class="blog-item__image" style="background-image: url('https://tedxigdtu.files.wordpress.com/2018/11/whatsapp-image-2018-11-28-at-6-51-37-pm.jpeg?w=1080&h=400&crop=1')">
								</div>
								<div class="blog-item__overlay"></div>
								<div class="blog-item__content-container">
									<div class="blog-item__content has-image">
						                <div class="blog-item__avatar-container">
											<img class="blog-item__avatar" src="http://0.gravatar.com/avatar/b689ca814807cb7897efe395c6855d0f" alt="">
										</div>
										<h1 class="blog-item__title">Tattoo</h1>
										<h6>~Pearl Pullan</h6>
										<time class="blog-item__date" datetime="2018-12-03T12:01" itemprop="dateCreated">Monday 3<sup>rd</sup>December 2018</time>
					                </div>
								</div>
							</a>
				        </article>
					</div>
	            	<div class="[ grid__item lap-and-up-one-half lap-wide-and-up-two-fifths desk-one-quarter desk-wide-one-fifth ] blog-slice__grid-item margin-half--bottom animated slow delay-4s fadeInRight">
						<article class="blog-item">
							<a class="blog-item__link" target="_blank" href="https://tedxigdtu.wordpress.com/2018/10/31/be-kind-to-your-mind/">
								<div class="blog-item__image" style="background-image: url('https://tedxigdtu.files.wordpress.com/2018/10/whatsapp-image-2018-10-31-at-6-38-39-pm.jpeg?w=940&h=400&crop=1')">
								</div>
								<div class="blog-item__overlay"></div>
								<div class="blog-item__content-container">
									<div class="blog-item__content has-image">
						                <div class="blog-item__avatar-container">
											<img class="blog-item__avatar" src="http://0.gravatar.com/avatar/297948a8cb411b89ab48e5ed2468661d" alt="">
										</div>
										<h1 class="blog-item__title">Be Kind To Your Mind</h1>
										<h6>~Soumya</h6>
										<time class="blog-item__date" datetime="2018-10-31T12:04" itemprop="dateCreated">Wednesday 31<sup>st</sup>October 2018</time>
									</div>
								</div>
							</a>
				        </article>
					</div>
					<div class="[ grid__item lap-wide-and-up-three-fifths desk-one-quarter desk-wide-one-fifth ] blog-slice__grid-item margin-half--bottom animated slow delay-4s fadeInLeft">
						<article class="blog-item">
							<a class="blog-item__link" target="_blank" href="https://tedxigdtu.wordpress.com/2018/11/21/who-does-this-body-belong-to/">
								<div class="blog-item__image" style="background-image: url('https://tedxigdtu.files.wordpress.com/2018/11/whatsapp-image-2018-11-04-at-5-59-54-pm.jpeg?w=1080&h=400&crop=1')">
								</div>
								<div class="blog-item__overlay"></div>
								<div class="blog-item__content-container">
									<div class="blog-item__content ">
										<h1 class="blog-item__title">Who Does This Body Belong To?</h1>
										<h6>~Harshita</h6>
										<time class="blog-item__date" datetime="2018-11-21T09:36" itemprop="dateCreated">Wednesday 21<sup>st</sup>November 2018</time>
					                </div>
								</div>
							</a>
				        </article>
					</div>
					<div class="[ grid__item lap-and-up-one-half lap-wide-and-up-three-fifths desk-one-quarter desk-wide-one-fifth ] blog-slice__grid-item margin-half--bottom animated slow delay-4s fadeInDown">
						<article class="blog-item">
							<a class="blog-item__link" target="_blank" href="https://tedxigdtu.wordpress.com/2018/11/14/enforced-patriotism//">
								<div class="blog-item__image" style="background-image: url('https://tedxigdtu.files.wordpress.com/2018/11/architecture-daylight-hand-574324.jpg?w=1400&h=400&crop=1')">
								</div>
								<div class="blog-item__overlay"></div>
								<div class="blog-item__content-container">
									<div class="blog-item__content has-image">
						                <div class="blog-item__avatar-container">
											<img class="blog-item__avatar" src="http://1.gravatar.com/avatar/ce1986a4fbcdfa4efaa3dfb32e4e5361" alt="">
										</div>
										<h1 class="blog-item__title">(EN)Forced Patriotism</h1>
										<h6>~Reet</h6>
										<time class="blog-item__date" datetime="2018-11-14T08:21" itemprop="dateCreated">Wednesday 14<sup>th</sup>November 2018</time>
					                </div>
								</div>
							</a>
				        </article>
					</div>
					<div class="[ grid__item lap-and-up-one-half lap-wide-and-up-two-fifths desk-one-half desk-wide-one-fifth ] blog-slice__grid-item margin-half--bottom animated slow delay-4s fadeInRight">
						<article class="blog-item">
							<a class="blog-item__link" target="_blank" href="https://tedxigdtu.wordpress.com/2018/12/05/how-full-is-your-glass/">
								<div class="blog-item__image" style="background-image: url('https://tedxigdtu.files.wordpress.com/2018/11/bar-beverage-cold-248427.jpg?w=1400&h=400&crop=1')">
								</div>
								<div class="blog-item__overlay"></div>
								<div class="blog-item__content-container">
									<div class="blog-item__content has-image">
						                <div class="blog-item__avatar-container">
											<img class="blog-item__avatar" src="http://1.gravatar.com/avatar/ea6383fd400f4f8e9bedbdb04f502d11" alt="">
										</div>
										<h1 class="blog-item__title">How Full Is Your Glass</h1>
										<h6>~Harshita</h6>
										<time class="blog-item__date" datetime="2018-12-05T14:29" itemprop="dateCreated">Wednesday 5<sup>th</sup>December 2018</time>
					                </div>
								</div>
							</a>
				        </article>
					</div>
					<div class="[ grid__item lap-wide-and-up-two-fifths desk-one-half desk-wide-one-fifth ] blog-slice__grid-item margin-half--bottom">
						<article class="blog-item">
							<a class="blog-item__link" href="https://www.betterbrandagency.com/blog/2018/07/support-team-better-gnr-2018/">
								<div class="blog-item__image" style="background-image: url('')">
								</div>
								<div class="blog-item__overlay"></div>
								<div class="blog-item__content-container">
									<div class="blog-item__content has-image">
						                <div class="blog-item__avatar-container">
											<img class="blog-item__avatar" src="https://www.betterbrandagency.com/wp-content/uploads/2012/01/better99-300x300.jpg" alt="">
											</div>
											<h1 class="blog-item__title"></h1>
										<!-- <time class="blog-item__date" datetime="2018-07-10T14:39" itemprop="dateCreated">
					                		Tuesday 10					                		<sup>th</sup>
					                		July 2018					                	</time> -->
					                </div>
								</div>
							</a>
				        </article>
					</div>
					<div class="[ grid__item lap-and-up-one-half lap-wide-and-up-three-fifths desk-one-quarter desk-wide-two-fifths ] blog-slice__grid-item margin-half--bottom">
						<article class="blog-item">
							<a class="blog-item__link" href="https://www.betterbrandagency.com/blog/2018/06/getting-to-know-charlotte-account-manager/">
								<div class="blog-item__image" style="background-image: url('')">
								</div>
								<div class="blog-item__overlay"></div>
								<div class="blog-item__content-container">
									<div class="blog-item__content has-image">
						                <div class="blog-item__avatar-container">
											<img class="blog-item__avatar" src="https://www.betterbrandagency.com/wp-content/uploads/2016/10/james-bolton-digitalmarketingexec.jpg" alt="">
										</div>
										<h1 class="blog-item__title"></h1>
										<!-- <time class="blog-item__date" datetime="2018-06-05T08:55" itemprop="dateCreated">
					                		Tuesday 5					                		<sup>th</sup>
					                		June 2018					                	</time> -->
					                </div>
								</div>
							</a>
				        </article>
					</div>	
				</div>		
			</div>
			<div class="display-4 animated slow delay-4s flipInX" style="font-family:georgia,garamond,serif; font-style: italic; color: black; align:center; font-weight: bold;"><a href="https://tedxigdtu.wordpress.com/" style=" text-decoration: none;color: black;"> Read more..</a></div>
		</section>
	</div>

	<!--- Speakers -->
	<div id="speakers" class="container-fluid padding">
		<div class="row welcome text-center">
			<div class="col-12">
				<h1 class="display-4 animated slow delay-4s flipInX" style="color: gray;">Speakers</h1>
				<hr class="light-100">
				<br>
				<div class="card-container-outer">
					<div class="card-container-inner">
						<div tabindex="0" class="card">
							<a href="speakers.html"><img src="speakers/1 vector.jpg" alt="" /></a>
							<div class="overlay1">Shwetambari Shetty</div>
						</div>
						<div tabindex="0" class="card">
							<a href="speakers.html"><img src="speakers/2 vector.jpg" alt="" /></a>
							<div class="overlay2">Naman Ahluwalia</div>
						</div>
						<div tabindex="0" class="card">
							<a href="speakers.html"><img src="speakers/3 vector.jpg" alt="" /></a>
							<div class="overlay3">Baisakhi Saha</div>
						</div>
						<div tabindex="0" class="card">
							<a href="speakers.html"><img src="speakers/4 vector.jpg" alt="" /></a>
							<div class="overlay4">Kanishk Priyadarshi</div>
						</div>
						<div tabindex="0" class="card">
							<a href="speakers.html"><img src="speakers/5 vector.jpg" alt="" /></a>
							<div class="overlay5">Dr. Mona Varonica Campbell</div>
						</div>
						<div tabindex="0" class="card">
							<a href="speakers.html"><img src="speakers/6 vector.jpg" alt="" /></a>
							<div class="overlay6">Anu Aggarwal</div>
						</div>
						<div tabindex="0" class="card">
							<a href="speakers.html"><img src="speakers/7 vector.jpg" alt="" /></a>
							<div class="overlay7">Pankaj Risbood</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Partners -->
	<div id="partners" class="container-fluid padding">
		<div class="row welcome text-center">
			<div class="col-12">
				<h1 class="display-4 animated slow delay-4s flipInX" style="color: gray;">Partners</h1>
				<hr class="light-100"> 
				<br>
				<img src="photos/sponsor/logo.jpg" alt="partners" width="80%" height="60%">
			</div>
		</div>
	</div>

	<!--- Footer -->
	<footer>
		<div class="container-fluid padding" id="contact">
			<div class="row welcome text-center">
				<div class="col-12">
					<h2 class="display-4 animated slow delay-6s flipInX">Contact</h2>
				</div>
				<div class="col-12 social animated slow delay-6s zoomInDown">
					<a href="https://www.facebook.com/TEDxIGDTU/" target="_blank"><i class="fab fa-facebook"></i></a>
					<a href="https://instagram.com/tedx_igdtu?utm_source=ig_profile_share&igshid=yzz49l19aes9" target="_blank"><i class="fab fa-instagram" ></i></a>
					<a href="https://www.linkedin.com/company/tedxigdtu" target="_blank"><i class="fab fa-linkedin"></i></a>
				</div>
			</div>
		</div>
		<div class="col-12 text-center">
			<hr class="light-100">
			<h6 class="last animated slow delay-6s slideInUp">This independent TEDx event is operated under license from TED.</h6>
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

	<script>
		window.sr = ScrollReveal();
		sr.reveal('.navbar',{duration:1000});
		sr.reveal('.row',{duration:1000});
		sr.reveal('.container-fluid',{duration:1000});
		sr.reveal('#about',{duration:1000});
		sr.reveal('#blogs',{duration:1000});
	</script>

	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-36251023-1']);
  		_gaq.push(['_setDomainName', 'jqueryscript.net']);
  		_gaq.push(['_trackPageview']);
  		(function() {
  			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
  			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  		})();
  	</script>

  	<script language="javascript" type="text/javascript">
  		setTimeout(function() {
  			var element = document.getElementById('loading');
  			element.classList += " hidden";
  		}, 2000);
	</script>

	<script>
		window.onload = function() {
			(function(d){
				var
				ce=function(e,n){var a=document.createEvent("CustomEvent");a.initCustomEvent(n,true,true,e.target);e.target.dispatchEvent(a);a=null;return false},
				nm=true,sp={x:0,y:0},ep={x:0,y:0},
				touch={
					touchstart:function(e){sp={x:e.touches[0].pageX,y:e.touches[0].pageY}},
					touchmove:function(e){nm=false;ep={x:e.touches[0].pageX,y:e.touches[0].pageY}},
					touchend:function(e){if(nm){ce(e,'fc')}else{var x=ep.x-sp.x,xr=Math.abs(x),y=ep.y-sp.y,yr=Math.abs(y);if(Math.max(xr,yr)>20){ce(e,(xr>yr?(x<0?'swipeLeft':'swipeRight'):(y<0?'swipeUp':'swipeDown')))}};nm=true},
					touchcancel:function(e){nm=false}
				};
				for(var a in touch){d.addEventListener(a,touch[a],false);}
			})(document);
	};
	const cards = Array.from( document.querySelectorAll('.card') );
	const innerContainer = document.querySelector('.card-container-inner');
	const outerContainer = document.querySelector('.card-container-outer')
	let activeCard = null;
	function alignActiveCard(card) {
		const halfOuterContainerWidth = outerContainer.clientWidth / 2;
		const halfCardContainerWidth = card.clientWidth / 2;
		const cardOffset = card.offsetLeft;
		const left = halfOuterContainerWidth - cardOffset - halfCardContainerWidth;
		innerContainer.style.transform = `translateX(${ left }px)`;
	}
	function setActiveCard(card) {
		cards.map(card => {
			card.classList.remove('js-active');
		});
		card.classList.add('js-active');
		card.focus();
		activeCard = card;
		setTimeout(() => { alignActiveCard(card) }, 1000);
	}
	function removeActiveCardFocus() {
		if ( !activeCard ) return;
		activeCard = null;
		cards.map(card => {
			card.classList.remove('js-active');
		});
	}
	function swipeCard(direction) {
		let focusedElement = document.querySelector('.card.js-active') ? activeCard : document.activeElement;
		if ( !focusedElement ) return;
		if ( !focusedElement.classList.contains('card') ) return;
		let focusedElementIndex = 0;
		for (let i = 0; i < cards.length; i++) {
			if (cards[i] === focusedElement) focusedElementIndex = i
		}
	switch(direction) {
		case 'right':
			setActiveCard( cards[focusedElementIndex - 1] );
			break;
		case 'left':
			setActiveCard( cards[focusedElementIndex + 1] );
			break;
		default:
			break;
		}
		removeActiveCardFocus();
	}
	cards.map(card => {
		card.addEventListener('keyup', function(e) {
			switch(e.keyCode) {
				case 9: // Tab
					setActiveCard(this);
					break;
				case 39: // Left Arrow
					swipeCard('left');
					break;
				case 37: // Right Arrow
					swipeCard('right');
					break;
				default:
					break;
				}
			});
		card.addEventListener('click', function(e) {	
			setActiveCard(this);
		});
	})
	document.body.addEventListener('swipeRight', function() {
		swipeCard('right');
	});
	document.body.addEventListener('swipeLeft', function() {
		swipeCard('left');
	});
	</script>

	<script>
		function on() {
  document.getElementById("overlay1").style.display = "block";
}

function off() {
  document.getElementById("overlay1").style.display = "none";
}
	</script>

</body>
</html>