<?php 
$conn = mysqli_connect("localhost", "root", "", "trial10");

function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}

function tambah ($data){
    
    global $conn;
    $Nim= $data['Nim'];
    $Nama= $data['Nama'];
    $Kelas= $data['Kelas'];

    $query = "INSERT INTO Biodata VALUES ('','$Nim', '$Nama', '$Kelas')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function ubah($data){

    global $conn;
    $id = $data["id"];
    $Nim = htmlspecialchars($data["Nim"]);
    $Nama = htmlspecialchars($data["Nama"]);
    $Kelas = htmlspecialchars($data["Kelas"]);

    $query = "UPDATE Biodata SET 
                                Nim = '$Nim', 
                                Nama ='$Nama', 
                                Kelas ='$Kelas' 
                            WHERE id = $id";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus($id){

    global $conn;
    mysqli_query($conn, "DELETE FROM Biodata WHERE id = $id");
    return mysqli_affected_rows($conn);
}
?>
