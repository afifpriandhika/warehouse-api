<?php

      include('connection.php');

      $id_supplier  = $_GET['id_supplier'];
      $sql  = mysqli_query($conn, "SELECT * FROM supplier WHERE id_supplier = '$id_supplier'");
      $data   = mysqli_fetch_array($sql);

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
<center><h2 style="margin-top: 5%;">Data Supplier</h2></center>

    <div style="padding:5%">
        <form action="updateSupplier.php" method="POST">   
            <input type="hidden" name='id_supplier'>
            <label for="nama_supplier">Nama Supplier:</label>
            <input type="text" class="form-control" id="nama_supplier" name="nama_supplier" value="<?php echo $data['nama_supplier'];?>">
            <label for="alamat_supplier">Alamat Supplier:</label><br>
            <textarea name="alamat_supplier" id="alamat_supplier" cols="63" rows="10"><?php echo $data['alamat_supplier'];?></textarea>
            <a type="button" class="btn btn-danger" href="supplier.php">cancel</a>   
            <button class="btn btn-primary" type="submit" value="update" name="update">Update</button>
        </form>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>

