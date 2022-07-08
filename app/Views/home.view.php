<!DOCTYPE html>
<html lang="de">
<head>
    <base href="<?= ROOT_URL ?>/">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/app.css">
    <title>Startseite</title>
</head>
<body>
    <div class="Title">Auftragsmanagement-Software</div>
    <div class="Container-Main">
        <a href="/input"><button class="Button-Register">Neuen Eintrag erfassen</button></a>
        <a href="/list"><button class="Button-List">Einträge darstellen lassen</button></a>
        <a href="/incrementElapsedDays"><button class="Button-List">Vergangene Tage Inkrementieren</button></a>
    </div>
    <script src="public/js/app.js"></script>
</body>
</html>
