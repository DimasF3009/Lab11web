<?php
include("../../class/database.php");
include("../../class/form.php");
include("../../config.php");

$db = new Database(); // Pastikan objek database telah didefinisikan

$data = [
    'Nim' => isset($_POST['Nim']) ? $_POST['Nim'] : '',
    'Nama' => isset($_POST['Nama']) ? $_POST['Nama'] : '',
    'Kelas' => isset($_POST['Kelas']) ? $_POST['Kelas'] : '',
];

$db->insert('biodata', $data);

echo "<html><head><title>Mahasiswa</title></head><body>";
$form = new Form("", "Input Form", "post");
$form->addField("txtNim", "Nim");
$form->addField("txtNama", "Nama");
$form->addField("txtKelas", "Kelas");
echo "<h3>Silahkan isi form berikut ini :</h3>";
$form->displayForm();
echo "</body></html>";
?>
