<?php
    $koneksi = mysql_connect("localhost","root","");
    if($koneksi){
        mysql_select_db("dbinsekolah");
    } else {
        echo "Koneksi Gagal!";
    }
?>