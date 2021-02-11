<?php
session_start();
include('../connection.php');


if (isset($_POST['soumettre']) and !empty($_POST['email']) and !empty($_POST['proposition'])) {
    $email = $_POST['email'];
    $proposition = htmlspecialchars($_POST['proposition']);
    $critiques = htmlspecialchars($_POST['critiques']);
    $sql = "INSERT INTO propositions (email, propositions, critiques)
  VALUES ('$email', '$proposition', '$critiques')";


    if (mysqli_query($con, $sql)) {
        echo '<script language="Javascript">';
        echo 'document.location.replace("../public/commentaire.php")'; // -->
        echo ' </script>';

        echo "";
    } else {
    }
    mysqli_close($con);
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../public/style/acceuil.css">

</head>


<body>
    <!-- formulaire propositions et -->
    <main class="container-fluid centrers">
        <div class="row">
            <div class="conteneur1">


                <!-- logo ITL -->
                <div class="itllogo">
                    <a href="../public/index.php">
                        <img src="../public/assets/LogoIvoireLanguagesTranslator.png" height="230px" width="260px" title="LOGO IVOIRE LANGUAGE TRANSLATOR" alt="LOGO IVOIRE LANGUAGE TRANSLATOR">
                    </a>
                </div>
                <div class="texteITL">
                    <p>
                        <span style="color: rgb(12, 199, 12);" class="h3">Ivoire</span>
                        <span style="color: rgb(255, 145, 77);" class="h3"> Language</span>
                        <span style="color: rgb(12, 199, 12);" class="h3"> Translator</span>
                    </p>
                </div>
                <br><!--  -->

                <!-- redirige vers la page dinsciption page dacceuil -->
                <p class="inscription">
                    <a href="../public/index.php">RETOURNEZ SUR LA PAGE D'ACCEUIL </a>
                </p><br>
                <!---->


                <!-- texte connexion -->
                <span style="color:rgb(166, 166, 166);" class="connexiontexte h5"><u>VOS COMMENTAIRES</u></span>


                <!--le formulaire -->
                <div class="formulaire">
                    <form method="POST" action="../public/commentaire.php">


                        <!-- email -->
                        <div class="form-group centrer1" style="margin-top: 30px;">
                            <label><strong>Email</strong></label><br>
                            <div>
                                <input type="email" name="email" placeholder="Entrer votre email" class="form-control col-11 postion1" style="background: #e1e1e1;">
                            </div>
                        </div>
                        <br>


                        <!-- VOS PROPOSITIONS D'AMELIORATIONS -->
                        <div class="form-group centrer1" style="margin-top: 30px;">
                            <label><strong>VOS PROPOSITIONS D'AMELIORATIONS</strong></label><br>
                            <div>
                                <textarea name="proposition" id="proposition" cols="56" rows="5" placeholder="Entrer vos differentes propositions !!" style="background: #e1e1e1;" required></textarea>

                            </div>
                        </div>
                        <br>

                        <!-- VOS CRITIQUES -->
                        <div class="form-group centrer1" style="margin-top: 30px;">
                            <label><strong>VOS CRITIQUES</strong></label><br>
                            <div>
                                <textarea name="critiques" id="proposition" cols="56" rows="5" placeholder="Entrer vos critiques !!" style="background: #e1e1e1;" required></textarea>

                            </div>
                        </div>
                        <br>


                        <!-- bouton envoyer -->
                        <button class="btn btn-warning" name="soumettre" type="submit" style="color: white;"><b>SOUMETTRE</b></button>


                    </form>
                </div>
            </div>
        </div>


    </main>
</body>

</html>