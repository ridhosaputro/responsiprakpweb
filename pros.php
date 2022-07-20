<?php 

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$makanan = $_POST['makanan'];
$tipe = $_POST['tipe'];
$komentar = $_POST['komentar'];

echo "<head><title>My Guest Book</title></head>";
$fp = fopen("book.txt", "a+");
fputs($fp, "$nama|$alamat|$makanan|$tipe|$komentar\n");
fclose($fp);

echo "<center>Terima kasih atas pesanan anda<center><br>";
echo "<a href='tamp.php'>Isi Pesanan</a><br>";
echo "<a href='liht.php'>Lihat Rincian Pesanan</a><br>";

 ?>
