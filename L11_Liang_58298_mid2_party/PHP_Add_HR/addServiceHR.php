<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../PHP_General_include_HR/headPartHR.php'; ?>
    <?php include '../PHP_DB_include_HR/databaseHR.php'; ?>
    <?php include '../PHP_ResulSet_include_HR/resultSetServiceHR.php'; ?>


</head>

<body>
    <canvas id="my_canvas"></canvas>
    <header>
        <?php include '../PHP_General_include_HR/headerHR.php'; ?>
    </header>
    <h3> This is the number of Our Party: <?php echo $numHR ?></h3>

    <article>
        Adding New Party
    </article>
    <form action="../PHP_Start_HR/startLiang.php" method="POST">
        <table>
            <tr><td></td><td>Enter</td></tr>
            <tr><td>Service name</td><td><input type="text" class="transparent-input" name="service_name"></td></tr>
            <tr><td>description</td><td><input type="text" class="transparent-input" name="description"></td></tr>
            <tr><td></td><td><input type="submit" value="Save"></td></tr>
        </table>
    </form>

    
    <?php include '../PHP_General_include_HR/footerHR.php'; ?>
</body>

</html>
<?php include '../PHP_General_include_HR/JSHR.php'; ?>