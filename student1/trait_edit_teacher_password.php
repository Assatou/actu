 
<?php 
session_start();
include("bd.php");
// traitement du formulaire de la page edit_teacher_password.php
$answer=null;
 if (isset($_POST)) {
     
     $pwd = sha1($_POST['mdp_teacher']) ;

          if (!empty($_POST['mdp_teacher']) ) {

               $m_sql= "SELECT * FROM teacher WHERE mdp_teacher='$pwd'";

               $m_result = $conn->query($m_sql);

                        if ($m_result->rowCount()>0) {
                          
                 
                      while($row_mdp_teacher = $m_result->fetch()) {

                        $ex_pwd = $row_mdp_teacher['mdp_teacher'];
                        
                        $_SESSION['id_teacher']=$row_mdp_teacher["id_teacher"];

                        $answer="ok";

                         // header('location:new_teacher_password.php');
                       
                          }

                        } else $answer="mot de pass invalide";
                     
              
               
          } else $answer= "Veuillez remplir le champ vide svp";
 }

           $output=array('msg'=>$answer); 

          echo json_encode($output);

 ?>