<?php

include_once("config.php");


if(isset($_POST['update']))
{   
    $id = $_POST['id'];

    $nama_produk = $_POST['nama'];
    $keterangan = $_POST['keterangan'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];

    
    $result = mysqli_query($mysqli, "UPDATE produk SET nama_produk='$nama_produk',keterangan='$keterangan',harga='$harga', jumlah=$jumlah WHERE id=$id");

    
    header("Location: index.php");
}
?>
<?php

$id = $_GET['id'];


$result = mysqli_query($mysqli, "SELECT * FROM produk WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $nama = $user_data['nama_produk'];
    $keterangan = $user_data['keterangan'];
    $harga = $user_data['harga'];
    $jumlah = $user_data['jumlah'];

}
?>
<html>
<head>  
    <title>Edit User Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>

<body>
    <a href="index.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Home</a>
    <br/><br/>

    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>nama</td>
                <td><input type="text" name="nama" value=<?php echo $nama;?>></td>
            </tr>
            <tr> 
                <td>keterangan</td>
                <td><input type="text" name="keterangan" value=<?php echo $keterangan;?>></td>
            </tr>
            <tr> 
                <td>harga</td>
                <td><input type="text" name="harga" value=<?php echo $harga;?>></td>
            </tr>
            <tr> 
                <td>jumlah</td>
                <td><input type="text" name="jumlah" value=<?php echo $jumlah;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>