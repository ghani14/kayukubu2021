<?php 

include('connect.php');


if(isset($_POST['register'])){

  $username = $_POST['username'];
  $password = $_POST['password'];
  $level = $_POST['level'];
  $result = mysqli_query($conn, "INSERT INTO login (username,password,level) values ('$username', '$password', '$level')"); 
  header('Location: register.php');
}

 ?>

<!DOCTYPE html>
<html>
<head>

<style>
a {
      text-decoration: none;
    }
    body {
      background: radial-gradient(circle at top left, #fdbb2d, #22c1c3);
      background-repeat: no-repeat;
      max-height: calc(100vh - 104px);
      height : 100vh;
    }
    label {
      font-family: "Raleway", sans-serif;
      font-size: 11pt;
    }
    #forgot-pass {
      color: #2dbd6e;
      font-family: "Raleway", sans-serif;
      font-size: 10pt;
      margin-top: 3px;
      text-align: right;
    }
    #card {
      background: #fbfbfb;
      border-radius: 8px;
      box-shadow: 1px 2px 8px rgb(58, 28, 56);
      height: auto;
      margin: 6rem auto 8.1rem auto;
      width: 329px;
    }
    #card-content {
      padding: 12px 44px;
    }
    #card-title {
      font-family: "Raleway Thin", sans-serif;
      letter-spacing: 4px;
      padding-bottom: 23px;
      padding-top: 13px;
      text-align: center;
    }
    #signup {
      color: #2dbd6e;
      font-family: "Raleway", sans-serif;
      font-size: 10pt;
      margin-top: 16px;
      text-align: center;
    }
    #submit-btn {
      background: -webkit-linear-gradient(left, orange , yellow), rgb(58, 28, 76);
      border: none;
      border-radius: 21px;
      box-shadow: 0px 1px 8px rgb(58, 28, 56);
      cursor: pointer;
      color: white;
      font-family: "Raleway SemiBold", sans-serif;
      height: 42.3px;
      margin: 0 auto;
      margin-top: 20px;
      transition: 0.25s;
      width: 153px;
    }
    #submit-btn:hover {
      box-shadow: 0px 1px 18px #24c64f;
    }
    .form {
      align-items: left;
      display: flex;
      flex-direction: column;
    }
    .form-border {
      background: radial-gradient(circle at top left, #fdbb2d, #22c1c3);
      height: 1px;
      width: 100%;
    }
    .form-content {
      background: #fbfbfb;
      border: none;
      outline: none;
      padding-top: 14px;
    }
    .underline-title {
      background: radial-gradient(circle at top left, #fdbb2d, #22c1c3);
      height: 2px;
      margin: -1.1rem auto 0 auto;
      width: auto;
    }
  </style>
  <title>Register</title>
</head>
<body>


<div id="card">
    <div id="card-content">
      <div id="card-title">
        <h2>Registrasi Anggota</h2>
        <div class="underline-title"></div>
      </div>
      <form method="post" class="form" autocomplete="off">
      
        <label for="username" style="padding-top:13px">
            &nbsp;Username
          </label>
        <input id="username" class="form-content" type="text" name="username" autocomplete="off" required />
        <div class="form-border"></div>
        
        <label for="password" style="padding-top:22px">&nbsp;Password
          </label>
        <input id="password" class="form-content" type="password" name="password" autocomplete="off" required />
        <div class="form-border"></div>


 <div class="form-label-group">
      <select class="form-control" name="level">
        <!-- <br><option value="Pegawai">Pegawai</option> -->
        <br><option value="amdin">Admin</option>
        <br><option value="pengunjung">Guest</option>
      </select>
    </div>
        <div class="form-border"></div>
        <input id="submit-btn" type="submit" name="register" style='color:black' value="Register" />


        <div class="registration" style="text-align: center;padding:5px;">
                    <a class="" href="login.php" style="padding : -100px">
                   <h4>Kembali</h4>
                    </a>
                </div>
        </div>
      </form>
</div>

  
    <!-- <table>
      <tr>
        <td>NIM</td><td><input type="text" name="nim"></td>
      </tr>
      <tr>
        <td>Nama</td><td><input type="text" name="nama"></td>
      </tr>
      <tr>
        <td>Username</td><td><input type="text" name="username"></td>
      </tr>
      <tr>
        <td>Password</td><td><input type="Password" name="password"></td>
      </tr>
      <tr>
        <td>Email</td><td><input type="email" name="email"></td>
      </tr>
      <tr>
        <td></td><td><input type="submit" name="register" value="Register"></td>
      </tr>
    </table>  
  </form> -->
</body>
</html>