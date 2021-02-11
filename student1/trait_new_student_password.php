<?php 

session_start();
include("bd.php");

if (isset($_POST)) {
	$answer=null;
 $pwd =  sha1($_POST['mdp']);
  $pwd2 =  sha1($_POST['mdp2']);
  if (!empty($_POST['mdp']) and !empty($_POST['mdp2'])) {

if (strlen($_POST['mdp'])>=6){

            /* on test si les deux mdp sont bien identique */
            if ($_POST['mdp']==$_POST['mdp2']){
                

           $sql = "UPDATE etudiant SET mdp = '{$pwd}' WHERE iduser = '{$_SESSION['iduser']}'";

                $result= $conn->query($sql);

                if (!$result) {

               $answer= "Query Failed";

              }else {

                $answer='ok';
              }


                }else $answer= "Les mots de passe ne sont pas identiques !"; 

  		} else $answer= "Le mot de passe est trop court !"; 


  }else $answer= "Veuillez saisir tous les champs !"; 

}

$output=array('msg'=>$answer); 

        echo json_encode($output);

 ?>