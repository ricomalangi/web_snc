<?php
//mengambil data dari tambah_menu.php
$nama=$_POST["nama_peraturan"];
$isi=$_POST["isi_peraturan"];

//membuat validasi sebelum di masukkan ke database
if($nama == "" and $isi == ""){
	header("location:index.php?menu=tambah_menu");
}
else if($nama == "" and $isi != ""){
	header("location:index.php?menu=tambah_menu");
}
else if($nama != "" and $isi == ""){
	header("location:index.php?menu=tambah_menu");
}
else{
	//memasukkan data ke database
	$sql = "INSERT INTO peraturan_organisasi (nama_peraturan,isi_peraturan) VALUES ('$nama','$isi')";
	$query = mysqli_query($conn,$sql);
	header("location:index.php?menu=halaman_peraturan_organisasi");
}
?>