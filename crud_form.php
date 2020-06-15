<?php
    include('koneksi.php');
    // membuat kode produk otomatis
    $kuery = $koneksi->prepare("SELECT MAX(`Kode Produk`) AS kode FROM `data_master`");
    $kuery->execute();
    $hasil = $kuery->fetch();
    $kode = $hasil['kode'];

    $kp = (int) substr($kode,3);
    $kp++;

    $car="MD-";
    $kodeProduk = $car.sprintf("%03s",$kp);
    // echo $kode;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>input master</title>
</head>
<body>
    <!-- inputan -->
    <form name="input data" action="data_Masuk_db.php" method="POST">
        <table border="0" cellpadding="10" cellspacing="0" style="margin: 50px auto">
            <tr>
                <td colspan="2"><b>FORM INPUT MASTER & STOK DATA BARANG</b><br><hr></td>
                
            </tr>
            <tr>
                <td>kode produk</td>
                <!-- di panggil $kodeProduk di bawah ini -->
                <td><input type="text" name="kode" value="<?php echo $kodeProduk ?>" readonly></td>
            </tr>
            <tr>
                <td>Nama Produk</td>
                <td><input type="text" name="Nama_produk"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="number" name="harga"></td>
            </tr>
            <tr>
                <td>Satuan</td>
                <td>
                    <select name="satuan" id="">
                        <option value="null">pilih..</option>
                        <option value="Kilogram">KG</option>
                        <option value="Gram">G</option>
                        <option value="Liter">L</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td>
                    <select name="Kategori" id="">
                        <option value="null">pilih..</option>
                        <option value="Padat">Padat</option>
                        <option value="Cair">Cair</option>
                        <option value="Gas">Gas</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>url gambar</td>
                <td><input type="text" name="url" id="gambar"></td>
            </tr>
            <tr>
                <td>Stok awal</td>
                <td><input type="number" name="stok"></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" name="btnsimpan" value="simpan">Simpan</button></td>
            </tr>
        </table>
    </form>
    
    <!-- list data -->
    <?php
        $tampil = include('outputTabel.php');
        echo $tampil;
    ?>
</body>
</html>