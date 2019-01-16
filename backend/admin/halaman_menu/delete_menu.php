<?php
$id_hapus = $_POST["id_hapus"];
$sql = "DELETE FROM menu WHERE id=$id_hapus";
$query = mysqli_query($conn,$sql);
header("location:index.php?menu=halaman_menu");
?>