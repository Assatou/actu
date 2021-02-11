<?php
	$db = mysqli_connect('localhost','root','','person');
	if (!$db) {
		$output = [ 'body' => "Database connection fail"];
		echo json_encode($output);
		// echo "Database connection faild";
	}
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql="INSERT INTO user (id, email, password) VALUES ('$email','$password')";

?>