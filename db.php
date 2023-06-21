<?php

$categories = [
    new Category(1, "cats", "i gatti fanno miao"),
    new Category(2, "dogs", "i cani fanno bau")
];

$arrProducts = [

    new Food(1, "croccantini", "buonissimo cibo salutare", 1000, $categories[0], "percorso immagine", "2023-08-30", 300),
    new Toy(1, "gioco", "buonissimo cibo salutare", 1000, $categories[1], "percorso immagine", "plastica", "rosso"),
    new Shelter(1, "cuccia", "buonissimo cibo salutare", 1000, $categories[0], "percorso immagine", 500, 700, 600),
    new Food(1, "croccantini", "buonissimo cibo salutare", 1000, $categories[1], "percorso immagine", "2023-08-30", 300),
    new Toy(1, "gioco", "buonissimo cibo salutare", 1000, $categories[0], "percorso immagine", "plastica", "rosso"),
    new Shelter(1, "cuccia", "buonissimo cibo salutare", 1000, $categories[1], "percorso immagine", 500, 700, 600),

];
