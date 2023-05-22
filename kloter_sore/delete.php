<?php

require 'koneksi.php';

$nim = $_GET['nim'];

$sql = "DELETE FROM mahasiswa WHERE nim = '$nim'";

$koneksi->query($sql);

header("location: index.php");