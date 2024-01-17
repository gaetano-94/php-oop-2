<?php

require_once __DIR__ . '/Models/Category.php';
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Game.php';

$cani = new Category('Cani', 'Icona');
$gatti = new Category('Gatti', 'Icona');

// prodotto di default
$product = new Product(120, 'Prodotto di Prova', $cani);

// prodotto food
$cibo_cane = new Food(200, 'Cibo cane', $cani, 'carne, verdura, pollo');
//$cibo_cane->set_ingredients('carne, verdura, pollo');

// prodotto game
$palla_gatto = new Game(130, 'Palla blu', $gatti);
$palla_gatto->set_material('gomma');

$products = [
  $product,
  $cibo_cane,
  $palla_gatto
];

// echo "<pre>";
// var_dump($products);
// echo "</pre>";

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

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- /Font Awesome -->

</head>

<body class="bg-primary">
  <h1 class="text-center py-3 text-uppercase text-warning"><strong>Pet Shop</strong></h1>
  <div class="container bg-success rounded">
    <div class="row">
      <!-- Colonna Prodotto -->
      <div class="col-3 py-3">
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