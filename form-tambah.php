<?php 
include 'connect-db.php';

//ambil data dari tabel kelas
$query = "SELECT * FROM kelas order by namakelas";

$result = pg_query($db, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  
    <h1>Tambah Data Siswa</h1>
    <form action="proses-tambah.php" method="post">
        <div>
            <label for="">NIS</label> : 
            <input type="text" name="nis" id="">
        </div>
        <div>
            <label for="">Nama Lengkap</label> :
            <input type="text" name="namalengkap">
        </div>
        <div>
            <label for="">Kelas</label> :
            <select name="id_kelas" id="">
            <?php 
                while ($row = pg_fetch_assoc($result)){
                    ?>
                    <option value="<?=$row['id'] ?>"> 
                    <?= $row['namakelas'] ?>
                </option>
                    <?php
                 }
                     ?>
            </select>
        </div>
        <div>
        <label>Tanggal Lahir</label> : 
        <input type="date" name="tgllahir">
        </div>
        <div>
            <label for="">Alamat</label> :
                <input type="text" name="alamat">
        </div>
        <div>
            <label for="">Nomor Telepon</label> :
                <input type="text" name="notelp">
        </div>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>