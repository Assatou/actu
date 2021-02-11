

 	<?php


	if (isset($_POST)) {
		
		include("bd.php");

			$answer=null;
			$email=$_POST['email'];
			$mdp=sha1($_POST['mdp']);

	if (!empty($email) and !empty($mdp)) {

			$sql= "SELECT * FROM etudiant WHERE email='$email' AND mdp='$mdp' " ;
			$query=$conn->query($sql);
	
if ($query->rowCount() > 0) {
	// nombre de ligne retournées par la requete $query

			while($row =$query->fetch()) {
				session_start();
				$_SESSION['iduser']=$row["iduser"];
	  		$_SESSION['nom']=$row["nom"];
	  		$_SESSION['email']=$row["email"];
				$_SESSION['mdp']=$row["mdp"];
				$_SESSION['tel']=$row["tel"];
	  		$_SESSION['gender']=$row["gender"];
				$_SESSION['name_profil']=$row["name_profil"];
	$_SESSION['total_sign']=$row["total_sign"];
 
				}
				  $answer='ok';

} else $answer='mot de passe ou email incorect';

	}else $answer='Veuillez remplir les champs S.V.P';
	}

$output=array('msg' =>$answer);

echo json_encode($output);


	?>