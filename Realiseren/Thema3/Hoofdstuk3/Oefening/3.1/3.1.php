<?php
/**
 * User: Tara van Litsenburg
 * Date: 21-02-2021
 * File: T3_REA_Oefening3.1.php
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
        <!--Link naar de stylesheet-->
        <link href="Styles/3.1.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <h1>
                <?php
                    echo 'Uitwerking van Oefening 3.1';
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
                    <li><h3>Hoofdstuk 3:</h3></li>
                        <ul><li><a href="/REA_T3T4/Realiseren/Thema3/Hoofdstuk1/Oefening/T3_REA_Oefening1.1.php">Oefening 1.1</a></li>
                        <li><a href="/REA_T3T4/Realiseren/Thema3/Hoofdstuk1/Oefening/T3_REA_Oefening1.2.php">Oefening 1.2</a></li>
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
                        //Variabelen
                        //Carnaval
                        $volksfeest = "Carnaval";
                        //Dagen waarop carnaval word gevierd
                        $dagen = "Zondag, Maandag, Dinsdag";
                        $drieDagen = "3";
                        $viertigdagen = "40";
                        $provincie = "Noord-Brabant";
                        //Land waar carnaval word gehouden
                        $land = "Nederland";
                        //Brabantse Koffietafel
                        $eten = "Worstenbroodje, Koffie Schrobbeler";

                        $story = "$volksfeest is van oorsprong een gekerstend heidens volksfeest. Het duurt 
                        officieel $drieDagen dagen, $dagen direct voorafgaand aan de 
                        vastentijd van $viertigdagen dagen. $volksfeest is bij uitstek het feest van zotheid, spot 
                        en uitbundigheid. Inmiddels is het in verschillende plaatsen door heel 
                        $land een gebruik om $volksfeest op carnavalsvrijdag te openen. Op 
                        Aswoensdag wordt $volksfeest afgesloten, maar de tradities verschillen per 
                        regio. In het overgrote deel van Noord-Brabant wordt er afgesloten met 
                        $eten soms met een Brabantse koffietafel.";

                        echo "<p>$story</p>";
                        // 3 bonnen met prijzen
                        $bon1 = 60;
                        $bon2 = 55;
                        $bon3 = 40;
                        //Het totaalbedrag val alle bonnen bij elkaar
                        $totaalbedrag = ($bon1 + $bon2 + $bon3);
                        echo "Het totaalbedrag is $totaalbedrag<br>";
                        //Prijs per persoon
                        $perPersoon = ($totaalbedrag/4);
                        echo "De kosten per persoon bedragen $perPersoon euro";
                        //totaalbedrag + de fooi en - de korting
                        $fooi = ($totaalbedrag / 100 * 10 + $totaalbedrag - 50)/4;
                        echo "<br>Het totale bedrag min de korting en plus de fooi is $fooi euro per persoon";
                    ?>
                </p>
            </section>
        </main>
    </body>
</html>