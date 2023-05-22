<?php

require 'koneksi.php';

$nim = $_POST['input_nim'];
$nama = $_POST['input_nama'];
$jk = $_POST['input_jk'];

if (empty($nama)) {
  $getMhs = "SELECT nama FROM mahasiswa WHERE nim = '$nim'";
  $sql = $koneksi->query($getMhs)->fetch_assoc();
  $nama = $sql['nama'];
}

$query = "UPDATE mahasiswa SET nama = '$nama', jenis_kelamin = '$jk' WHERE nim = '$nim'";
$koneksi->query($query);

header("location: index.php");