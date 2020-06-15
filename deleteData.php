<?php
    include('koneksi.php');

    $kunci = $_GET['kunci'];
    $hasil = $koneksi->query("DELETE FROM `data_master` WHERE `data_master`.`Kode Produk` = '$kunci'");

    if ($hasil==TRUE) {
        # code...
        header("location:crud_form.php?info=data berhasil di hapus");
    } else {
        echo 'data gagal di hapus';
    }
?>