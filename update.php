<?php

include "connection.php";

$sql = "UPDATE pelanggan SET Nama = 'Ulima' WHERE NIK = '2706'";

if (mysqli_query($koneksi, $sql)){
  echo "Update data berhasil!!";
} else {
  echo "ERROR : Update data gagal! $sql" .mysqli_error($koneksi);
}

mysqli_close($koneksi);

?>