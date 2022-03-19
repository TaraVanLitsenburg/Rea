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
        Personal Trainer
    </title>
    <!--Css Koppeling-->
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
        <!--Foto van de personal trainer pagina van de echte respectgym website-->
        <img id= "personaltrainer" src="../Images/personaltrainer.png" alt="Index Fotos">
    </body>
</html>