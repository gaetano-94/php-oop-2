<?php

//Classe per il prodotto 
class Prodotto
{

  public $titolo;
  public $descrizione;
  public $prezzo;
  //construttore per i prodotti 
  public function __construct($titolo, $descrizione, $prezzo,)
  {

    $this->titolo = $titolo;
    $this->descrizione = $descrizione;
    $this->prezzo = $prezzo;
  }
}
