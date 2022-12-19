<?php

include_once __DIR__ . '/prodotto.php';

class accessori extends prodotto{
  public $materiale;
  public $dimensioni;
  
  

  public function __construct(
    String $nome,
    String $immagine,
    Float $prezzo,
    category $category,



    String $materiale,
 String $dimensioni
    
    ) {
    $this->materiale = $materiale;
    $this->dimensioni = $dimensioni;
        parent::__construct($nome, $immagine, $prezzo, $category, );
  
  }

}

?>