<?php

require 'backend/connect.php';

$nama = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$subject = htmlspecialchars($_POST['subject']);
$pesan = htmlspecialchars($_POST['message']);

$sql = "INSERT INTO kontak (nama, email, subject, pesan) VALUES ('$nama', '$email', '$subject', '$pesan')";

$query = mysqli_query($conn,$sql);

if($query == 1 )
{
    header("Location: pesan-terkirim.php");
}
else {
    return false;
}