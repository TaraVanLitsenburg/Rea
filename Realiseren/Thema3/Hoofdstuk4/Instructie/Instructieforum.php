
<?php
/**
 * User: Tara van Litsenburg
 * Date: 21-03-2022
 * File: T3_REA_Oefening2.1.php
 */
?>
<!DOCTYPE html>
<html lang="nl">
    <head>
        <title>
            <?php
                echo 'Realiseren instructies thema 3 en 4.';
            ?>
        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="styles/style.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <h1>
                <?php
                    echo 'Uitwerking van PHP-oefeningen';
                ?>
            </h1>
        </header>
        <?php
            //Hier gaan we in het volgende hoofdstuk het menu toevoegen.
        ?>
        <main id="wrapper">
            <?php
                include "../../../Thema3/Hoofdstuk3/Oefening/3.2/Include/nav.php";
            ?>
            <section>
                <h2>
                    Uitwerking instructie 21-03-2022
                </h2>

                <!-- Plaats je code / uitwerking hieronder -->
                <!-- Formulier maken-->
                <form method="get" action="instructieforms_results.php">
                    <label>
                        Naam:
                    </label>
                    <input type="text" name="naam">
                </form>
            </section>
        </main>
    </body>
</html>
