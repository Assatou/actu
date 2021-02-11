<!DOCTYPE html>
<html>
  <head>
    <title>QR Code Scanner</title>
   
  </head>

  <body>
    
<h1>qr code</h1>

    <?php
include('phpqrcode/qrlib.php'); //On inclut la librairie au projet
$lien='https://www.243tech.com'; // Vous pouvez modifier le lien selon vos besoins
QRcode::png($lien, 'image-qrcode.png'); // On crée notre QR Code
?>
  </body>
</html>