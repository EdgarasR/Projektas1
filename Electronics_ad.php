<?php
require_once "connections.php";

function getSingleAd($adId)
{
    $result = false;

    $ads = require 'Electronics.php';

    foreach($ads as $ad){
        if($ad['id'] == $adId){
            $result = $ad;
            continue;
        }
    }

    return $result;
}

function getSingle()
{

    if (isset($_GET['ad_id'])) {
        $adId = $_GET['ad_id'];
      
        $ad = getElectronicsAd($adId);
        if($ad['type'] == 'TV'){
            $div = "<div class='row' style='margin-top: 10px;'>
                        <div class='col-md-4 divs'><img src='{$ad['img']}'></div>
                            <div class='col-md-6 divs'>
                                <p>
                                <span>Gamintojas:</span> {$ad['title']}</br>
                                <span>Modelis:</span> {$ad['model']}</br>
                                <span>Įstrižainė</span> {$ad['screen']} cm.</br>
                                <span>Skiriamoji geba:</span> {$ad['resolution']}</br>
                                ------------------------------</br>
                                <span>Aprašymas:</span></br>
                                {$ad['long_description']}
                                </p>
                            </div>
                    </div>
                    <div id='price'><h1>Kaina: {$ad['price']} Eur.</h1>
                    <a href='delete_e_ad.php?ad_id={$ad['id']}'><button class='btn btn-dark'>Panaikinti skelbimą</button></a>
                    <a href='update_e_form.php?ad_id={$ad['id']}'><button class='btn btn-dark'>Koreguoti skelbimą</button></a></div>";
        
            return $div;
        }else{
            $div = "<div class='row' style='margin-top: 10px;'>
                        <div class='col-md-4 divs'><img src='{$ad['img']}'></div>
                            <div class='col-md-6 divs'>
                                <p>
                                <span>Gamintojas:</span> {$ad['title']}</br>
                                <span>Modelis:</span> {$ad['model']}</br>
                                <span>Procesorius:</span> {$ad['cpu']}</br>
                                <span>Vaizdo plokštė:</span> {$ad['gpu']}</br>
                                ------------------------------</br>
                                <span>Aprašymas:</span></br>
                                {$ad['long_description']}
                                </p>
                            </div>
                    </div>
                    <div id='price'><h1>Kaina: {$ad['price']} Eur.</h1>
                    <a href='delete_e_ad.php?ad_id={$ad['id']}'><button class='btn btn-dark'>Panaikinti skelbimą</button></a>
                    <a href='update_e_form.php?ad_id={$ad['id']}'><button class='btn btn-dark'>Koreguoti skelbimą</button></a></div>";
        
            return $div;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="CSS/Main.css" rel="stylesheet">
    <link href="CSS/Navi.css" rel="stylesheet">
    <link href="CSS/Electronics_ad.css" rel="stylesheet">
    <link href="CSS/BackgroundE.css" rel="stylesheet">
</head>

<body>
    <header>
        <?php include_once 'Navi.php'; ?>
    </header>
    <main>
        <?php echo getSingle(); ?>
    </main>
</body>

</html>