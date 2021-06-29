<?php

    include 'connection.php';

    $sql = "select * from pegawai";
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
<!-- Modal Tambah Bahan Baku-->
    <div class="modal fade" id="inputBahanBaku">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title" style="margin-left: 30%;">Input Pegawai</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
                <form action="tambahPegawai.php" method="POST">
                <input type="hidden" name='id_pegawai'>
                <label for="nama_bahanBaku">Nama Pegawai:</label>
                <input type="text" class="form-control" id="nama_pegawai" placeholder="Nama Pegawai" name="nama_pegawai">
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

<div style="padding:5%">
    <button class="btn btn-success mb-3" data-toggle="modal" data-target="#inputBahanBaku">Tambah Data</button>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">id Pegawai</th>
                    <th scope="col">Nama Pegawai</th>
                    <th scope="col">Action</>
                </tr>
            </thead>
            <tbody>
                <?php foreach($result as $data): ?>
                <tr>
                    <th scope="row"><?=$data['id_pegawai']?></th>
                    <td><?=$data['nama_pegawai']?></td>
                    <td>
                        <a type="button" class="btn btn-warning" href="editPegawai.php?=update&id_pegawai=<?php echo $data['id_pegawai']; ?>">Edit</a>
                        <a type="button" class="btn btn-danger" href="hapusPegawai.php?=delete&id_pegawai=<?php echo $data['id_pegawai']; ?>">Hapus</a>
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