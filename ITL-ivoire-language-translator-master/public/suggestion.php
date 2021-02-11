<?php
session_start();
?>

<?php include('../connection.php'); ?>

<!DOCTYPE html>
<html>

<head>
  <title>Ajouter un texte</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- favicon(icone) du site-->
  <link rel="icon" type="image/png" href="../public/assets/LogoIvoireLanguagesTranslatoweb.png" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/7cb0e7c261.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container center-div">

    <div class="container row d-flex flex-row justify-content-center mb-8">
      <div class="admin-form shadow p-5">


        <form action="" method="POST" enctype="multipart/form-data">

          <center>
            <h3>Enregistrer un texte</h3>
          </center><br>
          <div class="row">
            <div class="col form-group">
              <label class="font-weight-bold">Texte à traduire</label>
              <input type="text" class="form-control" id="texte1" placeholder="Saisir le texte" name="texte1" required>
            </div>

            <div class="col form-group">
              <label class="font-weight-bold">Langue d'origine</label>
              <select class="form-control" name="langue_start" id="langue_start" required>
                <option value="">Sélectionner une langue</option>
                <?php
                $sql = "SELECT * FROM langues";
                $result = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($result)) {
                  echo '<option>' . $row['langue'] . '</option>';
                }
                ?>
              </select>
            </div>
          </div>

          <div class="row">
            <div class="col form-group">
              <label class="font-weight-bold">Traduction</label>
              <input type="text" class="form-control" id="texte2" placeholder="Saisir le texte" name="texte2" required>
            </div>

            <div class="col form-group">
              <label class="font-weight-bold">Langue de traduction</label>
              <select class="form-control" name="langue_end" id="langue_end" required>
                <option value="">Sélectionner une langue</option>
                <?php
                $sql = "SELECT * FROM langues";
                $result = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($result)) {
                  echo '<option>' . $row['langue'] . '</option>';
                }
                ?>
              </select>
            </div>
          </div>

          <div class="row">
            <div class="col form-group">
              <label class="font-weight-bold">Ajouter un fichier audio</label>
              <input type="file" name="audio" id="audio">
            </div>
          </div>
          <input type="submit" name="Enregistrer" class="btn bg-success text-dark" id="enregistrer" value="Enregistrer">
        </form>
      </div>
    </div>
  </div>
  <?php include('../connection.php');

  if (isset($_POST['Enregistrer'])) {
    $texte1 = $_POST['texte1'];
    $langue_start = $_POST['langue_start'];
    $texte2 = $_POST['texte2'];
    $langue_end = $_POST['langue_end'];
    $date = date("Y-m-d h:i:s");
    $target_dir = "daudios/";
    $target_file = $target_dir . basename($_FILES["audio"]["name"]);

    $sql = "INSERT INTO suggestion (texte1, langue_start, texte2, langue_end, audio, datec)
  VALUES ('$texte1', '$langue_start', '$texte2', '$langue_end', '$target_file', '$date')";

    if (move_uploaded_file($_FILES['audio']['tmp_name'], $target_file)) {
      echo "Audio saved";
    }
    //  var_dump($con);
    //  var_dump($sql);
    $resultats = mysqli_query($con, $sql);
    //  var_dump($resultats);

    if ($resultats) {
      echo '<script language="Javascript">';
      echo 'document.location.replace("index.php")'; // -->
      echo ' </script>';

      echo "";
    } else {
      echo "";
    }
  } else {
    echo "";
  }



  ?>

</body>

</html>
