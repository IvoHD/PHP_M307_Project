<!DOCTYPE html>
<html lang="de">
<head>
    <base href="<?= ROOT_URL ?>/">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/app.css">
    <title>Neuen Eintrag erfassen</title>
</head>
<body>
<h1>Registrieren</h1>
    <form action="" method="POST">
        <table>
            <tr>
                <td>Name:</td>
                <td>
                    <input type="text" required>
                </td>
            </tr>
            <tr>
                <td>Email:</td>
                <td>
                    <input type="text" required>
                </td>
            </tr>
            <tr>
                <td>Telefon:</td>
                <td>
                    <input type="text">
                </td>
            </tr>
            <tr>
                <td>Frucht:</td>
                <td>
                    <input type="text" required>
                </td>
            </tr>
            <tr>
                <td>Mengen-Kategorie:</td>
                <td>
                    <input type="text" required>
                </td>
            </tr>
            <tr>
                <td>Dörr-Status:</td>
                <td> 
                    <input type="text" required>
                </td>
            </tr>
        </table>
        <button type="submit">Editieren</button>
        <button>Abbrechen</button><br>
        <button>Zurück</button>
    </form>
</body>
</html>