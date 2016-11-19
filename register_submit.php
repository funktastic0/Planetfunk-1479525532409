<?php
	include "connection.php";

	$fullname = $_POST['name'];
	$email = $_POST['email'];
	$username = $_POST['user'];
	$password = $_POST['pass'];
	$dni = $_POST['dni'];

	$encrypted = hash('sha256',$password);

	$usr = "SELECT * FROM tbl_user WHERE usr_name = '" . $username . "';";

	$result = $cn -> query($usr);

	$count = mysqli_num_rows($result);

	if($count == 1) {
		echo "<script> alert('User already exists...'); history.back(); </script>";
	} else {
		$sql = "INSERT INTO tbl_user (usr_id , usr_fullname , usr_email , usr_name , usr_pwd) VALUES ('" . $dni . "', '" . $fullname . "' , '" . $email . "' , '" . $username . "' , '" . $password . "');";

		if(!mysqli_query($cn, $sql)) {
			die("Error: " . mysqli_error($cn));
			echo "<script> alert('An error has ocurred...'); history.back(); </script>";
		} else {
			echo "<script> alert('You've been successfully registered...'); </script>";
			header('Location: login.php');
		}
	}

	$cn -> close();
?>
