<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contoh soal Array </h1>
    <?php
    echo"<h4> Contoh Soal 1</h4>";

    $Kids = ["Mike", "Dustin", "Will", "Lucas", "Max", "Eleven"];

    print_r($Kids)."<br>";

    $Adults = ["Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"];

    print_r($Adults)."<br>";

    echo"<h4> Contoh Soal 2</h4>";

    echo "Total Kids: " . count($Kids); 
    echo "<ul>";
    echo "<li>" . $Kids[0] . "</kids>";
    echo "<li>" . $Kids[1] . "</kids>";
    echo "<li>" . $Kids[2] . "</kids>";
    echo "<li>" . $Kids[3] . "</kids>";
    echo "<li>" . $Kids[4] . "</kids>";
    echo "<li>" . $Kids[5] . "</kids>" . "<br>";

    echo "Total Adults: " . count($Adults); 
    echo "<ul>";
    echo "<li>" . $Adults[0] . "</Adults>";
    echo "<li>" . $Adults[1] . "</Adults>";
    echo "<li>" . $Adults[2] . "</Adults>";
    echo "<li>" . $Adults[3] . "</Adults>";
    echo "<li>" . $Adults[4] . "</Adults>";
    "</ul>";

    echo"<h4> Contoh Soal 3</h4>";

    $bio = [
        ["Name" => "Will Byers","Age" => 12,"Aliases" =>"Will the Wise","Status" =>"Alive"],
        ["Name" =>"Mike Wheeler","Age" => 12,"Aliases" =>"Dungeon Master","Status" =>"Alive"],
        ["Name" =>"Jim Hopper","Age" =>43,"Aliases" =>"Chief Hopper","Status" =>"Deceased"],
        ["Name" =>"Eleven","Age" =>12,"Aliases" =>"El","Status" =>"Alive"]
    ];

    echo "<pre>";
    print_r($bio);
    
    echo "</pre>";


    ?>
</body>
</html>