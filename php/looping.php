<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contoh Looping</h1>
    <?php
    echo "<h4> Contoh soal 1</h4>";
    echo "<h6> Looping Peertama</h6>";

    $a=2;
    do {
        echo "$a - I Love PHP <br> ";
        $a+=2;
    } while($a <= 20);

    echo "<h6> Looping Kedua</h6>";

    for($i=20; $i>=2; $i-=2){
        echo "$i - I Love PHP <br>";
    }

    echo "<h4> Contoh soal 2</h4>";

    $numbers = [18,45,29,61,47,34];

    echo "array numbers: ";
        print_r($numbers);
        // Lakukan Looping di sini
        foreach ($numbers as $nilai){
            $tampung[] = $nilai %5;
        }

        echo "<br>";
        echo "Array sisa baginya adalah:  ";
        print_r($tampung); 
        echo "<br>";

        echo "<h4> Contoh soal 3</h4>";

        $bio = [
            ["001","Keyboard Logitek",60000,"Keyboard yang mantap untuk kantoran","logitek.jpeg"],
            ["002","Keyboard MSI",300000,"Keyboard gaming MSI mekanik","msi.jpeg"],
            ["003","Mouse Genius",50000,"Mouse Genius biar lebih pinter","genius.jpeg"],
            ["004","Mouse Jerry","30000","Mouse yang disukai kucing","jerry.jpeg"]
        ];

        foreach ($bio as $arrayIn) {
            $items = [
                "id"=> $arrayIn[0],
                "Name"=> $arrayIn[1],
                "Price"=> $arrayIn[2],
                "Description"=> $arrayIn[3],
                "Source"=> $arrayIn[4],
            ];
            print_r($items);
            echo "<br>";
        }

        echo "<h4> Contoh soal 4</h4>";

        
        echo "<br>";
        for($j=1; $j<=5; $j++){
            for($b=1; $b<=$j; $b++){
            echo "*"; 
            }
            echo "<br>";
            
        }
        echo "Asterix: ";
        echo "<br>";
    ?>
</body>
</html>