<?php

// include production & genre class files
require_once __DIR__ . "/Models/Production.php";
require_once __DIR__ . "/Models/Genre.php";

// Create production instances
$film_1 = new Production('Titanic', 'ENG', 9, new Genre('Romantic', '
Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quaerat cumque ipsum deserunt pariatur doloremque numquam possimus, vitae quia amet.'));
$film_2 = new Production('Interstellar', 'ENG', 7.5, new Genre('Sci-Fi', '
Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quaerat cumque ipsum deserunt pariatur doloremque numquam possimus, vitae quia amet.') );
$film_3 = new Production('La vita è bella', 'ITA', 8.5, new Genre('Comedy', '
Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quaerat cumque ipsum deserunt pariatur doloremque numquam possimus, vitae quia amet.') );

// create Production Array
$films = [$film_1, $film_2, $film_3]; 
 