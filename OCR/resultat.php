<?php

 include 'conn.php';
  
      $sql = "select * from texte";
   
      $result = mysqli_query($conn,$sql);
      
      mysqli_close($conn);

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <title>Ocr resultat</title>
</head>
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
<br><br><br><br><br>


    <center><h1 style="color: blue;"><strong> LES RESULTATS DES TEXTES RECUPERES</strong></h1></center><br><br>

    <br><br>
 
    <center>

        <form name="frmSearch" method="post" action="">
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="" title="Type in a text"><br><br>
    </center>

<style>

table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: center;
}
th {
  text-align: center;
}

</style>






<center>

<?php if(!empty($result))  { ?>


<table style="width:60%" id="myTable">
  <tr>
  <th>IDENTIFIANTS</th>
    <th>TEXTES</th>
  </tr>

  <?php

while($row = mysqli_fetch_array($result)) {
?>

  <tr>
  <td><?php echo $row["id"]; ?></td>
  <td><?php echo $row["texte"]; ?></td>
  </tr>


  <?php
    }
   ?>
  </table>
<?php } ?>


</center>


<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    
    <script>

        // Fonction pour rechercher nun texte

        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>


    <script type="text/javascript">
    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });
    </script>

</body>
</html>