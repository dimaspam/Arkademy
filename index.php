<?php
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM produk ORDER BY id DESC");
?>

<html>
<head>    
    <title>Crud</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>

<body>

    <h1 class="display-4">CRUD</h1>


    <table width='100%' border=1>

    <tr class="table">
        <th scope="col">produk</th> 
        <th scope="col">keterangan</th> 
        <th scope="col">harga</th> 
        <th scope="col">jumlah</th>
        <th scope="col">Update</th>
    </tr>
    <?php  
    while($produk_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$produk_data['nama_produk']."</td>";
        echo "<td>".$produk_data['keterangan']."</td>";
        echo "<td>".$produk_data['harga']."</td>";
        echo "<td>".$produk_data['jumlah']."</td>";    
        echo "<td><a href='edit.php?id=$produk_data[id]' >Edit</a> | <a href='delete.php?id=$produk_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
    <a href="add.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Input Data</a>
</body>
</html>