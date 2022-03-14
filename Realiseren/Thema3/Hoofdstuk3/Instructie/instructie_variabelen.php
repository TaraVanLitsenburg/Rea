<?php
/*
 * Naam: Tara van Litsenburg
 * Datum: 21-02-2022
 * Tijd: 9:30s
 * Instructie: Hoofdstuk 3 Les 1
 * File: instructie_variabelen.php
*/
?>
<html>
    <head>
        <title>
            Instructie Variabelen
        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="Styles/variabelen.css" rel="stylesheet">
    </head>
    <body>
        <h1>
            Instructie Hoofdstuk 3 Variabelen
        </h1>
    </body>
</html>
<?php
    echo "Tara van Litsenburg<br>";
    $schoolName = "Koning Willem 1 College<br>";
    echo "$schoolName";
    $adress = "Onderwijsboulevard 3 5223DE<br>";
    echo "$adress";
    echo "<br>Het adres van $schoolName is $adress<br>";
    //Geef variabelen namen een DUIDELIJKE naam
    //Wees duidelijk
    //Variabelen is met een $
    //Boolean
    $isWorking = true;
    //Integer
    $age = 16;
    //Float
    $lengthInM = 1.83;
    //Array
    $favoriteColor = ["Green", "Purple", "Gold"];//Methode 1
    $secondFavoriteColor = array("Fuchsia", "Coral", "Charteuse"); //Methode 2
    $price = null;

    //Rekenen met PHP
    $Getal1 = 7;
    $Getal2 = 3;
    $Getal3 = 5;
    echo ($Getal1 + $Getal2) * $Getal3;
?>


