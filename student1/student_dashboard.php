 


<?php include("inc/header.php") ?>
<?php include("bd.php")?>



	 
<article style="margin-left: 20px; background-color: #f8f4f4; margin-right: 20px; padding-top: 30px;">	  

<!-- ------------------------ -->

<div id="container" style="position: fixed;">
		
<div class="row">

			 <div id="profilPicture" class="col-md-2">
			 <a style="text-decoration:none; color:white"; href="student_dashboard.php">About Me</a>
			 </div>

			 <div id="profil" class="col-md-2">
			 	<a style="text-decoration:none; color:white"; href="edit_student_password.php">Edit my password</a>
			 </div>

			 <div id="profil" class="col-md-2">
			 	<a style="text-decoration:none; color:white"; href="edit_student_profil.php">Edit my profil</a>
		 	 </div>

			 <div id="deconnexion" class="col-md-2">
			 <a style="text-decoration:none; color:white"; href="student_logout.php">Deconnection</a>
			 </div>

</div>
</div>


<!-- ------------------------ -->

<aside style="margin-top: 100px;">
<br>
<h1>  <?= $_SESSION['nom']; ?> : Profil</h1>
<!-- Photo de profil -->

<div class="row">
<div class="card-body col-sm-3">

	<img src="<?php echo 'avatar/' .$_SESSION['name_profil']. '.jpg' ?>" style="width:230px;height:220px; border-radius: 50px;">
 
</div>

<!-- Info de profil -->
<div style="width: 850px;">
<div class="card-body col-sm-6">
	
	<div class="row pt-3">
		<div class="col">Name and Surname : </div>
		<div class="col">  <?= $_SESSION['nom']?> </div>
	</div>

	<div class="row pt-3">
		<div class="col">Number : </div>
		<div class="col">  <?= $_SESSION['tel']?> </div>
	</div>

	<div class="row pt-3">
		<div class="col">Total Attendance : </div>
		<div class="col">  <?= $_SESSION['total_sign']?></div>
	</div>	
	

	<div class="row pt-3">
		<div class="col">  Total Absences : </div>
		<div class="col"> <?= $_SESSION['total_absence'] ?></div>
	</div>

</div>
</div>
</div>

</aside>
</article>
<!-- ------Attendance graph By Year -->
<br>
<?php include("graphic.php")?>
<!-- ------------------- -->

<!-- Voir ses absences -->
<article style="width: 40%;">
<?php
	$exep="";
 $sql="SELECT date_absence, causes FROM synthese WHERE iduser='{$_SESSION['iduser']}' AND synthese.date_absence !='{$exep}'";
    $query=$conn->query($sql);  
    $result=$query->fetchAll();
  ?>
  <br>
  <h3 style="background-color: #ccc; color: blue;margin: 2px;width: 50%">Absence Tabble</h3>
<div class="container">
    <div class="table-responsive">
            <table class="table movie-table">
                  <thead>
                  <tr class= "movie-table-head">
                        
                      <th>Dates d'Absences</th>
                      <th>Causes</th>   
                  </tr>
              </thead>   
              <tbody>
               
               <?php foreach ($result as $row): ?>   
                <!--row-->
                <tr>
                    
                <td><?= $row['date_absence']?></td>
                <td><?= $row['causes']?></td>                                       
                </tr>
            <?php endforeach ?>
            <!--fin de La structure foreach -->
  
              </tbody>
            </table>
            </div>
</div>
</article>

    <?php include("inc/footer.php") ?>

