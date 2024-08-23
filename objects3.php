<?php 
declare(strict_types= 1); // !!! SINON PAS DE VARIABLES STRICTES !!!
class Personne{
    //php <8
    /*
    private string $nom = 'doe';
    private static string $prenom = 'john';
    private bool $inscription = true;
    private int $age = 30;

    public function __construct(string $nom, string $prenom, bool $inscription, int $age) {
      $this->nom = $nom;
      self::$prenom = $prenom;
      $this->inscription = $inscription;
      $this->age = $age;
    }
      */
    private const TEST = "test"; //Constante en maj
    private static int $nbPersons = 0;
    //php >8
    public function __construct(private string $prenom, private string $nom, private bool $inscription, private int $age) {
      self::$nbPersons++;
    }
    function displayPerson() {
      echo "<p>" . $this->formatText($this->prenom). " " . $this->formatText($this->nom) . " " . $this->age . ", Inscrit : " . $this->inscription . "</p>";
    }
    //": bool" pour stipuler le type de la valeur de retour
    function getInscription(): bool{
      return $this->inscription;
    }
    function changeInscription(){
      $this->inscription = !$this->inscription;
    }

    private function formatText($text) {
      return ucfirst($text);
    }
    public function getNbPersons(): int{
      return self::$nbPersons;
    }
    public function setPrenom($firstname){
      $this->prenom = $firstname;
    }
    public function getPrenom(): string{
      return $this->prenom;
    }
    public function setInscription($inscription){
      $this->inscription = $inscription;
    }
    public function getAge(): int{
      return $this->age;
    }
    public function setAge(int $age){
      $this->age = $age;
    }
    public function setNom($nom){
      $this->nom = $nom;
    }
    public function getNom(): string{
      return $this->nom;
    }
  }
  $john = new Personne("john", "hello", true, 55);
  $pierre = new Personne("pierre", "caillou", true, 20);
  echo '<pre>';
  print_r($john);
  echo '</pre>';
  var_dump($john->getInscription());
  $john->changeInscription();
  var_dump($john->getInscription());
  $john->displayPerson(); // ATTENTION "->" !!!! // Peut faire des espaces ^^

  echo $john->getNbPersons().PHP_EOL;//PHP_EOL crée un espace (end of line)
  $buttonclicked = false;
  if($buttonclicked){
    if(empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['age'])) {
      //trigger_error('AHHHHHHH', E_USER_WARNING);
      //echo '<script>alert("Veuillez remplir tous les champs")</script>';
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

  //AVANT MODIF EN PRIVATE !
  /*
    $john->nom = 'Deo'; //Si normal
    Personne::$prenom = 'Jane'; //Si static
    $john::$prenom = 'Jane'; //Ou ça aussi en static
    print_r(Personne::TEST);
  */


  //Reload pas d'alerte mais bouton + empty input == alert !! 
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
      Prénom : <input type="text" name="firstname"> 
      Nom : <input type="text" name="lastname">
      Inscrit ? <input type="checkbox" name="signed">
      Age : <input type="number"  name="age" value="0" min="0" max="130" step="1" />
      <button name='button' id='button'>Enregistrer</button>
    </form>
    <script>
      document.getElementById("button").onclick = function() {
        <?php
          $buttonclicked = true;
        ?>
      };
    </script>
  </body>
  </html>

  
