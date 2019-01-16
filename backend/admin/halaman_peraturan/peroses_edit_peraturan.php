<?php
$id_edit = $_POST["id_edit"];
$nama=$_POST["nama_peraturan"];
$isi=$_POST["isi_peraturan"];

$sql = "UPDATE peraturan_organisasi SET nama_peraturan = '$nama', isi_peraturan = '$isi' WHERE id = $id_edit ";
$query = mysqli_query($conn,$sql);
header("location:index.php?menu=halaman_peraturan_organisasi");
?>