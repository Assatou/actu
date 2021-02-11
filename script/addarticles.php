<?php

$con = mysqli_connect("localhost","root","","caisse");
require_once "validate.php";
$uid = validate($_POST['uid']);
$name = validate($_POST['name']);
$price = validate($_POST['price']);
$stock = validate($_POST['stock']);
$photo = ($_POST['photo']);
$imageStore= rand()."_".time().".jpeg";
$target_dir = "Images/";
$target_dir = $target_dir."/".$imageStore;
file_put_contents($target_dir, base64_decode($photo));

//$result = array();

$req="INSERT INTO articles( uid, name, price, stock, photo) VALUES('$uid', '$name', '$price', '$stock', '$imageStore')";

$rst = mysqli_query($con, $req);

if($rst){
    echo "done";
}

else{
    echo "issue";
}

?>