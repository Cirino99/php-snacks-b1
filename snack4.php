<?php
$myArr = [];
while (count($myArr) < 15) {
    $numero = rand(1, 100);
    if (!in_array($numero, $myArr)) {
        $myArr[] = $numero;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeri Random</title>
</head>

<body>
    <h1>Stampa Array 15 numeri casuali unici</h1>
    <ul>
        <?php
        for ($i = 0; $i < count($myArr); $i++) {
            echo "<li>{$myArr[$i]}</li>";
        }
        ?>
    </ul>
</body>

</html>