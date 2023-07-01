<?php
session_start();

$server = "localhost:3307"; // Nama host MySQL
$username = "root"; // Nama pengguna MySQL
$password = ""; // Kata sandi MySQL
$database = "db_sekolah"; // Nama database MySQL

// Membuat koneksi
$koneksi = mysqli_connect($server, $username, $password, $database);

// Memeriksa koneksi
if (!$koneksi) {
    die("Gagal terhubung ke MySQL: " . mysqli_connect_error());
}

if (isset($_POST['login'])) {
    // Inisialisasi variabel
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM tbl_user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($koneksi, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        // Jika data ditemukan
        // Berhasil login
        $_SESSION['login'] = true;
        header('location:index.php');
    } else {
        // Data tidak ditemukan
        // Gagal login
        echo '
        <script>
        alert("Username atau Password salah")
        window.location.href="login.php"
        </script>';
    }
}

// URL induk
$main_url = "http://localhost/sekolah/";

function uploading($url) {
    $namafile = $_FILES['image']['name'];
    $ukuran = $_FILES['image']['size'];
    $error = $_FILES['image']['error'];
    $tmp = $_FILES['image']['tmp_name'];

    // File yang diunggah
    $validExtension = ['jpg', 'jpeg', 'png'];
    $fileExtension = explode('.', $namafile);
    $fileExtension = strtolower(end($fileExtension));
    
    if (!in_array($fileExtension, $validExtension)) {
        header("location:" . $url . '?msg=notimage');
        die;
    }

    // Cek ukuran gambar
    if ($ukuran > 1000000) {
        header("location:" . $url . '?msg=oversize');
        die;
    }

    // Generate nama file gambar
    $namafilebaru = uniqid() . '-' . $namafile;

    // Upload gambar
    move_uploaded_file($tmp, "assett/image/" . $namafilebaru);
    return $namafilebaru;
}
?>
