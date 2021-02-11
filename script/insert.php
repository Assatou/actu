<?php

$con = mysqli_connect("localhost","root","","caisse");
require_once "validate.php";
$name = validate($_POST['name']);
$email = validate($_POST['email']);
$password = validate($_POST['password']);

$req="INSERT INTO user( nom, email, password) VALUES('$name', '$email', '$password')";

$rst = mysqli_query($con, $req);

if($rst){
    echo "vous etes enregistré";
}

else{
    echo "erreur d'enregistrement";
}

?>