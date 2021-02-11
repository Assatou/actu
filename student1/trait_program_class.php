
<?php 
 include("bd.php");
// Traitement du formulaire de mise a jour de la date (voir:dashboard.php)
  
if (isset($_POST)) {
	$statut_cour = isset($_POST['statut_cour'])?$_POST['statut_cour']:null;
	if (!empty($statut_cour)) {
 $answer=null;
 $heur= date("H:i:s");
 $dat= date("Y-m-d");
 $debut="Debut";
 $nd="nom defini";
 $none='';
    // ----------Differencier le debut de la fin des cours ---------------
    // ---si le statut entré par le teacher = "debut" alors executer cette instruction

if (($_POST['statut_cour']) ==$debut) {
	
 	 // ------------------Verifier si une fin ou debut a deja été inseré dans la table horraire-----------------
 

 	$qr= "SELECT * FROM horraire WHERE statut_cour ='{$statut_cour}' AND date_class = '{$dat}'";
 	$qqr= $conn->query($qr);
 	// si le nombre de ligne retournées est inferieure a 2
 	if ($qqr->rowCount()<1) {
 	
// -----Inserer les horraire de cours dans la table horraire----------------
		$sql= "INSERT INTO horraire SET statut_cour='{$statut_cour}',heure_class = '{$heur}', date_class = '{$dat}'";
		$ssql= $conn->query($sql);
		// -------------------------------------------------((((()))))
		// ----etape-1-----mettre a jour le statut de chaque etudiant a (1) dans la table etudiant et la date du jour-----

   $conn->query("UPDATE etudiant SET date_class = '{$dat}',statut = 1");

// --------mis a jour de la table mouth---------
   include("mouth.php"); 
   // ---------------
   include("totalsign_deb.php");
// ----------------------------
		if ($ssql) {
			$answer= "ok";
			

		} else $answer= "Query Failled";

		// ----------------------------------
				 } else $answer= " statut deja mis a jour";

	 } 

	 // -------------------------------------------------((((()))))
	 else {  // ----sinon si le champs entré par le teacher est "fin des cour" alors executer cette instruction
	 	
	 	// si le statut fin a ete cliké avant debut
	 	$downn= "SELECT * FROM horraire WHERE  statut_cour='{$debut}' AND date_class='{$dat}'";
	 	$down= $conn->query($downn);
	 	if ($down->rowCount()>0) {
	 		
       // ------------------Verifier si une fin ou debut a deja été inseré dans la table horraire-----------------

 	$qr= "SELECT * FROM horraire WHERE statut_cour ='{$statut_cour}' AND date_class = '{$dat}'";
 	$qqr= $conn->query($qr);
 	// si le nombre de ligne retournées est inferieure a 2
 	if ($qqr->rowCount()<1) {
 	
// -----Inserer les horraire de cours dans la table horraire----------------
		$sql= "INSERT INTO horraire SET statut_cour='{$statut_cour}',heure_class = '{$heur}', date_class = '{$dat}'";
		$ssql= $conn->query($sql);
 
	// -------------------------------------------------((((()))))
		// ------------- Etape-2 - mis a jour de la table synthese (absences) ---
    
      // ----------------abscence-------------
      $req="SELECT * FROM etudiant WHERE statut=1";
      $rreq=$conn->query($req);
      $reqq= $rreq->fetchAll();
      foreach ($reqq as $key ) {
      	$k_iduser=$key['iduser'];
      	 $k_date_class=$key['date_class'];
      	 $k_statut=$key['statut'];
      $conn->query("INSERT INTO synthese SET iduser = $k_iduser, date_absence = '{$k_date_class}', statut = '{$k_statut}', causes = '{$nd}'");
      }
  // --------------------------------------------------------((((()))))
      // --------Etape-3-Determiner le nombre d'absebsence dans la table synthese apres que le techear est mentioner la fin des cours----------------

$syht="SELECT iduser FROM etudiant";
$syn= $conn->query($syht);
$sy=$syn->fetchAll();
foreach ($sy as $val) {

  $v_iduser=$val['iduser'];

  $resu=$conn->query("SELECT statut FROM synthese WHERE iduser = '{$v_iduser}' AND statut = 1");

  	$t_abs=$resu->rowCount();
  	// ----mis a jour du nombre d'absences dans la table etudiant 
  	$conn->query("UPDATE etudiant SET total_absence = '{$t_abs}' WHERE iduser = $v_iduser");

}

// ----------------------presence egalement---------------------

$syht="SELECT iduser FROM etudiant";
$syn= $conn->query($syht);
$sy=$syn->fetchAll();
foreach ($sy as $val) {

  $v_iduser=$val['iduser'];

  $resu=$conn->query("SELECT statut FROM synthese WHERE iduser = '{$v_iduser}' AND statut = 0");

    $t_attd=$resu->rowCount();
    // ----mis a jour du nombre d'absences dans la table etudiant 
    $conn->query("UPDATE etudiant SET total_sign = '{$t_attd}' WHERE iduser = $v_iduser");
}


 // ---------------------mis a jour a zero---------------((((()))))
 $none='';
   $conn->query("UPDATE etudiant SET date_class = '{$none}',statut = '{$none}'");
   // -------------------------------------------------((((()))))
		// ----------------------------------------
		if ($ssql) {

			$answer= "ok2";
			
		} else $answer= "Query Failled";

		// ----------------------------------
				 } else $answer= " statut deja mis a jour";

	 }else $answer= "Vous n'avez pas indiqué la date de debut des cours";
 }
	
// -----------------------------------
	 // -------------------------------------
        	 }else $answer="Inserer le statut du cours svp";

        }

    $output=array('msg' =>$answer);

echo json_encode($output);  
 ?>