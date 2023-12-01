<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'PHPLiang/headPartHR.php'; ?>
    <?php include 'PHPLiang/checkClientEntryHR.php'; ?>
    <?php include 'PHPLiang/makeClientEntryHR.php'; ?>
    <?php include 'PHPLiang/checkGoodsEntryHR.php'; ?>
    <?php include 'PHPLiang/makeGoodsEntryHR.php'; ?>
    <?php include 'PHPLiang/checkTransactionEntryHR.php'; ?>
    <?php include 'PHPLiang/makeTransactionEntryHR.php'; ?>

</head>
<body>
<canvas id="my_canvas"></canvas>
    <header>
        <?php include 'PHPLiang/headerHR.php'; ?>
    </header>
    <article>
        <?php include 'PHPLiang/articleHR.php'; ?>
    </article>
    <footer>
        <?php include 'PHPLiang/footerHR.php'; ?>
    </footer>
</body>
</html>
<script src="JSLiang/particle.min.js"></script>
<script>
    particle.init('my_canvas');
</script>
