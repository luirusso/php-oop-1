<?php

require_once __DIR__ . './classes/movies.php';

$spiderman = new Movie('Spiderman', 'Action, Cinecomic', '<p>Peter Parker è il tipico adolescente sfigato, segretamente innamorato fin da bambino della sua vicina di casa Mary Jane, rimasto orfano dei genitori e che vive con gli zii. Durante una gita scolastica a un laboratorio scientifico Peter viene morso da un ragno geneticamente modificato. Ben presto si renderà conto di non aver più bisogno degli occhiali da vista e di essere in possesso di poteri molto particolari.</p>');
//GET AGE AND DISCOUNT
$spiderman->setAge(61);
$spidermanDiscount = $spiderman->getDiscount();

$noTimeToDie = new Movie('No Time to Die', 'Action', '<p>Bond ha abbandonato gli impegni in prima linea e si gode una tranquilla vita in Giamaica. La sua pace ha vita breve dopo che il vecchio amico Felix Leiter della CIA si palesa con una richiesta d’aiuto. La missione ha l’obiettivo di recuperare uno scienziato rapito e si rivela molto più complessa di quanto atteso: Bond sarà messo alla prova da un misterioso nemico dotato di una nuova arma tecnologica.</p>');
//GET AGE AND DISCOUNT
$noTimeToDie->setAge(27);
$noTimeToDieDiscount = $noTimeToDie->getDiscount();

$eternals = new Movie('Eternals', 'Action, Cinecomic', '<p>Ne "Gli Eterni" dei Marvel Studios un nuovo, entusiasmante, team di supereroi debutta nell’universo cinematografico Marvel: antichi alieni che vivono in segreto sulla Terra da migliaia di anni. A seguito degli eventi di "Avengers: Endgame", una tragedia inaspettata li costringe a uscire dalle ombre per ricongiungersi con il più antico nemico dell’umanità, i Devianti.</p>');
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
            <h3><?php echo $spiderman->title ?></h3>
            <div>
            Genre: <?php echo $spiderman->genre ?>
            </div>
            <h4>Overview:</h4>
            <div>
            <?php echo $spiderman->overview ?>
            </div>
            <h4>Sconto disponibile:</h4>
            <span><?php echo "Hai uno sconto del $spidermanDiscount%." ?></span>
        </div>
        <hr>
        <div>
            <h3><?php echo $noTimeToDie->title ?></h3>
            <div>
            Genre: <?php echo $noTimeToDie->genre ?>
            </div>
            <h4>Overview:</h4>
            <div>
            <?php echo $noTimeToDie->overview ?>
            </div>
            <h4>Sconto disponibile:</h4>
            <span><?php echo "Hai uno sconto del $noTimeToDieDiscount%." ?></span>
        </div>
        <hr>
        <div>
        <h3><?php echo $eternals->title ?></h3>
            <div>
            Genre: <?php echo $eternals->genre ?>
            </div>
            <h4>Overview:</h4>
            <div>
            <?php echo $eternals->overview ?>
            </div>
            <h4>Sconto disponibile:</h4>
            <span><?php echo "Hai uno sconto del $eternalsDiscount%." ?></span>
        </div>
    </main>
</body>
</html>