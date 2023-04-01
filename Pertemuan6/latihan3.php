<?php 
// array associative
// array yang index nya adalah string yang kita buat sendiri


$mahasiswa = [
    ['nama' =>'Naufal',
    'makanan'=> ['🍔','🍣'],
    'Hewan'=>'🦖'],

    ['nama' =>'Zul',
    'makanan'=>['🥗'],
    'Hewan'=>'🦄'],

    ['nama' =>'Faza',
    'makanan'=>['🥙','🍥'],
    'Hewan'=>'🐉'],

    ['nama' =>'Asep',
    'makanan'=>['🥪'],
    'Hewan'=>'🦕'],

    ['nama' =>'Semprul',
    'makanan'=>['🍏'],
    'Hewan'=>'🐳']


];

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

<?php foreach ($mahasiswa as $i) { ?> 

<ul>
    <li>Nama : <?= $i ['nama']?></li>
    <li>Makanan Favorit :
    <?php foreach ($i['makanan'] as $m){
        echo $m;
    } ?>
    </li>
    <li>Peliharaan: <?= $i ['Hewan']; ?></li>
</ul>
<?php } ?>


</body>
</html>
