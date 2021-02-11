<?php
$servername = "localhost";
$username = "root";
$password = "";
$bdname = "caisse";

// Create connection
$conn = new mysqli($servername, $username, $password,$bdname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

$name = $_POST['name'] ;
$email = $_POST['email'] ;
$pass = $_POST['pass'] ;

// $name = 'name' ;
// $email ='email@gmail.com';
// $pass = '123' ;

 $sql = "INSERT INTO login (name, email, pass) 
VALUES ('$name', '$email' , '$pass')";

$result= mysqli_query($conn,$sql);


if ($result) {
    echo('success');
}



?>