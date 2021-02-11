
<?php include("inc/header.php") ?>
<?php include("bd.php")?>



<!-- ---------------------- -->
<div class="text-success col bg-success text-light pt-auto pb-auto h3" style="height: 45px; text-align: center;" >

<div style="background-color: #454545"; class="col-md-2">
			 <a style="text-decoration:none; color:white"; href="dashboard.php">Retour</a>
			 </div>
</div>

</div>
<!-- --------------------- -->

<article style="background-color:#ccc; margin-left: 30%; margin-right: 30%; margin-top: 5%; margin-bottom: 5%; padding: 40px; border-radius: 50px">

<form id="f-pass" method="POST" action="trait_new_teacher_password.php">
	<div>
	<h3 for="" class="form-label text-bold text-bold"> Nouveau mot de passe :</h3>
	                 <div id="msag"></div>
	<br>     


                              <input type="password" name="mdp_teacher" id="mdp_teacher" class="form-control" placeholder=" Mot de passe">
    </div>
    <br>
    <br>
    <div>
	<h3 for="" class="form-label text-bold text-bold"> Confirmer votre mot de passe :</h3>
	                
	<br>     

	            
                              <input type="password" name="mdp_teacher2" id="mdp_teacher2" class="form-control" placeholder=" Mot de passe">
    </div>
    <br>
    <div style="margin-left: 50%px">
                              <button type="submit" class=" form-group btn btn-success" id="mysubmit" name="send" value="send"> Valider </button>
    </div>
</form>
</article>

<!-- ------------------ -->
<div class="text-success col bg-success text-light pt-auto pb-auto h3" style="height: 45px; text-align: center;" >

</div>

<?php include("inc/footer.php") ?>