<?php 
require 'filepegawai.php';

$pegawai1 = new Pegawai('01111','Rose','Manager','Islam','Menikah');
$pegawai2 = new Pegawai('02222','Jiso','Staff','Islam','Menikah');
$pegawai3 = new Pegawai('03333','Jennie','Asisten Manager','Kristen','Menikah');
$pegawai4 = new Pegawai('04444','Lisa','Kepala Bagian','Hindu','Menikah');
$pegawai5 = new Pegawai('05555','Silmi','Manager','Islam','Menikah');


$ar_pegawai = [$pegawai1,$pegawai2,$pegawai3,$pegawai4,$pegawai5];

foreach($ar_pegawai as $pegawai){
    $pegawai->cetak();
}


?>