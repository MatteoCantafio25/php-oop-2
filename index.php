<?php
require_once __DIR__ . '/models/Category.php';
require_once __DIR__ . '/models/Product.php';

// Istanzio le nuove categorie
$categoryCat = new Category('Cat');
$categoryDog = new Category('Dog');
$categoryBirds = new Category('Birds');
$categoryFish = new Category('Fish');



// Istanzio i prodotti all'interno di un array così da poter stampare in pagina facilmente
$products = [
    new Product('Royal Canin Mini Adult', 8.99, $categoryDog, 'Cibo','https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000', 'https://www.arcaplanet.it/royal-canin-size-mini-per-cani-adulti-6688/p'),
    new Product('Almo Nature Holistic Maintenance Medium Large Tonno e Riso', 13.30, $categoryDog, 'Cibo','https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg', 'https://www.arcaplanet.it/almo-nature-holistic-cane-maintenance-tonno-7430/p'),
    new Product('Almo Nature Cat Daily Lattina', 1.49, $categoryCat, 'Cibo', 'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg','https://www.arcaplanet.it/almo-nature-cat-daily-lattina-400g-5751/p'),
    new Product('Mangime per Pesci Guppy in Fiocchi', 7.99, $categoryFish, 'Cibo', 'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg', 'https://www.arcaplanet.it/tetra-mangime-per-pesci-guppy-in-fiocchi-15424/p'),
    new Product('Voliera Wilma in Legno', 129.99, $categoryBirds, 'Accessorio', 'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg'),
    new Product('Cartucce Filtranti per Filtro EasyCrystal', 7.49, $categoryFish, 'Accessorio', 'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg', 'https://www.arcaplanet.it/tetra-cartucce-filtranti-per-filtro-easycrystal-15439/p'),
    new Product('Kong Classic', 9.49, $categoryDog, 'Gioco', 'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg', 'https://www.arcaplanet.it/kong-classic-gioco-per-cane-10097/p'),
    new Product('Topini di peluche Trixie', 5.99, $categoryCat, 'Gioco', 'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg')
];

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Matteo Cantafio">
    <meta name="description" content="OOP Shop">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous'/>
    <title>OOP Shop</title>
</head>
<body>
<!-- Container -->
<div class="container mt-4 mx-auto">
    <!-- Title -->
    <h1 class="text-center mb-4">Arclean</h1>
    <!-- Row -->
    <div class="row row-cols-3 g-4">
        <!-- Col -->
        <?php foreach($products as $product): ?>
        <div class="col d-flex align-items-center justify-content-center">
            <div class="card h-100" style="width: 18rem;">
              <img src="<?= $product->image ?>" class="card-img-top" alt="<?= $product->name ?>">
              <!-- Card Body -->
              <div class="card-body d-flex align-items-start justify-content-between flex-column">
                <h5 class="card-title"><?= $product->name ?></h5>
                <p class="card-text mb-0"><?= "€{$product->price}" ?></p>
                <p class="card-text mb-0"><?= $product->category->name ?></p>
                <p class="card-text mb-2"><?= $product->type ?></p>
                <a href="<?= $product->redirect ?>" class="btn btn-warning">Acquista</a>
              </div>
            </div>
        </div>
        <?php endforeach ?>
    </div>    
</div>
</body>
</html>