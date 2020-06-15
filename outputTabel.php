<?php
    include("koneksi.php");
    $hasil = $koneksi->query("SELECT * FROM `data_master`");
    $nomor = 1;
    if (isset($_GET['info'])) {
        # code...
        echo $_GET['info'];
    }
?>
<table border="1" cellpadding="10" cellspacing="0" style="margin: 50px auto;text-align: center">
    <tr style="background: silver">
    <th>No</th><th>kode Produk</th><th>Nama produk</th><th>Harga</th><th>Satuan</th><th>kategori</th><th>url gambar</th><th>stok awal</th><th>modifikasi</th>
    </tr>
    <?php foreach ($hasil as $h) {?>
        <tr>
            <td><?php echo $nomor++; ?></td>
            <td><?php echo $h['Kode Produk'];?></td>
            <td><?php echo $h['Nama Produk'];?></td>
            <td><?php echo $h['Harga'];?></td>
            <td><?php echo $h['satuan'];?></td>
            <td><?php echo $h['Kategori'];?></td>
            <td><img src="<?php echo $h['url gambar'];?>" width="100px"></td>
            <?php $stok = $h['stok awal']; echo ($h['stok awal'] < 5) ? "<td style='background:red; color:#fff'>$stok</td>" : "<td>$stok</td>"; ?>
            <td>
                <button style="background-color: red;"><a href="deleteData.php?kunci=<?php echo $h['Kode Produk'];?>" style="text-decoration: none;color: white">Hapus</a></button><br><br>
                <button style="background-color: yellow"><a href="crud_form(edit).php?kunci=<?php echo $h['Kode Produk'];?>" style="text-decoration: none;color: black">edit</a></button>
            </td>
        </tr>
    <?php } ?>    
</table>