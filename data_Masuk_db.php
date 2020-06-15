<?php
    include('koneksi.php');
    $kode = $_POST['kode'];
    $nama_produk = $_POST['Nama_produk'];
    $harga = $_POST['harga'];
    $satuan = $_POST['satuan'];
    $kategori = $_POST['Kategori'];
    $url = $_POST['url'];
    $stok = $_POST['stok'];
    // print_r($_POST);

    $result = $koneksi->exec("INSERT INTO `data_master` (`Kode Produk`, `Nama Produk`, `Harga`, `satuan`, `Kategori`, `url gambar`, `stok awal`) VALUES ('$kode', '$nama_produk', '$harga', '$satuan', '$kategori', '$url', '$stok');");
    // echo $result;

    if ($result == TRUE) {
        # code...
        echo 'data berhasil di masukan';
        header("location:crud_form.php?alert=data di input");
    } else {
        echo 'data gagal disimpan';
    }
?>