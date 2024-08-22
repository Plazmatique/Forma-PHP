<?php 
declare(strict_types= 1); // !!! SINON PAS DE VARIABLES STRICTES !!!
class Personne{
    //<php 8
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
    private const TEST = "test";
    private static int $nbPersons = 0;
    private static string $prenom = "doe";

    public function __construct(private string $nom, private bool $inscription, private int $age) {
      self::$nbPersons++;
    }
    function displayPerson() {
      echo "<p>" . $this->formatText(self::$prenom). " " . $this->formatText($this->nom) . " " . $this->age . "</p>";
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
  }
  $john = new Personne("hello", true, 55);
  echo '<pre>';
  print_r($john);
  echo '</pre>';
  var_dump($john->getInscription());
  $john->changeInscription();
  var_dump($john->getInscription());
  $john->displayPerson(); // ATTENTION "->" !!!! // Peut faire des espaces ^^


  //AVANT MODIF EN PRIVATE !
  /*
    $john->nom = 'Deo'; //Si normal
    Personne::$prenom = 'Jane'; //Si static
    $john::$prenom = 'Jane'; //Ou ça aussi en static
    print_r(Personne::TEST);
  */
