<?php

require_once "confiig.php";

$title = "Tambah User - Universitas Paramadina";
require_once "assett/template/header.php";
require_once "assett/template/navbar.php";
require_once "assett/template/sidebar.php";

if (isset($_GET['msg'])) {
    $msg = $_GET['msg'];
} else {
    $msg = '';
}

?>

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tambah User</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Tambah User</li>
                        </ol>
                        <form action="proses-user.php" method="POST" enctype="multipart/form-data">
                    </div>
</main>
</div>

<?php
require_once "assett/template/footer.php";
?>