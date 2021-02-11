
<br>
<br>
<?php 

 $attend=$conn->query("SELECT * FROM etudiant");  
    $result= $attend->fetchAll();
    $count = 1;
 ?>

 <div class="container" style="margin-left: 200px;">
    <div class="table-responsive">
      <h2 style="text-align: center;">Attendance Table</h2>
<br>
            <table class="table movie-table" style="margin-left: 25%; width: 60%">
                  <thead>
                  <tr class= "movie-table-head">
                      <th>N°</th>
                      <th>Nom de l'etudiant</th>
                      <th>Nombre de Presences</th>
                      <th>Profil</th> 
                  </tr>
              </thead>   
              <tbody>
               
               <?php foreach ($result as $row): ?>   
                <!--row-->
            <tr>
                    <th><?=$count++?></th>
                    <td><h5><?= $row['nom']?></h5></td>
                <td><?= $row['total_sign']?></td>
                <td><a href="student_actu.php?id_msg=<?php echo $row['iduser']?>"><img src="<?= 'avatar/' .$row['name_profil']. '.jpg'?>" style="width:50px;;height:60px;border-radius: 50%"></a>
                  <!-- affichage de la photo de l'etudiant par insertion de l'image grace au name profil stoké depuis la base de donnée; (id_msg->iduser messager contenant l'iduser du student) et envoie de l'iduser obtenu de la requete "$result" vers le fichier ("student_actu.php" qui se chargera d'afficher l'actuaité de chaque etudiant)-->
                </td>

            </tr>
            <?php endforeach ?>
            <!--fin de La structure foreach -->
  
              </tbody>
            </table>
            </div>
</div>
<br><br>