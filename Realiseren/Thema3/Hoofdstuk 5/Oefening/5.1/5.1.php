<?php
/*
 * Naam: Tara van Litsenburg
 * Datum: 23-03-2022
 * file: 5.1.php
*/
?>
<html lang="nl">
    <head>
        <title>
            Uitschrijvingformulier kw1c
        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="Styles/5.1.css" rel="stylesheet">
    </head>
    <body>
        <h1>
            Uitschrijvingformulier KW1C
        </h1>
        <hr>
        <form method="get" action="5.1_Results.php">
            <p>
                <label for = "voornaam">Voor en Achternaam </label>
                <input type="text" name="voornaam" id = "voornaam">
            </p>
            <!--Aantal personen-->
            <p>
                <label for = "student">Studentennummer</label>
                <!--aantal personen kunnen aanklikken-->
                <input type="number" name="student" id = "student" required>
            </p>
            <!--Datum-->
            <p>
                <label for = "date">Datum uitschrijving</label>
                <!--Datum kunnen uitkiezen-->
                <input type="date" name="date" id="date" required>
            </p>
            <p>
                <label for = "reason">Reden van uitschrijving</label>
                <select name="reason">
                    <option value = "verkeerdekeuze">
                        Verkeerde keuze
                    </option>
                    <option value = "anderekeuze">
                        Ik heb een betere opleiding gevonden
                    </option>
                    <option value = "hbo">
                        Ik ga door naar HBO
                    </option>
                    <option value = "werk">
                        Ik ga werken
                    </option>
                    <option value = "geen">
                        Geen van de bovenstaande
                    </option>
                </select>
            </p>
            <p id = "leerjaar">
            <!--Voorwaarden-->
                <!--Leerjaar aankruisen-->
                <label for = "leerjaar">Leerjaar</label>
            </p>
                <p id = "leerjaren">
                <label class = "leerjaar1"><input type="radio" name="leerjaar" >Leerjaar 1</label>
                <label class = "leerjaar2"><input type="radio" name="leerjaar" >Leerjaar 2</label>
                <label class = "leerjaar3"><input type="radio" name="leerjaar" >Leerjaar 3</label>
                <label class = "leerjaar3"><input type="radio" name="leerjaar" >Leerjaar 4</label>
            </p>
            <br>
            <p>
                <label class = "succesclass"><input type="checkbox" value="succesklas">Ik wil me aanmelden bij de succesklas</label>
                <label class = "succesclass"><input type="checkbox" value="gegevens">Verwijder mijn gegevens uit het systeem</label>
            </p>
            <br>
            <p>
                <label class="succesclass">
                    Geef hieronder de reden van uw uitschrijving.
                </label>
                <input type="text" name="reden" class="succesclass">
            </p>
            <br>
            <input type="submit" value="Verzenden" id="button">

        </form>
    </body>
</html>


