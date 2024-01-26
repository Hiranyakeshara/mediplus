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
		<title>Medical Admin Template - Account Settings</title>


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
						<li class="breadcrumb-item">Pages</li>
						<li class="breadcrumb-item active">Account Settings</li>
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
						<div class="col-md-3 col-sm-4 col-12">
							<div class="card">
								<div class="card-body">
									<div class="account-settings">
										<div class="user-profile">
											<div class="user-avatar">
												<img src="img/user2.png" alt="Medical Dashboards" />
											</div>
											<h5 class="user-name">Emily Russell</h5>
											<h6 class="user-email">doctor@wwwzzz.com</h6>
										</div>
										<div class="setting-links">
											<a href="#">
												<i class="icon-bell"></i>
												Notifications
											</a>
											<a href="#">
												<i class="icon-chat"></i>
												Messages
											</a>
											<a href="#">
												<i class="icon-date_range"></i>
												Tasks
											</a>
											<a href="#">
												<i class="icon-settings"></i>
												Settings
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-9 ">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Update Profile</div>
								</div>
								<div class="card-body">
									<div class="row gutters">
										<div class=col-sm-6 col-12">
											<div class="form-group">
												<label for="fullName">Full Name</label>
												<input type="text" class="form-control" id="fullName" placeholder="Enter full name">
											</div>
											<div class="form-group">
												<label for="eMail">Email</label>
												<input type="email" class="form-control" id="eMail" placeholder="Enter email ID">
											</div>
											<div class="form-group">
												<label for="phone">Phone</label>
												<input type="text" class="form-control" id="phone" placeholder="Enter phone number">
											</div>
											<div class="form-group">
												<label for="website">Website URL</label>
												<input type="url" class="form-control" id="website" placeholder="Website url">
											</div>
										</div>
										<div class=col-sm-6 col-12">
											<div class="form-group">
												<label for="addRess">Address</label>
												<input type="text" class="form-control" id="addRess" placeholder="Enter Address">
											</div>
											<div class="form-group">
												<label for="ciTy">City</label>
												<input type="text" class="form-control" id="ciTy" placeholder="Enter City">
											</div>
											<div class="form-group">
												<label for="sTate">State</label>
												<input type="text" class="form-control" id="sTate" placeholder="Enter State">
											</div>
											<div class="form-group">
												<label for="zIp">ZIP</label>
												<input type="number" class="form-control" id="zIp" placeholder="Website ZIP">
											</div>
										</div>
										<div class="col-sm-12">
											<div class="text-right">
												<button type="button" id="cancel" name="cancel" class="btn btn-light">Cancel</button>
												<button type="button" id="submit2" name="submit2" class="btn btn-primary">Submit Form</button>
											</div>
										</div>
									</div>
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

		<!-- Main Js Required -->
		<script src="js/main.js"></script>

	</body>

</html>