<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    
  </head>

  <style>

button{
    font-size: 2em;
    font-family: Arial, Helvetica, sans-serif;
    padding: 8px;
    border: none;
    background-color: green;
    color: white;
    border-radius: 3px;
    box-shadow: 6px 6px 20px 4px rgba(0, 0, 0, 0.3);
    cursor: pointer;
    transition: 0.2s;

}

h2{
  color: blue;
  width: 80%;
  
}

  </style>

  <body>

    <input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3>OCR <span>APPLICATION</span></h3>
      </div>
      <div class="right_area">
        <a href="logout.php" class="logout_btn">DECONNEXION</a>
      </div>
    </header>
    <!--header area end-->
    <!--mobile navigation bar start-->
    <div class="mobile_nav">
      <div class="nav_bar">
        <i class="fa fa-bars nav_btn"></i>
      </div>
      <div class="mobile_nav_items">
        <a href="dashbord.php"><i class="fas fa-desktop"></i><span>Tableau de bord</span></a>
        <a href="#"><i class="fas fa-key"></i><span>Modifier Mot de Passe</span></a>
      <a href="resultat.php"><i class="	fas fa-clipboard-list"></i><span>Les resultats</span></a>
        <a href="#"><i class="fas fa-sliders-h"></i><span>Paramètre</span></a>
      </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
      </div>
      <a href="dashbord.php"><i class="fas fa-desktop"></i><span>Tableau de bord</span></a>
      <a href="#"><i class="fas fa-key"></i><span>Modifier Mot de Passe</span></a>
      <a href="resultat.php"><i class="	fas fa-clipboard-list"></i><span>Les resultats</span></a>
      <a href="#"><i class="fas fa-sliders-h"></i><span>Paramètre</span></a>
    </div>
    <!--sidebar end-->

    <div class="content">
      <div class="card">
        <p>
            <center>

			<?php

$servername = "localhost";
	$username = "root";
	$password = "";
	$db="ocr";
	$conn = mysqli_connect($servername, $username, $password,$db);


if(isset($_FILES['image'])){
$file_name = $_FILES['image']['name'];
$file_tmp =$_FILES['image']['tmp_name'];
move_uploaded_file($file_tmp,"images/".$file_name);
echo "<h1>VOTRE IMAGE A ETE TRAITER AVEC SUCCES</h1>";
echo '<img src="images/'.$file_name.'" style="width:50%">';

shell_exec('"C:\\Program Files (x86)\\Tesseract-OCR\\tesseract" "C:\\xampp\\htdocs\\OCR\\images\\'.$file_name.'" out');

echo "<br><br><br><br><h1>LE TEXTE RECUPERE DE VOTRE IMAGE EST: </h1><br><pre>";

$fichierouvert = fopen("out.txt", "r") or die("Unable to open file!");
$monfichier =fread($fichierouvert,filesize("out.txt"));
echo "</pre>";
echo "<h2><strong>  $monfichier </strong></h2>";

$sql = mysqli_query($conn,"INSERT INTO `texte`( `text`) 
	VALUES ('$monfichier')");
if($sql){
  echo "succes";
  
} else{

	echo "echec";
}
}
?>


            </center>
        </p>
      </div>
      <div class="card">
        <p></p>
      </div>
      <div class="card">
        <p></p>
      </div>
    </div>

    <script type="text/javascript">
    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });
    </script>

  </body>
</html>
