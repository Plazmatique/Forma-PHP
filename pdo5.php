<?php
require_once'config.php';
$sql = 'SELECT * FROM contacts';
$contactRq = $connect->prepare($sql);
//var_dump($contactRq);
$contactRq->execute() or die($connect->errorInfo()); //tue le script si la requête est mauvaise

echo $nbContacts = $contactRq->rowCount();

$contacts = [];

echo '<ol>';

while ($row = $contactRq->fetch(PDO::FETCH_ASSOC)) {
  $contacts[] = $row;
  echo '<li>' . $row['lastname'] . '</li>';
}

echo '</ol>';

//$contacts = $contactRq->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';
var_dump($contacts);
echo'</pre>';



//Faire une table avec les contacts pour meilleure lecture