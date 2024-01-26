<?php
session_start();

if (isset($_SESSION['SESSION_USERNAME'])) {
    // User is logged in
    $username = $_SESSION['SESSION_USERNAME'];

    // Database connection
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "medi";

    $con = new mysqli($db_host, $db_user, $db_pass, $db_name);

    if ($con->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve user id from the database
    $result = $con->query("SELECT l_id FROM lab_technisian WHERE l_username = '$username'");

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $loggedUserId = $row['l_id'];
    } else {
        // Handle the case when the user is not found in the database
        echo "Error: User not found in the database.";
        exit();
    }

    $con->close();
} else {
    // User is not logged in
    echo "User is not logged in";
    header("Location: ./login.php");
    exit();
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
		<title>Mediplus</title>


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
						<a href="index.html" class="logo"><span>Laboratary</span></a>
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
										<a href="account-settings.php"><i class="icon-user1"></i> My Profile</a>
										<a href="logout.php"><i class="icon-log-out1"></i> Sign Out</a>
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
							<a class="nav-link active-page" href="index.php">
								<i class="icon-devices_other nav-icon"></i>
								Dashboard
							</a>
						</li>


						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">
								<i class="icon-book-open nav-icon"></i>
								Management
							</a>
							<ul class="dropdown-menu" aria-labelledby="pagesDropdown">
							
								<li>
									<a class="dropdown-item" href="hospital-reports.php">Reports</a>
								</li>
								<li>
									<a class="dropdown-item" href="my-reports.php">My Reports</a>
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
					</ol>
					<div class="site-award">
						<img src="img/award.svg" alt="Hospital Dashboards"> Best Hospital
					</div>
				</div>
				<!-- Page header end -->

				<!-- Content wrapper start -->
				<div class="content-wrapper">


                
				<?php
//database connection details

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "medi";

 $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);


 if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

 //Fetch the uploaded files from the database


 $current_lab = $_SESSION['SESSION_USERNAME'];
 $sql = "SELECT *FROM files WHERE upload = '$loggedUserId' ";
 $result = $conn->query($sql);

?>




	<div class="container mt-5">
        <h2>Uploaded Files</h2>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
					<th>Patient ID</th>
					<th>Doctor</th>
					<th>Report Type</th>
					<th>Comments</th>
                    <th>File Name</th>
                    <th>File Size</th>
                    <th>File Type</th>
                    <th>Download</th>
					<th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Display the uploaded files and download links
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $file_path = "uploads/" . $row['filename'];
                        ?>
                        <tr>
							<td><?php echo $row['p_id']; ?></td>
							<td><?php echo $row['d_id']; ?></td>
							<td><?php echo $row['type']; ?></td>
							<td><?php echo $row['comments']; ?></td>
                            <td><?php echo $row['filename']; ?></td>
                            <td><?php echo $row['filesize']; ?> bytes</td>
                            <td><?php echo $row['filetype']; ?></td>
                            <td><a href="<?php echo $file_path; ?>" class="btn btn-primary" download>Download</a></td>
							<td>  <form method="POST" action="">
                                <input type="hidden" name="r_id" value="<?php echo $row['r_id']; ?>">
                                <button type="button" class="btn btn-danger" onclick="confirmDelete(this)">Delete</button>
                            </form></td>
                        </tr>
                        <?php
                    }
                } else {
                    ?>
                    <tr>
                        <td colspan="4">No files uploaded yet.</td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>

	<!-- Add JavaScript to handle delete confirmation -->
<script>
    function confirmDelete(button) {
        if (confirm("Are you sure you want to delete this file?")) {
            // Get the associated form and submit it
            var form = button.closest('form');
            form.submit();
        }
    }
</script>
<?php
// Check if a delete request is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["r_id"])) {
    $r_id = $_POST["r_id"];

    // Perform the deletion in the database
    $deleteSql = "DELETE FROM files WHERE r_id = '$r_id'";
    if ($conn->query($deleteSql) === TRUE) {
        echo "File deleted successfully!";
        // You can redirect to the same page or another page after deletion
        // header("Location: your_page.php");
    } else {
        echo "Error deleting file: " . $conn->error;
    }
}
?>

<?php
$conn->close();
?>
	

				</div>
				<!-- Content wrapper end -->

			</div>
			<!-- *************
				************ Main container end *************
			************* -->

			<footer class="main-footer"></footer>

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