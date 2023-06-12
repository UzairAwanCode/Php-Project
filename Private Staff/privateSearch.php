<?php
include 'connect.php';
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Detailed Certification Lookup</title>
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
</head>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST">
					<span class="login100-form-title p-b-26" style="color:#ff7c0a; font-size:1.4rem">
						DETAILED CERTIFICATION LOOKUP
					</span>
					<span class="login100-form-title p-b-48">
						<!-- <i class="zmdi zmdi-font"></i> -->
					</span>

					<div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
						<input class="input100" type="text" name="certificate" placeholder="Certificate">
						<!-- <span class="focus-input100" data-placeholder="Certificate"></span> -->
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter First Name">
						<input class="input100" type="text" name="first_name" placeholder="First Name">
						<!-- <span class="focus-input100" data-placeholder="First Name"></span> -->
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter Last Name">
						<input class="input100" type="text" name="last_name" placeholder="Last Name">
						<!-- <span class="focus-input100" data-placeholder="Last Name"></span> -->
					</div>

					<div>
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
	$firstName = $_POST['first_name'];
	$lastName = $_POST['last_name'];

	$certificate = strtolower($certificate);
	$firstName = strtolower($firstName);
	$lastName = strtolower($lastName);

	// If Certificate Number Entered Only
	if ($certificate != null && $firstName == null && $lastName == null) {
		$sql = "select * from `register` where certificate_number= '$certificate'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		if ($row == null) {
			echo "<script> alert('Record Not Found') </script>";
		} else {
			$certificate = $row['certificate_number'];
			$firstName = $row['first_number'];
			$lastName = $row['last_number'];

			echo "<script>window.location.href = 'showPrivateRecord.php?certificate=$certificate ' </script>";
		}
	} elseif ($firstName != null && $certificate == null && $lastName == null)  //If First Name Entered Only
	{
		$sql = "select * from `register` where first_name='$firstName'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		if ($row == null) {
			echo "<script> alert('Record Not Found') </script>";
		} else {
			echo "<script>window.location.href = 'showByFirstName.php?firstname=$firstName ' </script>";
		}
	} elseif ($lastName != null && $certificate == null && $firstName == null)  //If lastName Entered Only
	{
	    
		$sql = "select * from `register` where last_name= '$lastName'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		if ($row == null) {
			echo "<script> alert('Record Not Found') </script>";
		} else {
			echo "<script>window.location.href = 'showByLastName.php?lastname=$lastName ' </script>";
		}
	} //New Line
	elseif ($lastName != null && $certificate != null && $firstName == null)  
	{
		$sql = "select * from `register` where last_name= '$lastName' AND certificate_number= '$certificate'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		if ($row == null) {
			echo "<script> alert('Record Not Found') </script>";
		} else {
			echo "<script>window.location.href = 'showByLastNameAndCertificate.php?lastname=$lastName&certificate=$certificate' </script>";
		}
	}
	elseif ($firstName != null &&  $lastName != null &&  $certificate == null)  
	{
		$sql = "select * from `register` where first_name = '$firstName' AND last_name = '$lastName'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		if ($row == null) {
			echo "<script> alert('Record Not Found') </script>";
		} else {
			echo "<script>window.location.href = 'showByFirstAndLastName.php?firstname=$firstName&lastname=$lastName' </script>";
		}
	}
	elseif ($firstName != null &&  $certificate != null&&  $lastName == null)
	{
		$sql = "select * from `register` where first_name= '$firstName' AND certificate_number= '$certificate'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		if ($row == null) {
			echo "<script> alert('Record Not Found') </script>";
		} else {
			echo "<script>window.location.href = 'showByFirstNameAndCertificate.php?firstname=$firstName&certificate=$certificate' </script>";
		}
	}
	else 
	{
		$sql = "select * from `register` where certificate_number= '$certificate' AND first_name= '$firstName' AND last_name= '$lastName'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		if ($row == null)
		{
			echo "<script> alert('Record Not Found') </script>";
		} else {
			echo "<script>window.location.href = 'showPrivateRecord.php?certificate=$certificate ' </script>";
		}
	}
}
?>