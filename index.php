<?php
include_once __DIR__ . '/models/Product.php';
include_once __DIR__ . '/models/Food.php';
include_once __DIR__ . '/models/Accessory.php';
include_once __DIR__ . '/models/Toy.php';

$uri = 'https://arcaplanet.vtexassets.com/arquivos/ids/';

$products = [
    new Food('Cane', 'Royal Canin Mini Adult', $uri . '270797/Monge-All-Breeds-Adult-Salmone-e-Riso-12Kg.jpg?v=1776606579', 43.99, ['pollo', 'manzo', 'spinacina'], 545),
    new Food('Cane', 'Almo Nature Holistic Maintenance Medium Large Tonno e Riso', $uri . '245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg', 44.99, ['manzo'], 600),
    new Food('Gatto', 'Almo Nature Cat Daily Lattina', $uri . '245336/almo-daily-menu-cat-400-gr-vitello.jpg', 34.99, ['pollo', 'spinacina'], 400),
    new Food('Pesce', 'Mangime per Pesci Guppy in Fiocchi', $uri . '272714/tetra-guppy-mini-flakes.jpg', 2.95, ['cereali', 'Alghe', 'Lieviti'], 30),
    new Accessory('Ucello', 'Voliera Wilma in Legno', $uri . '258384/voliera-wilma1.jpg', 184.99, 'Legno', 'M: L 83 x P 67 x H 153 cm'),
    new Accessory('Pesce', 'Cartucce Filtranti per Filtro EasyCrystal', $uri . '272741/tetra-easycrystal-filterpack-250-300.jpg', 2.29, 'Materiale espanso'),
    new Toy('Cane', 'Kong Classic', $uri . '256599/kong-classic1.jpg', 13.49, 'Galleggia e rimbalza', '8,5 cm x 10 cm'),
    new Toy('Gatto', 'Topini di peluche Trixie', $uri . '223852/trixie-gatto-gioco-active-mouse-peluche.jpg', 4.99, 'Morbido con codina in corda', '8,5 cm x 10 cm')
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css' integrity='sha512-t4GWSVZO1eC8BM339Xd7Uphw5s17a86tIZIj8qRxhnKub6WoyhnrxeCIMeAqBPgdZGlCcG2PrZjMc+Wr78+5Xg==' crossorigin='anonymous' />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css' integrity='sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==' crossorigin='anonymous' />
    <link rel="stylesheet" href="css/syle.css">
    <title>BoolShop</title>
</head>

<body class="bg-light">
    <div class="container my-5">
        <h1 class="text-center fw-bold mb-5">BOOLSHOP</h1>

        <div class="row align-items-stretch">
            <?php foreach ($products as $product) : ?>
                <div class="col-12 col-md-6 col-lg-4 py-3">
                    <div class="card h-100 p-4">
                        <img src="<?= $product->getImage() ?>" alt="<?= $product->getTitle() ?>">
                        <h5><?= $product->getTitle() ?></h5>
                        <p><?= $product->getType() ?></p>
                        <p><?= $product->getPrice() ?></p>
                        <!-- Se è cibo -->
                        <?php if ($product instanceof Food) : ?>
                            <p><?= $product->getIngredients() ?></p>
                            <p><?= $product->getWeight() ?></p>
                            <!-- Se è un accessorio -->
                        <?php elseif ($product instanceof Accessory) : ?>
                            <p><?= $product->getMaterial() ?></p>
                            <p><?= $product->getSize() ?></p>
                            <!-- Se è un gioco -->
                        <?php else : ?>
                            <p><?= $product->getFeature() ?></p>
                            <p><?= $product->getSize() ?></p>
                        <?php endif ?>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</body>

</html>