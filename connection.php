<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "";

$koneksi = mysqli_connect($servername,$username,$password,$dbname);

if ($koneksi){
   echo("Succes");
} else {
    die("Connection Fail: ".mysqli_connect_error());
}

?>