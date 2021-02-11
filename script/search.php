<?php 

//require_once 'connect.php';
$con = mysqli_connect("localhost","root","","caisse");

//$type = $_GET['item_type'];

if (isset($_GET['key'])) {
    $key = $_GET["key"];
    if ($type == 'articles') {
        $query = "SELECT * FROM articles WHERE name LIKE '%$key%'";
        $result = mysqli_query($conn, $query);
        $response = array();
        while( $row = mysqli_fetch_assoc($result) ){
            array_push($response, 
            array(
                'id'=>$row['id'], 
                'name'=>$row['name'], 
                'price'=>$row['price']) 
            );
        }
        echo json_encode($response);   
    }
} else {
    if ($type == 'articles') {
        $query = "SELECT * FROM articles";
        $result = mysqli_query($conn, $query);
        $response = array();
        while( $row = mysqli_fetch_assoc($result) ){
            array_push($response, 
            array(
                'id'=>$row['id'], 
                'name'=>$row['name'], 
                'price'=>$row['price']) 
            );
        }
        echo json_encode($response);   
    }
}

mysqli_close($conn);

?>