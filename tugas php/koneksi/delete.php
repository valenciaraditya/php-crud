<?php
include 'koneksi.php';
$id = $_GET['id'];
$sql = $connect -> query("select * from data where id='$id'");
$data = $sql -> fetch_assoc();
$query = $connect -> query("delete from data where id='$id'");
if ($query) {
    header ('location:../index.php');
}else {
    header ('location:../index.php');
}
?>