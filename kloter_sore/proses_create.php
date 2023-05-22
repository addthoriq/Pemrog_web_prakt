<?php

require 'koneksi.php';

$nim = $_POST['input_nim'];
$nama = $_POST['input_nama'];
$jk = $_POST['input_jk'];

$sql = "INSERT INTO mahasiswa VALUES ('$nim','$nama','$jk')";
$koneksi->query($sql);

header("location: index.php");
?>