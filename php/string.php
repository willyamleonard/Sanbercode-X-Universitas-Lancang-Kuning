<!DOCTYPE html>
<html lang="en">
<head>
    <?php $title = "halaman String"; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
</head>
<body>
    <h1>Berlatih String PHP</h1>
    <?php
    echo "<h4> Contoh soal 1</h4>";

    $soal1 = "PHP is never old";

    echo "Kalimat soal 1 : $soal1<br>";
    echo "Panjang Kalimat soal 1 : " .  strlen($soal1)."<br>";
    echo "Jumlah Kata soal 1 : " .  str_word_count($soal1)."<br>";

    $soal2 = "Hello PHP!";

    echo "Kalimat soal 2 : $soal2<br>";
    echo "Panjang Kalimat soal 2 : " .  strlen($soal2)."<br>";
    echo "Jumlah Kata soal 2 : " .  str_word_count($soal2)."<br>";

    $soal3 = "I'm ready for the challenges";

    echo "Kalimat soal 3 : $soal3<br>";
    echo "Panjang Kalimat soal 3 : " .  strlen($soal3)."<br>";
    echo "Jumlah Kata soal 3 : " .  str_word_count($soal3)."<br>";

    echo "<h4> Contoh soal 2</h4>";

    $soal2 = "I love PHP";

    echo "Kata 1 soal 2 : " . substr($soal2,0,1) ."<br>";
    echo "Kata 2 soal 2 : " . substr($soal2,2,4) ."<br>";
    echo "Kata 3 soal 2 : " . substr($soal2,7,3) ."<br>";

    echo "<h4> Contoh soal 3</h4>";

    $soal3 ="PHP is old but sexy";

    echo "Soal 3 : $soal3 <br>";
    echo "Soal 3 ganti string :". str_replace("sexy","awesome", $soal3);
    ?>
</body>
</html>