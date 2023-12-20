<?php
include "koneksi.php";
$nama = $_POST["nama"];
$jk = $_POST["jk"];
$tempat = $_POST["tempat"];
$tgl_lahir = $_POST["tgl_lahir"];
$alamat = $_POST["alamat"];
$jenis_pasien = $_POST["jenis_pasien"];
$jenis_id = $_POST["jenis_id"];
$no_id = $_POST["no_id"];
$agama = $_POST["agama"];
$gol_darah = $_POST["gol_darah"];
$no_hp = $_POST["no_hp"];

$simpan = mysqli_query($con, "INSERT INTO tbl_pasien (no_rm,jenis_kelamin,tempat_lahir,tgl_lahir,nama,alamat,jenis_pasien,no_id,agama,gol_darah,no_hp) VALUES ('','$jk','$tempat','$tgl_lahir','$nama','$alamat','$jenis_pasien','$no_id','$agama','$gol_darah','$no_hp')");

if($simpan) echo "Data Berhasil";
    else echo "Data Gagal";
?>