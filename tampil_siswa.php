<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>
<body>
    <p><a href="tambah_siswa.php">Tambah Data Siswa</a></p>
    <table border="1" cellpadding="7">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
        <?php
         // memanggil file koneksi untuk melakukan koneksi ke database
         include "koneksi.php";

         // set perintah SQL untuk menampilkan data & eksekusi SQL tersebut
         $sql = mysql_query("SELECT * FROM siswa");

         // menampung hasil dari eksekusi SQL dan menampilkan selama data masih ada
        while($data = mysql_fetch_array($sql)) {
        $n++;
        ?>

        <tr>
            <td><?php echo $n; ?></td>
            <td><?php echo $data['nim']; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['tanggal_lahir']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td><img src="<?php echo $data['foto']; ?>" height="200px"/></td>
            <td>
                <a href="ubah_siswa.php?id=<?php echo $data['nim']; ?>">Ubah</a> -
                <a href="hapus_siswa.php?id=<?php echo $data['nim']; ?>">Hapus</a>
            </td>
        </tr>    
        <?php
        }
        ?>
        </table>           
</body>
</html>