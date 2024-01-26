<?php
// SYNTAX PHP

// STANDAR OUTPUT
// echo, print
// print_r(untuk menampilkan hasil array)
// var_dump(untuk menampilkan isi dari sebuah variabel dan menampilkan informasi dari variabel tersebut)

// VARIABEL & TIPE DATA
// Variabel
// nama variabel tidak boleh diawali dengan angka, tetapi boleh diakhiri dengan angka

echo "Contoh Perbedaan Penggunaan Tanda Kutip 2 dengan Tanda Kutip 1 dengan saat menyertakan variabel didalamnya<br>";
$nama = "Julela";
echo "<br>Halo, nama saya $nama<br>"; 
// konsep interpolasi di line 15 nyambung, karena menggunakan tanda kutip 2
echo 'Halo, nama saya $nama<br><br><br>';
// konsep interpolasi di line 17 tidak berfungsi karena mengunakan tanda kutip 1


// OPERATOR
// ARITMATIKA
// + - * / 

echo "Contoh Penggunaan Operator Aritmatika<br>";
$x = 10;
$y = 20;
echo $x + $y;

// Penggabung String / concatenation / concat
// .

echo "<br><br><br>Contoh Penggunaan Operator Penggabung String / Concat<br>";

$kata_depan = "Ayo";
$kata_belakang = "Main";
echo $kata_depan . $kata_belakang . "<br>";
echo $kata_depan .  " " . $kata_belakang . "<br><br><br>";




// ASSIGHMENT
// =, +=, -=, *=, /=, .=
echo "Contoh Penggunaan Assighment<br>";
$c = 2;
$c += 4;
echo $c . "<br>";

$kata = "Ayo";
$kata .= " ";
$kata .= "Main";
echo $kata . "<br><br>";


// Perbandingan
// <, >, <=, >=, ==, !=
echo "Contoh Penggunaan Operator Perbandingan<br>";
var_dump(1 < 5);
echo "<br>";
var_dump(1 > 5);
echo "<br>";
var_dump (1 == "1"); 
// hasil pengecekan di line 63 dibenarkan karena dalam operator perbandingan ini, yang dilihat adalah nilainya, jadi keberadaan string tidk berpengaruh sehingga hasilnya sama sama 1 dan benar


// Operator Identitas
// ===, !==

echo "<br><br>Contoh Penggunaan Operator Identitas<br>";
var_dump (1 === "1"); 
// hasil pengecekan di line 72 bisa false karena dalam operator identitas ini yang dilihat adalah nilai beserta tipe datanya, sehingga keberadaan tanda string disana sangatlah berpengaruh
 

// Operator Logika
// && || !
echo "<br><br>Contoh Penggunaan Operator Logika<br>";
$a = 10;
var_dump($a < 20 && $a % 2 == 0); 
echo "<br>";
// hasil pengecekan di line 79 dibenarkan karena dua kondisi tersebut adalah benar, jika salah satu kondisi tersebut salah hasil pun akan menjadi false. karena dalam operator logika && dua kondisi haruslah benar
var_dump($a > 20 && $a % 2 == 0); 
echo "<br>";

var_dump($a > 20 || $a % 2 == 0); 
// jika salah satu kondisi di dalam contoh diatas merupakan benar, maka hasilnya akan true, karena dalam operator logika tersebut, kedua kondisi tidak diharuskan dalam hasil yang benar, hanya salah satunya saja

?>