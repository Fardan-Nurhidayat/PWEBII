<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Input Mahasiswa</title>
</head>
<body>
  <h3>Tambah Data Mahasiswa</h3>
  <br>
  <form action="proses.php?aksi=tambah" method="POST">
    <table class="table-striped">
    <tr>
      <td>NIM</td>
      <td><input type="text" name="Nim" class="form-control"></td>
    </tr>
    <tr>
      <td>Nama</td>
      <td><input type="text" name="Nama" class="form-control"></td>
    </tr>
    <tr>
      <td>Program Studi</td>
      <td><input type="text" name="Program_Studi" class="form-control"></td>
    </tr>
    <tr>
      <td></td>
      <td><button type="submit" class="btn btn-primary" value="simpan">Simpan</button></td>
    </tr>
  </table>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>