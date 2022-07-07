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
                    <?= $Order->ID?>
                </td>
            </tr>
            <tr>
                <td>Name:</td>
                <td>
                    <input type="text" value ="<?= $Order->name?>" required>
                </td>
            </tr>
            <tr>
                <td>Email:</td>
                <td>
                    <input type="text" value ="<?= $Order->email?>" required>
                </td>
            </tr>
            <tr>
                <td>Telefon:</td>
                <td>
                    <input type="text" value ="<?= $Order->tel?>">
                </td>
            </tr>
            <tr>
                <td>Mengen-Kategorie:</td>
                <td>
                    <select value ="<?= $Order->category?>" name="" id="">
                        <option value="0" <?php echo 0 == $Order->category ? "selected=\"true\"" : ""?>>0-5kg</option>
                        <option value="1" <?php echo 1 == $Order->category ? "selected=\"true\"" : ""?>>5-10kg</option>
                        <option value="2" <?php echo 2 == $Order->category ? "selected=\"true\"" : ""?>>10-15kg</option>
                        <option value="3" <?php echo 3 == $Order->category ? "selected=\"true\"" : ""?>>15-20kg</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Frucht:</td>
                <td>
                    <input type="text" value =<?= $Order->GetFruitStringByID($Order->fruitID)?> required>
                </td>
            </tr>
            <tr> 
                <td>Dörr-Status:</td>
                <td> 
                    <input type="checkbox" value="true" <?php echo $Order->isDried ? "Checked=\"checked\"ecked" : "" ?>required>
                </td>
            </tr>
        </table>
        <button type="submit"><?= $name?></button>
        <input type="reset" value="abbrechen"><br>
    </form>
    <button >Zurück</button>
</body>
</html>