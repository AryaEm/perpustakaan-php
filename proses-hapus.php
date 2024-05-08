<?php

include 'connect-db.php';

$id = $_GET['id'];

$query = "DELETE FROM sisware WHERE id = $id";

if ($result = pg_query($db, $query)) {
    header('Location: read-data.php');
} else {
    echo 'gagal';
}

?>
