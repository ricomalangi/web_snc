<?php
//mengambil data dari tambah_menu.php
$judul=$_POST["judul"];
$isi=$_POST["isi"];

//membuat validasi sebelum di masukkan ke database
if($judul == "" and $isi == ""){
	header("location:index.php?menu=tambah_menu");
}
else if($judul == "" and $isi != ""){
	header("location:index.php?menu=tambah_menu");
}
else if($judul != "" and $isi == ""){
	header("location:index.php?menu=tambah_menu");
}
else{
	//memasukkan data ke database
	$sql = "INSERT INTO tentang_kami (judul,isi) VALUES ('$judul','$isi')";
	$query = mysqli_query($conn,$sql);
	header("location:index.php?menu=halaman_tentang_kami");
}
?>