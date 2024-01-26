<?php 
// function 'nama function bebas' (parameter = "isi parameter default")
function halo($waktu = "Datang", $nama = "Admin"){
    return "Selamat $waktu, $nama!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Defined Function</title>
</head>
<body>
    <!-- jika disini diisi parameter, maka parameter default di line 3 tidak akan dipakai dan yang dipakai adalah parameter yang dikirim -->
    <!-- namun jika parameter tidak dikirim, yang ditampilkan ke layar adalah parameter default yang berada di line 3 -->
    <h1><?= halo("Pagi", "Jule"); ?></h1>
</body>
</html>