<?php
include 'connect.php';
error_reporting(0);
$status = "both fields mandatory";
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Search Result</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
	<style>
		.validate-input .error{
			display: none;
			color: #ff3860;
			font-size: 18px;
			text-align: center;
			margin-bottom: 12px;
		}
	</style>
</head>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST" id="form">
					<span class="login100-form-title p-b-26" style="color:#ff7c0a; font-size:1.5rem">
					VERIFY CERTIFICATE
					</span>
					<span class="login100-form-title p-b-48">
						<!-- <i class="zmdi zmdi-font"></i> -->
					</span>
					
					<div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
						<div class="error"  id="certificate"><?php echo $status; ?></div>
						<input class="input100" type="text" name="certificate" placeholder="Certificate">
						<!-- <span class="focus-input100" data-placeholder="Certificate"></span> -->
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="text" name="last_name" placeholder="Last Name" id="lastName">
						<!-- <span class="focus-input100" data-placeholder="Last Name"></span> -->
					</div>

					<div class="">
						<div class="wrap-login100-form-btn">
							<input class="login100-form-btn" onmouseover="this.style.background = 'orange' " onmouseout="this.style.background = '#ff7c0a'" style="background-color:#ff7c0a; cursor: pointer" type="submit" name="submit" value="Find" />
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

	

</body>

</html>

<?php
if (isset($_POST['submit'])) {
	$certificate = $_POST['certificate'];
	$lastName = $_POST['last_name'];

	$certificate = strtolower(($certificate));
	$lastName = strtolower($lastName);

	if(empty($certificate) || empty($lastName)){
		echo "<style>
		.validate-input .error{
			display: block;
			color: #ff3860;
			font-size: 18px;
		}
		</style>";
	}
	else{
		echo "<style>
		.validate-input .error{
			display: none;
			color: #ff3860;
			font-size: 18px;
		}
		</style>";
		$sql = "select * from `register` where certificate_number= '$certificate' AND last_name= '$lastName'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	if ($row == null) {
		echo "<script> alert('Record Not Found') </script>";
	} else {
		$certificate = $row['certificate_number'];
		echo "<script>window.location.href = 'showRecord.php?certificate=$certificate ' </script>";
	}
	}

	
}
?>