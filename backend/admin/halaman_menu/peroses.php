<?php
//mengambil data dari tambah_menu.php
$nama=$_POST["nama"];
$alamat=$_POST["alamat"];
$keterangan=$_POST["keterangan"];
//membuat validasi sebelum di masukkan ke database
if($nama == "" and $alamat == "" and $keterangan == ""){
	header("location:index.php?menu=tambah_menu");
}
else if($nama == "" and $alamat != "" and $keterangan != ""){
	header("location:index.php?menu=tambah_menu");
}
else if($nama == "" and $alamat == "" and $keterangan != ""){
	header("location:index.php?menu=tambah_menu");
}
else if($nama == "" and $alamat != "" and $keterangan == ""){
	header("location:index.php?menu=tambah_menu");
}
else if($nama != "" and $alamat == "" and $keterangan == ""){
	header("location:index.php?menu=tambah_menu");
}
else{
	//memasukkan data ke database
	$sql = "INSERT INTO menu (nama_menu,alamat,keterangan) VALUES ('$nama','$alamat','$keterangan')";
	$query = mysqli_query($conn,$sql);
	header("location:index.php?menu=halaman_menu");
}
?>