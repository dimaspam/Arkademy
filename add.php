<html>
<head>
    <title>Add</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <a href="index.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Home</a>
    <br/><br/>

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr> 
                <td>keterangan</td>
                <td><input type="text" name="keterangan"></td>
            </tr>
            <tr> 
                <td>harga</td>
                <td><input type="text" name="harga"></td>
            </tr>

            <tr> 
                <td>jumlah</td>
                <td><input type="text" name="jumlah"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $nama = $_POST['nama'];
        $keterangan = $_POST['keterangan'];
        $harga = $_POST['harga'];
        $jumlah = $_POST['jumlah'];

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO produk(nama_produk,keterangan,harga,jumlah) VALUES('$nama','$keterangan','$harga','$jumlah')");

        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>