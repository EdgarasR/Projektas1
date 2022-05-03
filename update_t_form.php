<?php
require_once "connections.php";

$ad = null;

if (isset($_GET['ad_id'])) {
    $adId = $_GET['ad_id'];
    $ad = getTransportAd($adId);

    if (!$ad) {
        http_response_code(403);
        exit('ERROR!!!!!');
    }
} else {
    http_response_code(400);
    exit('PARAMETER EXPECTED');
}

?>

<!DOCTYPE hmtl>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koreguoti skelbimą</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/Main.css">
    <link rel="stylesheet" href="CSS/New_ad.css">
    <link rel="stylesheet" href="CSS/Navi.css">
    <link href="CSS/BackgroundT.css" rel="stylesheet">
</head>
<body>
    <header><?php include_once 'navi.php'; ?></header>
    <main>
        <section>
            <?php
            if (isset($_GET['error'])) {
                echo  $_GET['error'];
            }
            ?>
        </section>
        <section>
            <form action='update_t.php?id=<?= ($ad['id'] ?? ''); ?>' method="POST">
                <label>Markė</label>
                <input placeholder="Įrašykite automobilio markę" type="text" name='make' value='<?= ($ad['make'] ?? ''); ?>'>

                <label>Modelis</label>
                <input placeholder="Įrašykite automobilio modelį" type="text" name='model' value='<?= ($ad['model'] ?? ''); ?>'>

                <label>Nuotrauka</label>
                <input placeholder="Įrašykite nuotraukos linką" type="text" name='img' value='<?= ($ad['img'] ?? ''); ?>'>

                <label>Metai</label>
                <input placeholder="Įrašykite gamybos metus" type="text" name='make_year' value='<?= ($ad['make_year'] ?? ''); ?>'>

                <label>Kaina</label>
                <input placeholder="Įrašykite kainą" type="text" name='price' value='<?= ($ad['price'] ?? ''); ?>'>

                <label>Galia</label>
                <input placeholder="Įveskitę automobilio galią" type="text" name='power' value='<?= ($ad['power'] ?? ''); ?>'>

                <label>Rida</label>
                <input placeholder="Įrašykite automobilio ridą" type="text" name='mileage' value='<?= ($ad['mileage'] ?? ''); ?>'>

                <label>Kuro tipas</label>
                <input placeholder="Įrašykite kuro tipą" type="text" name='fuel' value='<?= ($ad['fuel'] ?? ''); ?>'>

                <label>Kėbulo tipas</label>
                <input placeholder="Įrašykite kėbulo tipą" type="text" name='body' value='<?= ($ad['body'] ?? ''); ?>'>

                <label>Pavarų dėžė</label>
                <input placeholder="Įrašykite pavarų dėžės tipą" type="text" name='gearbox' value='<?= ($ad['gearbox'] ?? ''); ?>'>

                <label>Tech. apžiūra</label>
                <input placeholder="Įrašykite iki kada galioja tech. apžiūra" type="text" name='check' value='<?= ($ad['check'] ?? ''); ?>'>

                <label>Trumpas aprašymas</label>
                <textarea placeholder="Įrašykite trumpą aprašymą" type="text" name='short_description' rows='4' maxlength="1000"><?= ($ad['short_description'] ?? ''); ?></textarea>

                <label>Pilnas aprašymas</label>
                <textarea placeholder="Įrašykite pilną aprašymą" type="text" name='long_description' rows='4' maxlength="1000"><?= ($ad['long_description'] ?? ''); ?></textarea>

                <input type='submit' value='Koreguoti skelbimą'>
            </form>
        </section>
    </main>
</body>
</html>