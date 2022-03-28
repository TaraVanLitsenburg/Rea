<?php
/*
 * Naam: Tara van Litsenburg
 * Klas: IO1C4
 * File: T3_REA_Oefening_4_2
 * Datum: 12-03-2022
*/
?>

<?php

    function checkTrafficLights($ambulance, $lights)
    {
        //Checkt of de waarde goed is

        if ($ambulance == false)
        {
            if ($lights == "red")
            {
                echo "<a>U moet stoppen</a>";
            }
            else
            {
                echo "<a>U mag doorrijden</a>";
            }
            // Er komt geen ambulance aan
            //echo "<a>Er komt geen ambulance aan u kunt door rijden</a>";
        }
        else
        {
            //er komt wel een ambulance aan
            echo "<a>Er komt een ambulance aan rij NIET door!</a>";
        }
    }


    function showMenu($date)
    {
        {
            //wat we gaan eten op welke dag van de week
            if ($date == "monday") {
                echo "<p>Vandaag eten we witte bonen met snijbonen</p>";
            } elseif ($date == "tuesday") {
                echo "<p>Vandaag eten we zuurkool</p>";
            } elseif ($date == "wednesday") {
                echo "<p>Vandaag eten we rode kool</p>";
            } elseif ($date == "thursday") {
                echo "<p>Vandaag eten we friet</p>";
            } elseif ($date == "friday") {
                echo "<p>Vandaag eten we pizza</p>";
            } elseif ($date == "saturday") {
                echo "<p>Vandaag eten we witte bonen in tomatensaus</p>";
            } elseif ($date == "sunday") {
                echo "<p>Vandag eten we friet</p>";
            } else {
                echo "<p>Eten</p>";
            }
        }

    }

?>

<!--uitwerking oefening 4.3
taak 2-->

<?php
$unixtime = time();
echo "<p>Tijd sinds 1970 is $unixtime</p>";

?>

<?php


function priceChecking($car, $spared)
{
    $counter = 0;
    while($car > $spared )
    {
        // ELke keer 30 euro van de kosten af
        $cost = $car - $spared;
        // Tellen vanaf
        $counter = $counter + 1;

        echo "Na " . $counter." maanden moet ik nog " . $car . "betalen.<br>";
    }
}
//priceChecking(1200, 30, 150);
?>



<?php
//$height is een parameter
    function createPiramid($height)
    {
        for ($i=0; $i < $height; $i = $i+1)
        {
            for ($j=0; $j< $i; $j = $j+1)
            {
                echo "$j";
            }
            echo "*<br>";
        }
    }
