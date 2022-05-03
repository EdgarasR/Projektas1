<?php
require_once "connections.php";

function getSingleAd($adId)
{
    $result = false;

    $ads = require 'Appliances.php';

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
      
        $ad = getApplianceAd($adId);
        if($ad['appliance_type'] == 'freezer'){
            $div = "<div class='row' style='margin-top: 10px;'>
                        <div class='col-md-4 divs'><img src='{$ad['img']}'></div>
                            <div class='col-md-6 divs'>
                                <p>
                                <span>Gamintojas:</span> {$ad['name']}</br>
                                <span>Modelis:</span> {$ad['model']}</br>
                                <span>Tipas:</span> {$ad['type']}</br>
                                <span>Šaldiklis:</span> {$ad['specific']}</br>
                                ------------------------------</br>
                                <span>Aprašymas:</span></br>
                                {$ad['long_description']}
                                </p>
                            </div>
                    </div>
                    <div id='price'><h1>Kaina: {$ad['price']} Eur.</h1>
                    <a href='delete_a_ad.php?ad_id={$ad['id']}'><button class='btn btn-dark'>Panaikinti skelbimą</button></a>
                    <a href='update_a_form.php?ad_id={$ad['id']}'><button class='btn btn-dark'>Koreguoti skelbimą</button></a></div>";
        
            return $div;
        }else if($ad['appliance_type'] == 'vacuum'){

            $div = "<div class='row' style='margin-top: 10px;'>
                        <div class='col-md-4 divs'><img src='{$ad['img']}'></div>
                            <div class='col-md-6 divs'>
                                <p>
                                <span>Gamintojas:</span> {$ad['name']}</br>
                                <span>Modelis:</span> {$ad['model']}</br>
                                <span>Tipas:</span> {$ad['type']}</br>
                                <span>Valdymas:</span> {$ad['specific']}</br>
                                ------------------------------</br>
                                <span>Aprašymas:</span></br>
                                {$ad['long_description']}
                                </p>
                            </div>
                    </div>
                    <div id='price'><h1>Kaina: {$ad['price']} Eur.</h1>
                    <a href='delete_a_ad.php?ad_id={$ad['id']}'><button class='btn btn-dark'>Panaikinti skelbimą</button></a>
                    <a href='update_a_form.php?ad_id={$ad['id']}'><button class='btn btn-dark'>Koreguoti skelbimą</button></a></div>";
        
            return $div;
        }else if($ad['appliance_type'] == 'coffee'){

            $div = "<div class='row' style='margin-top: 10px;'>
                        <div class='col-md-4 divs'><img src='{$ad['img']}'></div>
                            <div class='col-md-6 divs'>
                                <p>
                                <span>Gamintojas:</span> {$ad['name']}</br>
                                <span>Modelis:</span> {$ad['model']}</br>
                                <span>Pieno sistema:</span> {$ad['type']}</br>
                                <span>Valdymas:</span> {$ad['specific']}</br>
                                ------------------------------</br>
                                <span>Aprašymas:</span></br>
                                {$ad['long_description']}
                                </p>
                            </div>
                    </div>
                    <div id='price'><h1>Kaina: {$ad['price']} Eur.</h1>
                    <a href='delete_a_ad.php?ad_id={$ad['id']}'><button class='btn btn-dark'>Panaikinti skelbimą</button></a>
                    <a href='update_a_form.php?ad_id={$ad['id']}'><button class='btn btn-dark'>Koreguoti skelbimą</button></a></div>";
        
            return $div;
        }else{
            $div = "<div class='row' style='margin-top: 10px;'>
                        <div class='col-md-4 divs'><img src='{$ad['img']}'></div>
                            <div class='col-md-6 divs'>
                                <p>
                                <span>Gamintojas:</span> {$ad['name']}</br>
                                <span>Modelis:</span> {$ad['model']}</br>
                                ------------------------------</br>
                                <span>Aprašymas:</span></br>
                                {$ad['long_description']}
                                </p>
                            </div>
                    </div>
                    <div id='price'><h1>Kaina: {$ad['price']} Eur.</h1>
                    <a href='delete_a_ad.php?ad_id={$ad['id']}'><button class='btn btn-dark'>Panaikinti skelbimą</button></a>
                    <a href='update_a_form.php?ad_id={$ad['id']}'><button class='btn btn-dark'>Koreguoti skelbimą</button></a></div>";
        
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
    <link href="CSS/Appliance_ad.css" rel="stylesheet">
    <link href="CSS/BackgroundA.css" rel="stylesheet">
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