<?php
session_start();
print_r($_SESSION);
unset($_SESSION['person']);
  if(isset($_POST["identification"])) :
    $person = [
      'firstname' => $_POST['firstname'],
      'lastname' => $_POST['lastname']
    ];
    echo '<pre>';
      $_SESSION['person'] = $person;
      print_r($_SESSION);
      var_dump($_SESSION);
    echo '</pre>';
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
    <header>
      <h1>Session</h1>
    </header>
    <main>
      <form action="" method="post">
        <label for="firstname">Votre prénom ?</label>
        <input type="text" name="firstname" id="firstname">
        <label for="lastname">Votre nom ?</label>
        <input type="text" name="lastname" id="lastname">
        <input type="hidden" name="identification">
        <button>Envoyer</button>
      </form>
    </main>
  </body>
</html>