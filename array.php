<?php

// DEVELOPER MODE

// ARRAY
// Array adalah sebuah variabel yang dapat menampung lebih dari 1 nilai
// nilai di dalam array disebut sebagai elemen
// elemen dalam array boleh menggunakan tipe data yang berbeda, seperti string, int, atau bolean





// membuat array menggunakan cara lama
// $hari = array("Senin", "Selasa", "Rabu");
// membuat array menggunakan cara baru
// $bulan = ["Januari", "Februari", "Maret"];
// $tahun = [2024, "Kabisat", true];






// cara menampilkan array
// bisa menggunakan var_dump/print_r
// hasil yang ditampilkan oleh keduanya pasti berupa pasangan antara key dan value
// key merupakan indeks dari sebuah nilai yang selalu dimulai dari angka 0







// var_dump
// echo "Hasil dari var_dump";
// echo "<br><br>";
// var_dump($hari);
// echo "<br><br>";


// print_r
// echo "Hasil dari print_r";
// echo "<br><br>";
// print_r($bulan);
// echo "<br><br>";






// cara menampilkan elemen dalam array
// echo "Hasil dari menampilkan 1 elemen dalam array";
// echo "<br><br>";
// echo $bulan[0];
// echo "<br><br>";
// echo $tahun[1];







// // cara menambahkan elemen ke array
// var_dump($hari);
// $hari[] = "Kamis";
// $hari[] = "Jumat";
// echo "<br><br>";
// var_dump($hari);
 ?>








<?php


// USER MODE

$angka = [78,90,46,37,28,48,93,76,29,47];

// pindahkan ke body



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengulangan Array</title>
    <style>
        div{
            width : 50px;
            height : 50px;
            background-color : salmon;
            text-align : center;
            line-height : 50px;
            margin : 3px;
            float : left;
        }
    </style>
</head>
<body>
    <!-- pengulangan diulang dan ditentukan secara manual oleh developer -->
     <!-- <?php for($a = 0; $a < 7; $a++) { ?> -->
        <div><?php echo $angka[$a] ?></div>
        <?php } ?> 
        <br><br>
<!-- Pengulangan diulang dan ditentukan otomatis oleh program dengan menggunakan count sehingga program dapat menghitung sendiri berapa jumlah elemen dalam array tersebut dan mengulangkannya sesuai dengan jumlah tersebut -->
    <?php for($a = 0; $a < count($angka); $a++) { ?>
        <div><?php echo $angka[$a] ?></div>
        <?php } ?>
</body>
</html>