<?php 
$Nama = ['Naufal','Zul','Faza','Asep','Semprul'];
$Makanan = ['🍔','🥗','🥙','🥪','🍏'];
$Binatang = ['🦖', '🦄','🐉','🦕','🐳'];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>
<body>
    
<h2>Daftar Mahasiswa</h2>

<?php foreach ($ as $ => $) { ?> 

<ul>
    <li>Nama : <?= $nama ?></li>
    <li>Makanan Favorit :<?= $ [$]; ?>  </li>
    <li>Peliharaan: <?= $ [$]; ?> </li>
</ul>
<?php } ?>


</body>
</html>