<?php
require_once "connections.php";

function getList()
{
    $div = '';

    $ads = getElectronicsAds();
      
    foreach ($ads as $ad) {
        $id = "{$ad['id']}";
        $div .= "<div id='{$id}' class='row' style='margin-top: 10px;'>
                    <div class='col-md-2 divs'>
                        <a href='Electronics_ad.php?ad_id={$ad['id']}'>
                        <img src='{$ad['img']}'>
                        </a>
                    </div>
                        <div class='col-md-10 divs'>
                            <h3>{$ad['title']}</h3>
                            <p>{$ad['short_description']}</p>
                            <h4>Kaina: {$ad['price']} Eur.</h4>
                        </div>
                    </div>";
    }

    return $div;
}
?>

<!DOCTYPE hmtl>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elektronikos prekių skelbimai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="CSS/Main.css" rel="stylesheet">
    <link href="CSS/Navi.css" rel="stylesheet">
    <link href="CSS/Electronics.css" rel="stylesheet">
    <link href="CSS/BackgroundE.css" rel="stylesheet">
</head>
<body>
    <header>
        <?php include_once 'Navi.php'; ?>
    </header>
    <main>
            <h1>Elektronikos prekių skelbimai</h1>
            <div class="container-fluid">
                <?php echo getList(); ?>
            </div>
    </main>


    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>