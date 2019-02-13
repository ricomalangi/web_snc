<?php

$id_hapus = $_POST['id_hapus'];

$sql = "DELETE FROM kontak WHERE id_kontak = $id_hapus";
$query = mysqli_query($conn, $sql);
header("location:index.php?menu=halaman_kontak");