<?php
// input data dari form
$nama = $_POST["nama"];
$jabatan = $_POST["jabatan"];
$status = $_POST["status"];
$jumlah_anak = $_POST["jumlah_anak"];

// hitung gaji pokok berdasarkan jabatan
switch ($jabatan) {
  case "Manager":
    $gaji_pokok = 20000000;
    break;
  case "Asisten":
    $gaji_pokok = 15000000;
    break;
  case "Kabag":
    $gaji_pokok = 10000000;
    break;
  default:
    $gaji_pokok = 4000000;
}

// hitung tunjangan jabatan
$tunjangan_jabatan = 0.2 * $gaji_pokok;

// hitung tunjangan keluarga
if ($status == "Menikah") {
  if ($jumlah_anak <= 2) {
    $tunjangan_keluarga = 0.05 * $gaji_pokok;
  } else if ($jumlah_anak >= 3 && $jumlah_anak <= 5) {
    $tunjangan_keluarga = 0.1 * $gaji_pokok;
  } else {
    $tunjangan_keluarga = 0;
  }
} else {
  $tunjangan_keluarga = 0;
}

// hitung gaji kotor
$gaji_kotor = $gaji_pokok + $tunjangan_jabatan + $tunjangan_keluarga;

// hitung zakat_profesi
$zakat_profesi = ($gaji_kotor >= 6000000 && $status == "Muslim") ? 0.025 * $gaji_kotor : 0;

// hitung take home pay
$take_home_pay = $gaji_kotor - $zakat_profesi;


?>
