<?php

// include production class file
require_once __DIR__ . "/Models/Production.php";

// Create production instances
$film_1 = new Production('Titanic', 'ENG', 9);
$film_2 = new Production('Interstellar', 'ENG', 7.5);
$film_3 = new Production('La vita è bella', 'ITA', 8.5);

// create Production Array
$films = [$film_1, $film_2, $film_3]; 