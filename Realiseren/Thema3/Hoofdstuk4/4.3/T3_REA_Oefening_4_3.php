<?php
/*
 * Naam: Tara van Litsenburg
 * Datum: 14-03-2022
 * File: T3_REA_Oefening_4_3.php
*/


    ?>
<!Doctype html>
<html lang="nl">
    <head>
        <title>
            <?php
            echo 'Realiseren instructies thema 3 en 4.';
            ?>
        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="Styles/4.3.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <h1>
                <?php
                    include "../../Hoofdstuk3/Oefening/3.2/Include/header.php";
                ?>
            </h1>
        </header>

        <main id="wrapper">
            <?php
                include "../../Hoofdstuk3/Oefening/3.2/Include/nav.php";
            ?>
            <section>
                <h2>
                    Uitwerking 4.3
                </h2>
                    <?php
                        include "../4.2/functions.php";

                        createPiramid(20)
                    ?>

            </section>
        </main>
    </body>
</html>
