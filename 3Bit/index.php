
		<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="Ahmed">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>3Bit</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/jquery.DonutWidget.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>

			<!-- Start Header Area -->
			<header class="default-header">
				<div class="menutop-wrap">
					<div class="menu-top container">
						<div class="d-flex justify-content-between align-items-center">
							<ul class="list">
								<li><a href="#">3Bit</a></li>
								<li>For Shortening Links</li>								
							</ul>
							<ul class="list">
								<li><a href="#">Ahmed 3afreT</a></li>
							</ul>
						</div>
					</div>					
				</div>				
				<nav class="navbar navbar-expand-lg  navbar-light">
					<div class="container">
						<h2>welcome&nbsp;<?php session_start(); 
                            if(isset($_SESSION['name'])){echo $_SESSION['name'];} ?></h2>

						  <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
						    <ul class="navbar-nav">
								<li><a href="index.php">Home</a></li>
								<li><a href="links.php">My links</a></li>
								
							   
								<li><a href="reg.php">Register</a></li>
							        
							      
							   <?php 
                                     
                             if(isset($_SESSION['name'])){echo " <li><a href='logout.php'> Logout";}else{echo " <li><a href='login.php'> login";} ?></a></li>
							      <div class="dropdown-menu">
							        <a class="dropdown-item" href="login.php">Log in</a>
							        <a class="dropdown-item" href="reg.php">Create account</a>
							      </div>
							    </li>									
						    </ul>
						  </div>						
					</div>
				</nav>
			</header>
			<!-- End Header Area -->

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay-bg overlay"></div>
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-6 col-md-12">
							<h1 class="text-uppercase" style="font-size:40px;">
								Create 
								Click-Worthy  <br>
                                        Links
											
							</h1>
							<p class="pb-20 text-white">
								Build and protect your brand using powerful, recognizable short links.
							</p>
							
						</div>
						<div class="col-lg-6">
							<img class="img-fluid" src="img/header-img.png" alt=""><br><br><br><br>
							
								<div class="col-lg-12">
								<form action="shortlink.php" method="post">
								<input style="width:100%; height:37px" type="text" name="link" placeholder="Paste your link here">
								<input class="btn" style="width:100%;background-color:black; color:white" type="submit" value="GO">
								</form><br>
								<label style="color:white">The Short Link</label>
								
								 <?php
        
        include 'backlink.php';
        
?>
								</div>							
					</div>
					
						
				</div>
				 
			</section>
			<!-- End banner Area -->	
           

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>
			<script src="js/jquery.ajaxchimp.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>		

			<script src="js/highcharts.js"></script>
			<script src="js/modules/exporting.js"></script>
			<script src="js/chartscript.js"></script>	

			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>			
			<script src="js/main.js"></script>	



		</body>
	</html>
	
	


	

 