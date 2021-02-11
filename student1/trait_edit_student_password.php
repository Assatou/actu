 
<?php 
session_start();
include("bd.php");
// traitement du formulaire de la page edit_student_password.php
$answer=null;
 if (isset($_POST)) {
     
     
          if (!empty($_POST['mdp']) ) {

               $pwd =  sha1($_POST['mdp']);

               $m_sql= "SELECT * FROM etudiant WHERE mdp='$pwd'";

               $m_result = $conn->query($m_sql);

                        if ($m_result->rowCount()>0) {
                          
                 
                      while($row_mdp = $m_result->fetch()) {

                        $ex_pwd = $row_mdp['mdp'];
                        
                        $_SESSION['iduser']=$row_mdp["iduser"];

                         $answer="ok";
                       
                          }

                        } else $answer="mot de pass invalide";
                     
              
               
          } else $answer= "Veuillez remplir le champ vide svp";
 }

          $output=array('msg'=>$answer); 

        echo json_encode($output);


 ?>