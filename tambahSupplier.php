<?php

    include ('connection.php');

        if (isset($_POST['submit'])){
            $id_supplier = $_POST['id_supplier'];
            $nama_supplier = $_POST['nama_supplier'];
            $alamat_supplier = $_POST['alamat_supplier'];

            $query = "INSERT INTO supplier (id_supplier, nama_supplier, alamat_supplier) 
                VALUES ('$id_supplier', '$nama_supplier', '$alamat_supplier')";
                
            if ($conn->query($query) === TRUE) {
                header("location:supplier.php");
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

        $conn->close();
    }

?>