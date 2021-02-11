
<?php

function verifie($donnees){
 
   $donnees = (string) $donnees;
         if (isset($donnees) && !empty($donnees)) {
           return $donnees;
         }
         else {
           return false;
         }

 }

$answer=null;

// on crée une variable $answer a cause de JSON

if (isset($_POST)) {

    include("bd.php") ;
  // $db = mysqli_select_db($conn,'student_attendance');
  $email= $_POST['email'];
  $mdp = sha1($_POST['mdp']);
  $message = '';
$datesign = date('Y-m-d');
 if (verifie($email) AND verifie($mdp)   ) {
  // -------------------------------------------------((((()))))
// ------------Verifier si le teacher a indiqué le debut des cours----------
   $ind="SELECT * FROM horraire WHERE date_class='{$datesign}'";
   $indiq= $conn->query($ind);
   if ($indiq->rowCount()>0 and $indiq->rowCount()<2) {
  
  // -------------------
$sql = " SELECT iduser  FROM etudiant WHERE email ='$email' and mdp ='$mdp'";
   
  //requette vers la BDD
  $query = $conn->query($sql);
  //récuperation de donnée: fetch (vas chercher) retourne une entrée depuis la table
  $user = $query->fetch();
  if ($user) {
// si l'entre a ete trouve avec la requete qu'on a lancé
$iduser = $user["iduser"];

// verifier si l'utilisateur a deja signé a la meme date
$datesign = date('Y-m-d');
 $verif = "SELECT iduser  FROM etudiant WHERE iduser ='{$iduser}'AND statut=0";
 
 //requette vers la BDD
$ver = $conn->query($verif);
 // --------------------------------------------------------((((()))))
$any=$ver->fetch();
  if (!$any) {
// s'il n'y a pas de resultats 

// --------mis a jour du statut(0 OU 1) de presence dans la table etudiant/colone statut-------------

  $conn->query("UPDATE etudiant SET statut = statut-1 WHERE iduser = '{$iduser}'");
// --------------------------------------------------------((((()))))
//   // mis a jour des données de presence dans la table synthese juste apres signature
$while=$conn->query("SELECT * FROM etudiant WHERE iduser='{$iduser}'");
$vari=$while->fetchAll();
foreach ($vari as $row) {

  $r_iduser=$row['iduser'];
  $r_date_class=$row['date_class'];
  $r_statut=$row['statut'];
// -----inserer les données de presence 
  $conn->query("INSERT INTO synthese SET iduser = '{$r_iduser}',datesign = '{$r_date_class}',timesign = NOW(), statut='{$r_statut}'");
  }
// --------------------------------------------------------((((()))))
      // --------Etape-3-Determiner le nombre de presence dans la table synthese apres que le student est signé a nouveau----------------
  $resu=$conn->query("SELECT statut FROM synthese WHERE iduser = '{$iduser}' AND statut = 0");

    $t_attd=$resu->rowCount();
    // ----mis a jour du nombre de presence dans la table etudiant 
    $a=$conn->query("UPDATE etudiant SET total_sign = '{$t_attd}' WHERE iduser = '{$iduser}'");

    if ($a) {
      $answer="ok" ; 
    }else $answer="Query failled";
  
// -----------Mis a jour de la table mouth apres signature-----------((((()))))

include("mouth_attd.php");

// -------------------------------------------------((((()))))

   } else $answer="Vous avez deja signé votre presence aujourd'huit" ;
   
  } else $answer="email ou mot de pass invalide";
   // ------------------
        // -------------------------------------------------((((()))))
   }else $answer = "Vous n'etes pas autorisé a signer en ce moment";
 // ----------------------
}else $answer="remplissez tous les champs svp";

 }

$output=array('msg' =>$answer);


echo json_encode($output);

?>