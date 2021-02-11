<?php
// $ip = fopen('last_ip.txt', 'c+');
// $check = fgets($ip);

// $file = fopen('counter.txt', 'c+');
// $count = intval(fgets($file));

// if ($_SERVER('REMOTE_ADDR') != $check) {

//     fclose($ip);
//     $ip = fopen('last_ip.txt', 'w+');

//     fputs($ip, $_SERVER['REMOTE_ADRR']);

//     $count++;
//     fseek($file, 0);
//     fputs($file, $count);
//     return $count;



// }
// fclose($file);
// fclose($ip);

// echo 'il y a eu ' . $count . 'de visiteurs';


// $count = file_get_contents("counter.txt");
// $count = trim($count);
// $count = $count + 1;
// $fl = fopen("counter.txt", "w +");
// fwrite($fl, $count);
// fclose($fl);

// $count = file_get_contents("counter.txt");
// $count = trim($count);


// echo "il y a eu " . $count . " de visiteurs";


// Instruction 1
$fp = fopen("../counter.txt", "r+");
// Instruction 2
$nb_visites = fgets($fp, 11);
// Instruction 3
$nb_visites = $nb_visites + 1;
// Instruction 4
fseek($fp, 0);
// Instruction 5
fputs($fp, $nb_visites);
// Instrcution 6
fclose($fp);
// Instrcution 7
echo 'Ce site compte ' . $nb_visites . ' visiteurs !';


// include('../connection.php');
// $req = $con->prepare('INSERT INTO visiteurs(visites) VALUES(:visites)');
// $req->execute(array(
//     'visites' => $count
// ));
