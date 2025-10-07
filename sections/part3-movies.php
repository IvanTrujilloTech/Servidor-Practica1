<?php
$moviesJson = 'assets/json/movies.json';
$moviesData = file_get_contents($moviesJson);
$movies = json_decode($moviesData, true);

$genreKey = 'genre';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/css/movies.css">
    <meta charset="UTF-8">
</head>
<body>
    <h1>Mis peliculas favoritas</h1>
    <?php
    $genres = [];
    // Group movies by genre
    foreach ($movies as $movie) {
        $genres[$movie[$genreKey]][] = $movie;
    }
    // Display movies by genre
    foreach ($genres as $genre => $moviesInGenre) {
        echo "<h2>$genre</h2><ul>";
        foreach ($moviesInGenre as $movie) {
            echo "<li>";
            foreach ($movie as $value) {
                echo htmlspecialchars($value) . " ";
            }
            echo "</li>";
        }
        echo "</ul>";
    }
    ?>
</body>
</html>
