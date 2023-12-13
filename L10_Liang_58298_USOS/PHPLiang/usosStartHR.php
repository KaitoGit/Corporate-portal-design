<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../PHP_includes_GeneralLiang/headPartHR.php'; ?>

    <?php include '../PHP_includes_PostLiang/checkCompanyHR.php'; ?>
    <?php include '../PHP_includes_RegisterLiang/makeCompanyEntryHR.php'; ?>

    <?php include '../PHP_includes_PostLiang/checkDepartmentHR.php'; ?>
    <?php include '../PHP_includes_RegisterLiang/makeDepartmentEntryHR.php'; ?>

    <?php include '../PHP_includes_PostLiang/checkEmployeeHR.php'; ?>
    <?php include '../PHP_includes_RegisterLiang/makeEmployeeEntryHR.php'; ?>

    <?php include '../PHP_includes_PostLiang/checkDeleteCompanyHR.php'; ?>
    <?php include '../PHP_includes_DeleteLiang/makeDeleteCompanyHR.php'; ?>

    <?php include '../PHP_includes_PostLiang/checkDeleteDepartmentHR.php'; ?>
    <?php include '../PHP_includes_DeleteLiang/makeDeleteDepartmentHR.php'; ?>

    <?php include '../PHP_includes_PostLiang/checkDeleteEmployeeHR.php'; ?>
    <?php include '../PHP_includes_DeleteLiang/makeDeleteEmployeeHR.php'; ?>

</head>

<body>
    <canvas id="my_canvas"></canvas>
    <header>
        <?php include '../PHP_includes_GeneralLiang/headerHR.php'; ?>
    </header>

    <article>
        <?php include '../PHP_includes_GeneralLiang/articleHR.php'; ?>
    </article>
    
    <?php include '../PHP_includes_GeneralLiang/footerHR.php'; ?>
</body>

</html>
<?php include '../PHP_includes_GeneralLiang/JSHR.php'; ?>