<?php 
require_once "class_lingkaran.php";
echo "NILAI PHI = " . Lingkaran::PHI;
$ling1 = new Lingkaran(15);
$ling2 = new Lingkaran(6);

echo "<br/><br/>Luas Lingkaran I = ".$ling1->getLuas();
echo "<br/>Luas Lingkaran II = ".$ling2->getLuas();

echo "<br/><br/>Keliling Lingkaran I = ".$ling1->getkeliling();
echo "<br/>Keliling Lingkaran II = ".$ling2->getkeliling();
