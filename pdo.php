<?php
require_once'config.php';
$sql = 'SELECT * FROM contacts';
$contactRq = $connect->prepare($sql);
var_dump($contactRq);
$contactRq->execute();
$contacts = $contactRq->fetchAll(PDO::FETCH_ASSOC);
echo '<pre>';
var_dump($contacts);
echo'</pre>';