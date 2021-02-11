<?php session_start();
include('connection.php'); ?>

<!DOCTYPE html>
<html>

<head>
  <title>Traduction</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- favicon(icone) du site-->
  <link rel="icon" type="image/png" href="../public/assets/LogoIvoireLanguagesTranslatoweb.png" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/7cb0e7c261.js" crossorigin="anonymous"></script>
</head>

<body class="color">

  <div class="container center-div" id="color">

    <div class="container row d-flex flex-row justify-content-center mb-8">
      <div class="admin-form shadow p-4">
        <style>

        </style>
        <header>
          <center>
            <h3 class="text-success"><a href="userspage.php"> IVOIRE LANGUAGE TRANSLATOR </a></h3>
            <a href="#"><img src="logo.PNG" alt="logo" height="160" width="160"></a>
          </center>
        </header>
        <main class="">

          <div class="container center-block">
            <br>
            <div class="form-group">
              <form action="" method="POST" enctype="multipart/form-data">

                <select class="form-control" name="langue_start" id="langue_start">
                  <option value="" class=""> Sélectionner une langue </option>
                  <?php
                  $sql = "SELECT * FROM langues";
                  $result = mysqli_query($con, $sql);
                  while ($row = mysqli_fetch_array($result)) {
                    echo '<option>' . $row['langue'] . '</option>';
                  }
                  ?>
                </select>
                <br>
                <textarea name="champ1" id="champ1" cols="35" rows="5"></textarea>
            </div>

            <div class="form-group">
              <select class="form-control" name="langue_end" id="langue_end">
                <option value="" class=""> Sélectionner une langue </option>
                <?php
                $sql = "SELECT * FROM langues";
                $result = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($result)) {
                  echo '<option>' . $row['langue'] . '</option>';
                }
                ?>
              </select>
              <br><br>
              <input type="submit" value="Traduire" name="Traduire" class="btn btn-warning">
              </form>
            </div>
          </div>


      </div>
      </main>

      <div class="form-group">

        <?php

        if (isset($_POST['Traduire'])) {

          $search_text = $_POST['champ1'];
          $langue_start = $_POST['langue_start'];
          $langue_end = $_POST['langue_end'];
          $ip = $_SERVER['REMOTE_ADDR'];
          $date = date("Y-m-d h:i:s");
          // $sql = "INSERT INTO recherches (search_text, langue_start, langue_end, ip, date) VALUES ('$search_text','$langue_start','$langue_end', '$ip', '$date')";

          if (mysqli_query($con, $sql)) {

            $query = "SELECT * FROM data WHERE texte1 = '$search_text' AND langue_start = '$langue_start' AND langue_end = '$langue_end' ";
            $result = mysqli_query($con, $query);

            while ($row = mysqli_fetch_array($result)) { ?>

              <div class="container center-div">

                <div class="container row d-flex flex-row justify-content-center mb-8">
                  <div class="admin-form shadow p-4">
                    <table class="table table-bordered">
                      <tr>
                        <td> <?php echo $row['texte2'] ?> </td>
                        <td>
                          <audio controls>
                            <source src="<?php echo $row['audio'] ?>" type="audio/mpeg">
                          </audio>
                        </td>
                      </tr>
                    </table>
                    <p class="text-sm"><a href="addtextusers.php">Soumettre une traduction ?</a></p>
                  </div>
                </div>
              </div>
            <?php } ?>

        <?php
          }
        } else {
          echo '';
        }


        if (mysqli_query($con, $query)) {

          $a = " SELECT * FROM graph WHERE search = '$search_text' ";
          $b = mysqli_query($con, $a);
          $r = " DELETE FROM graph WHERE search = '$search_text' ";
          $g = "INSERT INTO graph (count, search)
              SELECT COUNT(id), search_text
              FROM recherches
              WHERE search_text = '$search_text'
              GROUP BY search_text
              ORDER BY COUNT(id) ";

          if (mysqli_num_rows($b) != 0) {

            mysqli_query($con, $r);
            mysqli_query($con, $g);
          } elseif (mysqli_num_rows($b) == 0) {

            $result_count = mysqli_query($con, $g);
          }
        }
        ?>

      </div>
    </div>
  </div>
  <footer class="bg-dark text-white text-center">
    <p> Copyright &copy; ILT </p>
  </footer>

  </div>
  </div>
  </div>
</body>

</html>