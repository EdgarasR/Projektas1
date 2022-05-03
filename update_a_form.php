<?php
require_once "connections.php";

$ad = null;

if (isset($_GET['ad_id'])) {
    $adId = $_GET['ad_id'];
    $ad = getApplianceAd($adId);

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
    <link href="CSS/BackgroundA.css" rel="stylesheet">
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
            <form action='update_a.php?id=<?= ($ad['id'] ?? ''); ?>' method="POST">
                    <label>Pavadinimas</label>
                    <input placeholder="įveskite prekės pavadinimą" type="text" name='title' value='<?= ($ad['title'] ?? ''); ?>'>
                    
                    <label>Gamintojas</label>
                    <input placeholder="įveskite gamintoją" type="text" name='name' value='<?= ($ad['name'] ?? ''); ?>'>
                    
                    <label>Modelis</label>
                    <input placeholder="įveskite modelį" type="text" name='model' value='<?= ($ad['model'] ?? ''); ?>'>

                    <label>Nuotrauka</label>
                    <input placeholder="įveskite nuotraukos linką" type="text" name='img' value='<?= ($ad['img'] ?? ''); ?>'>

                    <label>Kaina</label>
                    <input placeholder="įveskite kainą" type="text" name='price' value='<?= ($ad['price'] ?? ''); ?>'>

                    <label>Trumpas tekstas</label>
                    <textarea placeholder="įveskite aprašymą" type="text" name='short_description' rows='4' maxlength="1000"><?= ($ad['short_description'] ?? ''); ?></textarea>

                    <label>Ilgas tekstas</label>
                    <textarea placeholder="įveskite aprašymą" type="text" name='long_description' rows='4' maxlength="1000"><?= ($ad['short_description'] ?? ''); ?></textarea>


                    <input type='submit' value='Koreguoti skelbimą'>
                </form>
        </section>
    </main>
</body>
</html>