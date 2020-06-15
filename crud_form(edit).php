
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>input master</title>
</head>
<body>
    <?php 
        include('koneksi.php');
        $kunci = $_GET['kunci'];
        $hasil = $koneksi->query("SELECT * FROM `data_master` WHERE `Kode Produk` = '$kunci'");
        foreach ($hasil as $h) {?>
        
    <!-- inputan -->
    <form name="input data" action="editData.php" method="POST">
        <table border="0" cellpadding="10" cellspacing="0" style="margin: 50px auto">
            <tr>
                <td colspan="2"><b>FORM EDIT MASTER & STOK DATA BARANG</b><br><hr></td>
            </tr>
            <tr>
                <td>kode produk</td>
                <td><input type="text" name="kode_produk" value="<?php echo $h['Kode Produk'];?>"></td>
            </tr>
            <tr>
                <td>Nama Produk</td>
                <td><input type="text" name="Nama_produk" value="<?php echo $h['Nama Produk'];?>"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="number" name="harga" value="<?php echo $h['Harga'];?>"></td>
            </tr>
            <tr>
                <td>Satuan</td>
                <td>
                    <select name="satuan">
                        <option <?php if ($h['satuan'] == "null") {echo "selected=selected";}?> value="null">pilih..</option>
                        <option <?php if ($h['satuan'] == "Kilogram") {echo "selected=selected";}?> value="Kilogram">KG</option>
                        <option <?php if ($h['satuan'] == "Gram") {echo "selected=selected";}?> value="Gram">G</option>
                        <option <?php if ($h['satuan'] == "Liter") {echo "selected=selected";}?> value="Liter">L</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td>
                    <select name="Kategori">
                        <option <?php if ($h['Kategori']=='null') { echo "selected=selected"; }?> value="null">pilih..</option>
                        <option <?php if ($h['Kategori']=='Padat') { echo "selected=selected"; }?> value="Padat">Padat</option>
                        <option <?php if ($h['Kategori']=='Cair') { echo "selected=selected"; }?> value="Cair">Cair</option>
                        <option <?php if ($h['Kategori']=='Gas') { echo "selected=selected"; }?> value="Gas">Gas</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>url gambar</td>
                <td><input type="url" name="url" id="gambar" value="<?php echo $h['url gambar'];?>"></td>
            </tr>
            <tr>
                <td>Stok awal</td>
                <td><input type="number" name="stok" value="<?php echo $h['stok awal'];?>"></td>
            </tr>
            <tr>
                <td><button type="submit" name="btnsimpan" value="simpan">Simpan</button></td>
                <td><button type="submit" name="btnbatal" value="null"><a href="crud_form.php" style="text-decoration: none;color: black">batal</a></button></td>
            </tr>
        </table>
    </form>
    <?php } ?>
    <!-- list data -->
    <?php
        // $tampil = include('outputTabel.php');
        // echo $tampil;
    ?>
</body>
</html>