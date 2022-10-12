<?php
  if (!session_start()) session_start();
  include 'connect.php';
  function check_ins()
  {
    if
    (
      isset($_POST['nim_add']) && 
      isset($_POST['nama_add']) && 
      isset($_POST['email_add']) && 
      isset($_POST['alamat_add']) 
    )
      return 1;
  }
  if 
  (
    check_ins() && 
    isset($_POST['insert_mhs'])
  )
  {
    $add_nim = $_POST['nim_add'];
    $add_name = $_POST['nama_add'];
    $add_mail = $_POST['email_add']; 
    $add_addr = $_POST['alamat_add'];
    $add_query = "INSERT INTO `mahasiswa` (`Nim`, `Nama`, `E-mail`, `Alamat`) VALUES ('$add_nim', '$add_name', '$add_mail', '$add_addr')";
    $conf = mysqli_query($conn, $add_query);
    header("refresh:0; index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" 
    crossorigin="anonymous">
    <title>INSERT</title>
  </head>
  <body>
    <form action="" method="POST">
      <div class="mb-3">
        <label for="nim_add">NIM</label>
        <input type="text" name="nim_add" class="form-control">
      </div>
      <div class="mb-3">
        <label for="nama_add">Nama</label>
        <input type="text" name="nama_add" class="form-control">
      </div>
      <div class="mb-3">
        <label for="email_add">Email</label>
        <input type="text" name="email_add" class="form-control">
      </div>
      <div class="mb-3">
        <label for="alamat_add">Alamat</label>
        <input type="text" name="alamat_add" class="form-control">
      </div>
      <button type="submit" name="insert_mhs" class="btn btn-outline-success">
        Insert
      </button>
      <a href="index.php" class="btn btn-outline-danger">Back</a>
    </form>
  </body>
</html>