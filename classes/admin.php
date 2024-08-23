<?php

class Admin extends Personne{
  public function __construct(private string $prenom, private string $nom, private bool $inscription, private int $age, private int $rights) {
    parent::__construct($prenom, $nom, $inscription, $age);
    $this->rights = $rights;
  }
}