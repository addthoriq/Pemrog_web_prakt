<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah</title>
</head>

<body>
  <h1>Tambah Data</h1>
  <form action="proses_create.php" method="post">
    <label for="NIM">
      NIM <br>
      <input type="text" name="input_nim" id="NIM">
    </label><br>
    <label for="NAMA">
      NAMA <br>
      <input type="text" name="input_nama" id="NAMA">
    </label><br>
    Jenis Kelamin <br>
    <label for="laki-laki">
      <input type="radio" name="input_jk" id="laki-laki" value="L"> Laki-Laki
    </label>
    <label for="perempuan">
      <input type="radio" name="input_jk" id="perempuan" value="P"> Perempuan
    </label>
    <br>
    <button>Submit</button>
  </form>

</body>

</html>