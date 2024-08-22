<?php
session_start();
echo '<pre>';
print_r($_SESSION);
echo '</pre>';
//unset($_SESSION['person']);
  if(isset($_POST["identification"])) :
    $person = [
      'firstname' => $_POST['firstname'],
      'lastname' => $_POST['lastname']
    ];
      $_SESSION['personnel'][] = $person;
      header('Location: personnel.php');
      die();
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
      <h1>Ajouter un membre du personnel</h1>
      <form action="" method="post">
        <label for="firstname">Votre prénom ?</label>
        <input type="text" name="firstname" id="firstname">
        <label for="lastname">Votre nom ?</label>
        <input type="text" name="lastname" id="lastname">
        <input type="hidden" name="identification">
        <button>Envoyer</button>
      </form>
      <form action="">
        <input type="hidden" name="reset">
        <button>Reset</button>
      </form>

      <hr>
      <h2>Liste du personnel</h2>
      <p>il y a <?php echo count($_SESSION['personnel']) ?> membres</p>
      <ul>
        <?php
          foreach($_SESSION['personnel'] AS $key => $value) :
            echo '<li data-id ="' . $key . '">' . $value['firstname'] . " " . $value['lastname'] . '</li>';
          endforeach;
        ?>
    </main>
  </body>
</html>