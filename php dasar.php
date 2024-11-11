<?php

// Data pribadi
$nama = "RENALDI IRAWAN";
$jenis_kelamin = "Laki-laki";
$umur = 22;
$alamat = "PERUM IT JEN-AD BLOK E06 RT01 RW11 CIHANJUANG KBB";
$berat = "72 kg"
$tinggi = "169 cm"
$email = "irawanrenaldi20@gmail.com";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date Pribadi</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <table>
        <tr>
            <td>Nama</td>
            <th>:</th>
            <td><?php echo $nama; ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <th>:</th>
            <td><?php echo $jenis_kelamin; ?></td>
        </tr>
        <tr>
            <td>Umur</td>
            <th>:</th>
            <td><?php echo $umur; ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <th>:</th>
            <td><?php echo $alamat; ?></td>
        </tr>
         <tr>
            <td>Berat</td>
            <th>:</th>
            <td><?php echo $berat; ?></td>
        </tr>
        <tr>
            <td>tinggi</td>
            <th>:</th>
            <td><?php echo $tinggi; ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <th>:</th>
            <td><?php echo $email; ?></td>
        </tr>
    </table>
</body>
</html>