<?php 
session_start();
print_r($_SESSION); //De l'autre site, fermer l'onglet n'est pas suffisant (fermé navigateur ou le script)

$texte = isset($_POST['texte']) ? $_POST['texte'] : 'Hello';
$name = 'World';
echo $texte . ' ' . $name;
echo "<h1>$texte $name</h1>";

if($name == 'World'){
    echo 'true';
}
else{
    echo 'false';
}


if($name == 'World') :
    echo 'true';
 else :
    echo 'false';
endif;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="post">
    <input type="text" name="texte">
    <button>Envoyer</button>
  </form>
</body>
</html>