<?php

include "connection.php";

$sql = "INSERT INTO pelanggan (NIK, Nama, Umur, Alamat) VALUES ('2706','Muna','18','Jatiluhur')";

if (mysqli_query($koneksi, $sql)){
  echo "Tambah record data berhasil!!";
} else {
  echo "ERROR : Tambah data gagal! $sql". mysqli_error($koneksi);
}

mysqli_close($koneksi);

?>