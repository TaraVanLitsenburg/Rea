<?php
//var_dump($_POST);
echo $_POST ['fullname']. "<br>";
echo $_POST ['location']. "<br>";
echo $_POST ['people']. "<br>";
echo $_POST ['phone']. "<br>";
echo $_POST ['date']. "<br>";
echo $_POST ['time']. "<br>";
echo $_POST ['voorwaarden']. "<br>";

if (isset($_POST['voorwaarden'])==true){
    echo "U gaat akkoord met de voorwaarden";
}
else
{
    echo "Helaas gaat u niet akkoord en kan er geen reservatie worden gemaakt";
};