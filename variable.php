<?php
    $nama = "Arya"; //String
    $umur = 4*4;
    $asalSekolah = 'SMK Telkom Malang';
    $puasa = true;

    echo "</h1><center>Arya Maulana <br/> ============= </center> <br/>>";
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>a</title>
</head>

<style>
    img {
        border-radius: 50%;
        overflow: hidden;
    }
</style>

<body>
    <center>
        <img src="img/download (4).jpeg" alt="foto" height="120px" width="120px" >
        <br>
        <p>
            Halo, perkenalkan nama saya <?php echo $nama?>, saya berusia <?php echo $umur?> 
            tahun. Sekarang saya bersekolah di <?php echo $asalSekolah ?> 
        </p>
    </center>
</body>
</html>