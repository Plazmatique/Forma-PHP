<?php
require_once'config.php';
$id = isset($_GET['id']) ? $_GET['id'] :'5';
//$sql = 'SELECT * FROM contacts where id = ' . $id;//!! possible d'injections sql
$sql = 'SELECT * FROM contacts where id = :id';
$contactRq = $connect->prepare($sql);
var_dump($contactRq);
$contactRq->execute([
  'id'=> $id
]) or die($connect->errorInfo()); //tue le script si la requête est mauvaise

echo $nbContacts = $contactRq->rowCount();

$contacts = $contactRq->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';
print_r($contacts);
echo'</pre>';



//Faire une table avec les contacts pour meilleure lecture