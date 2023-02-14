<?php

// Premiere ligne
$a = 50;
$b = 10;

if (!($a <= $b)) {
    echo "Hello World!";
}

//Deuxieme ligne

if ($a !== $b) {
    echo "<br><br>Hello World2";
}

//Troisieme ligne

if ($a === $b) {
    echo "<br><br>Oui";
}

if ($a > $b) {
    echo "<br><br>Non";
}


//Quatrieme ligne
echo "<br><br>";
if ($a == $b) {
    echo "1";
}
if ($a > $b) {
    echo "2";
}
if ($a < $b) {
    echo "3";
}


//Cinquieme ligne
echo "<br><br>";
$color = "red";
if ($color = "red" || "welcome") {
    echo "Hello" . "<br>";
    $color = "green";
    if ($color = "green")
        echo "Welcome" . "<br>";
    $result = null;
    $result = "valeur Null";
    if ($color = "red" || "green") {
        echo $result;
    }
}

