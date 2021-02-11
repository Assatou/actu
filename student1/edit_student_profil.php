   


<?php include("inc/header.php") ?>
<?php include("bd.php")?>

	 
<article style="margin-left: 20px; background-color: #f8f4f4; margin-right: 20px; padding-top: 30px;  padding-bottom: 25px;">	  

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

<aside style="margin-top: 80px;">
<br>

<section style="margin-left:29%; margin-top: 20px; margin-right: 29%">


<form class="container justify-content-center" method="POST" action="" id="form_edit_student" style="border: 3px; border-color: blue;">
   <div id="message" style="width: "></div>
	<div class="form-group row pb-2 pt-2">
	<h3>Nom et Prenom : </h3><input type="text" value="<?= $_SESSION['nom']; ?>" name="nom">
     </div>

     <div class="form-group row pb-2 pt-2">
	<h3>Email : </h3><input type="text" value="<?= $_SESSION['email']; ?>" name="email">
     </div>

     <div class="form-group row pb-2 pt-2">
<h3>Numero de Telephone : </h3><input type="text" value="<?= $_SESSION['tel']; ?>" name="tel">
     </div>

     <div class="form-group row pb-2 pt-2">
	<h3>Genre : </h3><label>
            <input type="radio" name="gender" value="<?= $_SESSION['gender']; ?>"> Masculin
            </label>
            <label>
               <input type="radio" name="gender" value="<?= $_SESSION['gender']; ?>"> Feminin
             </label>

     </div>

      <div class="form-group">
                         <label for="profil" class="form-label text-bold text-primary">Modifier ma photo de profile</label>
                            <input type="file" name="profil" id="profil">  
					
				</div>
				<div class="col-md-6">	
				 
                           <button type="submit" class=" btn btn-primary" id="mysubmit" name="edit" value="send"> Modifier </button>
                </div>

</form>

</section>

</aside>
</article>

<!-- ---------pour editer les informations du student, on fera un champs de formulaire pour update; on poura voir les anciens informations grace aux les values du input formulaire qui prendrons les valeurs stokés dans la session,ex:(<?= $_SESSION['nom']; ?>) on fera nos requetes maitenant avec les sessions
au fait les sessions stokent les informations relatives a la personne connectée -------------------- -->

    <?php include("inc/footer.php") ?>
