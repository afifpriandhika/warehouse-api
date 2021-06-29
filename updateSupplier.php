<?php

    include ('connection.php');

    if (isset($_POST['update'])){
            $id_supplier = $_POST['id_supplier'];
            $nama_supplier = $_POST['nama_supplier'];
            $alamat_supplier = $_POST['alamat_supplier'];
     
        $query = "UPDATE supplier SET id_supplier = '$id_supplier', 
                                      nama_supplier = '$nama_supplier', 
                                      alamat_supplier = '$alamat_supplier' 
                                      WHERE id_supplier = '$id_supplier'";
        
        if ($conn->query($query) === TRUE) {
          header("location:supplier.php");
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
          $conn->close();

    } 

?>