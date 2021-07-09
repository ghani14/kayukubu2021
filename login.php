<?php 

session_start();

include('connect.php');

if(isset($_SESSION['login'])){
  header('Location: home.php');
}

if(isset($_POST['login'])){

  $username = $_POST['username'];
  $password = $_POST['password'];

  $result = mysqli_query($conn,"SELECT * FROM login where username='$username'");

  $num = mysqli_num_rows($result);

  if($num > 0){
      $row = mysqli_fetch_assoc($result);

      if($row['password'] == $password){
        $_SESSION['login'] = true;
        $_SESSION['username'] = $username;
        header('Location: home.php');
      }

  }else
  {
    echo "<script type='text/javascript'>alert('Username atau Password Salah');</script>";
  }

}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Login Ke Akun Anda</title>
   <link rel="icon" type="image/x-icon" href="assets/img/1.jpg" />
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
      height: 410px;
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
      margin-top: 50px;
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
      width: 89px;
    }
  </style>
</head>
<body>
  <div id="card">
    <div id="card-content">
      <div id="card-title">
         
        <h2>Login Update Covid</h2>
        <div class="underline-title"></div>
      </div>
      <form method="post" class="form" action="cek_login.php">
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
        <!-- <option value="Pegawai">Pegawai</option> -->
        <option value="admin">Admin</option>
        <option value="pengunjung">Guest</option>
      </select>
    </div>

        <input id="submit-btn" type="submit" name="login" style='color:black' value="LOGIN" />
        <div class="registration" style="text-align: center;padding:7px;">
                    
                    <a class="" href="register.php">
                        Buat Akun Disini
                    </a>
                </div>

        <!-- <div class="registration">
                    Don't have an account yet?<br/>
                    <a class="" href="register.php" style=>
                        Create an account
                    </a> -->
        </div>
      </form>
    </div>
  </div>
</body>
</html>