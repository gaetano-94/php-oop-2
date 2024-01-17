<?php

//Classe per il prodotto 
class Product
{
  private $id;
  private $name;
  private $description;
  private $category;
  private $price;
  private $image;
  private $is_available;

  //construttore per i prodotti 
  public function __construct($_id, $_name, $_category)
  {
    $this->set_id($_id);
    $this->set_name($_name);
    $this->set_category($_category);
  }

  //GETTERS
  public function get_id()
  {
    return $this->id;
  }
  public function get_name()
  {
    return $this->name;
  }
  public function get_description()
  {
    return $this->description;
  }
  public function get_category()
  {
    return $this->category;
  }
  public function get_price()
  {
    return $this->price;
  }
  public function get_image()
  {
    return $this->image;
  }
  public function get_is_available()
  {
    return $this->is_available;
  }

  //SETTERS
  public function set_id($_id)
  {
    $this->id = $_id;
  }
  public function set_name($_name)
  {
    $this->name = $_name;
  }
  public function set_description($_description)
  {
    $this->description = $_description;
  }
  public function set_category($_category)
  {
    $this->category = $_category;
  }
  public function set_price($_price)
  {
    $this->price = $_price;
  }
  public function set_image($_image)
  {
    $this->image = $_image;
  }
  public function set_is_available($_is_available)
  {
    $this->is_available = $_is_available;
  }
}

//Instanziare prodotto
$product = new Product(120, 'Prodotto di Prova', 'Cani');
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Php Shop</title>
  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- /BOOTSTRAP -->
</head>

<body>
  <h1 class="text-center py-3">Pet Shop</h1>
  <div class="container">
    <div class="row">
      <!-- Colonna Prodotto -->
      <div class="col-3">
        <!-- Card Prodotto -->
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
        <!-- /Card Prodotto -->
      </div>
      <!-- /Colonna Prodotto -->
    </div>
  </div>
</body>

</html>