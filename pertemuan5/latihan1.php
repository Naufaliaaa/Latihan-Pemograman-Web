<?php 
// array 
// Membuat array 

$hari = array ('Senin', 'Selasa', 'Rabu','Kamis',"Jum'at",'Sabtu','Minggu');
$bulan = ['Januari', 'Februari', 'Maret'];
$myArray = ['Naufal','20','False'];
$Binatang = ['🦖', '🦄','🐉','🦕','🐳'];

echo $hari[1];
echo "<hr>";

var_dump ($bulan);
echo "<br>";
print_r ($myArray);
echo"<br>";
var_dump ($Binatang);
echo"<hr>";


//menambahkan elemen di akhir array menggunakan index kosong []

$hari[]= "Jum'at";
$hari[]='Sabtu';
print_r($hari);
echo"<br>";

//mengunakan array push
array_push($bulan, 'Januari','Maret');
print_r($bulan);
echo"<echo>";

//mengunakan array unshift

array_unshift($Binatang, '🦖','🐉');
print_r($Binatang);

echo"<hr>";

// Menghapus elemen di akhir array mengunakan array_pop

array_pop($hari);
array_pop($hari);
print_r($hari);
echo"<hr>";

// Menghapus elemen awal array menggunakan array_shift

array_shift($hari);
print_r($hari);




?>