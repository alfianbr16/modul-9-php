<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemrosesan file</title>
</head>
<body>
    <h2>Pemeriksaan file</h2>
    <?php
    $file='C:\\ Teks.txt';
    if(file_exists($file))
    {
        echo("File <br> $file </b> sudah ada !");
    }else
    {
        echo("File <br> $file </b> tidak ada !");
    }
    ?>
</body>
</html>