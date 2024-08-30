<?php

include "connection.php";

$sql = "SELECT * FROM pelanggan";
$result = $koneksi -> query($sql);

echo "<table border = 1px><tr><th>NIK</th><th>Nama</th><th>Umur</th><th>Alamat</th></tr>";
while ($row = $result -> fetch_assoc()){
  echo "<tr><td>".$row["NIK"]."</td><td>".$row["Nama"]."</td><td>".$row["Umur"]."</td><td>".$row["Alamat"]."</td></tr>";
}
echo "</table>";
$koneksi -> close();

?>