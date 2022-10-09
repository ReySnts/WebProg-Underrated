<?php
if(!session_start()){
    session_start();
}
include 'connect.php';
$up_id = $_SESSION['up_id'];
function check1(){
    if(isset($_POST['nama']) && isset($_POST['email'])
    && isset($_POST['alamat'])){
        return 1;
    }

}
if (check1() && isset($_POST['update_mhs'])){
    $new_name = $_POST['nama']; 
    $new_mail = $_POST['email']; 
    $new_add = $_POST['alamat']; 
    $id = $_POST['update_mhs'];
    $up_query = "UPDATE `mahasiswa` SET `Nama`='$new_name',`E-mail`='$new_mail',`Alamat`='$new_add' WHERE Nim = $id";
    $conf = mysqli_query($conn, $up_query);
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
    <title>Document</title>
</head>
<body>
    <a href="index.php" class="btn btn-outline-danger">Back</a>
    <form action="index.php" method="POST">
        <div class="mb-3">
            <label for="nama">Nama setelah di update</label>
            <input type="text" name="nama" class="form-control">
        </div>
        <div class="mb-3">
            <label for="email">Email setelah di update</label>
            <input type="text" name="email" class="form-control">
        </div>
        <div class="mb-3">
            <label for="alamat">Alamat setelah di update</label>
            <input type="text" name="alamat" class="form-control">
        </div>
        <button type="submit" name="update_mhs" class="btn btn-outline-success" value="<?php echo $up_id ?>">
            Update Data
        </button>
    </form>
</body>
</html>