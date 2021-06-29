<?php

    include ('connection.php');

    if (isset($_POST['update'])){
        $id_bahanBaku = $_POST['id_bahanBaku'];
        $nama_bahanBaku = $_POST['nama_bahanBaku'];
        $stock_bahanBaku = $_POST['stock_bahanBaku'];
        $harga_bahanBaku = $_POST['harga_bahanBaku'];
     
        $query = "UPDATE bahan_baku SET id_bahanBaku = '$id_bahanBaku', 
                                        nama_bahanBaku = '$nama_bahanBaku', 
                                        stock_bahanBaku = '$stock_bahanBaku', 
                                        harga_bahanBaku = '$harga_bahanBaku'
                                        WHERE id_bahanBaku = '$id_bahanBaku'";
        
        if ($conn->query($query) === TRUE) {
          header("location:bahanBaku.php");
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
          $conn->close();

    } 

?>