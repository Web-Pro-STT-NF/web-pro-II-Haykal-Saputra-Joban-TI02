<?php 
require_once "class_persegipanjang.php";
echo "Menghitung nilai persegi panjang";
$pp1 = new persegiPanjang(10,14);
$pp2 = new persegiPanjang(15,8);

echo "<br/><br/>Luas persegi Panjang I = " .$pp1->getluas();
echo "<br/>Luas persegi Panjang II = " .$pp2->getluas();

echo "<br/><br/>keliling persegi Panjang I = " .$pp1->getkeliling();
echo "<br/>keliling persegi Panjang II = " .$pp2->getkeliling();

