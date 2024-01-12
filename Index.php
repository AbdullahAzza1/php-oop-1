
<?php
require __DIR__ . '/php-opp-01/Movies.php';

$ind_fury = new Movies();

$ind_fury->LengthOfMovie = "134 min";
$ind_fury->Director = "	David Ayer";
$ind_fury->WrittenBy = "David Ayer";
$ind_fury->Type = "Drama, War";

var_dump($ind_fury);
echo $ind_fury->getFullMovies();
