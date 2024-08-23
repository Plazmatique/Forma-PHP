<?php require_once'config.php';

if(isset($_POST['update-person'])){
  echo "AHHHHHHHHHHHHHHHHHHHHH";
  $sql = "UPDATE contacts SET firstname = :firstname, lastname = :lastname WHERE id = :id";
  $contactRq = $connect->prepare($sql);
  $contactRq->execute([
    'firstname'=>$_POST['firstname'],
    'lastname'=>$_POST['lastname'],
    'id'=>$_POST['id']
  ]) or die($connect->errorInfo());

  header('location:pdo4.php?id='. $_POST['id']);
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
    <input type="text" name="firstname" value="<?php echo $contacts[0]['firstname']?>"><br>
    <label for="">Nom</label>
    <input type="text" name="lastname" value="<?php echo $contacts[0]['lastname']?>"><br>
    <input type="hidden" name="id" value="<?php echo $contacts[0]['id']?>">
    <input type="hidden" name="update-person">
    <button>Send</button>
  </form>
</body>
</html>
