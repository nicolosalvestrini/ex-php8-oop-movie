<?php

require_once 'Models/movie.php';

$action = new Genre("Azione", "Film con scene d'azione");
$thriller = new Genre("Thriller", "Film con suspense");
$western = new Genre("Western", "Film ambientato nel vecchio west");
$comedy = new Genre("Commedia", "Film con elementi comici");

$movies = [
    new Movie("Furious 7", "James Wan", 2015, [$action, $thriller], 7.1),
    new Movie("My Name is Nobody", "Tonino Valerii", 1973, [$western, $comedy], 7.3),
];