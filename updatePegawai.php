<?php

    include ('connection.php');

    if (isset($_POST['update'])){
        $id_pegawai = $_POST['id_pegawai'];
        $nama_pegawai = $_POST['nama_pegawai'];
     
        $query = "UPDATE pegawai SET id_pegawai = '$id_pegawai', 
                                        nama_pegawai = '$nama_pegawai'
                                        WHERE id_pegawai = '$id_pegawai'";
        
        if ($conn->query($query) === TRUE) {
          header("location:pegawai.php");
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
          $conn->close();

    } 

?>