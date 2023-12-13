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
    <h3> This is the number of Employees: <?php echo $numHR ?></h3>

    <article>
        Adding New Company
    </article>
    <form action="./usosStartHR.php" method="POST">
        <table>
            <tr><td>Company</td><td>Department</td><td>Name</td><td>E-mail</td></tr>
            <tr>
                <td>
                    <select name="company_id">
                        <?php include '../PHP_includes_SelectLiang/selectCompanyHR.php'; ?>
                    </select>
                </td>
                <td>
                    <select name="department_id">
                        <?php include '../PHP_includes_SelectLiang/selectDepartmentHR.php'; ?>
                    </select>
                </td>
                <td><input type="text" class="transparent-input" name="employee_name"></td>
                <td><input type="text" class="transparent-input" name="employee_email"></td>
            </tr>
            <tr><td></td><td></td><td><input type="submit" value="Save"></td><td></td></tr>
        </table>
    </form>

    <form action="./usosStartHR.php" method="POST">
            <select name="deleteEmployee">
                <?php
                $i=0;
                while ($i < $numHR) {
                    $rsHR->data_seek($i);
                    $row = $rsHR->fetch_assoc();
                    $option = "<option value=".$row["employee_id"].">";
                    $option .= $row["employee_name"].' - ';
                    $option .= $row["employee_email"];
                    $option .= "</option>";
                    echo $option;
                    $i++;
                }
                ?>
            </select>
            <input type="submit" value="Remove">
    </form>
    
    <?php include '../PHP_includes_GeneralLiang/footerHR.php'; ?>
</body>

</html>
<?php include '../PHP_includes_GeneralLiang/JSHR.php'; ?>