<?php
$gaji_pokok = 2000000;
$bonus = 500000;
$tunjangan = $gaji_pokok * 0.05;
$pajak = $gaji_pokok * 0.1;

$gaji_dibayarkan = $gaji_pokok + $bonus + $tunjangan - $pajak;

echo "<hr><hr>";
echo "NIP = 121103018 <br>";
echo "Nama pegawai = Dodik Firmansah <br>";
echo "<hr><hr>";
echo "Gaji pokok = Rp. " . $gaji_pokok . "\n <br>";
echo "Bonus = Rp. " . $bonus . "\n <br>";
echo "Tunjangan = Rp. " . $tunjangan . "\n <br>";
echo "Pajak = Rp. " . $pajak . "\n <br>";
echo "<hr><hr>";
echo "Gaji yang harus dibayarkan = Rp. " . $gaji_dibayarkan . "\n";
?>