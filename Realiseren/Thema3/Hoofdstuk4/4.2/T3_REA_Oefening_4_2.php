<?php
/*
 * Naam: Tara van Litsenburg
 * Klas: IO1C4
 * File: T3_REA_Oefening_4_2
 * Datum: 12-03-2022
*/
    //Taak 1
    //De header word via een include bij de pagina gevoegd vanuit een andere map
    include "../../../Thema3/Hoofdstuk3/Oefening/3.2/Include/header.php";
    //Navigatie
    include "../../../Thema3/Hoofdstuk3/Oefening/3.2/Include/nav.php";
    // bestand met de Functions
    include "functions.php";
?>
<html lang="nl">
<head>
    <title>
        Oefening 4.2
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Css koppeling-->
    <link href="Styles/4.2.css" rel="stylesheet">
</head>
    <body>
    <div>
        <h2>Taak 2 - Stoplichten</h2>
        <?php
            $ambulance = false; //Boolean
            $lights = "red"; //String
            checkTrafficLights($ambulance, $lights);
        ?>
        <br><hr>
        <h2>Taak 3 - Weekmenu</h2>
        <?php
            $date = date ("l");
            showMenu($date);
            ?>
    </div>
    </body>
</html>