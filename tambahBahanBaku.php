<?php

    include ('connection.php');

        if (isset($_POST['submit'])){
            $id_bahanBaku = $_POST['id_bahanBaku'];
            $nama_bahanBaku = $_POST['nama_bahanBaku'];
            $stock_bahanBaku = $_POST['stock_bahanBaku'];
            $harga_bahanBaku = $_POST['harga_bahanBaku'];
            
            $query = "INSERT INTO bahan_baku (id_bahanBaku, nama_bahanBaku, stock_bahanBaku, harga_bahanBaku) 
                VALUES ('$id_bahanBaku', '$nama_bahanBaku', '$stock_bahanBaku', '$harga_bahanBaku')";
                
            if ($conn->query($query) === TRUE) {
                header("location:bahanBaku.php");
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

        $conn->close();
    }

?>