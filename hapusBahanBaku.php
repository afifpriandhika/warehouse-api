<?php

    include ('connection.php');

    $id_bahanBaku = $_GET['id_bahanBaku'];

    $query = "DELETE FROM bahan_baku WHERE id_bahanBaku = '$id_bahanBaku'";
    $delete = mysqli_query($conn, $query);

    header("location:bahanBaku.php");

?>