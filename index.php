<?php

require_once __DIR__ . './classes/movies.php';

$spiderman = new Movie('Spiderman', 'Action, Cinecomic');
$noTimeToDie = new Movie('No Time to Die', 'Action');
$eternals = new Movie('Eternals', 'Action, Cinecomic');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    <main>
        <h2>Movies</h2>
        <div>
            <?php echo $spiderman ?>
        </div>
    </main>
</body>
</html>