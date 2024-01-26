<?php

// PENGULANGAN
// for
// while
// do... while
// foreach = pengulangan khusus array





// PENGULANGAN FOR
// ($i = 0) = disebut sebagai bagian inisialisasi
// ($i < 5) = disebut sebagai bagian terminasi
// ($i++) = disebut sebagai bagian increment/decrement
echo "Contoh Pengulangan For <br><br>";
for( $i = 0 ; $i < 5 ; $i++){
    echo "Ayo Jajan<br>";
}






// PENGULANGAN WHILE
echo "<br><br><br>Contoh Pengulangan While<br><br>";
$a = 0;
while ($a < 8){
    echo "Ayoo Jajan<br>";
$a++;
}






// PENGULANGAN DO... WHILE
echo "<br><br><br>Contoh Pengulangan Do... While<br><br>";
// kondisi benar
$b = 0;
do{
    echo "Ayo Jajan<br>";
$b++;
}while($b < 6);

// kondisi salah
$c = 10;
do{
    echo "<br>Ayo Jajan<br>";
$c++;
} while($c < 6);

?>









<!-- CONTOH PENGULANGAN DALAM HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Flow</title>
</head>
<body>
<h5>Contoh Penggunaan Pengulangan PHP di dalam HTML</h5>
<!-- Untuk Veri Html masuk ke syntax php -->
    <table border="1" cellpadding="10" cellspacing="0">
        <?php
        for($g = 1; $g <= 3; $g++){
            echo "<tr>";
            for($j = 1; $j <=5; $j++){
                echo "<td>$g,$j</td>";
            }
            echo "</tr>";
        } 
        ?>
    </table>




<h5>Contoh Penggunaan Pengulangan PHP di dalam HTML</h5>
<!-- untuk versi html tetap html -->
<table border="1" cellpadding="10" cellspacing="0">
        <?php for($g = 1; $g <= 3; $g++) : ?>
            <tr>
          <?php for($j = 1; $j <=5; $j++) : ?>
                <td> <?php echo "$g, $j"; ?></td>
            <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>





<!-- coba pakai while -->
<h5>Contoh Penggunaan Pengulangan PHP di dalam HTML</h5>
<!-- untuk versi html tetap html -->  
<table border="1" cellpadding="10" cellspacing="0">
       <?php 
       $n = 1;
while ($n <= 3) : ?>
    <tr>
        <?php $m = 1;
        while($m <= 5) : ?>
        <td><?= "$n,$m"; ?></td>
        <?php $m++; endwhile; ?>
    </tr>
<?php $n++; endwhile; ?>
    </table>


</body>
</html>







<?php 


// PENGKONDISIAN / PERCABANGAN
// if else
// if elseif else
// ternary
// switch



// IF ELSE
echo "<br><br><br>Contoh Pengkondisian If Else<br><br>";
$u = 60;
if($u < 20){
    echo "Benar";
} else {
    echo "Salah";
}



// IF ELSEIF ELSE
echo "<br><br><br>Contoh Pengkondisian If Elseif Else<br><br>";
$i = 20;
if($i < 20){
    echo "Benar";
} elseif ($i == 20) {
    echo "Bingo!";
}else {
    echo "Salah";
} 
?>




<!-- CONTOH PENGKONDISIAN DALAM HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Flow</title>
    <style>
        .warna-baris{
            background: silver;
        }
    </style>
</head>
<body>
<h5>Contoh Penggunaan Pengkondisian PHP di dalam HTML</h5>

<table border="1" cellpadding="10" cellspacing="0">
        <?php for($e = 1; $e <= 3; $e++) : ?>
            <?php if($e % 2 == 1) : ?>
            <tr class="warna-baris">               
                <?php else : ?>
                    <tr>
                        <?php endif; ?>
          <?php for($o= 1; $o <=5; $o++) : ?>
                <td> <?php echo "$e, $o"; ?></td>
            <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</html>



<!-- END -->