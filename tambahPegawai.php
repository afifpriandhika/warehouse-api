<?php

    include ('connection.php');

        if (isset($_POST['submit'])){
            $id_pegawai = $_POST['id_pegawai'];
            $nama_pegawai = $_POST['nama_pegawai'];
            
            $query = "INSERT INTO pegawai (id_pegawai, nama_pegawai) 
                VALUES ('$id_pegawai', '$nama_pegawai')";
                
            if ($conn->query($query) === TRUE) {
                header("location:pegawai.php");
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

        $conn->close();
    }

?>