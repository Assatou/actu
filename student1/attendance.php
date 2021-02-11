

<?php include("inc/header.php") ?>


<br><br>
<div class="col-md-5 p-0 row-cols-1 container justify-content-center">
<div class="text-primary col bg-primary text-light pt-auto pb-auto h3" style="height: 45px; text-align: center;" >
	Signez votre presence
</div>
<div class="container row d-flex flex-row justify-content-center">

  <div class="admin-form shadow p-4">

    <form class="" action="trait_attendance.php" method="POST" id="attendance">
    	<div id="message"></div>
          <div class="form-group  mb-3">
            <label for="" class="form-label text-bold text-primary"> Votre Email:</label>
            <input type="text" name="email" id="" value="" class="form-control " autocomplete="off">
          </div>
          <div class="form-group mb-3">
            <label for="" class="form-label text-bold text-primary">Mot de Passe:</label>
            <input type="password" name="mdp" id="" value="" class="form-control" autocomplete="off">
          </div>
          <input type="submit" class="btn btn-primary" name="submit" value="signer"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
         <a href="index.php">Acceuil</a>
    </form>
  </div>



</div>
<!-- <div class="col-md-8 row  justify-content-center " id="form">
  <?php if (isset($message) and !empty($message)) {?>

    <div class="alert alert-success alert-dismissible fade show " role ="alert" id="alert" >
      <?=$message?>
      <button type="button" class="close" data-dismiss="alert" aria-label="close" >&times;</button>

    </div>
    <?php  } ?>
</div> -->
</div>
<?php include("inc/footer.php") ?>