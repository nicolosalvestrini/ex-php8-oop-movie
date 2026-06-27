<?php
require_once 'Models/movie.php';
require_once 'Models/Genre.php';

$films = [
    new Movie("Furious 7", "James Wan", 2015),
    new Movie("My Name is Nobody", "Tonino Valerii", 1973)
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Movie EX</title>
</head>
<body>
    <header class="container d-flex justify-content-center align-items-center">
        <h1>Movie</h1>
    </header>
    <main class="container d-flex justify-content-center align-items-center flex-wrap gap-3">
        <?php foreach($films as $film): ?>

            <div class="card m-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?= $film->title ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $film->director ?></h6>
                    <p class="card-text"><?= $film->releaseYear ?></p>
                </div>
            </div>

        <?php endforeach; ?>   
    </main>
 

    
</body>
</html>