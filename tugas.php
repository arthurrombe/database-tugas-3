<?php
require 'koneksi.php';
$art = query("SELECT * FROM tugasdatabase");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 align="center">Daftar karyawan</h1>
    <table border="1" cellpadding="10" cellspacing="0" align="center" >
       

   
        <tr>
            <th>no</th>
            <th>foto</th>
            <th>nama</th>
            <th>golongan</th>
            <th>alamat</th>
            <th>status</th>
            <th>jumlah anak</th>
            <th>aksi</th>
           

           
        </tr>
        <?php $i =1; ?>
        <?php foreach($art as $tra): ?>
     <tr>
        <td><?=$i;?></td>
        <td><img src="img/<?=$tra["gambar"]?>" alt="jn" width="50"> </td>
        <td><?= $tra["nama"];?></td>
        <td><?= $tra["golongan"];?></td>
        <td><?= $tra["alamat"];?></td>
        <td><?= $tra["status"];?></td>
        <td><?= $tra["jumlah anak"];?></td>
        <td>
            <a href="">ubah</a>
            <a href="">hapus</a>
        </td>
       
       
     </tr>
    
     <?php $i++; ?>
            <?php endforeach; ?>
        
    </table>
</body>
</html>