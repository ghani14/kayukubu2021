  <?php 
$conn = mysqli_connect("localhost","root","","pasien") or die("koneksi gagal");


    if (mysqli_connect_errno()) {
        echo "Koneksi Gagal :" . mysqli_connect_errno(); 
    } 
?>