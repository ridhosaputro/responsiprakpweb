<?php 

echo "<head><title>lihat</title></head>";
$fp = fopen("book.txt", "r");

echo "<table border='0'>";

while ($isi = fgets($fp)) {
    $pisah = explode('|', $isi);
    echo "<tr><td>Nama: </td><td>: $pisah[0] </td></tr>";
    echo "<tr><td>Alamat: </td><td>: $pisah[1] </td></tr>";
    echo "<tr><td>Menu Martabak: </td><td>: $pisah[2] </td></tr>";
    echo "<tr><td>Tipe: </td><td>: $pisah[3] </td></tr>";
    echo "<tr><td>Catatan: </td><td>: $pisah[4] </td></tr>";
    echo "<tr><td><br></td><td><br></td></tr>";
}

echo "</table>";
echo "<a href='tamp.php'> Pesan </a>";

?>


    
    
    
    
    



