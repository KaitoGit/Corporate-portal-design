<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../PHP_includes_GeneralLiang/headPartHR.php'; ?>
    <?php include '../PHP_includes_DBLiang/databaseHR.php'; ?>
    <?php include '../PHP_includes_DBLiang/resultSetCompanyHR.php'; ?>
</head>

<body>
    <canvas id="my_canvas"></canvas>
    <header>
        <?php include '../PHP_includes_GeneralLiang/headerHR.php'; ?>
    </header>

    <h2> We have such Company </h2>
    <h3> This is the number of Company: <?php echo $numHR ?></h3>
    <table>
        <tr><th>id</th><th>Company name</th><th>area</th></tr>
        <?php include '../PHP_includes_TablesLiang/tableCompanyHR.php'; ?>
    </table>
    
    <?php include '../PHP_includes_GeneralLiang/footerHR.php'; ?>
</body>

</html>
<?php include '../PHP_includes_GeneralLiang/JSHR.php'; ?>