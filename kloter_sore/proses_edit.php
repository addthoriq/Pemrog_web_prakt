<?php

require 'koneksi.php';

$nim = $_POST['input_nim'];
$nama = $_POST['input_nama'];
$jk = $_POST['input_jk'];

if (empty($nama)) {
  $sql = "SELECT nama FROM mahasiswa WHERE nim = '$nim'";
  $hasil = $koneksi->query($sql)->fetch_assoc();
  $nama = $hasil['nama'];
}

$query = "UPDATE mahasiswa SET nama = '$nama', jenis_kelamin = '$jk' WHERE nim = '$nim'";
$koneksi->query($query);

header("location: index.php");