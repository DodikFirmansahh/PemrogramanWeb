<?php

require_once "confiig.php";

// Jika tombol simpan ditekan
if (isset($_POST['simpan'])) {
    // Ambil nilai elemen yang diposting
    $username = trim(htmlspecialchars($_POST['username']));
    $nama = trim(htmlspecialchars($_POST['nama']));
    $jabatan = $_POST['jabatan'];
    $alamat = trim(htmlspecialchars($_POST['alamat']));
    $gambar = trim(htmlspecialchars($_FILES['image']['name']));
    $password = '1234'; // Ganti dengan password yang diinginkan
    $pass = password_hash($password, PASSWORD_DEFAULT);

    // cek username
$cekUsername = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE username = '$username'");
if (mysqli_num_rows($cekUsername) > 0) {
    header("location: user.php?msg=cancel");
    exit;
}


        //upload gambar
        if ($gambar !=null) {
            $url = 'user.php';
            $gambar = uploading($url);
        } else {
            $gambar = 'default.png';
        }
    
        if (mysqli_query($koneksi, "INSERT INTO tbl_user VALUES(null, '$username',
        '$password', '$nama', '$alamat', '$jabatan', '$gambar')")) {
    //query berhasil
        header("location:user.php?msg=added");
        exit;
        } else {
            // Query gagal
            echo "Error: " . mysqli_error($koneksi);
        }

}
?>