<?php
require_once 'class_lingkaran.php';

$lingkaran1 = new Lingkaran(10);
$lingkaran2 = new Lingkaran (7);

echo "Luas Lingkaran 1 :" . $lingkaran1->getluas();
echo '<br><br>';
echo "Luas Lingkaran 2 :" . $lingkaran2->getluas();

echo '<br><br>';
echo "Keliling Lingkaran 1 : ". $lingkaran1->getkeliling();
echo '<br><br>';
echo "Keliling Lingkaran 2 : ". $lingkaran2->getkeliling();
?>