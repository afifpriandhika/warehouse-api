<?php 
    include 'connection.php';

    $sql = "select * from bahan_baku";
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<center><h2>Data Bahan Baku</h2></center>

    <div style="padding:5%">
    <button class="btn btn-success mb-3">Tambah Data</button>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">id Bahan Baku</th>
                    <th scope="col">Nama Bahan Baku</th>
                    <th scope="col">Jumlah Stock</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($result as $data): ?>
                <tr>
                    <th scope="row"><?=$data['id_bahanBaku']?></th>
                    <td><?=$data['nama_bahanBaku']?></td>
                    <td><?=$data['stock_bahanBaku']?></td>
                    <td><?=$data['harga_bahanBaku']?></td>
                    <td>
                        <button class="btn btn-warning">edit</button>
                        <button class="btn btn-danger">Hapus</button>
                    </td>
                </tr>
            <?php endforeach ?>
            </tbody>
        </table>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>

