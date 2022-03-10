<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function sapa($nama, $umur){
            return "Selamat Datang " . $nama . "Umur : " . $umur . " tahun <br>";
        }
        echo sapa("Muhammad Aulia Faqihuddin", 19);
        echo sapa("Heru Adi Saputra", 22);
        echo sapa("Muhammad Dimas", 10);
    ?>
</body>
</html>