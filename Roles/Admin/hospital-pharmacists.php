<?php
include("./db/config.php");
session_start();

if (isset($_SESSION['SESSION_USERNAME'])) {
    // User is logged in

} else {
    // User is not logged in
    echo "User is not logged in";
    header("Location: ./login.php");
}
?>


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
		<title>Medical Admin Template - Hospital Patients</title>


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
		<!-- Data Tables -->
		<link rel="stylesheet" href="vendor/datatables/dataTables.bs4.css" />
		<link rel="stylesheet" href="vendor/datatables/dataTables.bs4-custom.css" />


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
							
							<li class="dropdown">
								<a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
									<span class="user-name"><?php echo $_SESSION['SESSION_USERNAME']; ?></span>
									<span class="avatar"><?php echo $_SESSION['SESSION_USERNAME']; ?><span class="status busy"></span></span>
								</a>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userSettings">
									<div class="header-profile-actions">
										<div class="header-user-profile">
											<div class="header-user">
												<img src="img/user11.png" alt="Medical Dashboards" />
											</div>
											
											<p><?php echo $_SESSION['SESSION_USERNAME']; ?></p>
										</div>
										<a href="hospital-add-doctor.html"><i class="icon-user1"></i> My Profile</a>
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
						<li class="breadcrumb-item active">Patients</li>
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
						<div class="col-sm-12">
							<div class="table-container">

								<!--*************************
									*************************
									*************************
									Basic table start
								*************************
								*************************
								*************************-->
								<div class="table-responsive">
									<table id="basicExample" class="table">
										<thead>
											<tr>
												<th>ID</th>
												<th>Full Name</th>
												<th>Email</th>
												<th>Qualification</th>
												<th>Password</th>
												<th>Address</th>
												<th>Username</th>
												<th>Password</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
										<?php
        	    include("./db/config.php");
                $query ="SELECT * FROM pharmacy";
                $sql = mysqli_query($con,$query);
                while($row = mysqli_fetch_array($sql))
                {  ?>
											<tr>
											<td><?php echo $row["pharmacy_id"];?></td>
                                            <td><?php echo $row["fullname"];?></td>
                                            <td><?php echo $row["email"];?></td>
											<td><?php echo $row["qualification"];?></td>
											<td><?php echo $row["address"];?></td>
											<td><?php echo $row["bio"];?></td>
											<td><?php echo $row["username"];?></td>
											<td><?php echo $row["password"];?></td>
												<td>
													<div class="btn-group btn-group-sm">
														<button type="button" class="btn btn-info">
															<i class="icon-edit1"></i>
														</button>
														<button type="button" class="btn btn-danger">
															<i class="icon-cancel"></i>
														</button>
													</div>
												</td>
											</tr>
  <?php  }?>
										</tbody>
									</table>
								</div>
								<!--*************************
									*************************
									*************************
									Basic table end
								*************************
								*************************
								*************************-->

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

		<!-- Data Tables -->
		<script src="vendor/datatables/dataTables.min.js"></script>
		<script src="vendor/datatables/dataTables.bootstrap.min.js"></script>

		<!-- Custom Data tables -->
		<script src="vendor/datatables/custom/custom-datatables.js"></script>

		<!-- Main Js Required -->
		<script src="js/main.js"></script>

	</body>

</html>