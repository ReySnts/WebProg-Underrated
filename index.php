<?php
session_start(); 
include 'connect.php';
if(isset($_POST['del_mhs'])){
    $id = $_POST['del_mhs'];
    $del = "DELETE FROM `mahasiswa` WHERE `Nim` = $id";
    $fin = mysqli_query($conn, $del);
    // header("index.php");
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
    <title>CRUD</title>
</head>
<body>
    <?php
    $query = "SELECT * FROM mahasiswa";
    ?>
    <div class="div2">
        <table class="table table-info">
            <thead>
                <tr>
                    <th class="text-center">Nim</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">E-mail</th>
                    <th class="text-center">Alamat</th>
                    <th class="text-center">Delete</th>
                    <th class="text-center">Update</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = mysqli_query($conn, $query);
                while($data = mysqli_fetch_assoc($result)){
                    $nim = $data['Nim'];
                    $nama = $data['Nama'];
                    $mail = $data['E-mail'];
                    $alamat = $data['Alamat'];
                ?>
                  
                    <tr>
                        <td><?php echo $nim ?></td>
                        <td><?php echo $nama ?></td>
                        <td><?php echo $mail ?></td>
                        <td><?php echo $alamat ?></td>
                        <td> 
                            <form action="" method="POST">
                                <button type="submit" name="del_mhs" value="<?php echo $nim ;?>" class="btn btn-outline-danger">Delete</button>
                            </form>
                            </a>
                        </td>
                        <td>
                            <form action="mhs_update.php" method="POST">
                                <button class="btn btn-outline-success" name="update_mhs"
                                value="<?php echo $nim;?>">Edit</button>
                                <?php $_SESSION['up_id'] = $nim; ?>
                            </form>
                        </td>
                    </tr>
                    
                    
                <?php }?>

                
            </tbody>
        </table>
    </div>

</body>
</html>