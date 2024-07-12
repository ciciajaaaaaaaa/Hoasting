<html>
    <head>
        <title>Data Barang</title>
    </head>
<body>
    <h1 align="center">Data Barang</h1>
    <h2 align="center">Toko Penompen City</h2>
    <h3 align="center">jln.pasar ateh bukittinggi</h3>
    <a href="tambah_data.php">Tambah Data</a><br><br>
    <table border="1" width="100%">
        <tr style="background-color:#5F9EA0">
            <th>Id Barang</th>
            <th>Nama Barang</th>
            <th>Satuan</th>
            <th>Harga Beli</th>
            <th>Harga Jual</th>
            <th>Stock</th>
            <th colspan="2">Aksi</th>
        </tr>
<?php
// Load file koneksi.php
include "koneksi.php";
$query = "SELECT * FROM barang"; // Query untuk menampilkan semua data siswa
$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
    while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
        echo "<tr>";
        echo "<td>".$data['id_barang']."</td>";
        echo "<td>".$data['nama_barang']."</td>";
        echo "<td>".$data['satuan']."</td>";
        echo "<td>".$data['harga_beli']."</td>";
        echo "<td>".$data['harga_jual']."</td>";
        echo "<td>".$data['stock']."</td>";
        echo "<td><a href='form_ubah.php?id_barang=".$data['id_barang']."'>Ubah</a></td>";
        echo "<td><a href='proses_hapus.php?id_barang=".$data['id_barang']."'>Hapus</a></td>";
        echo "</tr>";
    }
?>
    </table>
</body>
</html>