<?php include("inc/header.php") ?>
<?php include("bd.php")?>

<!-- ---------------------- -->

<div class="text-success col bg-success text-light pt-auto pb-auto h3" style="height: 60px; text-align: center;" >
	<h1>
   Student Actuality
  </h1>
</div> 
<a href="attendance_graph.php" style="text-align:center;">------Retour Attendance Graph</a>
<br>
<?php
 // recuperaration du "id_msg" (contenant l'iduser du student) envoyé par l'url depuis e fichier ('')
$id_msg=$_GET['id_msg'];
 
 $displ=$conn->query("SELECT * FROM etudiant WHERE iduser='{$id_msg}'");
 while ($disp=$displ->fetch()) {
 	
 	$disp_nom= $disp['nom'];
 	$disp_email = $disp['email'];
 	$disp_tel = $disp['tel'];
 	$disp_gender = $disp['gender'];
 	$disp_name_profil = $disp['name_profil'];
 	$disp_date_inscript = $disp['date_inscript'];
 	$disp_total_sign= $disp['total_sign'];
 	$disp_total_absence= $disp['total_absence'];
 }

 ?>
 <aside style="margin-top: 3%; background-color: #ddd;border-color: green;  border-radius: 25px; color: black; padding:3%; margin-left:16%; margin-right: 16%;border-width: 5px; ">
 	<h3>Identité</h3>

<div class="row">
		<div class="col">
			 	<div class="row" style="margin-top: 25px">
			 		<div class="col">Nom :&nbsp;</div>
			 		<div class="col"><h6><?= $disp_gender ?>&nbsp;<?= $disp_nom ?></h6></div>
			 	</div>

				 <div class="row" style="margin-top: 25px">
				 		<div class="col">Email :&nbsp;</div>
				 		<div class="col"><h6><?= $disp_email ?></h6></div>
				 	</div>

				 <div class="row" style="margin-top: 25px">
			 		<div class="col">Numero de telephone :&nbsp;</div>
			 		<div class="col"><h6><?= $disp_tel ?></h6></div>
			 	</div>

			 	<div class="row" style="margin-top: 25px">
				 		<div class="col">Date d'Inscription :&nbsp;</div>
				 		<div class="col"><h6><?= $disp_date_inscript ?></h6></div>
				 	</div>
		 </div>
		 <!-- ----------------------- -->

		<div class="col" style="margin: 5px;">
			<img src="<?= 'avatar/' .$disp_name_profil. '.jpg'?>" style="width:160px;height:170px; margin-left: 110px;border-radius: 10px;">
			<div>
 
	<div class="row" style="margin-left: 75px; margin-top: 30px">
			Nombre Total de Presence :&nbsp;<h6><?= $disp_total_sign ?></h6>
    </div>
	<div class="row" style="margin-left: 75px;">
	Nombre Total de d'Absence :&nbsp;<h6><?= $disp_total_absence ?></h6>
  </div>
			</div>
		</div>
</div>
 
 </aside>
 <!-- // -------------------------------------------------((((())))) -->
<!-- -----------incluire le graph de presence par an de chaque etudiant(graphic.php) --------- -->
<aside style="margin:3%";>


	<h3 style="background-color: green;width:35%; color: white;margin: 2px;">Attendance Graph by Year</h3>
	<?php include("graphic_teacher.php")?> 


</aside>
<!-- ---------------------------------------->
<aside style="margin-top: 2%; background-color: white;border-color: green;  border-radius: 25px; color: black; padding:3%; margin-left:20%; margin-right: 20%;border-width: 5px; ">
	<h3 style="background-color: green; color: white;margin: 2px;">Absences Table</h3>

<?php 
$exep="";
$aspl=$conn->query("SELECT * FROM synthese WHERE iduser ='{$id_msg}'AND synthese.date_absence !='{$exep}'");
  $as=$aspl->fetchAll();
 ?>
<div class="table-responsive">
            <table class="table movie-table">
                  <thead>
                  <tr class= "movie-table-head">
                      <th>Date d'Absence</th>
                      <th>Causes</th>
                      <th colspan="2">Action</th>   
                  </tr>
              </thead>   
              <tbody>
               
               <?php foreach ($as as $row): ?>   
                <!--row-->
                <tr>
                    <td><?= $row['date_absence']?></td>
                <td><?= $row['causes']?></td>
                      <td>
              <button class="btn btn-success"><a href="action.php?edit=<?php echo $row['id_synthese']?> class=btn btn-info" style="text-decoration: none; color: white;" >Edit</a></button>
<!-- envoie de l'id_absence ($row['id_absence'] a la page de traitement (action.php) a travers l'url) -->
                      </td>                                       
                </tr>
            <?php endforeach ?>
            <!--fin de La structure foreach -->
  
              </tbody>
            </table>
            </div>
	
</aside>

<br>

<?php include("inc/footer.php") ?>