<?php
    $koneksi = mysql_connect("localhost","root","");
    if($koneksi){
        mysql_select_db("dbInSekolah");
    } else {
        echo "Koneksi Gagal!";
    }
?>