<?php 
	$db = mysqli_connect('localhost','root','','person');

	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM user WHERE email = '".$email."' AND password = '".$password."'";

	$result = mysqli_query($db,$sql);
	$count = mysqli_num_rows($result);

	if ($count == 1) {
		echo json_encode("Success");
	}else{
		echo json_encode("Error");
	}

?>