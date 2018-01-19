<?php
$voornaam = $_POST['voornaam'];
$achternaam = $_POST['achternaam'];
$klas = $_POST['klas'];
$woonplaats = $_POST['woonplaats'];
$eten = $_POST['eten'];
$dier = $_POST['dier'];

echo "Hallo $voornaam $achternaam<br>";
echo "wat leuk dat je in klas $klas zit";
echo'<br><br>';
echo"wat leuk dat je woont in $woonplaats, ik weet dat dat in Nedrland licht<br><br>";

    if($eten = "tortellini")
    {
        echo"tortelini is ook mijn favoriete eten!<br>";
    }
    else {
        echo"oeh.. dat vind ik ook wel lekker<br>";
        echo"maar ik vind tortelini lekkerder.";
    }
    echo'<br>';

    switch($dier)
    {
        case 'hond':
            echo"Oeh ik hou van honden";
            break;
        case 'kat':
            echo"ik heb ook katten gehad";
            break;
        case 'hamster':
            echo"Ik mis mijn hamster nogsteeds...";
            break;
        case 'kip':
            echo"Ik vind kippen ook leuk";
            break;
        default:
            echo"ik heb die beesten nooit echt leuk gevonden";
            break;
    }
?>