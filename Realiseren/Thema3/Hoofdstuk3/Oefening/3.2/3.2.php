<?php
/**
 * User: Tara van Litsenburg
 * Date: 9-03-2022
 * File: T3_REA_Oefening3.2.php
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
    <link href="Styles/3.2.css" rel="stylesheet">
</head>
<body>
        <!--De Header staat in een ander php bestand en word via een include toegevoegd aan-->
        <?php
        //Ik heb het statement include gebruikt omdat ik het een veel logischer statement vind
           include "Include/header.php";
        ?>

<?php
//Hier gaan we in het volgende hoofdstuk het menu toevoegen.
?>
<main id="wrapper">
    <!--Het menu word via een include naar de file 3.2.php verplaatst en word daar weergeven in de browser-->
    <?php
    //Ik heb het statement include gebruikt omdat ik het een veel logischer statement vind
        include "Include/nav.php";
    ?>
    <section>
        <h2>
            Uitwerking
        </h2>

        <!-- Plaats je code / uitwerking hieronder -->
        <p>
            <?php
            // Voorbeeldcode
            echo "Op deze plek komt de uitwerking van de oefening te staan";
            ?>
        </p>
    </section>


        <?php
        //De footer word via een include in de webpagina gezet.
            include "Include/footer.php";
        ?>

</main>
</body>
</html>
