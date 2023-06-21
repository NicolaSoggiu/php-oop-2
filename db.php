<?php

$categories = [
    new Category(1, "Dog", "All you need for your lovely dog"),
    new Category(2, "Cat", "All you need for your lovely cat"),

];

$arrProducts = [

    new Food(
        1,
        "Croquettes",
        "A healthy and balanced diet can help keep your dog in good physical and mental shape. Dogs that receive enough essential nutrients have lower levels of anxiety and stress and have higher energy and liveliness.",
        4800,
        $categories[0],
        "./assets/img/CroquettesAdult.jpg",
        "2023-08-30",
        300
    ),
    new Toy(
        1,
        "Bone",
        "Teeth-strengthening and educational bone for dogs for every size, small, medium or large. This product will help your dog to have excellent and resistant teeth, and by chewing it, this indestructible toy will help him clean his teeth.",
        1200,
        $categories[0],
        "./assets/img/Bone.jpg",
        "Natural rubber",
        "Sky blue"
    ),
    new Shelter(
        1,
        "Shelter",
        "Weatherproof bituminous roof. Outer wall is glazed with protective wood color, height-adjustable plastic feet, comes disassembled in cardboard box, incl. Assembly instructions / easy to assemble",
        11900,
        $categories[0],
        "./assets/img/DogShelter.jpg",
        "89cm",
        "58cm",
        "18cm"
    ),
    new Food(
        2,
        "Friskies",
        "Friskies Cat Adul Co/Po/Ve 1 x 20 K",
        4100,
        $categories[0],
        "./assets/img/friskies.jpg",
        "2023-08-30",
        300
    ),
    new Toy(
        2,
        "Hexbug",
        "This robot pet is the ideal cat toy, the furry cat lover comes with cute pink ears and whiskers. When it's on, its little tail bobs back and forth as it crawls forward.",
        1500,
        $categories[0],
        "./assets/img/mouse.jpg",
        "Peluche",
        "Grey"
    ),
    new Shelter(
        1,
        "Shelter",
        "The outdoor cat house ensures that your cat is protected all night long, keeping them warm and safe, it is a waterproof all-inclusive design and the roof and floor are completely waterproof",
        2100,
        $categories[0],
        "./assets/img/catshelter.jpg",
        "38cm",
        "35cm",
        "38cm"
    ),
];
