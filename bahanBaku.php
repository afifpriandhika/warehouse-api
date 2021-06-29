<?php 
    include 'connection.php';

    $sql = "select * from bahan_baku";
    $result = $conn->query($sql);



    if($result->num_rows>0){
        // $rows = $result->fetch_all(MYSQLI_ASSOC);

        // echo   json_encode($rows);
    } else {
        echo "no results found";
    }

    foreach ($result as $key ) {
        echo ($key["password"]);
    }
?>

<form action="">
    
</form>