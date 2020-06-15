<?php 
    include('koneksi.php');
    $kode = $_POST['kode_produk'];
    $nama_produk = $_POST['Nama_produk'];
    $harga = $_POST['harga'];
    $satuan = $_POST['satuan'];
    $kategori = $_POST['Kategori'];
    $url = $_POST['url'];
    $stok = $_POST['stok'];
    // print_r($_POST);

    $hasil = $koneksi->exec("UPDATE `data_master` SET `Nama Produk` = '$nama_produk', `Harga` = '$harga', `satuan` = '$satuan', `Kategori` = '$kategori', `url gambar` = '$url', `stok awal` = '$stok' WHERE `data_master`.`Kode Produk` = '$kode';
    ");
    // echo $hasil;

    if ($hasil==TRUE) {
        # code...
        echo 'data berhasil di edit';
        header("location:crud_form.php?info=data berhasil di edit");
    } else {
        echo 'data gagal di edit';
    }

?>