<?php

include __DIR__ . "/models/Products.php";
include __DIR__ . "/db.php";


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container">

        <h1 class="text-center text-danger mb-2">MOVIES</h1>

        <ul class="row cards-container d-flex justify-content-between flex-wrap m-0 p-">
            <?php foreach ($products as $product) : ?>
            <li class="mb-2 col col-4 text-light list-unstyled">
                <?php $product->printDogs(); ?>
            </li>
            <?php endforeach; ?>
        </ul>

    </div>
</body>

</html>