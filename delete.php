<?php

include "connection.php";

$sql = "DELETE FROM pelanggan WHERE NIK='1401'";

if (mysqli_query($koneksi, $sql)){
  echo "Delete data berhasil!!";
} else {
  echo "ERROR : Delete data gagal! $sql" .mysqli_error($koneksi);
}

mysqli_close($koneksi);

?>