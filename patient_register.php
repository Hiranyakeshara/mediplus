<?php   
  include("db/config.php");
  if(isset($_POST["signup"]))
  {
      //post all value
      extract($_POST);
      $query = "INSERT INTO `patients` (`p_id`, `email`,`name`, `username`,`password`,`address`,`address2`,`city`,`age`,`contact`) VALUES (NULL, '".$email."', '".$name."','".$username."','".$password."','".$address."','".$address2."','".$city."','".$age."','".$contact."');";

      mysqli_query($con,$query);
      header("Location: patient_login.php");

  }

?>



<!DOCTYPE html>
<html lang="en">
<head>
      <!-- Meta Tags -->
      <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="Site keywords here">
		<meta name="description" content="">
		<meta name='copyright' content=''>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Title -->
        <title>Mediplus - Medicare Center</title>
		
		<!-- Favicon -->
        <link rel="icon" href="img/favicon.png">
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Nice Select CSS -->
		<link rel="stylesheet" href="css/nice-select.css">
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- icofont CSS -->
        <link rel="stylesheet" href="css/icofont.css">
		<!-- Slicknav -->
		<link rel="stylesheet" href="css/slicknav.min.css">
		<!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="css/owl-carousel.css">
		<!-- Datepicker CSS -->
		<link rel="stylesheet" href="css/datepicker.css">
		<!-- Animate CSS -->
        <link rel="stylesheet" href="css/animate.min.css">
		<!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="css/magnific-popup.css">
		
		<!-- Medipro CSS -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/responsive.css">
</head>
<body>
  

	
	
		<!-- Header Area -->
		<header class="header" >
			
	
			
			<!-- Header Inner -->
			<div class="header-inner">
				<div class="container">
					<div class="inner">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-12">
								<!-- Start Logo -->
								<div class="logo">
									<a href="index.html"><img src="img/logo.png" alt="#"></a>
								</div>
								<!-- End Logo -->
								<!-- Mobile Nav -->
								<div class="mobile-nav"></div>
								<!-- End Mobile Nav -->
							</div>
							<div class="col-lg-7 col-md-9 col-12">
								<!-- Main Menu -->
								<div class="main-menu">
									<nav class="navigation">
										<ul class="nav menu">
											<li class="active"><a href="index.php">Home </a>
										
											</li>
											<li><a href="#">Doctors</a></li>
											<li><a href="#">Services </a></li>
											<li><a href="#">Contact Us</a></li>
										</ul>
									</nav>
								</div>
								<!--/ End Main Menu -->
							</div>

							
							<div class="col-lg-2 col-12 ">
								<div class="get-quote">
										<div class="container mt-3">
									<a href="loginportal.php" class="btn">Login to Portal</a>
									</div>
									
								</div>
							</div>
				</div>
			</div>
			<!--/ End Header Inner -->
		</header>
		<!-- End Header Area -->
		

    <div class="jumbotron">
  <h1 class="display-5">Register!</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>If you Already have an Account Please login from here.</p>
  <a class="btn" href="patient_login.php" style="color: white;">Login</a>

</div>

<div class="container mt-3>">
<form method="post" action="">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Name</label>
      <input type="text" name="name" class="form-control" id="inputEmail4" placeholder="Name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" name="address" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" name="address2" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" name="city" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Age Group</label>
      <select id="inputState" name="age" class="form-control">
	  	<option selected>Under 18</option>
        <option selected>18 -25</option>
        <option>25 - 35</option>
        <option>35 - 45</option>
        <option>45 - 60</option>
        <option>Over 60</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Contact</label>
      <input type="text" class="form-control" name="contact" id="inputZip">
    </div>
  </div>  
  <button type="submit" name="signup" class="btn btn-primary">Sign Up</button>
  <button type="submit" class="btn btn-primary">Clear Form</button>
</form>
</

</body>
</html>
