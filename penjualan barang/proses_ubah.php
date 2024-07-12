<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil data NIS yang dikirim oleh form_ubah.php melalui URL
$id_barang = $_GET['id_barang'];

// Ambil Data yang Dikirim dari Form dan lakukan sanitasi
$nama_barang = mysqli_real_escape_string($connect, $_POST['nama_barang']);
$satuan = mysqli_real_escape_string($connect, $_POST['satuan']);
$harga_beli = mysqli_real_escape_string($connect, $_POST['harga_beli']);
$harga_jual = mysqli_real_escape_string($connect, $_POST['harga_jual']);
$stock = mysqli_real_escape_string($connect, $_POST['stock']);


// Cek koneksi
if (!$connect) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
$query = "SELECT * FROM barang WHERE id_barang='".$id_barang."'";
$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

// Proses ubah data ke Database
$query = "UPDATE barang SET nama_barang='$nama_barang', satuan='$satuan', harga_beli='$harga_beli',harga_jual='$harga_jual',stock='$stock'  WHERE id_barang='$id_barang'";
$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

if($sql) { // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: index.php"); // Redirect ke halaman index.php
} else {
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
    echo "<br>Error: " . mysqli_error($connect); // Menampilkan kesalahan dari query
}

mysqli_close($connect);
?>