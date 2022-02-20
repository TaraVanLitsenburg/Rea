<?php
/**
 * User: Tara van Litsenburg
 * Date: 16-02-2021
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
        <link href="Styles/style.css" rel="stylesheet">
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
            <nav>
                <h2>Thema 3</h2>

                <ul>
                    <li><h3>Hoofdstuk 2:</h3></li>
                        <ul><li><a href="/Realiseren/Thema3/Hoofdstuk1/Oefening/T3_REA_Oefening1.1.php">Oefening 1.1</a></li>
                        <li><a href="../Instructie/instructie.php">Oefening 1.2</a></li>
                    </ul>
                </ul>
            </nav>
            <section>
                <h2>
                    Uitwerking
                </h2>

                <!-- Plaats je code / uitwerking hieronder -->
                <p>
                    <?php
                        // Voorbeeldcode
                        echo "<p>PHP is een server-side website en werkt niet met een client dit is de reden dat je een webserver moet hebben om PHP te kunnen gebruiken. Met het gebruik van PHP kun je ook communiceren met de database</p>";
                        echo "<h1>Git & Github</h1>Als je klaar bent met het programmeren van je website dan kun je via het menu item 'Git' je code naar je lokale schijf kopiëren en daarna in de cloud van Github door op Commit en Push te drukken na je de Git repository hebt gewijzigd. Dan komt de meest recente code in de Github dit is handig als je met meerder mensen werkt, want er is dan in iedereen zijn Github een clone van de meest recente code."
                    //Een Echo command voert meerdere teksten uit zonder nieuwe regels of spaties te gebruiken.
                    ?>
                </p>
            </section>
        </main>
    </body>
</html>
