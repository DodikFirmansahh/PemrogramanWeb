<html>
<head>
    <title>Tutorial cara membuat Login Dengan PHP MySQLi - Page Admin</title>
</head>
<body>
    <h2>Halaman Admin</h2>
    <!-- cek apakah sudah login -->
    <?php
        session_start();
        if ($_SESSION['status']!="login") {
            header("location:../index.php?pesan-belum_login");
        }
    ?>
    
    <h4>Selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.</h4>
    <br/>
    <a href="logout.php">LOGOUT</a>
    </body>
</html>