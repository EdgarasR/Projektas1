<!DOCTYPE hmtl>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naujas skelbimas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/Main.css">
    <link rel="stylesheet" href="CSS/New_ad.css">
    <link rel="stylesheet" href="CSS/Navi.css">
    <link href="CSS/BackgroundE.css" rel="stylesheet">
</head>
<body>
    <header><?php include_once 'navi.php'; ?></header>
    <main>
        <h1 class="display-3">Pasirinkite, kokį skelbimą norite sukurti</h1>
        <a class="btn btn-primary bnt-lg btn-block" href="Create_pc.php" role="button">Kompiuteris</a>
        <a class="btn btn-primary bnt-lg btn-block" href="Create_tv.php" role="button">Televizorius</a>
        <a class="btn btn-primary bnt-lg btn-block" href="Create_phone.php" role="button">Telefonas</a>
    </main>
</body>
</html>