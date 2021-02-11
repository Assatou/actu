
 <?php
 include("bd.php");
// on se connecte à MySQL et on sélectionne la base


$answer= null;
$statut= false;
if (isset($_POST) and isset($_FILES['profil']) and $_FILES['profil']['error'] == 0)
{
  $message= ' ';
  $nom = $_POST['nom'];
  $email = $_POST['email'];
  $mdp =  sha1($_POST['mdp']);
  $mdp2 =  sha1($_POST['mdp2']);
  $tel = $_POST['tel'];
  $gender = isset($_POST['gender'])?$_POST['gender']:null;
  $profil = $_FILES['profil'];

   // renommer de l'image
  $newProfilName= uniqid('std_att').time().'_'.rand(100,999);

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
    if(!empty($_POST['nom']) and !empty($_POST['email'])  and !empty($_POST['mdp']) and !empty($_POST['mdp2']) and !empty($_POST['tel']) and !empty($_POST['gender']))
    {
       
     $verif = "SELECT * FROM etudiant WHERE email ='$email' or tel = '$tel'" ;
                 $ver = $conn->query($verif);
                 $verif_etud = $ver->fetch();
                 if (!$verif_etud) {
                  // verifie si l'utilisateur est deja inscrit a travers son email ou numero de telephone

        /* on test si le mdp contient bien au moins 6 caractère */
        if (strlen($_POST['mdp'])>=6)
        {
            /* on test si les deux mdp sont bien identique */
            if ($_POST['mdp']==$_POST['mdp2'])
            {
                // On crypte le mot de passe
                $_POST['mdp'] = sha1($_POST['mdp2']);
                
   
                if ($statut===true) {// si le statut vaut true on peux envoyer l'image (voir ligne 36)

$date_inscript=date('Y-m-d');
$stat='1';
                //On créé la requête
                  $sql = 'INSERT INTO etudiant(nom,email,mdp,tel,gender,name_profil,date_inscript,date_class,statut) VALUES ("'.$nom.'","'.$email.'","'.$mdp.'","'.$tel.'","'.$gender.'","'.$newProfilName.'","'.$date_inscript.'","'.$date_inscript.'","'.$stat.'")';

                $result= $conn->query($sql);
                /*$result= mysqli_query($conn,$sql);*/ //version mysqli


                  // deplacement de notre image vers du dossier temporaire vers notre dossier avatar
              move_uploaded_file($profil['tmp_name'], 'avatar/'.$newProfilName. '.jpg');
 // move_uploaded_file -> onction permettant de deplacer l'image vers un dossier

                  /**
           * @param $profil['tmp_name'] => recupere le fichier depuis le dossier temporaire
           * @param parametre2 => destination du fichier (s'il existe un dossier qui doit contenir les fichier,) + Le nom du fichier ($profil['name']) ou nous pouvons le renommer dans notre cas ('avatar/'.$newProfilName . '.jpg') :
           'avatar' => le dossier qui contiendra les fichiers importés

           ($newProfilName . '.jpg') => renommer le fichier
           '$newProfilName' => le nom generé (voir plus haut ligne 21)
           'jpg' => l'extention du fichier
           */

           // ---Insertion de l'iduser du nouvel inscrit dans la table mouth-----------((()))
           $agn=$conn->query("SELECT iduser FROM etudiant WHERE email ='$email' and mdp ='$mdp'");
           $agnn=$agn->fetch();
           $found_id=$agnn['iduser'];
           $conn->query("INSERT INTO mouth SET iduser ='{$found_id}'");
           // ----------------------------((((()))))
              
              if (!$result) {

                $answer= "Query Failed";

              }else {
                $answer='ok';
              }

              }

            }
            else $answer= "Les mots de passe ne sont pas identiques";
        }
        else $answer= "Le mot de passe est trop court !";
      // }
      // else  $answer= "Cet mail a déjà été utilisé pour un autre compte";

       }else $answer= "vous etes deja inscrit";

    }
    else $answer= "Veuillez saisir tous les champs !"; 
}else $answer="impossible de traiter le formulaire, verifiez que tout les champs ont bien été remplis";

$output=array('msg'=>$answer); 

echo json_encode($output);


?>