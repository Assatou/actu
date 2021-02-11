<?php 

session_start();
include("bd.php");

if (isset($_POST)) {
  $answer=null;
	$pwd =  sha1($_POST['mdp_teacher']);
  $pwd2 =  sha1($_POST['mdp_teacher2']);

  if (!empty($_POST['mdp_teacher']) and !empty($_POST['mdp_teacher2'])) {

if (strlen($_POST['mdp_teacher'])>=6){

            /* on test si les deux mdp_teacher sont bien identique */
            if ($_POST['mdp_teacher']==$_POST['mdp_teacher2']){
                

           $sql = "UPDATE teacher SET mdp_teacher = '{$pwd}' WHERE id_teacher = '{$_SESSION['id_teacher']}'";

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