<?php
if (!empty($_GET['name']) && !empty($_GET['email']) && !empty($_GET['age'])) {
    $name = $_GET['name'];
    $email = $_GET['email'];
    $age = $_GET['age'];
    $posizioneChiocciola = strpos($email, '@');
    if (strlen($name) > 3 && $posizioneChiocciola !== false && strpos($email, '.', $posizioneChiocciola) && is_numeric($age)) {
        $risultato = 'credenziali inserite correttamente';
        $successo = true;
    } else {
        $risultato = 'credenziali inserite in maniera errata';
        $successo = false;
    }
} else {
    $risultato = 'credenziali non inserite o inserite parzialmente';
    $successo = false;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Controllo form</title>
</head>

<body>
    <h1>Form con controllo tramite php</h1>
    <form action="" method="get">
        <label for="name">Nome:</label>
        <input type="text" name="name">
        <label for="email">Email:</label>
        <input type="email" name="email">
        <label for="age">Età:</label>
        <input type="number" name="age">
        <button>Invio</button>
    </form>
    <p class="<?= $successo ? 'successo' : 'fail' ?>"><?= $risultato ?></p>
</body>

</html>