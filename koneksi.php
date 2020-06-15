<?php
 try {
     //code...
     $koneksi = new PDO("mysql:host=localhost;dbname=belajarcrudphp","root","");
    //  echo "berhasil terkoneksi";
 } catch (PDOException $th) {
     //throw $th;
     echo $th->getMessage();
 } 
?>