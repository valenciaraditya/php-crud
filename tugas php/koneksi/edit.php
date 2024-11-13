<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<body>
    <h1>UPDATE SISWA</h1>
    <?php
include 'koneksi.php';
$query = mysqli_query($connect, "SELECT * FROM data");
while ($data = mysqli_fetch_array($query)) {
    ?>

    <form action="update.php" method="POST">
    <input type="hidden" id="id" name="id" value="<?php echo $data ['id']; ?>">
        <input type ="text" name="nama" value="<?php echo $data['nama']; ?>">
        <input type ="text" name="tanggal" value="<?php echo $data['tanggal']; ?>">
        <input type ="text" name="deskripsi" value="<?php echo $data['deskripsi']; ?>">
        <button type ="submit" name="update">update</button>
    </form> <?php } ?>


</body>
</html>