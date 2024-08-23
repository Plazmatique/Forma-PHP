<?php
class Personne{
    protected const TEST = "AHHHHHHHHH"; //Constante en maj
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