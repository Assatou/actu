<?php

//require_once "validate.php";
$con = mysqli_connect("localhost","root","","caisse");



$select = "Select * from articles";
$reponse = mysqli_query($con, $select);
$data =[];


 while($row = mysqli_fetch_array($reponse))
 {
    extract($row);

    $item = [

    "id"=>$id,
    "uid"=>$uid,
    "name"=>$name,
    "price"=>$price,
    "photo"=>$photo

    ];
    
    array_push($data, $item);
 }


 echo json_encode($data);

?>;