<?php
$partite = [
    [
        'casa' => [
            'nome' => 'Olimpia Milano',
            'punteggio' => 55
        ],
        'ospite' => [
            'nome' => 'Cantù',
            'punteggio' => 60
        ]
    ],
    [
        'casa' => [
            'nome' => 'Bari',
            'punteggio' => 67
        ],
        'ospite' => [
            'nome' => 'Napoli',
            'punteggio' => 91
        ]
    ],
    [
        'casa' => [
            'nome' => 'Roma',
            'punteggio' => 70
        ],
        'ospite' => [
            'nome' => 'Trento',
            'punteggio' => 85
        ]
    ],
];
$numeroPartite = count($partite);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partite Basket</title>
</head>

<body>
    <h1>Elenco partite di basket</h1>
    <ul>
        <?php
        for ($i = 0; $i < $numeroPartite; $i++) {
            $partita = $partite[$i];
            echo "<li>{$partita['casa']['nome']} vs {$partita['ospite']['nome']}, con il risultato di: {$partita['casa']['punteggio']}-{$partita['ospite']['punteggio']}, squadra di casa: {$partita['casa']['nome']}</li>";
        }
        ?>
    </ul>
</body>

</html>