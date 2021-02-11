

<?php 

// mis a jour de la table mouth apres que le student ait signé sa presence
// ---------------------------------------
$tab = [];
$mou=$conn->query("SELECT datesign FROM synthese WHERE iduser = '{$iduser}'");
$mo=$mou->fetchAll();
foreach ($mo as $line) {
  $dtsg=$line['datesign'];

  $affiche=$conn->query("SELECT MONTH('$dtsg') as mois");

$aa=$affiche->fetch();
$found=$aa["mois"];

if(!array_key_exists($found, $tab)){
    $tab[$found] = 1;
    
}else $tab[$found]++;
 
}
// ---------------------------------

if (isset($tab['1'])){
  $un=($tab['1']);

  $conn->query("UPDATE mouth SET janvier = $un WHERE iduser='{$iduser}'");
}
if (isset($tab['2'])){
  $deux=($tab['2']);

  $conn->query("UPDATE mouth SET fevrier = $deux WHERE iduser='{$iduser}'");
}
if (isset($tab['3'])){
  $trois=($tab['3']);

  $conn->query("UPDATE mouth SET mars = $trois WHERE iduser='{$iduser}'");
}
if (isset($tab['4'])){
  $quatre=($tab['4']);

  $conn->query("UPDATE mouth SET avril = $quatre WHERE iduser='{$iduser}'");
}
if (isset($tab['5'])){
  $cinq=($tab['5']);

  $conn->query("UPDATE mouth SET mai = $cinq WHERE iduser='{$iduser}'");
}
if (isset($tab['6'])){
  $six=($tab['6']);

  $conn->query("UPDATE mouth SET juin = $six WHERE iduser='{$iduser}'");
}
if (isset($tab['7'])){
  $sept=($tab['7']);

  $conn->query("UPDATE mouth SET jueillet = $sept WHERE iduser='{$iduser}'");
}
if (isset($tab['8'])){
  $huit=($tab['8']);

  $conn->query("UPDATE mouth SET aout = $huit WHERE iduser='{$iduser}'");
}
if (isset($tab['9'])){
  $noeuf=($tab['9']);

  $conn->query("UPDATE mouth SET septembre = $noeuf WHERE iduser='{$iduser}'");
}
if (isset($tab['10'])){
  $dix=($tab['10']);

  $conn->query("UPDATE mouth SET octobre = $dix WHERE iduser='{$iduser}'");
}
if (isset($tab['11'])){
  $onze=($tab['11']);

  $conn->query("UPDATE mouth SET novembre = $onze WHERE iduser='{$iduser}'");
}
if (isset($tab['12'])){
  $douze=($tab['12']);

  $conn->query("UPDATE mouth SET decembre = $douze WHERE iduser='{$iduser}'");
}


?>