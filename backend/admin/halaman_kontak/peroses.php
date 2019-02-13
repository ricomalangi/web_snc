<?php

$id_edit = $_POST['id_edit'];
$nama = htmlspecialchars($_POST['nama']);
$email = htmlspecialchars($_POST['email']);
$subject = htmlspecialchars($_POST['subject']);
$pesan = htmlspecialchars($_POST['message']);

$sql = "UPDATE kontak SET nama = '$nama', email = '$email', subject = '$subject', pesan = '$pesan' WHERE id_kontak = $id_edit ";

$query = mysqli_query($conn, $sql);

header("Location:index.php?menu=halaman_kontak");