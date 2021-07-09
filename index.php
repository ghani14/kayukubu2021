<?php
session_start();
if (empty($_SESSION['username']) or empty($_SESSION['level'])) {
    echo "<script>alert('Maaf, untuk mengakses halaman ini, anda harus login terlebih dahulu, terima kasih');document.location='login.php'</script>";
}

?>

<?php 
include 'header.php';
include 'connect.php';
 ?>

  <h1 style="text-align: center;">Data Pasien Covid Kayu Kubu</h1>
  <br/>
 <a class="btn btn-primary btn-lg" href="tambah.php" style="text-align: center;" role="button">Tambah Data Pasien</a> 
  
 <a  class="btn btn-danger btn-lg"  href="logout.php" role="button">Logout</a>

  <br/>
  <br/>
  <table class="table table-bordered" style="text-align: center;">
      <thead class="thead-dark">
    <tr>
      <th>Nama</th>
      <th>Umur Pasien</th>
      <th>Nomor Handphone</th>
      <th>Alamat</th>
      <th>RT</th>
      <th>RW</th>
      <th>Tanggal Input</th>
       <th colspan="2">Aksi</th>
    </tr>
    <?php 
    include 'connect.php';
 
        $batas = 10;
        $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
        $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;  
 
        $previous = $halaman - 1;
        $next = $halaman + 1;


    $data = mysqli_query($conn,"SELECT * from positif");
    $jumlah_data = mysqli_num_rows($data);
    $total_halaman = ceil($jumlah_data / $batas); 

    $query = mysqli_query($conn,"SELECT * FROM positif limit $halaman_awal, $batas");
    $nomor = $halaman_awal+1;
    while($d = mysqli_fetch_array($data)){
     

      ?>
      <tr>
        <td><?php echo $d['nama']; ?></td>
        <td><?php echo $d['umur']; ?></td>
        <td><?php echo $d['no_hp']; ?></td>
        <td><?php echo $d['alamat']; ?></td>
        <td><?php echo $d['rt']; ?></td>
        <td><?php echo $d['rw']; ?></td>
        <td><?php echo date("d-m-y",strtotime($d['tanggal_input'])); ?></td>
        <td>
          <a class="btn btn-success" href="edit.php?tanggal_input=<?php echo $d['tanggal_input']; ?>">EDIT</a>
          <a class="btn btn-danger" href="delete.php?tanggal_input=<?php echo $d['tanggal_input']; ?>">HAPUS</a>
        </td>
      </tr>
      <?php 
    }
    ?>
  </table>

  <nav>
      <ul class="pagination justify-content-center">
        
        <?php 
        for($x=1;$x<=$total_halaman;$x++){
          ?> 
          <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
          <?php
        }
        ?>
      </ul>
    </nav>
</section>
</body>
</html>