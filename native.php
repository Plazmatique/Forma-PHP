<?php
$date = new DateTime;
echo '<pre>';
var_dump($date);
$date2 = $date; //Référence de variable => modifie 2 == modifie 1
$date2->modify("+1day");
var_dump($date);
echo $date->format("y/m/d");
echo '</pre>';

$date = new DateTimeImmutable;
$date2 = $date;
echo '<pre>';
$date2->modify("-1day");
$date->modify("+1day");//pas de changement
var_dump($date);

echo $date
->modify("+1day") //PLUS PROPRE ^^
->format("y/m/d"); //Changement retourne un objet modifié

echo '</pre>';