

 



<?php include("inc/header.php") ?><br><br>
<div class="col-md-5 p-0 row-cols-1 container justify-content-center">
<div  style="height: 50px; text-align: center;"  >
	<h1>Connectez Vous</h1>
</div>

<div class="container" style="background-color:#EDDFDB; padding-left:60px; margin-top:15px;" >
	<div class="row">
		<div class="col-md-6 offset-3">
             
			<form  id="student_login" method="POST" >
				<div id="message"></div>
				<div class="form-group">
                         <label for="" class="form-label text-bold text-primary">Votre Identifiant</label>
                              <input type="email" name="email" id="email" class="form-control">
					
				</div>

				<div class="form-group">
                         <label for="" class="form-label text-bold text-primary">Mot de Pass</label>
                              <input type="password" name="mdp" id="mdp" class="form-control">
					
				</div>

				 
                    <button type="submit" class=" btn btn-primary" id="mysubmit" name="send" value="send"> Valider </button>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="index.php">Acceuil</a>
                       
			</form>
			
		</div>
		
	</div>
	</div>
</div>
<?php include("inc/footer.php") ?>