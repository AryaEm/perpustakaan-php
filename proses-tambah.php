<?php
include 'connect-db.php';

$nis = $_POST['nis'];
$namalengkap = $_POST['namalengkap'];
$id_kelas = $_POST['id_kelas'];
$tgllahir = $_POST['tgllahir'];
$alamat = $_POST['alamat'];
$notelp = $_POST['notelp'];

$query = "INSERT INTO siswa (nis, namalengkap, id_kelas, tgllahir, alamat, notelp) VALUES 
            ('$nis', '$namalengkap', '$id_kelas', '$tgllahir', '$alamat', '$notelp')";

if ($result = pg_query($db, $query)) {
    header('Location: read-data.php');
} else {
    echo 'gagal';
}
?>