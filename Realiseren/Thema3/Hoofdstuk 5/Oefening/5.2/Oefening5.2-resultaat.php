<?php
/*
 * Naam: Tara van Litsenburg
 * Datum: 26-03-2022
 * File: Oefening5.2-resultaat.php
*/
$username = "TaravanLitsenburg";
$password = "zelfverzonnen";

if ($username  == $_POST["inlognaam"] and $password == $_POST["wachtwoord"])
{
    echo "<img src='../5.2/Images/Schatkist.png'>";
}
else
{
    echo "Username and/or Password is incorrect";
}
?>
<link href="Styles/5.2.css" type="text/css" rel="stylesheet">
