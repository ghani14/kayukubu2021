

<?php

    // session_start();
    // if(!isset($_SESSION['login'])){
    //     header('Location: login.php');
    // }; 
    // include('connect.php')
  include 'header.php';
  include('connect.php');
  ?>

<section class="page-section" id="home">
           <div class="container" style='margin-top:10px;'>
               <!-- <div class="text-center"> -->
<form action="prosestambah.php" method="post" enctype="multipart/form-data">
  


  <h1 style='text-align:center;'>Tambah Data Pasien</h1><br><br>
  <div class="content">
  
    <div class="container" >

  <div class='col-md-12' >


          <div class="form-group">
    <label for="nama" class="label">Nama Pasien</label>
           <input class="form-control" type="text" name="nama">
  </div>


       <div class="form-group">
    <label for="umur" class="label">Umur Pasien</label>
           <input class="form-control" type="text" name="umur">
  </div>
 
   <div class="form-group">
    <label for="no_hp" class="label">Nomor Handphone </label>
           <input class="form-control" type="text" name="no_hp">
  </div>

       <div class="form-group">
    <label for="alamat" class="label">Alamat</label>
           <input class="form-control" type="text" name="alamat">
  </div>

       <div class="form-group">
    <label for="rt" class="label">RT</label>
           <input class="form-control" type="text" name="rt">
  </div>

  <div class="form-group">
    <label for="rw" class="label">RW</label>
           <input class="form-control" type="text" name="rw">
  </div>

  <div class="form-group">
    <label for="tanggal_input" class="label">Tanggal Input</label>
           <input class="form-control" type="date" name="tanggal_input">
  </div>
 

          <div class="form-group">
            <button type="submit" name="submit" class="btn btn-dark" style='color:white ;'>Tambah Data</button>

        <a class="btn btn-primary" href="index.php" role="button">Kembali</a>
          
          </div>
          </div>
     
        </div>
      </form>
      </div>
    </div>
  
    
</section>
<div class="clear"></div>
  </div>
  <!-- ini Footer -->
  <!-- <?php
  include('template/footer.php')
  ?> -->
  <!-- end Footer -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
</body>
</html>