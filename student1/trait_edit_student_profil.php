
 <?php
 session_start();
 include("bd.php");
// on se connecte à MySQL et on sélectionne la base


$answer= null;
$statut= false;
if (isset($_POST) and isset($_FILES['profil']) and $_FILES['profil']['error'] == 0)
{
  $message= ' ';
  $nom = $_POST['nom'];
  $email = $_POST['email'];
  $tel = $_POST['tel'];
  $gender = isset($_POST['gender'])?$_POST['gender']:null;
  $profil = $_FILES['profil'];

   // renommer de l'image, le nom de l'ancienne image afin de permettre a la nouvelle image d'ecraser l'ancienne
  $editProfilName= $_SESSION['name_profil'];

  // traitements de l'image
     if ( $profil['size']>=5000) {

   $autorised_extention=array('jpg','jpeg','png');

    $prepare_ext=explode('.', $profil['name']);
     //La fonction explode () divise une chaîne en un tableau.
    $extention=array_pop($prepare_ext);
    //La fonction array_pop () selectionne la derniere valeur du tableau.
   $min_extention=strtolower($extention);
   if (in_array($min_extention, $autorised_extention)) {
     // 
    // 
     $statut=true; //ligne 8
     

   }else $answer='Le fichier importé n\'est pas une image';

  }
     else {

    $answer= 'l\'image selectionnée depasse la norme (5Mo Max)';
  }







   /* on test si les champ sont bien remplis */
    if(!empty($_POST['nom']) and !empty($_POST['email'])  and !empty($_POST['tel']) and !empty($_POST['gender']))
    {
       

                if ($statut===true) {// si le statut vaut true on peux envoyer l'image (voir ligne 36)


                //On créé la requête
                  $sql = "UPDATE etudiant SET nom = '{$nom}',email = '{$email}',tel='{$tel}',gender='{$gender}',name_profil='{$editProfilName}' WHERE iduser = '{$_SESSION['iduser']}'";

                $result= $conn->query($sql);
                /*$result= mysqli_query($conn,$sql);*/ //version mysqli


                  // deplacement de notre image vers du dossier temporaire vers notre dossier avatar
                  move_uploaded_file($profil['tmp_name'], 'avatar/'.$editProfilName. '.jpg');
 
                               

              if (!$result) {

                $answer= "Query Failed";

              }else {
                $answer='ok';
              }


              }

    }
    else $answer= "Veuillez saisir tous les champs !"; 

}else $answer="impossible de traiter le formulaire, verifiez que tout les champs ont bien été remplis";

$output=array('msg'=>$answer); 

echo json_encode($output);


?>

