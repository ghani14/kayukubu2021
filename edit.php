

<?php

    // session_start();
    // if(!isset($_SESSION['login'])){
    //     header('Location: login.php');
    // }; 
    // include('connect.php')
    include 'header.php';
  include 'connect.php';

  ?>

<?php
$tanggal_input=$_GET["tanggal_input"];

$sql = mysqli_query($conn,"SELECT * FROM positif WHERE tanggal_input='$tanggal_input'");
$hasil = mysqli_fetch_assoc($sql);
?>

<body>
<section class="page-section" id="home">
           <div class="container" style='margin-top:10px;'>
               <!-- <div class="text-center"> -->
  <form action="prosesedit.php" method="post" enctype="multipart/form-data">

  <h1 style='text-align:center;'>Edit Data Pasien</h1>
  <div class="content">
    <div class="container">
  <br>
  <div class='col-md-12'>

    <div class="form-group">
    <label for="nama" class="label">Nama Pasien </label>
    <input class="form-control" type="text" name="nama" value="<?php echo $hasil['nama']; ?>">.
    </div>

    <div class="form-group">
    <label for="alamat" class="label">Alamat Pasien </label>
    <input class="form-control" type="text" name="alamat" value="<?php echo $hasil['alamat']; ?>">.
    </div>

          <div class="form-group">
            <label for="umur" class="label">Umur Pasien</label>
           <input class="form-control" type="text" name="umur" value="<?php echo $hasil['umur']; ?>">
          </div>


          <div class="form-group">
            <label for="no_hp" class="label">Nomor Handphone</label>
            <input class="form-control" type="text" name="no_hp" value="<?php echo $hasil['no_hp']; ?>">
          </div>

          <div class="form-group">
            <label for="rt" class="label">RT</label>
            <input class="form-control" type="text" name="rt" value="<?php echo $hasil['rt']; ?>"></input>
          </div>

          <div class="form-group">
            <label for="rw" class="label">RW</label>
            <input class="form-control" type="text" name="rw" value="<?php echo $hasil['rw']; ?>"></input>
          </div>


          <label>Tanggal Input</label>
          <div class="form-group">
          <input class="form-control" type="date" name="tanggal_input" value="<?php echo $hasil['tanggal_input']; ?>">
          </div>


          <div class="form-group">
            <button  type="submit" name="edit" class="btn btn-dark" style='color:white ;'>Simpan</button>

        <a class="btn btn-primary" href="index.php" role="button">Kembali</a>
          
          </div>
          </div>
     
        </div>
      </form>
      </div>
    </div>