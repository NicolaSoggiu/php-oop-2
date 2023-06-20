<?php

include "./models/Products.php";
include "./models/Dogs.php";
include "./models/Cats.php";

$Product = [
    new Products(
        "Gioco",
        "2.50",
        new Dogs(
            "Osso",
            "2.50",
            "Osso di gomma",
        )
    )

];

$Product = [
    new Products(
        "Gioco",
        "2.50",
        new Cats(
            "Palla",
            "2.50",
            "Palla di gomma",
        )
    )
];
