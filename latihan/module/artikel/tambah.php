<?php
require '../../class/function.php';

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	
	// cek apakah data berhasil di tambahkan atau tidak
	if( tambah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = '../index.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal ditambahkan!');
				document.location.href = '../index.php';
			</script>
		";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah data mahasiswa</title>
</head>
<body>
	<h1>Tambah data mahasiswa</h1>

	<form action="" method="post">
		<ul>
			<li>
				<label for="Nim">Nim : </label>
				<input type="text" name="Nim" id="nim" required>
			</li>
			<li>
				<label for="Nama">Nama : </label>
				<input type="text" name="Nama" id="nama" require>
			</li>
			<li>
				<label for="Kelas">Kelas :</label>
				<input type="text" name="Kelas" id="kelas" require>
			</li>
			<li>
				<button type="submit" name="submit">Tambah Data!</button>
				<button><a href="../index.php">Kembali</a></button>
			</li>
		</ul>

	</form>
</body>
</html>