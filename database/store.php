<?php

// include production & genre class files
require_once __DIR__ . "/../Models/Production.php";
require_once __DIR__ . "/../Models/Movie.php";
require_once __DIR__ . "/../Models/TVSerie.php";
require_once __DIR__ . "/../Models/Genre.php";

// Create Movie istances
$film_1 = new Movie('Titanic', 'ENG', 9, new Genre('Romantic', 'Lorem ipsum dolor sit amet'), '2.2B', '3:14');
$film_2 = new Movie('Interstellar', 'ENG', 7.5, new Genre('Sci-Fi', 'Lorem ipsum dolor sit amet'), '190M', '2:49' );

// create TVSerie istances
$tvserie_1 = new TVSerie('Casa de Papel', 'ESP', 8.5, new Genre('Thriller', 'Lorem ipsum dolor sit amet'), 5);

// create Production Array
$productions = [$film_1, $film_2, $tvserie_1]; 
 