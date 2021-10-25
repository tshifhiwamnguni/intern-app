<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="..//css/red.css">
</head>
<body>
<?php require '..//backend/outout.php' ?>
    <form action="results.php" method="post">
        <table>
            <tr>
                <td>Total number  of surveys </td> <td><?php echo($total) ?></td>
            </tr>
            <tr>
                <td>average age </td> <td><?php echo($_aveAge) ?></td>
            </tr>
            <tr>
                <td>oldest person who participated in survey </td> <td><?php echo($_oldest) ?></td>
            </tr>
            <tr>
                <td>youngest person who participated in survey </td> <td><?php echo($_youngest) ?></td>
            </tr>
        </table>
        <br>
        <table>
            <tr>
                <td>percentage od people that like pizza </td> <td><?php echo($PizzaPercentage) ?></td>
            </tr>
            <tr>
                <td>percentage od people that like pasta  </td> <td><?php echo($pastaPercentage) ?></td>
            </tr>
            <tr>
                <td>percentage od people that like pap and vors </td> <td><?php echo($PvPercentage) ?></td>
            </tr>
        
        </table>
        <BR></BR>
        <table>
            <tr>
                <td>people who like to eat out</td> <td><?php echo($_aveEatOut)?></td>
            </tr>
            <tr>
                <td>people that like to watch movies </td> <td><?php echo($_aveMovie) ?></td>
            </tr>
            <tr>
                <td>people lik e to watch TV </td> <td> <?php echo($_aveTv)?></td>
            </tr>
            <tr>
                <td>people like to listen to radio </td> <td> <?php echo($_aveRadio)?></td>
            </tr>
        </table>
        <button name="submit" type="submit">OK</button>
    </form>

 
</body>
</html>