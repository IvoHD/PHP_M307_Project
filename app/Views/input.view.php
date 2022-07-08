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
    <form action="<?=$buttonAction?>" method="POST">
        <fieldset>
            <legend>Zum Kunden</legend>
            <table>
                <?php if(isset($order->name)) 
                echo "
                    <tr>
                        <td>ID:</td>
                        <td> 
                            {$order->id}
                        </td>
                    </tr>
                    ";
                    ?>
                <tr>
                    <td>Name:</td>
                    <td>
                        <input id="name" name="name" type="text" value ="<?php echo isset($order->name) ? $order->name : "" ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td>
                        <input id="email" name="email" type="text" value ="<?php echo isset($order->email) ? $order->email : ""?>" required>
                    </td>
                </tr>
                <tr>
                    <td>Telefon:</td>
                    <td>
                        <input id="tel" name="tel" type="text" value ="<?php echo isset($order->name) ? $order->tel : ""?>">
                    </td>
                </tr>
            </table>
        </fieldset>
        <fieldset>
            <legend>Zum Auftrag</legend>
            <table>
                <tr>
                    <td>Mengen-Kategorie:</td>
                    <td>
                        <select id="category" name="category">
                            <option value="0" <?php echo isset($order->category) && $order->category == 0 ? "selected=\"true\"" : ""?>>0-5kg</option>
                            <option value="1" <?php echo isset($order->category) && $order->category == 1 ? "selected=\"true\"" : ""?>>5-10kg</option>
                            <option value="2" <?php echo isset($order->category) && $order->category == 2 ? "selected=\"true\"" : ""?>>10-15kg</option>
                            <option value="3" <?php echo isset($order->category) && $order->category == 3 ? "selected=\"true\"" : ""?>>15-20kg</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Frucht:</td>
                    <td>
                        <select id="fruit" name="fruit"></select>
                            <input id="fruit" name="fruit" type="text" value ="<?php echo isset($order->category) ? $order->GetFruitStringByID($order->fruitID) : ""?>" required>
                    </td>
                </tr>
                <tr>
                <tr> 
                    <td>Dörr-Status:</td>
                    <td> 
                        <input id="isDried" name="isDried" type="checkbox" value="true" <?php if(isset($order->isDried)) echo $order->isDried ? "Checked=\"checked\"" : ""  ?>>
                    </td>
                </tr>
            </table>
            </fieldset>
        <button id="submit" type="submit"><?= $name?></button>
        <input type="reset" value="Zurücksetzten"><br>
    </form>
    <a href="<?=$backButtonAction?>">
        <button>Zurück</button>
    </a>

    <script src="public/js/app.js"></script>
</body>
</html> 