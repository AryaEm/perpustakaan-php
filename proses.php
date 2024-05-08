<?php

$nama = $_GET['nama'];
$kelas = $_GET['kelas'];
$alamat = $_GET['alamat'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Data siswa</h2>
    <?php
        echo "Nama siswa: " .$nama.'<br>';
        echo "Kelas: " .$kelas.'<br>';
        echo "Alamat: " .$alamat.'<br>';
    ?>
</body>
</html>