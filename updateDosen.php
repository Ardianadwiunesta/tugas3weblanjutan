<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dosen</title>
    <link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/styleku.css">
	<script src="bootstrap4/jquery/3.3.1/jquery-3.3.1.js"></script>
	<script src="bootstrap4/js/bootstrap.js"></script>
	<!-- Use fontawesome 5-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>
    <div class="utama">
        <a href="addDosen.php" class="btn btn-primary">Tambah Dosen</a>
    <?php
        require "fungsi.php";
        require "head.html";

            $sql = "SELECT * FROM dosen";
            $rs = mysqli_query($koneksi,$sql) OR die(mysqli_error($koneksi));

            if(mysqli_num_rows($rs) == 0)
            {
                echo "data masih kosong";
            }
            else
            {
            
        ?>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>No</th>
                    <th>NPP</th>
                    <th>Nama</th>
                    <th>Homebase</th>
                    <th>Aksi</th>
                </tr>
                <?php
                $i = 1;
                while($result = mysqli_fetch_object($rs))
                {
            ?>
                <tr>
                    <td><?php echo $i?></td>
                    <td><?php echo $result->npp?></td>
                    <td><?php echo $result->namadosen?></td>
                    <td><?php echo $result->homebase?></td>
                    <td>Edit | <a href ="hpsDosen.php?id=<?php echo encryptid($result->npp)?>" class="btn btn-danger">Delete</a></td>

                    </td>
                </tr>
            <?php
                $i++;
                }
            }
                ?>
                </table>
        </div>

    
</body>
</html>