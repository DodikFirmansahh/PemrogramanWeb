<?php
/**
 * using mysql_connect for database connection
 */

 $databaseHost = 'localhost';
 $databaseName = 'crud_db';
 $databaseUsername = 'root';
 $databasePassword = '';

 $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

 //Mengecek koneksi
 if (!$mysqli) {
    die("Koneksi Gagal : " . mysqli_connect_error());
 }
 echo "Koneksi Berhasil";
 mysqli_close ($mysqli);

 ?>