<?php

require_once __DIR__ . '/Models/Category.php';
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Game.php';

$cani = new Category('Cani', '<i class="fa-solid fa-dog"></i>');
$gatti = new Category('Gatti', '<i class="fa-solid fa-cat"></i>');

// prodotto di default
$product_default = new Product(120, 'Prodotto di Prova', $cani);

// prodotto food
$cibo_cane = new Food(200, 'Cibo cane', $cani, 'carne, verdura, pollo');
//$cibo_cane->set_ingredients('carne, verdura, pollo');

// prodotto game
$palla_gatto = new Game(130, 'Palla blu', $gatti);
$palla_gatto->set_material('gomma');

$products = [
  $product_default,
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
      <?php foreach ($products as $product) : ?>
        <!-- Colonna Prodotto -->
        <div class="col-4 py-3">
          <!-- Card Prodotto -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"> <strong><?php echo $product->get_name(); ?></strong> </h5>
              <div>
                <p><strong>Categoria:</strong> <?php echo $product->get_category()->get_name(); ?> <?php echo $product->get_category()->get_icon(); ?></p>
                <p><strong>Tipo:</strong> <?php echo Product::$type; ?></p>
              </div>
              <a href="#" class="btn btn-primary">Acquista</a>
            </div>
          </div>
          <!-- /Card Prodotto -->
        </div>
        <!-- /Colonna Prodotto -->
      <?php endforeach; ?>
    </div>
  </div>
</body>

</html>