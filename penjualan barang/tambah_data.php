<html>
    <head>
        <title>Data Barang</title>
    </head>
<body>
    <h1>Tambah Data Barang</h1>
    <form method="post" action="proses_simpan.php" enctype="multipart/formdata">
    <table cellpadding="8">
        <tr>
            <td>ID barang</td>
            <td><input type="text" name="id_barang"></td>
        </tr>
        <tr>
            <td>Nama Barang</td>
            <td><input type="text" name="nama_barang"></td>
        </tr>
        <tr>
            <td>Satuan</td>
            <td><input type="text" name="satuan"></td>
        </tr>
        <tr>
            <td>Harga beli</td>
            <td><input type="text" name="harga_beli"></td>
        </tr>
        <tr>
            <td>Harga jual</td>
            <td><input type="text" name="harga_jual"></td>
        </tr>
        <tr>
            <td>stock</td>
            <td><input type="text" name="stock"></td>
        </tr>
        
    </table>
    <hr>
    <input type="submit" value="Simpan">
    <a href="index.php"><input type="button" value="Batal"></a>
    </form>

</body>
</html>