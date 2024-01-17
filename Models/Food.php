<?php

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Category.php';

class Food extends Product
{
  private $ingredients;
  private $expiration_date;
  private $is_gluten_free;
  private $is_vegan;
  public static $type = 'Food';

  public function __construct($_id, $_name, Category $_category, $ingredients)
  {
    parent::__construct($_id, $_name, $_category);
    $this->set_ingredients($ingredients);
  }

  public function set_ingredients($_ingredients)
  {
    $this->ingredients = $_ingredients;
  }

  public function get_ingredients()
  {
    return $this->ingredients;
  }
}
