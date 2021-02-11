 
<?php 
  if (isset($_SESSION['iduser'])) {
  
   $sess = "SELECT * FROM etudiant WHERE iduser ='{$_SESSION['iduser']}'";
   $qr= $conn->query($sess);
   while($rw =$qr->fetch()) {
				
				$_SESSION['iduser']=$rw["iduser"];
	  		$_SESSION['nom']=$rw["nom"];
	  		$_SESSION['email']=$rw["email"];
				$_SESSION['mdp']=$rw["mdp"];
				$_SESSION['tel']=$rw["tel"];
	  		$_SESSION['gender']=$rw["gender"];
				$_SESSION['name_profil']=$rw["name_profil"];
				$_SESSION['total_sign']=$rw["total_sign"];
				$_SESSION['total_absence']=$rw["total_absence"];
				
				}
		}
// -------------------------------------------------((((()))))

		if (isset($_SESSION['id_teacher'])) {
			
		$t_sess = "SELECT * FROM teacher WHERE id_teacher ='{$_SESSION['id_teacher']}'";
   $t_qr= $conn->query($t_sess);
   while($t_rw =$t_qr->fetch()) {
				
				$_SESSION['id_teacher']=$t_rw["id_teacher"];
	  		$_SESSION['name_teacher']=$t_rw["name_teacher"];
	  		$_SESSION['email_teacher']=$t_rw["email_teacher"];
				$_SESSION['mdp_teacher']=$t_rw["mdp_teacher"];
				
				}
		}

	 ?>