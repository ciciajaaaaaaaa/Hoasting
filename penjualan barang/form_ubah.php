<html>
    <head>
        <title>Data Barang</title>
    </head>
<body>
    <h1>Ubah Data Barang</h1>
<?php
// Load file koneksi.php
include "koneksi.php";

$id_barang = $_GET['id_barang'];
// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
$query = "SELECT * FROM barang WHERE id_barang='$id_barang'";
$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
?>
    <form method="post" action="proses_ubah.php?nis=<?php echo $id_barang; ?>" enctype="multipart/form-data">
    <table cellpadding="8">
        
        <tr>
            <td>Nama Barang</td>
            <td><input type="text" name="nama_barang" value="<?php echo $data['nama_barang']; ?>"></td>
        </tr>
        <tr>
            <td>Satuan</td>
            <td><input type="text" name="satuan" value="<?php echo $data['satuan'];?>"></td>
        </tr>
        <tr>
            <td>harga_beli</td>
            <td><input type="text" name="harga_beli" value="<?php echo $data['harga_beli'];?>"></td>
        </tr>
        <tr>
            <td>Harga jual</td>
            <td><input type="text" name="harga_jual" value="<?php echo $data['harga_jual']; ?>"></td>
        </tr>

        <tr>
            <td>Stock</td>
            <td><input type="text" name="stock" value="<?php echo $data['stock'];?>"></td>
        </tr>
        
    </table>
    <hr><input type="submit" value="Ubah">
    <a href="index.php"><input type="button" value="Batal"></a>
    </form>
</body>
</html>