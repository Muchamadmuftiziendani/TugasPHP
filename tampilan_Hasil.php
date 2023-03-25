<?php 
require_once 'proses.php';



// output hasil perhitungan
echo "Nama: " . $nama . "<br>";
echo "Jabatan: " . $jabatan . "<br>";
echo "Gaji Pokok: " . number_format($gaji_pokok, 0, ".", ",") . "<br>";
echo "Tunjangan Jabatan: " . number_format($tunjangan_jabatan, 0, ".", ",") . "<br>";
echo "Tunjangan Keluarga: " . number_format($tunjangan_keluarga, 0, ".", ",") . "<br>";
echo "Gaji Kotor: " . number_format($gaji_kotor, 0, ".", ",") . "<br>";
echo "Zakat Profesi: " . number_format($zakat_profesi, 0, ".", ",") . "<br>";
echo "Take Home Pay: " . number_format($take_home_pay, 0, ".", ",");
?>

