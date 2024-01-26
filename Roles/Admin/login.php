<?php
include("./db/config.php");
session_start();

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $sql = "SELECT * FROM users WHERE username='{$username}' AND password='{$password}'";
    $result = mysqli_query($con, $sql);

    if (!$result) {
        die("Query error: " . mysqli_error($con)); // Check for query error and display it
    }

    if (mysqli_num_rows($result) === 1) {
        $_SESSION['SESSION_USERNAME'] = $username;
        header("Location: index.php");
        exit(); // Make sure to add an exit() after the header redirect
    } else {
        $msg = "<div class='alert alert-info'>First verify your account and try again.</div>";
    }
} else {
    $msg = "<div class='alert alert-danger'>Email or password do not match.</div>";
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
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />

		<!-- Master CSS -->
		<link rel="stylesheet" href="css/main.css" />

	</head>

	<body class="authentication">

		<!-- Container start -->
		<div class="container">

			<form action="" method="post">
				<div class="row justify-content-md-center">
					<div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
						<div class="login-screen">
							<div class="login-box">
								<a href="#" class="login-logo">
									MediPlus 
								</a>
								<h5>Welcome back,<br />Please Login to your Account.</h5>
								<div class="form-group">
									<input type="text" class="form-control" name="username" placeholder="User name" />
								</div>
								<div class="form-group">
									<input type="password" class="form-control" name="password" placeholder="Password" />
								</div>
								<div class="actions">
								
									<button type="submit" name="submit" class="btn btn-info">Login</button>
								</div>
								<hr>
								<div class="m-0">
									<span class="additional-link">No account? <a href="signup.php"
											class="btn btn-secondary">Signup</a></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>

		</div>
		<!-- Container end -->

	</body>

</html>