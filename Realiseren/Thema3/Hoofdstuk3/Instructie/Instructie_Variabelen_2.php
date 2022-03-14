<?php
/*
 * Naam: Tara van Litsenburg
 * Datum: 9-03-2022
*/
?>
<?php
date_default_timezone_set("Europe/Amsterdam");

$date = date("d-m-Y  H:i");

/*echo "$date";*/

//echo time();/*1 Jan 1970*/

function showName($age)
{
    $name = "Tara";

    echo "Mijn naam is " . $name . " en mijn leeftijd is " . $age;
};

$age = 16;
showName($age);
?>
