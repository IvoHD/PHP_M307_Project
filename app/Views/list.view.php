<!DOCTYPE html>
<html lang="de">
<head>
    <base href="<?= ROOT_URL ?>/">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/app.css">
    <title>Einträge anzeigen</title>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>        
            <th>Email</th>
            <th>TelefonNr.</th>
            <th>Kategorie</th>
            <th>Dörrungsstatus</th>
            <th>Tage vergangen</th>
            <th>Furcht</th>
        </tr>
       
        <?php 
            foreach($OrderArray as $Order)
                echo "
                    <tr>
                        <th>{$Order['id']}</th>
                        <th>{$Order['name']}</th>
                        <th>{$Order['email']}</th>
                        <th>{$Order['tel']}</th>
                        <th>{$Order['category']}</th>
                        <th>{$Order['isdried']}</th>
                        <th>{$Order['elapseddays']}</th>
                        <th>{$Order['fruitid']}</th>
                        <th><a href=\"/input?id={$Order['id']}\"><button class=\"\">Editieren</button></a></th>
                    </tr>
                ";
        ?>
    </table>
    <script src="public/js/app.js"></script>
    </div>
</body>
</html>