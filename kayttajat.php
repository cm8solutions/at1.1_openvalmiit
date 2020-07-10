<?php

include("yhteys.php");

echo'<!DOCTYPE html>

<html>
    <head>
        <title>Käyttäjät</title>';
include("header.php");




echo '<body>
           <header>
        <h1>Tietokantaan tallennetut käyttäjät </h1>

    </header>';

echo'<div>';
echo'<p><a href="etusivu.php"> &#8617 &nbsp  Palaa etusivulle </a></p>';
echo'<div class="vali"></div>';

$haku = $db->prepare("SELECT id, etunimi, sukunimi, sposti, tunnus, koodikielet, koodauskokemus_sanallinen, koodauskokemus_arvio FROM kayttajat");


if (!$haku) {
    die('<p>Tietokantahaussa virhe (prepare()-toiminto epäonnistui). <br>Syy: ' . htmlspecialchars($db->error) . '</p>');
}

if (!$haku->execute()) {
    die('<p>Tietokantahaussa virhe (execute()-toiminto epäonnistui). <br>Syy: ' . htmlspecialchars($haku->error) . '</p>');
}


$haku->store_result();

if ($haku->num_rows == 0) {
    echo'<p>Ei käyttäjiä.</p>';
} else {
    $haku->bind_result($tulos1, $tulos2, $tulos3, $tulos4, $tulos5, $tulos6, $tulos7, $tulos8);





    echo'<table>';
    echo'<thead><th>Etunimi</th><th>Sukunimi</th><th>Sähköpostiosoite</th><th>Tunnus</th><th>Koodikielet</th><th>Koodauskokemus (sanallinen)</th><th>Koodauskokemus (arvio)</th></thead>';

    echo'<tbody>';
    while ($haku->fetch()) {
        $id = $tulos1;
        $etunimi = $tulos2;
        $sukunimi = $tulos3;
        $sposti = $tulos4;

        $tunnus = $tulos5;

        $koodikielet = $tulos6;


        $kokemus_sanallinen = $tulos7;

        $kokemus_sanallinen = str_replace("\n", "<br />", $kokemus_sanallinen);
        $kokemus_arvio = $tulos8;


        echo'<tr><td>' . $etunimi . '</td><td>' . $sukunimi . '</td><td>' . $sposti . '</td><td>' . $tunnus . '</td><td>' . $koodikielet . '</td><td>' . $kokemus_sanallinen . '</td><td>' . $kokemus_arvio . '</td>';
        echo'<td><form action="muokkaa_kayttaja.php" method="post"><input type="hidden" name="id" value=' . $id . '>'
        . '<input type="submit" class="nappula" style="margin-right: 10px" name="muokkaa" title="Muokkaa käyttäjän tietoja" value="Muokkaa">'
        . '<input type="submit" class="nappula" name="poista" title="Poista käyttäjä" value="Poista"></form></td></tr>';
    }
    echo'</tbody></table>';
}

$haku->close();

echo'<div class="vali"></div>';
echo'</div>';


include('footer.php');

echo '</body>
</html>';
