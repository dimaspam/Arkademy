<?php

    $servername = "localhost";
    $username = "root";
    $password = "123456";
    $dbname = "arkademy";

	$mysqli = mysqli_connect($servername, $username, $password, $dbname); 

	if(mysqli_connect_errno()){ 
		echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error(); 
	}
?>