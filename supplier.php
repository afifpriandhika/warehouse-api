<?php

    include 'connection.php';

    $sql = "SELECT * FROM supplier";
    $result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Supplier</title>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-light navbar-light">
        <!-- Brand/logo -->
        <a class="navbar-brand" href="/eaiFix/index.php">
            <img src="yukcetak-1.png" alt="logo" style="width:150px;">
        </a>
        
        <!-- Links -->
        <ul class="navbar-nav" style="margin-left: 65%;">
            <li class="nav-item">
            <a class="nav-link" href="/eaiFix/bahanBaku.php">Bahan Baku</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/eaiFix/supplier.php">Supplier</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/eaiFix/pegawai.php">Pegawai</a>
            </li>
        </ul>
    </nav>

<center><h2 style="margin-top: 5%;">Data Supplier</h2></center>

    <div style="padding:5%">
    <button class="btn btn-success mb-3" data-toggle="modal" data-target="#inputBahanBaku">Tambah Data</button>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Id Supplier</th>
                    <th scope="col">Nama Supplier</th>
                    <th scope="col">Alamat Supplier</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($result as $data): ?>
                <tr>
                    <th scope="row"><?=$data['id_supplier']?></th>
                    <td><?=$data['nama_supplier']?></td>
                    <td><?=$data['alamat_supplier']?></td>
                    <td>
                        <a type="button" class="btn btn-warning" href="editSupplier.php?=update&id_supplier=<?php echo $data['id_supplier']; ?>">Edit</a>
                        <a type="button" class="btn btn-danger" href="hapusSupplier.php?=delete&id_supplier=<?php echo $data['id_supplier']; ?>">Hapus</a>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

    <!-- Modal Tambah Bahan Baku-->
    <div class="modal fade" id="inputBahanBaku">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title" style="margin-left: 30%;">Input Bahan Baku</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
                <form action="tambahSupplier.php" method="POST">
                <input type="hidden" name='id_supplier'>
                <label for="nama_supplier">Nama Supplier:</label>
                <input type="text" class="form-control" id="nama_supplier" placeholder="Nama Bahan Baku" name="nama_supplier">
                <label for="alamat_supplier">Alamat Supplier:</label><br>
                <textarea name="alamat_supplier" id="alamat_supplier" cols="63" rows="10"></textarea>
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-success" name="submit" value="submit">Submit</button>
                </form>
            </div>
            
        </div>
        </div>
    </div>

    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>

