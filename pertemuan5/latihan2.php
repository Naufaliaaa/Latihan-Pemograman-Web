<?php 
$Binatang = ['🦖', '🦄','🐉','🦕','🐳'];
$Makanan = ['🍔','🥗','🥙','🥪','🍏'];
$Nama = ['Naufal','Zul','Faza','Asep','Semprul'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2</title>
</head>
<body>
<h2>Daftar Binatang</h2>
<ul>
    <?php for ($i = 0; $i<5; $i++) { ?>
    <li><?= $Binatang[$i]; ?></li>
    <?php } ?>
     
    <h2>Daftar Lodokeun </h2>

    <?php for ($i = 0; $i<5; $i++) { ?>
    <li><?= $Makanan[$i]; ?></li>
    <?php } ?>

    <h2>Daftat Nama</h2>
    <?php for ($i = 0; $i<5; $i++) { ?>
    <li><?= $Nama[$i]; ?></li>
    <?php } ?>



</ul>    
     
 <h2>Daftar Binatang</h2>
 <ol>

<?php foreach ($Binatang as $b ) { ?>
<li><?= $b; ?></li>
<?php } ?>
 </ol>


</body>
</html>