
<?php
require __DIR__ . '/php-opp-01/Movies.php';

$ind_movies = new Movies();

$ind_movies->LengthOfMovie = "via roma";
$ind_movies->Director = "123";
$ind_movies->WrittenBy = "80100";
$ind_movies->Type = "salerno";

var_dump($ind_movies);
