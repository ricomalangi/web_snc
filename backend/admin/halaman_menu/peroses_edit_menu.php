<?php
$id_edit = $_POST["id_edit"];
$nama=$_POST["nama"];
$alamat=$_POST["alamat"];
$keterangan=$_POST["keterangan"];

$sql = "UPDATE menu SET nama_menu = '$nama', alamat = '$alamat', keterangan = '$keterangan' WHERE id = $id_edit ";
$query = mysqli_query($conn,$sql);
header("location:index.php?menu=halaman_menu");
?>