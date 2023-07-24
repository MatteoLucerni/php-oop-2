<?php
include_once __DIR__ . '/models/Product.php';
include_once __DIR__ . '/models/Food.php';

$first_product = new Food('Royal Canin Mini Adult', 'https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg', 99, ['pollo', 'manzo', 'spinacina'], 50);
$second_product = new Food('Almo Nature Holistic Maintenance Medium Large Tonno e Riso', 'https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg', 78, ['manzo'], 40);
$third_product = new Food('Almo Nature Cat Daily Lattina', 'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg', 44, ['pollo', 'spinacina'], 20);

$products = [
    $first_product,
    $second_product,
    $third_product
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

<body>
    <div class="container my-5">
        <h1 class="text-center fw-bold mb-5">BOOLSHOP</h1>

        <div class="row">
            <?php foreach ($products as $product) : ?>
                <div class="col-4">
                    <div class="card p-5 mb-5 bg-light">
                        <img src="<?= $product->getImage() ?>" alt="<?= $product->getTitle() ?>">
                        <h5><?= $product->getTitle() ?></h5>
                        <p><?= $product->getPrice() ?></p>
                        <!-- Se è cibo -->
                        <?php if ($product instanceof Food) : ?>
                            <p><?= $product->getIngredients() ?></p>
                            <p><?= $product->getWeight() ?></p>
                        <?php endif ?>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</body>

</html>