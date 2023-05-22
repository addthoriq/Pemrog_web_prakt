<?php

$server = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "pertemuan_delapan";

$koneksi = new mysqli($server, $username, $password, $dbname);

if (!$koneksi) {
  die("Koneksi gagal " . $koneksi->connect_error);
}