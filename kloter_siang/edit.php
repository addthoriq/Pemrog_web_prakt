<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Data</title>
</head>

<body>
  <h1>Edit Data</h1>
  <?php
  require 'koneksi.php';

  $getNIM = $_GET['nim'];
  $sql = "SELECT * FROM mahasiswa WHERE nim = '$getNIM'";
  $hasil = $koneksi->query($sql)->fetch_assoc();
  ?>
  <form action="proses_edit.php" method="post">
    <label for="NIM">
      NIM <br>
      <input type="text" name="input_nim" id="NIM" value="<?= $hasil['nim'] ?>" readonly>
    </label> <br>
    <label for="NAMA">
      NAMA <br>
      <input type="text" name="input_nama" id="NAMA" value="<?= $hasil['nama'] ?>">
    </label> <br>
    Jenis Kelamin <br>
    <label for="laki-laki">
      <input type="radio" name="input_jk" id="laki-laki" value="L" <?= $hasil['jenis_kelamin'] == 'L' ? 'checked' : '' ?>> Laki-Laki
    </label>
    <label for="perempuan">
      <input type="radio" name="input_jk" id="perempuan" value="P" <?= $hasil['jenis_kelamin'] == 'P' ? 'checked' : '' ?>> Perempuan
    </label>
    <!-- <select name="jenis_kelamin">
      <option value="L" <?= $hasil['jenis_kelamin'] == 'L' ? 'selected' : '' ?>>Laki-Laki</option>
      <option value="P" <?= $hasil['jenis_kelamin'] == 'P' ? 'selected' : '' ?>>Perempuan</option>
    </select> -->
    <br>
    <button>Kirim</button>
  </form>
</body>

</html>