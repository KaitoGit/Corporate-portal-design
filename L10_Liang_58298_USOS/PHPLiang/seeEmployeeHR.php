<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../PHP_includes_GeneralLiang/headPartHR.php'; ?>
    <?php include '../PHP_includes_DBLiang/databaseHR.php'; ?>
    <?php include '../PHP_includes_DBLiang/resultSetEmployeeHR.php'; ?>
</head>

<body>
    <canvas id="my_canvas"></canvas>
    <header>
        <?php include '../PHP_includes_GeneralLiang/headerHR.php'; ?>
    </header>

    <h2> We have such Employees </h2>
    <h3> This is the number of Employees: <?php echo $numHR ?></h3>
    <table>
        <tr><th>id</th><th>Employee name</th><th>email</th><th>Company</th><th>Area</th><th>Department</th><th>No of employees</th></tr>
        <?php include '../PHP_includes_TablesLiang/tableEmployeeHR.php'; ?>
    </table>
    
    <?php include '../PHP_includes_GeneralLiang/footerHR.php'; ?>
</body>

</html>
<?php include '../PHP_includes_GeneralLiang/JSHR.php'; ?>