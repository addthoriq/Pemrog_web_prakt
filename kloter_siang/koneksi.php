<?php

$server = "127.0.0.1";
$usrname = "root";
$pass = "";
$dbname = "phpmysql";

$koneksi = new mysqli($server, $usrname, $pass, $dbname);

if (!$koneksi) {
  die("Koneksi anda gagal" . $koneksi->connect_error);
}