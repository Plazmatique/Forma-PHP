<?php 
declare(strict_types= 1); // !!! SINON PAS DE VARIABLES STRICTES !!!
  class Personne{
    private string $nom = 'Doe';
    private static string $prenom = 'John';
    private bool $inscription = true;
    private int $age = 30;

    private const TEST = "test";
    function displayPerson() {
      echo "<p>" . self::$prenom . " " . $this->nom . " " . $this->age . "</p>";
    }
    function setNom($name){
      $this->nom = $name;
    }
    function setPrenom($firstname){
      self::$prenom = $firstname;  
    }
    function getInscription(){
      return $this->inscription;
    }
    function changeInscription(){
      $this->inscription = !$this->inscription;
    }
  }
  $john = new Personne();
  echo '<pre>';
  print_r($john);
  echo '</pre>';
  var_dump($john->getInscription());
  $john->changeInscription();
  var_dump($john->getInscription());


  //AVANT MODIF EN PRIVATE !
  /*
    $john->nom = 'Deo'; //Si normal
    Personne::$prenom = 'Jane'; //Si static
    $john::$prenom = 'Jane'; //Ou ça aussi en static
    print_r(Personne::TEST);
    $john->displayPerson(); // ATTENTION "->" !!!! // Peut faire des espaces ^^
  */
