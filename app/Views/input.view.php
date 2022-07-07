<!DOCTYPE html>
<html lang="de">
<head>
    <base href="<?= ROOT_URL ?>/">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/app.css">
    <title><?=$name?></title>
</head>
<body>
    <h1><?=$name?></h1>
    <form action="" method="POST">
        <table>
            <tr>
                <td>ID:</td>
                <td> 
                    <?php echo isset($Order->name) ? $Order->ID : ""?>
                </td>
            </tr>
            <tr>
                <td>Name:</td>
                <td>
                    <input id="name" type="text" value ="<?php echo isset($Order->name) ? $Order->name : "" ?>" required>
                </td>
            </tr>
            <tr>
                <td>Email:</td>
                <td>
                    <input id="email" type="text" value ="<?php echo isset($Order->email) ? $Order->email : ""?>" required>
                </td>
            </tr>
            <tr>
                <td>Telefon:</td>
                <td>
                    <input id="tel" type="text" value ="<?php echo isset($Order->name) ? $Order->tel : ""?>">
                </td>
            </tr>
            <tr>
                <td>Mengen-Kategorie:</td>
                <td>
                    <select id="category" name="category">
                        <option value="0" <?php echo isset($Order->category) && $Order->category == 0 ? "selected=\"true\"" : ""?>>0-5kg</option>
                        <option value="1" <?php echo isset($Order->category) && $Order->category == 1 ? "selected=\"true\"" : ""?>>5-10kg</option>
                        <option value="2" <?php echo isset($Order->category) && $Order->category == 2 ? "selected=\"true\"" : ""?>>10-15kg</option>
                        <option value="3" <?php echo isset($Order->category) && $Order->category == 3 ? "selected=\"true\"" : ""?>>15-20kg</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Frucht:</td>
                <td>
                    <input id="fruit" type="text" value ="<?php echo isset($Order->category) ? $Order->GetFruitStringByID($Order->fruitID) : ""?>" required>
                </td>
            </tr>
            <tr>
            <tr> 
                <td>Dörr-Status:</td>
                <td> 
                    <input id="" type="checkbox" value="true" <?php if(isset($Order->isDried)) echo $Order->isDried ? "Checked=\"checked\"" : ""  ?>>
                </td>
            </tr>
        </table>
        <a href="<?= $buttonAction ?>"><button id="submit" type="submit"><?= $name?></button></a>
        <input type="reset" value="Zurücksetzten"><br>
    </form>
    <button>Zurück</button>

    <script src="public/js/app.js"></script>
</body>
</html> 