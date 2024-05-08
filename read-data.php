<?php
    include "connect-db.php";

    $query = "SELECT siswa.id,
                    siswa.nis,
                    siswa.namalengkap,
                    siswa.id_kelas,
                    siswa.tgllahir,
                    siswa.alamat,
                    siswa.notelp,
                    kelas.namakelas FROM siswa INNER JOIN kelas ON siswa.id_kelas = kelas.id";

    $result = pg_query ($db, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Siswa</h1>
    <p>
        <a href="form-tambah.php">Tambah Data</a>
    </p>
    <table border="1">
        <tr>
            <th>NIS:</th>
            <th>Nama lengkap</th>
            <th>Tgl Lahir</th>
            <th>No Telp</th>
            <th>Alamat</th>
            <th>Kelas</th>
            <th>Aksi</th>
        </tr>
        <?php
            while ($row = pg_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?= $row['nis'] ?></td>
                <td><?= $row['namalengkap'] ?></td>
                <td><?= $row['tgllahir'] ?></td>
                <td><?= $row['notelp'] ?></td>
                <td><?= $row['alamat'] ?></td>
                <td><?= $row['namakelas'] ?></td>
                <td>
                    <a href="form-edit.php?id=<?= $row['id'] ?>">Edit</a> |
                    <a onclick="confirmDelete(<?= $row['id'] ?>)" href="#">Delete</a> 
                </td>
            </tr>
            <?php
            }
        ?>
    </table>

    <script>
        function confirmDelete(id) {
            var confirmation = confirm("Apakah anda yakin ingin menghapus data ini? ") 

            if(confirmation) {
                window.location.href = "proses-hapus.php?id=" + id;
            }
        }
    </script>
</body>
</html>