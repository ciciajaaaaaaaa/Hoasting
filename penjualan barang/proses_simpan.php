<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil Data yang Dikirim dari Form
$id_barang = $_POST['id_barang'];
$nama_barang = $_POST['nama_barang'];
$satuan = $_POST['satuan'];
$harga_beli = $_POST['harga_beli'];
$harga_jual = $_POST['harga_jual'];
$stock = $_POST['stock'];
$query = "INSERT INTO barang VALUES('$id_barang ', '$nama_barang', '$satuan',  '$harga_beli','$harga_jual','$stock')";
$sql = mysqli_query($connect, $query); 
if($sql){
header("location: index.php");
// Jika Gagal, Lakukan :
echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke 
database.";
echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
}


?>
