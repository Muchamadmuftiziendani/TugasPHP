<?php 
require_once 'proses.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gaji Karyawan</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="containerForm">
      <h1>Form Input</h1>
      <form method="POST" action="tampilan_Hasil.php">
        <div class="colum">
        <label class="label">Nama</label>
        <span>:</span>
        <input type="text" name="nama"><br>
        </div>
        <div class="colum">
        <label class="label">Jabatan</label>
        <span>:</span>
        <select name="jabatan">
          <option value="Manager">Manager</option>
          <option value="Asisten">Asisten</option>
          <option value="Kabag">Kabag</option>
          <option value="Staff">Staff</option>
        </select><br>
        </div>

        <div class="colum">
        <label class="label">Status</label>
        <span>:</span>
        <select name="status">
          <option value="Belum Menikah">Belum Menikah</option>
          <option value="Menikah">Menikah</option>
        </select><br>
        </div>
        <div class="colum">
        <label class="label">Jumlah Anak</label>
        <span>:</span>
        <input type="number" name="jumlah_anak" value="0"><br>
        </div>
        <input type="submit" value="Hitung">
      </form>
    </div>
  </body>
</html>
