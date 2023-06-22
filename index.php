<?php

include_once __DIR__ . "/models/Food.php";
include_once __DIR__ . "/models/Category.php";
include_once __DIR__ . "/models/Toy.php";
include_once __DIR__ . "/models/Shelter.php";
include_once __DIR__ . "/db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Shops</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="/assets/style.css">
</head>

<body>
    <div class="container">

        <h1 class="text-center text-danger p-2">PET SHOPS :</h1>
        <div class="row row-cols-3 g-2 h-50">
            <?php
            foreach ($arrProducts as $objProduct) {
                echo $objProduct->printCard();
            }
            ?>
        </div>
    </div>
</body>

</html>