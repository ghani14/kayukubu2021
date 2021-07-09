<?php

include('connect.php');

$tanggal_input=$_GET["tanggal_input"];

	$sql = mysqli_query($conn, "DELETE FROM positif WHERE tanggal_input = '$tanggal_input'") 
			or die (mysqli_error($conn));

	if($sql){
	echo "<script> alert('Delete Data Berhasil'); document.location='index.php?page=lihat';
        </script>";
    }
	else{
		echo "<script> alert('Delete Data Gagal'); document.location='index.php?page=lihat';
         </script>";
	}
	 ?>
