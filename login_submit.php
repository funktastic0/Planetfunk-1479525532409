<?php
	session_start();
?>

<?php
	include "connection.php";

	$username = $_POST['usr_name'];
	$password = $_POST['usr_pwd'];
	$encrypted = hash('sha256',$password);

	$sql = "SELECT * FROM tbl_user WHERE usr_name = '".$username."' and usr_pwd = '".$password."';";

	$result = $cn -> query($sql);

	if($result -> num_rows === 1) {
		$row = $result -> fetch_array(MYSQLI_ASSOC);
		echo "<script> alert('Welcome...')</script>";

		$_SESSION['loggedin'] = true;
		$_SESSION['usr_id'] = $row[usr_id];
		$_SESSION['usr_name'] = $row[usr_name];
		$_SESSION['start'] = time();
		$_SESSION['expire'] = $_SESSION['start'] + (5 * 60);
	} else {
		echo "<script> alert('The username/password are not correct, please try again...'); history.back();  </script>";
	}

	if(isset($_SESSION["usr_id"])){
		header("Location: user_dashboard.php");
	}

	$cn -> close();
?>
