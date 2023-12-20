<?php
require '../../class/function.php';

// ambil data di URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM biodata WHERE id = $id")[0];


// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	
	// cek apakah data berhasil diubah atau tidak
	if( ubah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil diubah!');
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal diubah!');
			</script>
		";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>UPDATE</title>
</head>
<body>
	<h1>UPDATE</h1>

	<form action="" method="post">
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
		<ul>
			<li>
				<label for="Nim">Nim : </label>
				<input type="text" name="Nim" id="nim" value="<?= $mhs["Nim"]; ?>" required>
			</li>
			<li>
				<label for="Nama">Nama : </label>
				<input type="text" name="Nama" id="nama" value="<?= $mhs["Nama"]; ?>" required>
			</li>
			<li>
				<label for="Kelas">Kelas :</label>
				<input type="text" name="Kelas" id="kelas" value="<?= $mhs["Kelas"]; ?>" required>
			</li>
			<li>
				<button type="submit" name="submit">UPDATE!</button>
			</li>
		</ul>

	</form>
</body>
</html>