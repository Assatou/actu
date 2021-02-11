<?php
session_start();
include('../connection.php');


// router

$page = $_POST['page'] ?? '404';
if ($page === 'public') {
    require 'public/index.php';
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IVOIRE LANGUAGE TRANSLATOR</title>
    <!-- favicon(icone) du site-->
    <link rel="icon" type="image/png" href="../public/assets/LogoIvoireLanguagesTranslatoweb.png" />
    <link rel="stylesheet" type="text/css" href="../public/style/acceuil.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="../public/scripts/main.js"></script>
    <script src="https://kit.fontawesome.com/7cb0e7c261.js" crossorigin="anonymous"></script>

    <style>
        /* et le style ici */
        .cercle {
            height: 70px;
            width: 70px;
            background-color: white;
            border: 2px solid rgb(255, 145, 77);
            border-radius: 50%;

        }
    </style>
    <style>
        .traduction {
            background-color: lightgrey;
            border-style: solid;
            border-width: 5px;
            border-color: gray;
            text-align: center;
        }

        .form-group {
            margin-left: 30px;
        }

        .textarea {
            margin-left: 20px;
            resize: unset;
        }

        .tradwindow {
            margin-left: 600px;
            margin-bottom: 80px;
            background-color: white;
            border-style: solid;
            border-width: 2px;
            border-color: black;
            width: 500px;
            height: 130px;
        }
    </style>
    <style>
    
.footer-top{
    background: #111;
    padding: 80px 0;
}

.segment-one h3{
    font-family: Courgette;
    color: #fff;
    letter-spacing: 3px;
    margin: 10px 0;
}

.segment-two h2{
    color: #fff;
    font-family: Poppins;
    text-transform: uppercase;
}

.segment-two h2:before{
    content: '|';
    color: #c65039;
    padding-right: 10px;
}

.segment-two ul{
    margin: 0;
    padding: 0;
    list-style: none;
}

.segment-two ul li{
    border-bottom: 1px solid rgba(255,255,255,0.3);
    line-height: 40px;
}

.segment-two ul li a{
    color: #999;
    text-decoration: none;
}

.segment-three h2{
    color: #fff;
    font-family: Poppins;
    text-transform: uppercase;
}

.segment-three h2:before{
    content: '|';
    color: #c65039;
    padding-right: 10px;
}

.segment-three a{
    background: #494848;
    width: 40px;
    height: 40px;
    display: inline-block;
    border-radius: 50%;
}

.segment-three a i{
    font-size: 20px;
    color: #fff;
    padding: 10px 12px;
}

.segment-four h2{
    color: #fff;
    font-family: Poppins;
    text-transform: uppercase;
}

.segment-four h2:before{
    content: '|';
    color: #c65039;
    padding-right: 10px;
}

.segment-four form input[type=submit]{
    background: #c65039;
    border: none;
    padding: 3px 15px;
    margin-left: -5px;
    color: #fff;
    text-transform: uppercase;
}

.footer-bottom-text{
    text-align: center;
    background: #000;
    line-height: 75px;
}

/* responsive css */
@media only screen and (min-width: 768px) and (max-width: 991px){
    .md-mb-30{
        margin-bottom: 30px;
    }
} 

@media only screen and (max-width: 767px){
    .sm-mb-30{
        margin-bottom: 30px;
    }
    .footer-top{
        padding: 50px 0;
    }
} 

/* ****************** */

footer{
    width: 100%;
    background: #222;
    color: #aaa;
}
.bloc2{
    width: 100%;
    display: flex;
    flex-wrap: wrap;
}


form button{
    width: 50%;
    height: 40px;
    border: none;
    outline: none;
    background: crimson;
    font-size: 1.3em;
    cursor: pointer;
}
    
    </style>
</head>

<body>
    <!-- la banniere  -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark ">
            <!-- logo -->
            <a class="navbar-brand" href="index.php"><img src="../public/assets/LogoIvoireLanguagesTranslatoweb.png" height="60px" width="60px"></a>
            <!-- text ivoire language translator-->
            <a class="nav-link itltext" href="index.php"><span style="color: rgb(12, 199, 12); font-size :1.5em;font-family:Verdana,sans-serif "><b>IVOIRE </b></span><span style="color: rgb(255, 145, 77); font-size :1.5em;font-family:Verdana,sans-serif"><b>LANGUAGE</b></span><span style="color: rgb(12, 199, 12); font-size :1.5em;font-family:Verdana,sans-serif"><b>TRANSLATOR </b></span>
                <!-- icone telecharger sur playstore  -->
                <a href="https://play.google.com/store"><img src="../public/assets/google-play.svg" height="25px" width="30px" style="margin-bottom:2px;"></a>
                <!-- icone telecharger sur app store -->
                <a href="https://www.apple.com/ios/app-store/"><img src="../public/assets/company.svg" height="29px" width="30px" style="margin-bottom:7px;" class="img-fluid"></a>
            </a>
            <!--liste menu banniere -->
            <div class="collapse navbar-collapse  p-0 d-flex justify-content-end " id="navbarsExample02">
                <ul class="navbar-nav ">
                    <li class="nav-item active " style="vertical-align:auto;"></li>
                    <li class="nav-item  "><a class="nav-link itltextE" href="#" style="color:black;font-family:Arial,sans-serif;"><b>DICTIONNAIRE</b><span class="sr-only">(current)</span></a></li>
                    <li class="nav-item ml-3"><a class="nav-link itltextE" href="#" style="color:black;font-family:Arial,sans-serif;"><b>PRONONCIATION</b></a></li>
                    <li class="nav-item ml-2"><a class="nav-link itltextE" href="# " style="color:black;font-family:Arial,sans-serif;"><b>COMMERCIAL</b></a></li>
                    <li class="nav-item ml-3"><a class="nav-link itltextE" href="#" style="color:black;font-family:Arial,sans-serif;"><b>BLOG</b></a></li>
                    <li class="nav-item ml-3 ">
                        <div class="orange"><a class="nav-link itltextE " href="#" style="color:black; height:50%;font-family:Arial,sans-serif;"><b>À PROPOS</b></a></div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!--texte 1er bloc -->
    <div class="marge">
        <div style="text-align:center">
            <h2 style="color: #6c6c6c; font-weight:bold;font-size:2.8em;" class="espace">TRADUISEZ VOS TEXTES DANS L'ÈTHINIES QUE VOUS</h2>
            <h2 style="color: #6c6c6c; font-weight:bold;font-size:2.8em;" class="espace">VOULEZ GRATUITEMENT</h2><br>
            <h2 style="color: #9da9b6;" class="espace1">Traduisez instantanément vos documents et livres preferées avec<span style="color: rgb(12, 199, 12);">Ivoire</span><br><span style="color: rgb(255, 145, 77);">Languages</span><span style="color:rgb(12, 199, 12);">Translator<span></h2><br><br>
            <h5 style="color: #909eac;">DÉFINISSEZ LE TEXTE ET CLIQUEZ SUR TRADUIRE. PREND EN CHARGE LES FICHIERS TEXTE BRUT,
                PDF ET EPUB (EBOOKS).</h5>
        </div>
    </div>


    <!-- boutton envoyer nous vos commentaires -->
    <div style="text-align:center"><a href="../public/commentaire.php"><button style="width: 97%;background-color:#1e8449;height:50px;border-radius:20px;color:white;font-weight:bold;font-size:27px;border:none;" class="m-4 boutton">ENVOYEZ NOUS VOS COMMENTAIRES </button></a></div>



    <!-- espace traduction test-->
    <div class="container traduction" style="margin-top: 100px;margin-bottom:100px;"> <br><br><br>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col col-sm-6 ">
                    <select class="form-control" name="langue_start" id="langue_start">
                        <option value="" class=""> Sélectionner la langue d'origine </option>
                        <?php
                        $sql = "SELECT * FROM langues";
                        $result = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_array($result)) {
                            echo '<option>' . $row['langue'] . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="col col-sm-6">
                    <select class="form-control" name="langue_end" id="langue_end">
                        <option value="" class=""> Sélectionner la langue de traduction </option>
                        <?php
                        $sql = "SELECT * FROM langues";
                        $result = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_array($result)) {
                            echo '<option>' . $row['langue'] . '</option>';
                        }
                        ?>
                    </select>
                    <br><br>
                </div>
            </div>
            <div class="row">
                <div class="col col-sm-4">
                    <textarea class="textarea" name="champ1" id="champ1" cols="50" rows="5" onkeyup="check();"></textarea>
                </div>
                <div class="col col-sm-5">

                </div>
            </div>
            <div class="row">
                <div class="col col-sm-2">
                    <input type="submit" value="Traduire" name="Traduire" class="btn btn-success">
                </div>
            </div>
        </form>
