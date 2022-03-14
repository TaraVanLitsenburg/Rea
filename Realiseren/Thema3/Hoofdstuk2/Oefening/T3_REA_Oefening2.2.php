<?php
/**
 * Naam: Tara van Litsenburg
 * Datum:20-02-2022
 * Opdracht: T3_REA_Oefening2.2
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
        <link href="Styles/2.2.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <h1>
                <?php
                    echo "Uitwerking PHP-Oefeningen";
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
                        <li><a href="/Realiseren/Thema3/Hoofdstuk1/Oefening/T3_REA_Oefening1.1.php">Oefening 1.1</a></li>
                        <li><a href="../Instructie/instructie.php">Oefening 1.2</a></li>

                </ul>
            </nav>
            <section>
                <h2>
                    Uitwerking oefening 2.2
                </h2>
                <?php
                echo "<img src='Images/QueenElisabeth.jpg' alt = 'Queen Elisabeth'>";
                ?>
                <!-- Plaats je code / uitwerking hieronder -->
                <p>
                    <?php
                        // Voorbeeldcode
                        echo "<h2>Britse koningin Elizabeth (95) is besmet met coronavirus, maar blijft werken</h2>";
                    ?>
                    <?php
                        echo "<p><span>De Britse koningin Elizabeth II is besmet geraakt met het coronavirus, meldt Buckingham Palace zondag. De vorstin heeft milde symptomen en kan haar werkzaamheden blijven uitvoeren.
                                 De Britse koningin is volledig gevaccineerd tegen COVID-19.</span> 
                                 <br>
                                 <br>
                                 Het paleis laat weten dat ze klachten heeft die lijken op een verkoudheid.
                                 Vorige week bevond Elizabeth zich in nabijheid van prins Charles. Die testte kort daarna positief op het coronavirus.
                                 Om speculaties de kop in te drukken, bracht het Britse koningshuis in januari 2021 naar buiten dat Elizabeth het coronavaccin had ontvangen. Het is ongebruikelijk dat details over de gezondheid van de Britse vorsten publiekelijk worden gedeeld.</p>";
                    ?>
                <div>
                    <?php
                        echo "<img src='Images/QueenElisabeth.jpg' alt = 'Queen Elisabeth'> <br> <h2>Britse koningin Elizabeth (95) is besmet met coronavirus, maar blijft werken</h2><p><span>De Britse koningin Elizabeth II is besmet geraakt met het coronavirus, meldt Buckingham Palace zondag. De vorstin heeft milde symptomen en kan haar werkzaamheden blijven uitvoeren.
                                 De Britse koningin is volledig gevaccineerd tegen COVID-19.</span> 
                                 <br>
                                 <br>
                                 Het paleis laat weten dat ze klachten heeft die lijken op een verkoudheid.
                                 Vorige week bevond Elizabeth zich in nabijheid van prins Charles. Die testte kort daarna positief op het coronavirus.
                                 Om speculaties de kop in te drukken, bracht het Britse koningshuis in januari 2021 naar buiten dat Elizabeth het coronavaccin had ontvangen. Het is ongebruikelijk dat details over de gezondheid van de Britse vorsten publiekelijk worden gedeeld.</p>";

                    ?>
                </div>

            </section>
        </main>
    </body>
</html>

