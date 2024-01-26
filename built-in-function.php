<?php 

// FUNCTION

// DATE
// function date harus diisi dengan sebuah parameter tertentu
// format parameter l = hari
// format parameter d = tanggal
// format parameter M = bulan
// format parameter Y = tahun
// references = php.net/manual/en/function.date.php

echo "Hasil dari contoh function date<br><br>";
echo date("l");
echo "<br><br><br>";



// TIME
// function time tidak harus diisi dengan sebuah parameter tertentu
echo "Hasil dari contoh function time<br><br>";
// hasil dari echo time merupakan hitungan detik yang sudah berlalu sejak tanggal 1 januari 1970
// detik tersebut disebut sebagai Epoch Time/UNIX Timesmap
echo time();
echo "<br><br><br>";





// PENGGABUNGAN DARI FUNCTION DATE & TIME
echo "Hasil dari contoh penggabungan function date & time<br><br>";
echo date("l", time()+60*60*24*30);
echo "<br>";
// hasil dari 30 hari kedepan
echo date("l", time()-60*60*24*30);
echo "<br><br><br>";
// hasil dari 30 hari kebelakang





// MKTIME
// untuk membuat detik sendiri
// mktime memiliki 6 parameter (0,0,0,0,0,0) = (jam, menit, detik, bulan, tanggal, tahun)
// cara meramal hari lahir seseorang dengan menggunakan tanggal lahir
echo "Hasil dari contoh penggunaan function mktime<br><br>";
echo mktime(0,0,0,7,13,2006);
echo "<br>";
// tentukan detik yang telah berlalu terlebih dahulu
// lanjut digabungkan dengan function date
echo date("l", mktime(0,0,0,7,13,2006));
echo "<br><br><br>";






// STRTOTIME
// untuk mengetahui hari lahir hanya dengan memasukkan tanggal lahir

echo "Hasil dari contoh penggunaan function strtotime<br><br>";
echo strtotime("13 Jul 2006");
echo "<br>";
echo date("l", strtotime("13 Jul 2006"));



?>