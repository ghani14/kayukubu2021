

<?php

session_start();
unset($_SESSION['username']);
unset($_SESSION['password']);

include('connect.php');

session_destroy();
echo "<script>alert('Anda telah keluar dari halaman Anda');document.location='login.php'</script>";
