
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
        <!--<link href="styles/style.css" rel="stylesheet">-->
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
                    <label for = "naam">
                        Naam:
                    </label>
                    <input type="text" name="naam" id = "naam">
                    <!--verzend knop-->
                    <br>
                    <label for = "achternaam">
                        Achternaam:
                    </label>
                    <input type="text" name="achternaam" id = "achternaam">
                    <!--verzend knop-->
                    <!--<input type="submit">-->

                    <p>
                        Wil je naar huis?
                    </p>

                    <label><input type="radio" name = "huis" value="ja naar huis">Ja naar huis</label>
                    <label><input type="radio" name = "huis" value="nee  we gaan nog niet naar huis">Nee we gaan nog niet naar huis</label>
                    <br>
                    <input type="submit">


                </form>
            </section>
        </main>
    </body>
</html>
