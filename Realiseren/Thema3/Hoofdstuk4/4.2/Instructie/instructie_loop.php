<?php
/*
 * Naam: Tara van Litsenburg
 * Datum: 14-03-2022
 * File: instructie_loop.php
*/



//Statement 1 begin situatie, statement 2 is de voorwaarden (true), Statement 3: aan het einde van elke herhaling
//for ($i =  0; $i < 1000; $i = $i + 1)
//{
    //echo $i . "<br>";
//}
//while
$beers = 24;
$BeersADay = 3;
$day = 0;

while($beers >= $BeersADay)
{

    $beers = $beers - $BeersADay;
    $day = $day + 1;
    echo  "op day " .  $day . " heb ik nog " . $beers . " biertjes <br>";
}

