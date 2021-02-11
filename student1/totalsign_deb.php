<?php 

$sql=$conn->query("SELECT iduser FROM etudiant");
$result=$sql->fetchAll();
foreach ($result as $key) {
	$k_iduser=$key['iduser'];

	$sq=$conn->query("SELECT datesign FROM synthese WHERE iduser = '{$k_iduser}' AND statut =0");

	$t_attd=$sq->rowCount();
    // ----mis a jour du nombre de presence dans la table etudiant 
    $a=$conn->query("UPDATE etudiant SET total_sign = '{$t_attd}' WHERE iduser = '{$k_iduser}'");

}

 ?>
