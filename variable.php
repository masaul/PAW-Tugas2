<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variable.php</title>
</head>
<body>
    <?php
        $a = 4;
        $b = 5;
        $penjumlahan = $a + $b;
        $pengurangan = $a - $b;
        $pengurungan = ($a + $b) * $b;
        $perkalian = $a * $b;
        echo "hasil penjumlahan = ".$penjumlahan."<br>";
        echo "hasil pengurangan = ".$pengurangan."<br>";
        echo "hasil pengurungan = ".$pengurungan."<br>";
        echo "hasil perkalian = ".$perkalian."<br>";
    ?>
</body>
</html>