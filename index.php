<?php
    if (!session_start())session_start(); 
    include 'connect.php';
    if (isset($_POST['del_mhs']))
    {
        $id = $_POST['del_mhs'];
        $del = "DELETE FROM `mahasiswa` WHERE `NIM` = $id";
        $fin = mysqli_query($conn, $del);
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
        <title>Main Menu</title>
    </head>
    <body>
        <?php
            $query = "SELECT * FROM mahasiswa";
        ?>
        <div class="div2">
            <table class="table table-info">
                <thead>
                    <tr>
                        <th class="text-center">NIM</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">E-mail</th>
                        <th class="text-center">Alamat</th>
                        <th class="text-center">DELETE</th>
                        <th class="text-center">UPDATE</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $result = mysqli_query($conn, $query);
                        while ($data = mysqli_fetch_array($result))
                        {
                            $nim = $data['NIM'];
                            $nama = $data['Nama'];
                            $mail = $data['E-mail'];
                            $alamat = $data['Alamat'];
                    ?>                 
                        <tr>
                            <td class="text-center"><?php echo $nim ?></td>
                            <td class="text-center"><?php echo $nama ?></td>
                            <td class="text-center"><?php echo $mail ?></td>
                            <td class="text-center"><?php echo $alamat ?></td>
                            <td class="text-center"> 
                                <form action="" method="POST">
                                    <button type="submit" name="del_mhs" value="<?php echo $nim; ?>" class="btn btn-outline-danger">
                                        Remove
                                    </button>
                                </form>
                                </a>
                            </td>
                            <td class="text-center">
                                <form action="mhs_update.php" method="POST">
                                    <input type="hidden" name="nim", value="<?php echo $nim; ?>">
                                    <button class="btn btn-outline-success" name="update_mhs">
                                        Edit
                                    </button>
                                </form>
                            </td>
                        </tr>                                        
                    <?php
                        } 
                    ?>                
                </tbody>
            </table>
        </div>
    </body>
    <footer>
        <form action="mhs_insert.php" method="POST">
            <button class="btn btn-outline-success" name="insert_mhs">
                INSERT
            </button>
        </form>
    </footer>
</html>