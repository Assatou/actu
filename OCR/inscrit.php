<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- <link href="css/style.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<title> Formulaire Enregistrement</title>

<style>

  body{
     background-image:url(imagePresentationinscrit.png);
     background-repeat: no-repeat;
     background-size: cover;
}


.mon-bouton-refresh {
  user-appearance: none; /* "navigateur, laisse-moi faire */
  border: none;
  font-weight: bold; /* gras */
  font-size: 1rem; /* si le texte devient piti, mettre la valeur 1.6rem */
  color: white; /* blanc sur rouge foncé */
  background: #0000FF;
  
}  


</style>

</head>
<body>
<br><br><br>




<div class="row">
    <div class="col-1"></div>
    <div class="col"></div>
    <div class="container col">
  
    <center>
         <div class="container col- border">
             <h1>Formulaires</h1>
             <form>
                 <div class="form-group">
                   <label for="nom">Nom et Prenoms</label>
                   <input type="text" class="form-control" name="username" id="UserName" placeholder="Entrer votre nom et Prenoms" required>
                 </div>
                 
                 <div class="form-group">
                   <label for="email">Adresse Email</label>
                   <input type="email" class="form-control" name="useremail" id="UserEmail" placeholder="Email" placeholder="votre Email" required >
                   
                 </div>

                <div class="form-group">
                   <label for="password">Mot de passe</label>
                   <input type="password" class="form-control"  name="userpass" id="UserPassword" placeholder="votre mot de passe" maxlength="10" required>
                 </div>

                <div class="form-group">
                   <label for="nu">Telephone</label>
                   <input type="telephone" class="form-control"  name="userphone" id="UserPhone" placeholder="votre numero de telephone" required >
                   
                 </div><br>


                  <center><input type="submit" class="mon-bouton-refresh" value="Valider" style="width: 80%; height: 30%;"></center><br> 

             </form>
             <h6> Cliquer <a href="index.php">ici</a> pour se connecter.</h6>
     </center>
   </div>
  
   <div class="col-"></div>
  
  </div>
  </div>
</div>



   
   </body>
</html>