<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naujas telefono skelbimas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="CSS/Main.css" rel="stylesheet">
    <link href="CSS/Navi.css" rel="stylesheet">
    <link href="CSS/New_ad.css" rel="stylesheet">
    <link href="CSS/BackgroundE.css" rel="stylesheet">
</head>
<body>
    <header>
        <?php include_once 'Navi.php'; ?>
    </header>
    <main>
    <section>
            <?php
            if (isset($_GET['error'])) {
                echo  $_GET['error'];
            }
            ?>
        </section>
        <section>
            <form action='Create_electronic.php' method="POST">
                <label>Gamintojas</label>
                <input placeholder="Įrašykite gamintoją" type="text" name='title'>

                <label>Modelis</label>
                <input placeholder="Įrašykite modelį" type="text" name='model'>

                <label>Nuotrauka</label>
                <input placeholder="Įrašykite nuotraukos linką" type="text" name='img'>

                <label>Kaina</label>
                <input placeholder="Įrašykite kainą" type="text" name='price'>

                <label>Ekrano įstrižainė</label>
                <input placeholder="Įrašykite ekrano dydį" type="text" name='screen'>

                <label>Procesorius</label>
                <input placeholder="Įrašykite procesoriaus tipą" type="text" name='cpu'>

                <label>Vaizdo plokštė</label>
                <input placeholder="Įrašykite vaizdo plokštės tipą" type="text" name='gpu'>

                <label>Trumpas aprašymas</label>
                <textarea placeholder="Įrašykite trumpą aprašymą" type="text" name='short_description' rows='4' maxlength="1000"></textarea>

                <label>Pilnas aprašymas</label>
                <textarea placeholder="Įrašykite pilną aprašymą" type="text" name='long_description' rows='4' maxlength="1000"></textarea>

                <input type='submit' value='Įkelti skelbimą'>
            </form>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>