<?php
/*
 * Naam: Tara van Litsenburg
 * Datum: 13-03-2022
 * File: index.php
*/

?>
<html lang="nl">
    <head>
        <title>
            Lesrooster
        </title>
        <!--Css koppeling-->
        <link href="../Styles/index.css" rel="stylesheet">
    </head>
    <body>
        <nav>
            <!--Logo van respectgym-->
            <img id="logo" src="../Images/logo.png">
            <?php
            //Het menu word via een include in de pagina gezet
            include "../../Website/Includes/menu.php";
            ?>
        </nav>
        <!--Foto van het lesrooster pagina van de echte respectgym website-->
        <img id= "lesrooster" src="../Images/lesrooster.png" alt="Lesrooster Foto">
    </body>
</html>
