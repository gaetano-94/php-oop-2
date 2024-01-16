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

//Classe per categoria
class Categoria
{
  public $nome;
  public $icona;
  //construttore per la categoria
  public function __construct($nome, $icona)
  {
    $this->nome = $nome;
    $this->icona = $icona;
  }
}
