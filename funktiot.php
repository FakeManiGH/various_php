<?php

// Tehtävä 1 funktio: tulosta tyylit.
function tulostaTyylit() {
    echo "<style>";
    echo ".valkoinen {background-color: white; width: 30px; height: 30px;}" ."\n". ".musta {background-color: black; width: 30px; height: 30px;}";
    echo "</style>";
};

// Tehtävä 2 funktio: Sano hei.
function tervehdi($nimi) {
    $nimi = 'Timo';
    echo "Hei $nimi, pelataanko shakkia?";
}

// Tehtävä 3 funktio: Luku1 kertaa Luku2.
function kerto($luku1, $luku2) {
    $tulo = $luku1 * $luku2;
    echo "$luku1 kertaa $luku2 on yhteensä $tulo!";
}

// Tehtävä 4 funktio: Luku ja potenssi.
function potenssi($luku, $potenssi) {
    $tulos = 1;
    for ($i = 0; $i < $potenssi; $i++) {
        $tulos *= $luku;
    }
    echo "Luku $luku potenssiin $potenssi on $tulos.";
}

// Tehtävä 5 funktio: Shakkilauta. ChatGPT auttoi.
function shakkilauta() {
    echo '<table>';
    for($rivi = 0; $rivi < 8; $rivi++) {
        echo '<tr>';
        for($sarake = 0; $sarake < 8; $sarake++) {
            $vari = ($rivi % 2 == 0) ? (($sarake % 2 == 0) ? 'valkoinen' : 'musta') : (($sarake % 2 == 0) ? 'musta' : 'valkoinen');
            echo '<td class="' . $vari . ' ruutu"></td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Shakkilauta</title>
    <!-- Tehtvä1 -->
    <?php 
        tulostaTyylit();
    ?>
    
</head>
<body>
    <?php
        // tehtävä2
        tervehdi('nimi');
        echo "<br>";

        // tehtävä3
        kerto('2','5');
        echo "<br>";

        // tehtävä4
        potenssi('5','3');
        echo "<br><br>";

        // tehtävä5
        shakkilauta();
    ?>


</body>
</html>