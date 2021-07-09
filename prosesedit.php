<?php
include 'connect.php';
include 'header.php';

$result = $result = mysqli_query($conn, "SELECT * FROM  pasien");
	if(isset($_POST['edit'])){
	
      	$nama = $_POST["nama"];
      	$alamat = $_POST["alamat"];
      	$umur = $_POST["umur"];
      	$no_hp = $_POST["no_hp"];
      	$rt = $_POST["rt"];
      	$rw = $_POST["rw"];
      	$tanggal_input = $_POST["tanggal_input"];



    			$sql = mysqli_query($conn, "UPDATE positif SET nama= '$nama', alamat = '$alamat', umur = '$umur', no_hp = '$no_hp', rt = '$rt', rw = '$rw', tanggal_input = '$tanggal_input' WHERE tanggal_input = '$tanggal_input'");
    			
 			  	if($sql)
				{
				echo '<script>alert("Perubahan berhasil disimpan"); </script>';
				echo '<meta http-equiv="refresh" content="0;URL=index.php">';
			}

	else 
			{
				echo '<script>alert("Perubahan gagal disimpan"); </script>';
				echo '<meta http-equiv="refresh" content="0;URL=index.php">';
			}
	}
	  

?>