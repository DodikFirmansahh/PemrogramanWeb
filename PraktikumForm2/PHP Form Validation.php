<!DOCTYPE html>
<html>
<head>
	<title>validasi php</title>
</head>
<body>
    <h2>PHP Form Validation</h2>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<label for="nama">Nama:</label>
		<input type="text" name="nama" id="nama" required><br><br>
		
		<label for="email">Email:</label>
		<input type="email" name="email" id="email" required><br><br>

        <label for="website">Website:</label>
		<input type="website" name="website" id="website" required><br><br>
		
		<label for="pesan">Pesan:</label>
		<textarea name="pesan" id="pesan" rows="4" cols="50" required></textarea><br><br>

        <label>Jenis kelamin:</label><br>
		<input type="radio" name="jenis_kelamin" value="Laki-laki" id="laki-laki" checked>
		<label for="laki-laki">Laki-laki</label><br>
		<input type="radio" name="jenis_kelamin" value="Perempuan" id="perempuan">
		<label for="perempuan">Perempuan</label><br><br>
		
		<input type="submit" name="submit" value="Kirim">
	</form>

    <h2>Your input :</h2>
	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$pesan = $_POST['pesan'];
        $website = $_POST['website'];
		echo 
        "$nama<br>$email<br>$website<br>\"$pesan\"";
	}
	?>
    <br>
    <?php
    	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$jenis_kelamin = $_POST['jenis_kelamin'];
		echo "Anda memilih jenis kelamin: $jenis_kelamin";
	}
    ?>

</body>
</html>
