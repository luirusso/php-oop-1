<?php

require_once __DIR__ . './classes/movies.php';

$spiderman = new Movie('Spiderman', 'Action, Cinecomic');
//GET AGE AND DISCOUNT
$spiderman->setAge(61);
$spidermanDiscount = $spiderman->getDiscount();

$noTimeToDie = new Movie('No Time to Die', 'Action');
//GET AGE AND DISCOUNT
$noTimeToDie->setAge(27);
$noTimeToDieDiscount = $noTimeToDie->getDiscount();

$eternals = new Movie('Eternals', 'Action, Cinecomic');
//GET AGE AND DISCOUNT
$eternals->setAge(48);
$eternalsDiscount = $eternals->getDiscount();

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
            <?php var_dump($spiderman) ?>
            <span><?php echo "Your discount is $spidermanDiscount%." ?></span>
        </div>
        <div>
            <?php var_dump($noTimeToDie) ?>
            <span><?php echo "Your discount is $noTimeToDieDiscount%." ?></span>
        </div>
        <div>
            <?php var_dump($eternals) ?>
            <span><?php echo "Your discount is $eternalsDiscount%." ?></span>
        </div>
    </main>
</body>
</html>