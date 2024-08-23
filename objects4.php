<?php 
declare(strict_types= 1); // !!! SINON PAS DE VARIABLES STRICTES !!!
include_once './classes/person.php';
include_once './classes/admin.php';

$john = new Personne("john", "hello", true, 55);
$pierre = new Personne("pierre", "caillou", true, 20);
$bigBoss = new Admin("Baby", "Boss", true, 120, 5);
echo '<pre>';
print_r($john);
echo '</pre>';
$bigBoss->displayPerson();
var_dump($john->getInscription());
$john->changeInscription();
var_dump($john->getInscription());
$john->displayPerson(); // ATTENTION "->" !!!! // Peut faire des espaces ^^

echo $john->getNbPersons().PHP_EOL;//PHP_EOL crée un espace (end of line)
$buttonclicked = false;
if(isset($_POST['button'])){
  if(empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['age'])) {
    //trigger_error('AHHHHHHH', E_USER_WARNING);
    echo '<script>alert("Veuillez remplir tous les champs")</script>';
  }else{
    $john->setPrenom($_POST['firstname']);
    $john->setNom($_POST['lastname']);
    $john->setAge((int)$_POST['age']);
    $john->setInscription(isset($_POST['signed']));
    echo '<pre>';
    $john->displayPerson();
    echo '</pre>';
  }
}else{
  echo 'eee';
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
</body>
</html>

  
