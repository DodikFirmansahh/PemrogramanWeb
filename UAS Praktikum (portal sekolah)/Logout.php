<?php
session_start();
session_destroy();
header("location: proseslogin.php");
?>