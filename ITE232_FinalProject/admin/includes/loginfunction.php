<?php
include 'connection.php';
if (isset($_POST['submit'])) {
	
	$userEmail = $_POST['userEmail'];
	$userPassword = $_POST['userPassword'];

	$sql = "SELECT * FROM tbl_admin WHERE username = ? AND password = ?;";

	$stmtInit = mysqli_stmt_init($conn);

	$preparedStatement = mysqli_stmt_prepare($stmtInit,$sql);

	if(!$preparedStatement){
		echo "\nSQL Statement Failed" . mysqli_stmt_error($stmtInit);
	}
	else {
		mysqli_stmt_bind_param($stmtInit, "ss", $userEmail, $userPassword);
		mysqli_stmt_execute($stmtInit);
		$result = mysqli_stmt_get_result($stmtInit);

		while ($row = mysqli_fetch_assoc($result) > 0) {
			$_SESSION['username'] = $userEmail;
			echo "<script>alert('You are now Logged in'); location.href='../index.php';</script>";

		}
	}

}




?>