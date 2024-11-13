<?php
include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$tanggal = $_POST['tanggal'];
$deskripsi = $_POST['deskripsi'];

$query = mysqli_query($connect,"UPDATE data SET nama='$nama', tanggal='$tanggal', deskripsi='$deskripsi' WHERE id='$id'");
if ($query) {
    echo "<div class='alert alert-success' style='text-align:center;'> Data Berhasil Disimpan </div>";
} else {
    echo "<div class='alert alert-danger'> Data Gagal Disimpan, Coba Lagi </div>";
}

?>