<?php
    $koneksi =  mysqli_connect
    ("localhost", "root", "", "dbminggu13", 3307);

    if (mysqli_connect_error()) { 
        echo "Koneksi database gagal : 
        " . mysqli_connect_error();
    }
?>