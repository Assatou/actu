<?php


 /*$conn=mysqli_connect('localhost','root','','student_attendance') or die (mysql_error());*/
/* $conn= new PDO("mysql:host=localhost; dbname=student_attendance",'root','');*/

 try{
 	$conn= new PDO("mysql:host=localhost; dbname=student",'root','');
 }catch(PDOException $e){
 	die("Erreur de connexion à la base de donnée: " . $e->getMessage());
 }
 



 ?>
<?php include("reactive.php")?>