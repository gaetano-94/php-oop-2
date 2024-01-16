<?php

//Classe per il prodotto 
class Prodotto
{
  public $id;
  public $titolo;
  public $descrizione;
  public $prezzo;
  public $immagine;
  //construttore per i prodotti 
  public function __construct($id, $titolo, $descrizione, $prezzo, $immagine)
  {
    $this->id = $id;
    $this->titolo = $titolo;
    $this->descrizione = $descrizione;
    $this->prezzo = $prezzo;
    $this->immagine = $immagine;
  }
}
