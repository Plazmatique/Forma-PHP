<?php require_once'config.php';

if(isset($_POST['new-person'])){
  echo "AHHHHHHHHHHHHHHHHHHHHH";
  $sql = "INSERT INTO contacts SET firstname = :firstname, lastname = :lastname";
  $contactRq = $connect->prepare($sql);
  $contactRq->execute([
    'firstname'=>$_POST['firstname'],
    'lastname'=>$_POST['lastname']
  ]) or die($connect->errorInfo());
  $last_id = $connect->lastInsertId();
  print_r($last_id);
  header('location:pdo3.php?id='. $last_id);
  exit;
}

$id = $_GET['id'] ?? '5';
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
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="post">
    <label for="">Prénom</label>
    <input type="text" name="firstname"><br>
    <label for="">Nom</label>
    <input type="text" name="lastname"><br>
    <input type="hidden" name="new-person">
    <button>Send</button>
  </form>
</body>
</html>
