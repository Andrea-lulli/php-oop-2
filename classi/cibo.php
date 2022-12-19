<?php

include_once __DIR__ . '/prodotto.php';

class cibo extends prodotto{
  public $peso;
  public $ingredienti;
  
  

  public function __construct(
    String $nome,
    String $immagine,
    Float $prezzo,
    category $category,



    Float $peso,
 String $ingredienti
    
    ) {
    $this->peso = $peso;
    $this->ingredienti = $ingredienti;
        parent::__construct($nome, $immagine, $prezzo, $category, );
  
  }

}

?>