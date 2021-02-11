 <?php include("inc/header.php") ?>
<?php include("bd.php")?>

<!-- ---------------------- -->
<div class="text-success col bg-success text-light pt-auto pb-auto h3" style="height: 45px; text-align: center;" >

</div>
<!-- ---------------------- -->

<article style="background-color:#ccc; margin-left: 30%; margin-right: 30%; margin-top: 10%; margin-bottom: 10%; padding: 40px; border-radius: 50px">

<form id="teach_password" method="POST" action="trait_edit_teacher_password.php">
	<div>
	<h3 for="" class="form-label text-bold text-bold"> Ancien mot de passe :</h3>
	                 <div id="mes"></div>
	<br>                 
                              <input type="password" name="mdp_teacher" id="mdp_teacher " class="form-control" placeholder="Ancien Mot de passe">
    </div>
    <br>
    <div style="margin-left: 50%px">
                              <button type="submit" class=" form-group btn btn-success" id="mysubmit" name="edit" value="send"> Valider </button>
    </div>
</form>
</article>

<!-- ------------------ -->
<div class="text-success col bg-success text-light pt-auto pb-auto h3" style="height: 45px; text-align: center;" >

</div>

<?php include("inc/footer.php") ?>