
<?php
require "fungsi.php";

$tahun = $_POST["tahun"];
$npp = "0686.11.".$tahun.".";
$dataNpp = $_POST["npp"];
$insertNpp = $npp.$dataNpp;
$namadosen = $_POST["namadosen"];
$homebase = $_POST["homebase"];

$q = "SELECT * FROM dosen WHERE npp='".$insertNpp."'";
$rs = mysqli_query($koneksi,$q);
if(mysqli_num_rows($rs) == 0)
{
    //simpan data
    mysqli_query($koneksi, "INSERT INTO dosen VALUES ('$insertNpp', '$namadosen', '$homebase')");
header("location:addDosen.php");
}
else
{
    echo "<script>
        alert('NPP yang diinput sudah ada')
        javascript:history.go(-1)
        </script>";
}

?>