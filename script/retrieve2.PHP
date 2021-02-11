<?php
$con = mysqli_connect("localhost","root","","caisse");
$result = array();
$result['data'] = array();
$select = "SELECT *from articles";
$responce = mysqli_query($con,$select);

while($row= mysqli_fetch_array($responce))
{
    $index['id'] =  $row['0'];
    $index['uid'] = $row['1'];
    $index['name'] = $row['2'];
    $index['price'] = $row['3'];
    $index['stock'] = $row['4'];
    $index['photo'] = $row['5'];
    array_push($result['data'], $index);
   // $index[''] = ;

}

$result["success"]="1";
echo json_encode($result);
mysqli_close($con);


?>

