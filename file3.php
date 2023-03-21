<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset=UTF-8>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jajar Genjang </title>
</head>
<body>
    <h1> Rumus Bangun Ruang Jajar Genjang</h1>

    <form method="POST">
        <table>
            <tr>
                <td>Alas</td>
                <td>
                    <input type="text" name="alas" require>
                </td>
            </tr>
            <tr>
                <td>Tinggi</td>
                <td>
                    <input type="text" name="tinggi" require>
                </td>
            </tr>
            <tr>
                <td>Sisi</td>
                <td>
                    <input type="text" name="sisi" require>
                </td>
            <tr>
                <td>
                    <input type="submit" name="submit" value="Hitung">
                </td>
            </tr>
            
</table>

</form>
<?php
    if(isset($_POST['submit'])){
        $alas = $_POST['alas'];
        $tinggi = $_POST['tinggi'];
        $sisi = $_POST['tinggi'];

        $luasjajargenjang = $sisi * $tinggi;
        echo 'Luas jajargenjang itu adalah : '.$luasjajargenjang;
        $keljajargenjang = 2 * ($alas + $sisi) ;
        echo '<hr> Luas jajargenjang itu adalah : '.$keljajargenjang;
        $sisijajargenjang = ($keljajargenjang / 2) - $sisi;
        echo '<hr> sisi jajargenjang itu adalah : '.$sisijajargenjang;
        $alasjajargenjang = $luasjajargenjang / $tinggi;
        echo '<hr> alas jajargenjang itu adalah : '.$alasjajargenjang;
        $tinggijajargenjang = $luasjajargenjang / $alas;
        echo '<hr> tinggi jajargenjang itu adalah : '.$tinggijajargenjang;
    }
?>
</body>
</html>