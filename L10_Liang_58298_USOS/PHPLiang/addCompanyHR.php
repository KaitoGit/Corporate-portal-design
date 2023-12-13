<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../PHP_includes_GeneralLiang/headPartHR.php'; ?>
    <!-- delete部分组件👇 -->
    <?php include '../PHP_includes_DBLiang/databaseHR.php'; ?>
    <?php include '../PHP_includes_DBLiang/resultSetCompanyHR.php'; ?>

</head>

<body>
    <canvas id="my_canvas"></canvas>
    <header>
        <?php include '../PHP_includes_GeneralLiang/headerHR.php'; ?>
    </header>
    <h3> This is the number of Company: <?php echo $numHR ?></h3>

    <article>
        Adding New Company
    </article>
    <form action="./usosStartHR.php" method="POST">
        <table>
            <tr><td></td><td>Enter</td></tr>
            <tr><td>Company name</td><td><input type="text" class="transparent-input" name="company_name"></td></tr>
            <tr><td>area</td><td><input type="text" class="transparent-input" name="area"></td></tr>
            <tr><td></td><td><input type="submit" value="Save"></td></tr>
        </table>
    </form>

    <form action="./usosStartHR.php" method="POST">
            <select name="deleteCompany">
                <?php
                $i=0;
                while ($i < $numHR) {
                    $rsHR->data_seek($i);
                    $row = $rsHR->fetch_assoc();
                    $option = "<option value=".$row["company_id"].">";
                    $option .= $row["company_name"].' - ';
                    $option .= $row["area"];
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