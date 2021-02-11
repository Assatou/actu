<?php

require_once "validate.php";
$con = mysqli_connect("localhost","root","","caisse");


$email = validate($_POST["email"]);
$password = validate($_POST["password"]);

$req="SELECT * FROM user WHERE email='$email' AND password = '$password'";

$rst = mysqli_query($con, $req);

if($rst->num_rows>0){
    echo "ok";
}

else{
    echo "na";
}

?>