<?php

session_start();
	// echo "<pre>".print_r($_POST,1)."</pre>";

if (isset($_POST['email'])) {


	$email = $_POST['email'];
	$password = $_POST['password'];

	if ($email=="sendii@gmail.com") {
		if ($password=="pelangibaru") {
			$_SESSION['isLoggedIn'] = true;
			$_SESSION['email'] = $email;
			header("location:index.php?l=success");
		}else{
			$_SESSION['isLoggedIn'] = false;
			echo "salah password";
		}
	}else{
		$_SESSION['isLoggedIn'] = false;
		echo "salah email";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="">
		<table>
			<tr>
				<td>E-Mail</td>
				<td><input type="text"
					name="email"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password"
					name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><button type="submit">Sign In</button></td>
			</tr>
		</table>
	</form>
</body>
</html>