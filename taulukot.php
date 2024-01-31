
<?php
    // Tehtävä 1: Luo taulukko "ostoslista" ja siitä lista:
    $ostoslista = array("maitoa", "jauhelihaa", "riisiä");
    array_push($ostoslista, "omenoita");
    $ostoslista[1] = "rasvatonta maitoa";
    sort($ostoslista);

    echo "<ul>";
    foreach ($ostoslista as $ostos) {
        echo "<li>$ostos</li>";
    }
    echo "</ul><br><br>";
    

    // Tehtävä 2: Luo tyhjä taulukko -> 1 - 100 numerot:
    $numerot = [];
    
    for ($i = 0; $i <= 100; $i++) {
        array_push($numerot, $i);
    }

    shuffle($numerot);
    $result = array_slice($numerot, 0, 5);

    echo "Viisi ensimmäistä numeroa on:";
    foreach($result as $arvo) {
        echo "<p>$arvo</p>";
    }
    

    // Tehtävä 3: Pääkaupungit listalle.

    $paakaupungit = array( "Italia"=>"Rooma", "Tanska"=>"Kööpenhamina", 
    "Suomi"=>"Helsinki", "Ranska" => "Pariisi", 
    "Saksa" => "Berliini", "Kreikka" => "Ateena", 
    "Irlanti"=>"Dublin", "Hollanti"=>"Amsterdam",
    "Espanja"=>"Madrid", "Ruotsi"=>"Tukholma", 
    "Iso-Britannia"=>"Lontoo", "Viro"=>"Tallinna", 
    "Unkari"=>"Budapest", "Itävalta" => "Vienna", 
    "Puola"=>"Varsova");

    function maatInOrder($maat) {
        ksort($maat);
        foreach ($maat as $avain => $arvo) {
            echo "$avain: $arvo <br>";
        }
    }

    maatInOrder($paakaupungit);
    echo "<br><br>";

    // Tehtävä 4: Talukon summa.

    $taulukko1 = ["5", "7", "3", "1", "4"];
    $taulukko2 = ["5", "7", "3", "1", "4", "10", "2", "6"];

    function summaTaulukossa($taulukko) {
        $tSumma = array_sum($taulukko);
        echo "Taulukon summa = $tSumma.<br>";
    }

    summaTaulukossa($taulukko1);
    summaTaulukossa($taulukko2);

    echo "<br><br>";

    // Tehtävä 5: Arvo Taulukossa, etsitään arvoa taulukosta.

    $taulukko1 = ["5", "7", "3", "1", "4"];
    $taulukko2 = ["5", "7", "3", "1", "4", "10", "2", "6"];

    $etsittava_arvo = 10;

    function arvoTaulukossa($taulukko, $arvo) {
        for ($i = 0; $i < count($taulukko); $i++) {
            if ($taulukko[$i] == $arvo) {
                return true;
            } 
        }
        return false;
    }

    $loytyyko_arvo = arvoTaulukossa($taulukko1, $etsittava_arvo);
    if ($loytyyko_arvo) {
        echo "Arvo löytyy taulukosta.";
    } else {
        echo "Arvoa ei löytynyt taulukosta.";
    }

    echo "<br>";

    $loytyyko_arvo = arvoTaulukossa($taulukko2, $etsittava_arvo);
    if ($loytyyko_arvo) {
        echo "Arvo löytyy taulukosta.";
    } else {
        echo "Arvoa ei löytynyt taulukosta.";
    }
   
?> 



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taulukot PHP-Harjoitukset</title>
</head>
<body>

    
    
</body>
</html>