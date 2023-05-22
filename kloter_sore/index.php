<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<a href="create.php">Tambah data</a>

<body>
  <?php
  require 'koneksi.php';

  $sql = "SELECT * FROM mahasiswa";
  $hasil = $koneksi->query($sql);
  ?>
  <table border="1">
    <tr>
      <th>Nomor</th>
      <th>Nama</th>
      <th>NIM</th>
      <th>Jenis Kelamin</th>
      <th>Aksi</th>
    </tr>
    <?php
    if ($hasil->num_rows > 0) {
      $nomor = 1;
      while ($baris = $hasil->fetch_assoc()) {
    ?>
        <tr>
          <td><?= $nomor ?></td>
          <td><?= $baris['nama'] ?></td>
          <td><?= $baris['nim'] ?></td>
          <td><?= $baris['jenis_kelamin'] ?></td>
          <td>
            <a href="edit.php?nim=<?= $baris['nim'] ?>">Edit</a>
            |
            <a href="delete.php?nim=<?= $baris['nim'] ?>" onclick="alert('Apakah anda yakin ingin menghapus?')">Delete</a>
          </td>
        </tr>
    <?php
        $nomor++;
      }
    }
    ?>
  </table>
</body>

</html>