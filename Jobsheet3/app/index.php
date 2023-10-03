<?php
  include './classes/database.php';
  $koneksi = new Database();
  if(!$koneksi){
    echo "Koneksi Gagal" . PHP_EOL;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
<h3>Data Mahasiswa</h3>
<a href="./views/inputMahasiswa.php">Tambah Mahasiswa</a>
<br>
<table class="table-bordered">
  <tr>
    <th>No</th>
    <th>NIM</th>
    <th>Prodi</th>
    <th>Nama</th>
    <th colspan="2">Aksi</th>
  </tr>
  <?php
    $no=1;
    foreach($koneksi->tampil_mahasiswa() as $data){
      echo "<tr>";
      echo "<td>$no</td>";
      echo "<td>$data[Nim]</td>";
      echo "<td>$data[Program_Studi]</td>";
      echo "<td>$data[Nama]</td>";
      echo "<td><a href='editMhs.php?nim=" . $data['Nim'] . "&aksi=edit'>Edit</a> 
      <a href='./views/proses.php?nim=" . $data['Nim'] . "&aksi=hapus'>Hapus</a></td>";
     
      echo "</tr>";
      $no++;
    }
  ?>
</table>  
</body>
</html>
