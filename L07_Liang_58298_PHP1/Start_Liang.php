<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'PHP_HR\headPartHTMLHR.php' ?>
    </head>
<body onload="startStart()">
    <nav>
    <?php include 'PHP_HR\navHR.php' ?>
    </nav>
<header>
    <?php include 'PHP_HR\headerHR.php' ?>
</header>
<article>
    <?php include 'PHP_HR\articleStartHR.php' ?>
</article>
<form action="Register_Liang.php" method="post">
    <table>
        <tr><td>Name:</td><td><input type="text" name="name"></td></tr>
        <tr><td>Surname:</td><td><input type="text" name="surname"></td></tr>
        <tr><td>Age:</td><td><input type="number" name="age"></td></tr>
        <tr><td>Town:</td><td><select id="selectTown" name="town"></select></td></tr>
        <tr><td></td><td><input type="submit" value="Submit"></td></tr>
    </table>
</form>
<footer><?php include 'PHP_HR\footerHR.php' ?></footer>
</body>
</htm1>
