<?php
    if (!session_start()) session_start();
    include 'connect.php';
    $up_id = $_SESSION['up_id'];
    if 
    (
        isset($_POST['nama_new']) && 
        isset($_POST['email_new']) && 
        isset($_POST['alamat_new']) && 
        isset($_POST['update_mhs'])
    )
    {
        $id = $_POST['update_mhs'];
        $new_name = $_POST['nama_new']; 
        $new_mail = $_POST['email_new']; 
        $new_addr = $_POST['alamat_new']; 
        $up_query = "UPDATE `mahasiswa` SET `Nama`= '$new_name', `E-mail`= '$new_mail', `Alamat`= '$new_addr' WHERE `NIM` = '$id'";
        $conf = mysqli_query($conn, $up_query);
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
        <title>UPDATE</title>
    </head>
    <body>
        <form action="index.php" method="POST">
            <div class="mb-3">
                <label for="nama">Nama</label>
                <input type="text" name="nama_new" class="form-control">
            </div>
            <div class="mb-3">
                <label for="email">Email</label>
                <input type="text" name="email_new" class="form-control">
            </div>
            <div class="mb-3">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat_new" class="form-control">
            </div>
            <button type="submit" name="update_mhs" class="btn btn-outline-success" value="<?php echo $up_id ?>">
                Update
            </button>
            <a href="index.php" class="btn btn-outline-danger">Back</a>
        </form>
    </body>
</html>