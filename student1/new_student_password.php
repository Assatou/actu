 
<?php include("inc/header.php") ?>
<?php include("bd.php")?>

<!-- ---------------------- -->
<div class="text-primary col bg-primary text-light pt-auto pb-auto h3" style="height: 45px; text-align: center;" >
<div id="profilPicture" class="col-md-2">
			 <a style="text-decoration:none; color:white"; href="student_dashboard.php">Retour</a>
			 </div>
</div>
<!-- --------------------- -->

<article style="background-color:#ccc; margin-left: 30%; margin-right: 30%; margin-top: 5%; margin-bottom: 5%; padding: 40px; border-radius: 50px">

<form id="new_password" method="POST" action="trait_new_student_password.php">
	<div>
	<h3 for="" class="form-label text-bold text-bold"> Nouveau mot de passe :</h3>
	                 <div id="messa"></div>
	<br>     


                              <input type="password" name="mdp" id="mdp" class="form-control" placeholder=" Mot de passe">
    </div>
    <br>
    <br>
    <div>
	<h3 for="" class="form-label text-bold text-bold"> Confirmer votre mot de passe :</h3>
	                 
	<br>     

	            
                              <input type="password" name="mdp2" id="mdp2" class="form-control" placeholder=" Mot de passe">
    </div>
    <br>
    <div style="margin-left: 50%px">
                              <button type="submit" class=" form-group btn btn-primary" id="mysubmit" name="send" value="send"> Valider </button>
    </div>
</form>
</article>

<!-- ------------------ -->
<div class="text-primary col bg-primary text-light pt-auto pb-auto h3" style="height: 45px; text-align: center;" >

</div>

<?php include("inc/footer.php") ?>