<div class="row">
        <div class="tradwindow" id="champ1status col-lg-6 ">
            <?php


    
if (isset($_POST['Traduire'])) {

    $search_text = $_POST['champ1'];
    $langue_start = $_POST['langue_start'];
    $langue_end = $_POST['langue_end'];
    $ip = $_SERVER['REMOTE_ADDR'];

    $date = date("Y-m-d h:i:s");
    // $sql = "INSERT INTO recherche (search_text, langue_start, langue_end, ip, date_enrg) 
    // VALUES ('$search_text','$langue_start','$langue_end', '$ip', '$date')";

   

      $query = "SELECT * FROM data WHERE texte1 = '$search_text' AND langue_start = '$langue_start' AND langue_end = '$langue_end' ";
        $result = mysqli_query($con, $query);
        //var_dump($result);
        $rowcount=mysqli_num_rows($result);
        $row = mysqli_fetch_array($result);
        //var_dump($row);
        //var_dump($rowcount);
          if($rowcount > 0) {
          ?>
         
          
          <tr>
          <td> <?php echo $row['texte2']?> </td>
          <br>
          
            <audio controls>
              <source src="<?php echo $row['audio'] ?>" type="audio/mpeg">
            </audio>
          <p class="text-sm"><a href="suggestion.php">Soumettre une traduction ?</a></p>
          <br><br><br>
          </div>
          </div>
          </div>
          

          <?php  }else{
            echo "<p>aucune traduction trouvé </p><br><p class='text-sm'><a href='suggestion.php'>Soumettre une traduction ?</a></p>";
          }
           ?>

          <?php    
      }
