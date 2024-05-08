<?php 

    include 'connect-db.php';

    $nis = $_POST['nis'];
    $namalengkap = $_POST['namalengkap'];
    $id_kelas = $_POST['id_kelas'];
    $tgllahir = $_POST['tgllahir'];
    $alamat = $_POST['alamat'];
    $notelp = $_POST['notelp'];
    $id = $_POST['id'];

    $query = "UPDATE siswa SET nis = '$nis',
                                namalngkap = '$namalngkap',
                                id_kelas = $id_kelas,
                                tgllahir = '$tgllahir',
                                alamat = '$alamat',
                                notelp = '$notelp'
                    WHERE id = '$id'";
    echo $query;

    if ($result = pg_query($db, $query)) {
        header('location: read-data.php');
    } else {
        echo 'gagal';
    }
?>