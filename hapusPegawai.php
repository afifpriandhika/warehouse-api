<?php

    include ('connection.php');

    $id_pegawai = $_GET['id_pegawai'];

    $query = "DELETE FROM pegawai WHERE id_pegawai = '$id_pegawai'";
    $delete = mysqli_query($conn, $query);

    header("location:pegawai.php");

?>