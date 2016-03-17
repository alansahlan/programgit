<?php
 
require ('moneyFormat.php');
$moneyFormat = new moneyFormat();
 
$angka = 10000;
 
$rupiah = $moneyFormat->rupiah($angka);
echo "<p>input rupiah</p>";
echo "Rp. ".$rupiah."";

 $terbilang = $moneyFormat->terbilang($angka);
echo "<p>Terbilang</p>";
echo "".$terbilang." Rupiah";
 
 
?>