else{
  echo '';
}


?>
        </div>
    </div>
    
    <!--  -->



    <!-- retrouver nous sur play store -->
    <div style="text-align:center">
        <h2 style="color: #828282;">Vous en voulez plus ? Découvrez notre <a href="#">application mobile (iOS et Android)</a><br><br>vous pourrez scanner un document a partitr de votre smartphone et bien plus encore</h2><br><br><a href="https://play.google.com/store"><img src="../public/assets/application-soluchrono-google-play-android - Copie.jpg" height="70px" width="215px"></a><a href="https://www.apple.com/ios/app-store/" style="margin-left: 20px;"><img src="../public/assets/image - Copie.png" height="75px" width="215px"></a>
    </div><br><br>




    <!-- BLOC CARACTERISTiQUES PRINCIPALES -->
    <div style="text-align:center;margin-bottom:20px;">
        <p>
            <h2 style="border-bottom: #6c6c6c; border-radius:10px;">CARACTÉRISTIQUES PRINCIPALES</h2>
            <center>
                <hr width="40%" color="#007bff">
            </center>
            <!-- ma partie commence ici -->
            <h2 style="margin-top:50px;margin-bottom:50px;color:#555555;letter-spacing: 3px;"><span style="color:rgb(12, 199, 12);">IVOIRE</span><span style="color:rgb(255, 145, 77);">LANGUAGE</span><span style="color:rgb(12, 199, 12);">TRANSLATOR </span>EST UN TRADUCTEUR DE TEXTE<br><br>GRATUIT QUI PREND EN CHARGE TOUT LES NAVIGATEURS<br>MODERNES,
                Y COMPRIS CHROME FIREFOX ET SAFARI</h2>
            <div class="row">
                <div class="col-sm-4">
                    <div class="">
                        <div class="card-body">
                            <center><img src="../public/assets/LogoIvoireLanguagesTranslatoweb.png" class="image-ronde" height="70px" width="70px"></center>
                            <h4 class="card-title" style="margin-top: 20px;">EN LIGNE,
                                GRATUIT.</h4>
                            <p class="card-text" style="margin-top:40px;color:#6b6b6b">Pas besoin de payer ou de creer de compte,
                                Insérer du texte facilement dans la zone de saisi et traduisez vos textes. Simplifier vous la vie avec Ivoire languages Translator.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="">
                        <div class="card-body">
                            <center>
                                <div class="cercle"><img src="../public/assets/cahier.png" height="30px" width="30px" style="margin-top:20px;"></div>
                            </center>
                            <h4 class="card-title" style="margin-top: 24px;">LIRE DES FICHIERS PDF,
                                DES TEXTES</h4>
                            <p class="card-text" style="color:#6b6b6b">Traduisez facilement des fichiers de type texte,
                                pdf,
                                ebook avec Ivoire Languages Translator. il recherche les mots dans vos documents puis les traduits grace a un algorithime performant.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="">
                        <div class="card-body">
                            <center>
                                <div class="cercle"><img src="../public/assets/img.png" class="image-ronde" height="30px" width="30px" style="margin-top:20px;"></div>
                            </center>
                            <h4 class="card-title" style="margin-top: 24px;">ACCESSIBLE PARTOUT DANS LE MONDE</h4>
                            <p class="card-text" style="color:#6b6b6b">Ivoire Languages Translator est accesibles ou que vous soyez. vous visitez la côte d'ivoire ? vous ne comprenez pas la langue locale ?alors ttraduisez avec Ivoire Languages Translator.</p>

                        </div>
                    </div>
                </div>
            </div>
        </p>
    </div>

    <!-- ligne pour delimiter juste un test-->
    <hr>

    <!-- bloc vert premier traducteur -->
    <div class="blocvert " style="text-align:center;"><span class="dot" style="color: white;" style="margin-bottom: 15px;"><i class=" fas fa-4x fa-star stars" aria-hidden="true"></i></span>
        <p class="textblocvert" style="margin-bottom: 35px;margin-top:30px">Premier traducteur de langues locales en côte d'ivoire <br> Construit pour vous facilter la vie .</p>
        <p class="textblocvert2" style="margin-bottom: 15px;">Vous trouvez qu'il ya un texte mal traduit ? Vous avez des idées pour nous aider à nous ameliorer ? Alors <br> n'hesitez pas envoyer nous un message nous vous répondrons dans les plus brefs délais</p><a href="commentaire.php"><button class="bouttonBlocVert">Envoyez un message </button></a>
    </div>

    <!-- Visites: $ visites;
    <table class="table table-dark">
        <thead>
            <tr>
                <th>NOMBRE DE VISITEUR :</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"> include('../compteurvisite.php'); ?></th>
            </tr>
        </tbody>
    </table> -->

    <footer>
	<div class="footer-top">
		<div class="container bloc2">
			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-12 segment-one md-mb-30 sm-mb-30">
					<h3 style="color: #fff;">A propos de nous</h3>
					<p style="color:#999;line-height:25px;">Ivoire Languages Translator a été conçu pour faciliter vos discutions avec d'autres communauté.</p>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 segment-two md-mb-30 sm-mb-30">
					<h3 style="color: #fff;">Contact</h3>
					<ul>
						<li><a href="#" style="color: red">SIMPLON COTE D'IVOIRE</a></li>
						<li><a href="#">no_reply@simplonline.co</a></li>
						<li><a href="#">00-00-00-00</a></li>
						<li><a href="#">Blog</a></li>
					</ul>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 segment-three sm-mb-30">
					<h3 style="color: #fff;">Suivez-nous</h3>
					<p>Réjoingnez nous sur google play & app storeger</p>
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-pinterest"></i></a>
				</div>
				 <div class="col-md-3 col-sm-6 col-xs-12 box segment-four sm-mb-30"> <!-
					<strong><h3 style="color: #fff;">Conidentalité et condition du site</h3></strong> 
					<p style="color:#999; line-height:25px;">Voir notre page <a href="#">Conidentalité et condition du site</a></p>
					<p style="color:#999; line-height:25px;">Donnez vos avis à propos du site</p>
				
				</div>
			</div>
		</div>
	</div>
	<p class="footer-bottom-text" style="color:#999; line-height:25px;">copyright &copy; - 2020</p>
	
</footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
