<?php
require_once('Animal.php');
require_once('Frog.php');
require_once('Ape.php');

$sheep = new Animal("shaun");
echo "Name:"; echo $sheep->name . "<br>"; // "shaun"
echo "legs:"; echo $sheep->legs . "<br>"; // 4
echo "cold blooded:";echo  $sheep->cold_blooded . "<br>"; // "no"

$kodok = new Frog("buduk");
echo "<br>Name:";echo  $kodok->name . "<br>";
echo "legs:"; echo $kodok->legs . "<br>"; // 4
echo "cold blooded:"; echo $kodok->cold_blooded . "<br>"; // "no"
echo "jump:"; echo $kodok->jump(). "<br>"; // "hop hop"

$sungokong = new Ape("kera sakti");
echo "<br>Name:";echo  $sungokong->name . "<br>";
echo "legs:"; echo $sungokong->legs . "<br>"; // 2
echo "cold blooded:";echo  $sungokong->cold_blooded . "<br>"; // "no"
echo "yell:";echo $sungokong->yell(); // "Auooo"
?>