<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../PHP_General_include_HR/headPartHR.php'; ?>
    <?php include '../PHP_DB_include_HR/databaseHR.php'; ?>
    <?php include '../PHP_ResulSet_include_HR/resultSetDepartmentHR.php'; ?>
</head>

<body>
    <canvas id="my_canvas"></canvas>
    <header>
        <?php include '../PHP_General_include_HR/headerHR.php'; ?>
    </header>

    <h2> We have such Departments </h2>
    <h3> This is the number of Departments: <?php echo $numHR ?></h3>
    <table>
        <tr><th>id</th><th>Department</th><th>No of employees</th></tr>
        <?php include '../PHP_Tables_include_HR/tableDepartmentHR.php'; ?>
    </table>
    
    <?php include '../PHP_General_include_HR/footerHR.php'; ?>
</body>

</html>
<?php include '../PHP_General_include_HR/JSHR.php'; ?>