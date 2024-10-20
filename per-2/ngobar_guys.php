<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>contoh php dalam html</h1>

    <?php
    $nama = "Palguna";
        echo "Hello World";
    ?>

    <p>Nama saya <?php echo $nama; ?></p>
    <p>Nama saya <?= $nama ?></p>

    
    <!-- html dalam php -->
    <?php
    echo "<h1>Hello World</h1>";
    echo "<p>Selamat Datang $nama</p>";
    ?>
</body>
</html>