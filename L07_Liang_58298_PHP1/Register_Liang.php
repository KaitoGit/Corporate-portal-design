<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'PHP_HR\headPartHTMLHR.php' ?>
    </head>
<body onload="startOrder()">
<nav>
    <?php include 'PHP_HR\navHR.php' ?>
</nav>
<header>
    <?php include 'PHP_HR\headerHR.php' ?>
</header>
<article>
    <?php include 'PHP_HR\articleOrderHR.php' ?>
</article>
<table>
    <tr><td>name:</td><td><?php echo isset($_POST["name"])?$_POST["name"]:"unkown" ?></td></tr>
    <tr><td>surname:</td><td><?php echo isset($_POST["surname"])?$_POST["surname"]:"unkown" ?></td></tr>
    <tr><td>age:</td><td><?php echo isset($_POST["age"])?$_POST["age"]:"unkown" ?></td></tr>
    <tr><td>Town:</td><td><?php echo isset($_POST["town"])?$_POST["town"]:"unkown" ?></td></tr>
</table>
<form action="Payment_Liang.php" method="post">
    <table>
        <tr>
            <td>Product No.1</td>
            <td><select id="selectProd1" name="prod1"></select></td>
            <td><select id="selectNo1" name="no1"></select></td>
        </tr>
        <tr>
            <td>Product No.2</td>
            <td><select id="selectProd2" name="prod2"></select></td>
            <td><select id="selectNo2" name="no2"></select></td>
        </tr>
        <tr>
            <td>Product No.3</td>
            <td><select id="selectProd3" name="prod3"></select></td>
            <td><select id="selectNo3" name="no3"></select></td>
        </tr>
        <tr><td></td><td><input type="submit" value="Submit" name="submit"></td></tr>
    </table>
</form>
<footer><?php include 'PHP_HR\footerHR.php' ?></footer>
</body>
</html>