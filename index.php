<?php

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
	header("Location: welcome.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: welcome.php");
	} else {
		echo "<script>alert('Email or Password is Wrong.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/style.css">

	<title>R&B Login</title>


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
				<p class="login-text">Sign In</p>
				<p class="login-text-1"">Sign In your account here.</p>
			<div class=" input-group">
					<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
		</div>
		<div class="input-group">
			<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
		</div>
		<div class="input-group">
			<button name="submit" class="btn">Sign In</button>
		</div>
		<p class="login-register-text">Don't have an account? <a href="register.php">Sign Up</a>.</p>
		</form>
		</div>
	</span>

</body>

</html>