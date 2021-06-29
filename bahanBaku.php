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
    <title>Bahan Baku</title>
</head>
<body>
<center><h2 style="margin-top: 5%;">Data Bahan Baku</h2></center>

    <div style="padding:5%">
    <button class="btn btn-success mb-3" data-toggle="modal" data-target="#inputBahanBaku">Tambah Data</button>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">id Bahan Baku</th>
                    <th scope="col">Nama Bahan Baku</th>
                    <th scope="col">Jumlah Stock</th>
                    <th scope="col">Harga Satuan</th>
                    <th scope="col">Harga Total</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($result as $data): ?>
                <tr>
                    <th scope="row"><?=$data['id_bahanBaku']?></th>
                    <td><?=$data['nama_bahanBaku']?></td>
                    <td><?=$data['stock_bahanBaku']?> Box</td>
                    <td>Rp. <?=$data['harga_bahanBaku']?></td>
                    <td>Rp. <?= $total = $data['stock_bahanBaku'] * $data['harga_bahanBaku']?></td>
                    <td>
                        <a type="button" class="btn btn-warning" href="editBahanBaku.php?=update&id_bahanBaku=<?php echo $data['id_bahanBaku']; ?>">Edit</a>
                        <a type="button" class="btn btn-danger" href="hapusBahanBaku.php?=delete&id_bahanBaku=<?php echo $data['id_bahanBaku']; ?>">Hapus</a>
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
                <form action="tambahBahanBaku.php" method="POST">
                <input type="hidden" name='id_bahanBaku'>
                <label for="nama_bahanBaku">Nama Bahan Baku:</label>
                <input type="text" class="form-control" id="nama_bahanBaku" placeholder="Nama Bahan Baku" name="nama_bahanBaku">
                <label for="stock_bahanBaku">Jumlah Bahan Baku:</label>
                <input type="number" min="0" class="form-control" id="stock_bahanBaku" placeholder="Jumlah Bahan Baku" name="stock_bahanBaku">
                <label for="harga_bahanBaku">Harga Bahan Baku:</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Rp.</span>
                    </div>
                    <input type="number" min="0" class="form-control" id="harga_bahanBaku" placeholder="Harga Bahan Baku" name="harga_bahanBaku">
                </div>
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

    <!-- Modal Edit Bahan Baku-->
    <div class="modal fade" id="editBahanBaku<?php echo $data['id_bahanBaku']; ?>">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title" style="margin-left: 30%;">Input Bahan Baku</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <?php
            
                $id_bahanBaku  = $_GET['id_bahanBaku'];
                $sql  = mysqli_query($conn, "SELECT * FROM bahan_baku WHERE id_bahanBaku = '$id_bahanBaku'");
                $data   = mysqli_fetch_array($sql);

            ?>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="tambahBahanBaku.php" method="POST">
                <input type="hidden" name='id_bahanBaku'>
                <label for="nama_bahanBaku">Nama Bahan Baku:</label>
                <input type="text" class="form-control" id="nama_bahanBaku" placeholder="Nama Bahan Baku" name="nama_bahanBaku">
                <label for="stock_bahanBaku">Jumlah Bahan Baku:</label>
                <input type="number" min="0" class="form-control" id="stock_bahanBaku" placeholder="Jumlah Bahan Baku" name="stock_bahanBaku">
                <label for="harga_bahanBaku">Harga Bahan Baku:</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Rp.</span>
                    </div>
                    <input type="number" min="0" class="form-control" id="harga_bahanBaku" placeholder="Harga Bahan Baku" name="harga_bahanBaku">
                </div>
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
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>

