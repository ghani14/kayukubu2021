
<?php
include 'header.php';
include 'connect.php';
	
$result = $result = mysqli_query($conn, "SELECT * FROM  pasien");
	if(isset($_POST['submit'])){


      	$nama = $_POST["nama"];
      	$alamat = $_POST["alamat"];
      	$umur = $_POST["umur"];
      	$no_hp = $_POST["no_hp"];
      	$rt = $_POST["rt"];
      	$rw = $_POST["rw"];
      	$tanggal_input = $_POST["tanggal_input"];

      		$sql = mysqli_query($conn,"INSERT INTO positif (nama,alamat, umur, no_hp, rt, rw, tanggal_input) VALUES 
			('$nama','$alamat', '$umur', '$no_hp', '$rt', '$rw', '$tanggal_input')");

		if($sql)
		{
			echo "<script>
            		alert('Data berhasil disimpan!');
                	document.location.href='index.php';
          		</script>";
		} 
		else 
		{
			echo "<script>
            		alert('Data Gagal disimpan!');
                	document.location.href='index.php';
          		</script>";
		}
	}
	else
	{
		echo "<script>
            	alert('Gagal Upload File');
               	document.location.href='index.php';
          	</script>";
	}
	  
	
?>