<?php include('db.php'); ?>

<!Doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>creation de compte</title>
    <style>
      .container{
        width: 400px;
        height: 400px;
        margin-top: 100px;
        border-radius: 50px;
      }
      .head{
        margin-top: 10px;
        margin-bottom: 30px;
      }
    </style>
  </head>
  <body style="background-color:blueviolet;">
    
    <div class="container">

      <div>
        <h2 class="head">CREER VOTRE COMPTE</h2>
      </div>
        <form action="" class="was-validated" method="POST">
          <div class="form-group">
            <label for="name">Username:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter username" name="name" required>
        
          </div>
          <div class="form-group">
            <label for="name">Email:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter email" name="email" required>
        
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
        
          </div>
          <div class="form-group form-check">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" name="remember" required> j'accepte les conditions d'utilisation.
        
            </label>
          </div>
          <button type="submit" class="btn btn-primary" name="valider" id="valider">valider</button>
        </form>

        <div>
          déja un compte?<a href="Connexion.php">connectez-vous</a>
        </div>

    </div>

        <?php 
 

                if (isset($_POST['valider'])) {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    var_dump($name);

                    $sql = "INSERT INTO `utulisateur`( `name`, `email`, `password`) VALUES ($name,$password,$email)";
                    var_dump($sql);
                    
                                if (mysqli_query($con, $sql)) {
                            echo "Succès";
                            } else {
                            echo "Error: " . $sql . "<br>" . mysqli_error($con);
                            }
                }



  ?> 


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>