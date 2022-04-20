
<?php


require 'connect.php';

if (isset($_POST['login'])) {
	$username = mysqli_real_escape_string($conn, $_POST['usernamelog']);
	$password = mysqli_real_escape_string($conn, $_POST['passwordlog']);




	// $password = md5($password);
	$query = "SELECT * FROM user_registration WHERE user_name='$username' AND pass='$password'";
	$results = mysqli_query($conn, $query);

	if (mysqli_fetch_assoc($results)) {
		session_start();
		$_SESSION['user']=$_POST['usernamelog'];
		header('location: user.php');
	} else {
		$err_msg =  '<script>alert("Incorrect Username Or Password!")</script>';
	}
}

?>