<?php 

$siswa = [
    [
    'nama' => 'Arya',
    'kelas' => 'X RPL 2',
    'alamat' => 'Malang'
    ],
    [
    'nama' => 'Rama',
    'kelas' => 'X RPL 2',
    'alamat' => 'Tuban'
    ],
    [
    'nama' => 'Akmal',
    'kelas' => 'X RPL 2',
    'alamat' => 'Kediri'
    ],
    [
    'nama' => 'Davin',
    'kelas' => 'X RPL 2',
    'alamat' => 'Cina'
    ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>
<body>
    <h1>Data siswa SMK Telkom Malang</h1>
    <table border="1">
        <tr>
            <th>Nama siswa</th>
            <th>Kelas</th>
            <th>Alamat</th>
        </tr>
        <?php 
        foreach ($siswa as $s) {
            ?>
        <tr>
            <td><?php echo $s['nama'];?></td>
            <td><?php echo $s['kelas'];?></td>
            <td><?php echo $s['alamat'];?></td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>