<!doctype html>
<html lang="en">

	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Meta -->
		<meta name="description" content="Responsive Bootstrap Dashboards">
		<meta name="author" content="Bootstrap Gallery">
		<link rel="shortcut icon" href="img/favicon.svg" />

		<!-- Title -->
		<title>Medical Admin Template - Hospital Reviews</title>


		<!-- *************
			************ Common Css Files *************
			************ -->
		<!-- Bootstrap css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">

		<!-- Icomoon Font Icons css -->
		<link rel="stylesheet" href="fonts/style.css">

		<!-- Main css -->
		<link rel="stylesheet" href="css/main.min.css">


		<!-- *************
			************ Vendor Css Files *************
		************ -->

	</head>

	<body>

		<!-- Header start -->
		<header class="header">
			<div class="container-fluid">

				<!-- Row start -->
				<div class="row gutters">
					<div class="col-sm-4 col-4">
					<a href="index.html" class="logo">Medi<span>Plus</span></a>
						<a href="index.html" class="logo"><span>-</span></a>
						<a href="index.html" class="logo"><span>admin</span></a>
					</div>
					<div class="col-sm-8 col-8">

						<!-- Header actions start -->
						<ul class="header-actions">
							<li class="dropdown d-none d-sm-block">
								<a href="#" class="contact">
									<i class="icon-phone"></i> 012 345 6789
								</a>
							</li>
							<li class="dropdown d-none d-sm-block">
								<a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
									<i class="icon-bell"></i>
									<span class="count-label"></span>
								</a>
								<div class="dropdown-menu lrg" aria-labelledby="notifications">
									<div class="dropdown-menu-header">
										<h5>Notifications</h5>
										<p class="m-0 sub-title">You have 5 unread notifications</p>
									</div>
									<ul class="header-notifications">
										<li>
											<a href="#" class="clearfix">
												<div class="avatar">
													<img src="img/user24.png" alt="Medical Admin Dashboards" />
													<span class="notify-iocn icon-drafts text-danger"></span>
												</div>
												<div class="details">
													<h6>Dr. Clive</h6>
													<p>Appointed as a new President 2021-2024</p>
												</div>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<div class="avatar">
													<img src="img/user21.png" alt="Medical Admin Dashboards" />
													<span class="notify-iocn icon-layers text-info"></span>
												</div>
												<div class="details">
													<h6>Dr. G. Levsmia</h6>
													<p>Will be on leave on October 2nd week.</p>
												</div>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<div class="avatar">
													<img src="img/user19.png" alt="Medical Admin Dashboards" />
													<span class="notify-iocn icon-person_add text-success"></span>
												</div>
												<div class="details">
													<h6>Dr. George S</h6>
													<p>Sent new applointments list</p>
												</div>
											</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="dropdown">
								<a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
									<span class="user-name">Nélson Romyo</span>
									<span class="avatar">NR<span class="status busy"></span></span>
								</a>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userSettings">
									<div class="header-profile-actions">
										<div class="header-user-profile">
											<div class="header-user">
												<img src="img/user11.png" alt="Medical Dashboards" />
											</div>
											<h5>Nélson Romyo</h5>
											<p>Admin</p>
										</div>
										<a href="hospital-add-doctor.html"><i class="icon-user1"></i> My Profile</a>
										<a href="account-settings.html"><i class="icon-settings1"></i> Account Settings</a>
										<a href="hospital-reviews.html"><i class="icon-activity"></i> Activity Logs</a>
										<a href="login.html"><i class="icon-log-out1"></i> Sign Out</a>
									</div>
								</div>
							</li>
						</ul>
						<!-- Header actions end -->

					</div>
				</div>
				<!-- Row end -->

			</div>
		</header>
		<!-- Header end -->

		<!-- *************
			************ Header section end *************
		************* -->


		<div class="container-fluid">


			<!-- Navigation start -->
			<nav class="navbar navbar-expand-lg custom-navbar">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#royalHospitalsNavbar"
					aria-controls="royalHospitalsNavbar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i></i>
						<i></i>
						<i></i>
					</span>
				</button>
				<div class="collapse navbar-collapse" id="royalHospitalsNavbar">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link active-page" href="index.html">
								<i class="icon-devices_other nav-icon"></i>
								Dashboard
							</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="doctoRs" role="button" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">
								<i class="icon-users nav-icon"></i>
								Staff
							</a>
							<ul class="dropdown-menu" aria-labelledby="doctoRs">
								<li>
									<a class="dropdown-item" href="hospital-doctors-list.php">Doctors List</a>
								</li>
								<li>
									<a class="dropdown-item" href="hospital-doctors.php">Doctors</a>
								</li>
								<li>
									<a class="dropdown-item" href="hospital-patients.php">Patients</a>
								</li>
								<li>
									<a class="dropdown-item" href="lab-technisian.php">Lab Technisians</a>
								</li>
								<li>
									<a class="dropdown-item" href="hospital-patients.php">Pharmacist</a>
								</li>
								<li>
									<a class="dropdown-item" href="hospital-add-doctor.php">Add Doctor</a>
								</li>
								<li>
									<a class="dropdown-item" href="hospital-add-Pharmacist.php">Add Pharmacist</a>
								</li>
								<li>
									<a class="dropdown-item" href="hospital-add-Technisian.php">Add Lab Technisian</a>
								</li>
								<li>
									<a class="dropdown-item" href="hospital-add-patient.php">Add Patient</a>
								</li>
							</ul>
						</li>

						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">
								<i class="icon-book-open nav-icon"></i>
								Management
							</a>
							<ul class="dropdown-menu" aria-labelledby="pagesDropdown">
								<li>
									<a class="dropdown-item" href="calendar.php">Callender</a>
								</li>
								<li>
									<a class="dropdown-item" href="appointments.php">Appointments</a>
								</li>
								<li>
									<a class="dropdown-item" href="reports.php">Reports</a>
								</li>
								<li>
									<a class="dropdown-item" href="prescription.php">Prescriptions</a>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="loginDropdown" role="button" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">
								<i class="icon-alert-triangle nav-icon"></i>
								Settings
							</a>
							<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="loginDropdown">
								<li>
									<a class="dropdown-item" href="login.php">Login</a>
								</li>
								<li>
									<a class="dropdown-item" href="signup.php">Signup</a>
								</li>
							
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- Navigation end -->


			<!-- *************
				************ Main container start *************
			************* -->
			<div class="main-container">


				<!-- Page header start -->
				<div class="page-header">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">Doctors</li>
						<li class="breadcrumb-item active">Hospitals Reviews</li>
					</ol>
					<div class="site-award">
						<img src="img/award.svg" alt="Hospital Dashboards"> Best Hospital
					</div>
				</div>
				<!-- Page header end -->

				<!-- Content wrapper start -->
				<div class="content-wrapper">

					<!-- Row start -->
					<div class="row gutters">
						<div class="col-xl-12">
							<div class="card plain">
								<div class="card-body">
									<!-- Row start -->
									<div class="row gutters">
										<div class="col-lg-4 col-md-6 col-12">
											<a href="javascript:void(0)" class="hospital-list">
												<img src="img/user10.png" class="hospital-thumb" alt="Medical Dashboards" />
												<div class="hospital-details">
													<div class="hospital-location">
														<h5>Willams</h5>
														<p>We came here with no hope but the treatment special...</p>
													</div>
													<div class="hospital-rating-price">
														<div class="ratings">
															<div class="rateA"></div>
														</div>
													</div>
												</div>
											</a>
										</div>
										<div class="col-lg-4 col-md-6 col-12">
											<a href="javascript:void(0)" class="hospital-list">
												<img src="img/user9.png" class="hospital-thumb" alt="Medical Dashboards" />
												<div class="hospital-details">
													<div class="hospital-location">
														<h5>Beverly</h5>
														<p>We are very happy with the service, support and help...</p>
													</div>
													<div class="hospital-rating-price">
														<div class="ratings">
															<div class="rateB"></div>
														</div>
													</div>
												</div>
											</a>
										</div>
										<div class="col-lg-4 col-md-6 col-12">
											<a href="javascript:void(0)" class="hospital-list">
												<img src="img/user7.png" class="hospital-thumb" alt="Medical Dashboards" />
												<div class="hospital-details">
													<div class="hospital-location">
														<h5>Jomtien</h5>
														<p>Excellent treatment for leukemia, calculated timely...</p>
													</div>
													<div class="hospital-rating-price">
														<div class="ratings">
															<div class="rateC"></div>
														</div>
													</div>
												</div>
											</a>
										</div>
										<div class="col-lg-4 col-md-6 col-12">
											<a href="javascript:void(0)" class="hospital-list">
												<img src="img/user6.png" class="hospital-thumb" alt="Medical Dashboards" />
												<div class="hospital-details">
													<div class="hospital-location">
														<h5>O'Hare</h5>
														<p>We all know about how a mother's love can move mountains...</p>
													</div>
													<div class="hospital-rating-price">
														<div class="ratings">
															<div class="rateD"></div>
														</div>
													</div>
												</div>
											</a>
										</div>
										<div class="col-lg-4 col-md-6 col-12">
											<a href="javascript:void(0)" class="hospital-list">
												<img src="img/user5.png" class="hospital-thumb" alt="Medical Dashboards" />
												<div class="hospital-details">
													<div class="hospital-location">
														<h5>Kelly</h5>
														<p>Watch the successful story of the child Joyce, who suffered...</p>
													</div>
													<div class="hospital-rating-price">
														<div class="ratings">
															<div class="rateE"></div>
														</div>
													</div>
												</div>
											</a>
										</div>
										<div class="col-lg-4 col-md-6 col-12">
											<a href="javascript:void(0)" class="hospital-list">
												<img src="img/user4.png" class="hospital-thumb" alt="Medical Dashboards" />
												<div class="hospital-details">
													<div class="hospital-location">
														<h5>Wilson</h5>
														<p>We are really thankful to Dr.Sam and her full team. They are...</p>
													</div>
													<div class="hospital-rating-price">
														<div class="ratings">
															<div class="rateC"></div>
														</div>
													</div>
												</div>
											</a>
										</div>
										<div class="col-lg-4 col-md-6 col-12">
											<a href="javascript:void(0)" class="hospital-list">
												<img src="img/user3.png" class="hospital-thumb" alt="Medical Dashboards" />
												<div class="hospital-details">
													<div class="hospital-location">
														<h5>Michel</h5>
														<p>Thanks to all the staffs and doctors - they were friendly...</p>
													</div>
													<div class="hospital-rating-price">
														<div class="ratings">
															<div class="rateA"></div>
														</div>
													</div>
												</div>
											</a>
										</div>
										<div class="col-lg-4 col-md-6 col-12">
											<a href="javascript:void(0)" class="hospital-list">
												<img src="img/user2.png" class="hospital-thumb" alt="Medical Dashboards" />
												<div class="hospital-details">
													<div class="hospital-location">
														<h5>Langham</h5>
														<p>Thanks to the Physiotherapist for their rehabilitation...</p>
													</div>
													<div class="hospital-rating-price">
														<div class="ratings">
															<div class="rateA"></div>
														</div>
													</div>
												</div>
											</a>
										</div>
										<div class="col-lg-4 col-md-6 col-12">
											<a href="javascript:void(0)" class="hospital-list">
												<img src="img/user.png" class="hospital-thumb" alt="Medical Dashboards" />
												<div class="hospital-details">
													<div class="hospital-location">
														<h5>Nesargi</h5>
														<p>Mr.Saril, this is for your kind information that, I was...</p>
													</div>
													<div class="hospital-rating-price">
														<div class="ratings">
															<div class="rateB"></div>
														</div>
													</div>
												</div>
											</a>
										</div>
									</div>
									<!-- Row end -->
								</div>
							</div>
						</div>
					</div>
					<!-- Row end -->



				</div>
				<!-- Content wrapper end -->

			</div>
			<!-- *************
				************ Main container end *************
			************* -->

			<footer class="main-footer">© Bootstrap Gallery 2023</footer>

		</div>

		<!-- *************
			************ Required JavaScript Files *************
		************* -->
		<!-- Required jQuery first, then Bootstrap Bundle JS -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/moment.js"></script>


		<!-- *************
			************ Vendor Js Files *************
		************* -->

		<!-- Rating JS -->
		<script src="vendor/rating/raty.js"></script>
		<script src="vendor/rating/raty-custom.js"></script>

		<!-- Main Js Required -->
		<script src="js/main.js"></script>

	</body>

</html>