<?php
?>

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
        <link href="styles/style.css" rel="stylesheet">
    </head>
    <body>
        <?php
        //Hier gaan we in het volgende hoofdstuk het menu toevoegen.
        ?>
        <main id="wrapper">
            <section>
                <h2>
                    Reserveren Restaurant
                </h2>

                <!-- Plaats je code / uitwerking hieronder -->
                <!--Post gebruik je als je persoongegevens inzitten (ww, adres etc)-->
                <!--Get is voor delen en naam etc-->
                <form method="post"  action="forms_restaurant_results.php">
                    <p>
                        <label for = "fullname">Naam</label>
                        <input type="text" name="fullname" id = fullname" required>
                    </p>
                    <!--Uitklapbaar "menutje" met vestigingen/steden-->
                    <p>
                        <label for = "location">Vestiging</label>
                        <select name="location">
                            <option value = "AMS">
                                Amsterdam
                            </option>
                            <option value = "ROT">
                                Rotterdam
                            </option>
                            <option value = "DB">
                                's-Hertogenbosch
                            </option>
                            <option value = "EDH">
                                Eindhoven
                            </option>
                            <option value = "ARN">
                                Arnhem
                            </option>
                            <option value = "MAS">
                                Maastricht
                            </option>
                        </select>
                    </p>
                    <!--Aantal personen-->
                    <p>
                        <label for = "people">Aantal Personen</label>
                        <!--aantal personen kunnen aanklikken-->
                        <input type="number" name="people" id = "people">
                    </p>
                    <!--Telefoonnummer-->
                    <p>
                        <label for = "phone">Telefoonnummer</label>
                        <!--Telefoonnummer invoeren-->
                        <input type="tel" name = "phone" id = "phone">
                    </p>
                    <!--Datum-->
                    <p>
                        <label for = "date">Datum</label>
                        <!--Datum kunnen uitkiezen-->
                        <input type="date" name="date" id="date">
                    </p>
                    <!--Tijd-->
                    <p>
                        <label for = "time">Tijd</label>
                        <!--Tijd kunnen uitkiezen-->
                        <input type="time" name="time" id="time">
                    </p>
                    <!--Voorwaarden-->
                    <p>
                        <!--voorwaarden accepteren-->
                        <input type="checkbox" name="voorwaarden" id="voorwaarden">
                        <label for = "voorwaarden">Ik ga akkoord met de voorwaarden</label>

                    </p>
                    <input type="submit" value="Reserveren">
                </form>
            </section>
        </main>
    </body>
</html>
