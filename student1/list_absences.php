 

<?php include("inc/header.php") ?>
<?php include("bd.php")?>

<!-- menu vertical -->

<?php include("menu_vertical.php")?>

<!--  -->
<br><br>
<!------ Dashboard ---------->

     <?php 
     $exep="";
     $sql="SELECT etudiant.nom,synthese.id_synthese ,synthese.date_absence, synthese.causes FROM etudiant, synthese WHERE etudiant.iduser = synthese.iduser AND synthese.date_absence !='{$exep}'";
    $query=$conn->query($sql);  
    $result=$query->fetchAll();
    $count = 1;
  ?>
  <h2 style="text-align: center; color: green; margin-top: 3%;">Liste D'Absences</h2>
  <br>
<div class="container" style="margin-left: 175px; margin-right: 5px;">
    <div class="table-responsive">
            <table class="table movie-table">
                  <thead>
                  <tr class= "movie-table-head">
                      <th>N°</th>
                      <th>Nom de l'etudiant</th>
                      <th>Date d'Absence</th>
                      <th>Causes</th>
                      <th colspan="2">Action</th>   
                  </tr>
              </thead>   
              <tbody>
               
               <?php foreach ($result as $row): ?>   
                <!--row-->
                <tr>
                    <th><?=$count++?></th>
                    <td><?= $row['nom']?></td>
                <td><?= $row['date_absence']?></td>
                <th><?= $row['causes']?></th>
                      <td>
                        
              <button class="btn btn-primary"><a href="action.php?edit=<?php echo $row['id_synthese']?> class=btn btn-info" style="text-decoration: none; color: white;" >Edit</a></button>
<!-- envoie de l'id_absence ($row['id_absence'] a la page de traitement (action.php) a travers l'url) -->

                      </td>                                       
                </tr>
            <?php endforeach ?>
            <!--fin de La structure foreach -->
  
              </tbody>
            </table>
            </div>
</div>
<br><br>
<!-- ----------------------------------- -->
<!-- ----------------------------------------- -->
<!-- ----------------traitement de action.php--on desire traiter notre formulaire d'edit dans la page ou se trouve l'id_absence afin de faciliter les chose. vu que c'est dans ce fichier qu'on a declarer et extraire (l'id_absence) -->


<!-- ---------------------------------------- -->
<!-- ------------------------------------------- -->


    <?php include("inc/footer.php") ?>


