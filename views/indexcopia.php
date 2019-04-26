<!DOCTYPE html>
<html lang="en">
<?php
require_once '../DAO/keyDAO.php'
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>List</h1>

    <table>
        <tr>
            <th>Letter
            </th>
            <th>Letter Key
            </th>
        </tr>
        <tr>
        <?php
            foreach (keyDAO::searchLetter('A') as $row):
        ?>

        <td>
            <?= $row[1] ?>
        </td>
        <td>
            <?= $row[2] ?>
        </td>
        </tr>

        <?php endforeach; ?>

    </table>
</body>

</html>