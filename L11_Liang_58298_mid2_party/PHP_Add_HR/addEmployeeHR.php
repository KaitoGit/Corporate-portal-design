<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../PHP_General_include_HR/headPartHR.php'; ?>
    <?php include '../PHP_DB_include_HR/databaseHR.php'; ?>
    <?php include '../PHP_ResulSet_include_HR/resultSetEmployeeHR.php'; ?>



</head>

<body>
    <canvas id="my_canvas"></canvas>
    <header>
        <?php include '../PHP_General_include_HR/headerHR.php'; ?>
    </header>
    <h3> This is the number of Employees: <?php echo $numHR ?></h3>

    <article>
        Adding New Employees
    </article>
    <form action="../PHP_Start_HR/startLiang.php" method="POST">
        <table>
            <tr><td>Service</td><td>Department</td><td>Name</td><td>E-mail</td></tr>
            <tr>
                <td>
                    <select name="service_id">
                        <?php include '../PHP_Select_include_HR/selectServiceHR.php'; ?>
                    </select>
                </td>
                <td>
                    <select name="department_id">
                        <?php include '../PHP_Select_include_HR/selectDepartmentHR.php'; ?>
                    </select>
                </td>
                <td><input type="text" class="transparent-input" name="employee_name"></td>
                <td><input type="text" class="transparent-input" name="employee_email"></td>
            </tr>
            <tr><td></td><td></td><td><input type="submit" value="Save"></td><td></td></tr>
        </table>
    </form>


    
    <?php include '../PHP_General_include_HR/footerHR.php'; ?>
</body>

</html>
<?php include '../PHP_General_include_HR/JSHR.php'; ?>