<?php
    include "koneksi.php";

    if (isset($_POST['daftar'])) {
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $namalengkap=$_POST['namalengkap'];
    $alamat=$_POST['alamat'];

    $sql=mysqli_query($conn,"insert into user values('','$username','$password','$email','$namalengkap','$alamat')");
    echo "<script>
    alert('akun anda berhasil terdaftar');
    location.href='login.php';
  </script> ";

    }
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web galery foto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php 
    include "layout/header.html";
    ?>

   <main class="container">
      <div class="row justify-content-center">
      <div class="col-sm-4 mt-4">
      <h1>Register</h1>
      <form action="register.php" method="POST">
  <div class="row mb-1">
    <label for="username" class="form-label">username:</label>
    <input type="text" class="form-control" id="username" placeholder="Enter UserName" name="username">
  </div>
  <div class="row mb-1">
    <label for="password" class="form-label">password:</label>
    <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password">
  </div>
  <div class="row mb-1">
  <label for="email" class="form-label">email:</label>
    <input type="text" class="form-control" id="email" placeholder="Enter Email" name="email">
  </div>
  <div class="row mb-1">
  <label for="namalengkap" class="form-label">nama lengkap:</label>
    <input type="text" class="form-control" id="namalengkap" placeholder="Enter nama lengkap" name="namalengkap">
  </div>
  <div class="row mb-1">
    <label for="alamat" class="form-label">alamat:</label>
    <input type="text" class="form-control" id="alamat" placeholder="Enter Alamat" name="alamat">
  </div>
  <div class="form-check mb-1">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="remember"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-secondary bg-primary" name="daftar">Daftar</button>
</form>
   </main>

   <?php 
    include "layout/footer.html";
    ?>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>