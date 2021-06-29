<?php

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
	header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$phonenumber = $_POST['phonenumber'];
	$address = $_POST['address'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, phonenumber, address, password)
					VALUES ('$username', '$email', '$phonenumber', '$address', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Sign Up completed, Please Sign In.')</script>";
				$username = "";
				$email = "";
				$phonenumber = "";
				$address = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Something Wrong.')</script>";
			}
		} else {
			echo "<script>alert('Email Already Exists.')</script>";
		}
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>R&B Register</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyA961qUUYeU2tnBuk4gS1fpiXVjnCFnbcQ"></script>
</head>

<body>
	<p class="logo"> R&B</p>
	<div class="image-slogan">
		<img src="image-1.png">
		<p class="slogan"> Great Choices To Rent & Borrow Stuff</p>
	</div>

	<span>
		<div class="container">
			<form action="" method="POST" class="login-email">
				<p class="register-text">Sign Up</p>
				<p class="register-text-1">Sign Up your account here.</p>
				<div class="input-group">
					<input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
				</div>
				<div class="input-group">
					<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
				</div>
				<div class="input-group">
					<input type="tel" placeholder="Phone Number" name="phonenumber" value="<?php echo $_POST['phonenumber']; ?>" required>
				</div>
				<div class="input-group">
					<input type="text" id="search_input" placeholder="Address" name="address" value="<?php echo $_POST['address']; ?>" required>
				</div>
				<script>
					var searchInput = 'search_input';

					$(document).ready(function() {
						var autocomplete;
						autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
							types: ['geocode'],
							/*componentRestrictions: {
							 country: "USA"
							}*/
						});

						google.maps.event.addListener(autocomplete, 'place_changed', function() {
							var near_place = autocomplete.getPlace();
						});
					});
				</script>
				<div class="input-group">
					<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
				</div>
				<div class="input-group">
					<input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
				</div>
				<div class="input-group">
					<button name="submit" class="btn">Sign Up</button>
				</div>
				<p class="login-register-text">Have an account? <a href="index.php">Sign In</a>.</p>
			</form>
		</div>
	</span>
</body>

</html>