<?php
require_once "connections.php";

$ad = null;

if (isset($_GET['ad_id'])) {
    $adId = $_GET['ad_id'];
    $ad = getElectronicsAd($adId);

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
    <link href="CSS/BackgroundE.css" rel="stylesheet">
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
        <form action='update_e.php?id=<?= ($ad['id'] ?? ''); ?>' method="POST">
                <label>Gamintojas</label>
                <input placeholder="Įrašykite gamintoją" type="text" name='title' value='<?= ($ad['title'] ?? ''); ?>'>

                <label>Modelis</label>
                <input placeholder="Įrašykite modelį" type="text" name='model' value='<?= ($ad['model'] ?? ''); ?>'>

                <label>Nuotrauka</label>
                <input placeholder="Įrašykite nuotraukos linką" type="text" name='img' value='<?= ($ad['img'] ?? ''); ?>'>

                <label>Kaina</label>
                <input placeholder="Įrašykite kainą" type="text" name='price' value='<?= ($ad['price'] ?? ''); ?>'>

                <label>Ekrano įstrižainė</label>
                <input placeholder="Įrašykite ekrano dydį" type="text" name='screen' value='<?= ($ad['screen'] ?? ''); ?>'>

                <label>Procesorius</label>
                <input placeholder="Įrašykite procesoriaus tipą" type="text" name='cpu' value='<?= ($ad['cpu'] ?? ''); ?>'>

                <label>Vaizdo plokštė</label>
                <input placeholder="Įrašykite vaizdo plokštės tipą" type="text" name='gpu' value='<?= ($ad['gpu'] ?? ''); ?>'>

                <label>Raiška</label>
                <input placeholder="Įrašykite ekrano raišką" type="text" name='resolution' value='<?= ($ad['resolution'] ?? ''); ?>'>

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