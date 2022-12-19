<?php

include_once __DIR__ . '/prodotto.php';

class giocattoli extends prodotto{
  public $caratteristiche;
  public $dimensioni;
  
  

  public function __construct(
    String $nome,
    String $immagine,
    Float $prezzo,
    category $category,



    String $caratteristiche,
 String $dimensioni
    
    ) {
    $this->caratteristiche = $caratteristiche;
    $this->dimensioni = $dimensioni;
        parent::__construct($nome, $immagine, $prezzo, $category, );
  
  }

}

?>