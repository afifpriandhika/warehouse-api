<?php

    include ('connection.php');

    $id_supplier = $_GET['id_supplier'];

    $query = "DELETE FROM supplier WHERE id_supplier = '$id_supplier'";
    $delete = mysqli_query($conn, $query);

    header("location:supplier.php");

?>