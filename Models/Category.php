<?php

//Classe per la categoria 
class Category
{
  private $name;
  private $icon;

  //construttore per la categori 
  public function __construct($_name, $_icon)
  {
    $this->name = $_name;
    $this->icon = $_icon;
  }

  public function get_name()
  {
    return $this->name;
  }


  public function get_icon()
  {
    return $this->icon;
  }
}
