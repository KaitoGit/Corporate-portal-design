<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'PHP_HR\headPartHTMLHR.php' ?>
        <?php include 'PHP_HR\pricesHR.php' ?>
    </head>
<body>
    <nav>
    <?php include 'PHP_HR\backHR.php' ?>
    </nav>
<header>
    <?php include 'PHP_HR\headerHR.php' ?>
</header>
<article>
    <?php include 'PHP_HR\articleChargeHR.php' ?>
</article>
<table>
    <tr><th>Product</th><th>Quantity</th><th>Cost</th></tr>
    <tr>
        <td><?php echo $_POST["prod1"] ?></td>
        <td><td><?php echo $_POST["no1"] ?></td></td>
        <td><?php echo $_POST["no1"]*$priceHR[$_POST["prod1"]] ?></td><td>$</td>
    </tr>
    <tr>
        <td><?php echo $_POST["prod2"] ?></td>
        <td><td><?php echo $_POST["no2"] ?></td></td>
        <td><?php echo $_POST["no2"]*$priceHR[$_POST["prod2"]] ?></td><td>$</td>
    </tr>
    <tr>
        <td><?php echo $_POST["prod3"] ?></td>
        <td><td><?php echo $_POST["no3"] ?></td></td>
        <td><?php echo $_POST["no3"]*$priceHR[$_POST["prod3"]] ?></td><td>$</td>
    </tr>
    
</table>
<footer><?php include 'PHP_HR\footerHR.php' ?></footer>
</body>
</htm1>
