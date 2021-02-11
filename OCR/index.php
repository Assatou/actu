<!DOCTYPE html>
<html lang="en">
<head>
  <title>page accueil</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>


body{
     background-image:url(imagePresentation.png);
     background-repeat: no-repeat;
     background-size: cover;
}
     

.mon-bouton-refresh {
  user-appearance: none; /* "navigateur, laisse-moi faire */
  border: none;
  font-weight: bold; /* gras */
  font-size: 1.4rem; /* si le texte devient petit, mettre la valeur 1.6rem */
  color: white; /* blanc sur rouge foncé */
  background: #0000FF;
}     

  </style>
</head>

<script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script type="text/javascript">
  $(document).ready(function() {
    $('#connexion').click(function() {
      var connexion = true;
      $.ajax({
        type: "POST",
        url: 'logckeekAdmin.php',
        data: {
          connexion: connexion,
          email: $("#email").val(),
          password: $("#password").val()
        },
        success: function(data)
        {
          if (data === 'success') {

            alert("Bienvenue sur votre tableau de bord")
            
            window.location.assign('dashbord.php');
          }
          else {
            alert("Mauvaise combinaison d'email et de mot de passe!!");
          }
        }
      });
    });
  });
  </script>

<body>

<nav></nav>
 <br><br><br>
  <h1 style="text-align: center; color: red;"><strong> OPTICAL CHARACTER RECOGNITION </strong></h1><br><br><br><br>
<div class="row">

     <div class="col-1"></div>
     <div class="col-5">
     
     <div class="container col- border"><br>

<center><h3 style="color:blue;"><strong> CONNECTEZ-VOUS </strong></h3></center>

<form>

  <div class="form-group">
     <label>Email</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Entre votre email" required>
  </div>

  <div class="form-group">
    <label>Mot de Passe</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Entrer votre mot de passe" required>
  </div><br>
      
        
   <center><input type="submit" class="mon-bouton-refresh" id="connexion" value="CONNEXION" style="width: 40%; height: 50%;"></center><br>




   
</form>
</div>

</div>
     
     </div>
     <div class="col-6"></div>

</div>

 





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>