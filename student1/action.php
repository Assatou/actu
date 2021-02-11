 <?php include("bd.php")?>

<?php
 // traitement du formuliare de mis a jour des causes d'absence de l'eleve
  if (isset($_POST)) {
    // on recupere le "edit" (contenant l'id_absence) envoyé par l'url; voir(tabeau list_absence.php)--- 
    $edit=$_GET['edit'];
   
   
   $causes= isset($_POST['causes'])?$_POST['causes']:null;
    if (!empty($causes) and isset($causes)) {

   $up=  $conn->query("UPDATE synthese SET causes ='{$causes}' WHERE id_synthese= '{$edit}'");

if ($up) {
  echo "la cause mis a jour avec success";
} else "query failled";

    }else echo "Veuillez remplir le champ vide svp";
  }

 ?>


<?php include("inc/header.php") ?>
<!-- ----------------- -->
<?php 
$found=$conn->query("SELECT iduser FROM synthese WHERE id_synthese='{$edit}'");
foreach ($found as $key) {
  // recherche de l'iduser de l'etudiant
        $id_msg=$key['iduser'];
}
 ?>
<!-- ----------------- -->
<aside style="background-color:#ccc; margin-left: 30%; margin-right: 30%; margin-top: 5%; margin-bottom: 5%; padding: 40px; border-radius: 50px">
  <!-- formuliare de mis a jour des causes d'absence de l'eleve -->
<form class="" action="" method="POST" id="action" style=" margin: 10%;">
    	

          <div class="form-group mb-3">
            <h3 for="" class="form-label text-bold text-bolt">Causes :</h3>
            <input type="text" name="causes" id="" value="" class="form-control" autocomplete="off" style="height: 15%; width: 90%">
          </div>
          <input type="submit" class="btn btn-success" name="edit" value="Mis a jour"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
          <!-- renvoie de l'id_msg a student.php -->
           <a href="student_actu.php?id_msg=<?php echo $key['iduser']?>">back</a>
         
    </form>
</aside>

    <?php include("inc/footer.php") ?>
