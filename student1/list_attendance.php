 

<?php include("inc/header.php") ?>
<?php include("bd.php")?>

<!-- menu vertical -->
<?php include("menu_vertical.php")?>
<!-- ---------- -->

<br><br>
<!------ Dashboard ---------->

     <?php 
     $exep="";
     $sql="SELECT etudiant.nom, synthese.datesign, synthese.timesign FROM etudiant, synthese WHERE etudiant.iduser = synthese.iduser AND synthese.datesign!='{$exep}' AND synthese.timesign!='{$exep}'";
    $query=$conn->query($sql);  
    $result=$query->fetchAll();
    $count = 1;
  ?>
  <h2 style="text-align: center; color: green; margin-top: 3%">Liste</h2>
  <br>
<div class="container" style="margin-left: 200px;">
    <div class="table-responsive table-bordered">
            <table class="table movie-table">
                  <thead>
                  <tr class= "movie-table-head">
                      <th>N°</th>
                      <th>Nom de l'etudiant</th>
                      <th>Date de signature</th>
                      <th>Heure de signature</th>   
                  </tr>
              </thead>   
              <tbody>
               
               <?php foreach ($result as $row): ?>   
                <!--row-->
                <tr>
                    <th><?=$count++?></th>
                    <td><?= $row['nom']?></td>
                <td><?= $row['datesign']?></td>
                <td><?= $row['timesign']?></td>                                       
                </tr>
            <?php endforeach ?>
            <!--fin de La structure foreach -->
  
              </tbody>
            </table>
            </div>
</div>
<br><br>



    <?php include("inc/footer.php") ?>