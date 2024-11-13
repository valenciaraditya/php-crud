<?php
include 'koneksi.php';
$nama = $_POST['nama'];
$tanggal = $_POST['tanggal'];
$deskripsi = $_POST['deskripsi'];
$query = mysqli_query($connect,"INSERT INTO data (nama,tanggal,deskripsi) VALUES ('$nama','$tanggal','$deskripsi')");
if ($query) {
    echo "<div class='alert alert-success' style='text-align:center;'> Data Berhasil Disimpan </div>";
} else {
    echo "<div class='alert alert-danger'> Data Gagal Disimpan, Coba Lagi </div>";
}
?>