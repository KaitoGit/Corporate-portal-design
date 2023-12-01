<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'PHPLiang/headPartHR.php'; ?>
    <?php include 'PHPLiang/databaseHR.php'; ?>
    <?php include 'PHPLiang/resultTransactionSetHR.php'; ?>
</head>
<body>
<canvas id="my_canvas"></canvas>
    <header><?php include 'PHPLiang/headerHR.php'; ?></header>
    <h2> These are the transactions </h2>
    <h3> This is the number of transactions: <?php echo $numHR ?></h3>
    <table>
        <tr><th>id</th><th>client</th><th>good</th><th>quantity</th><th>cost</th></tr>
        <?php include 'PHPLiang/tableTransactionHR.php'; ?>
    </table>
    <footer><?php include 'PHPLiang/footerHR.php'; ?></footer>
</body>
</html>
<script src="JSLiang/particle.min.js"></script>
<script>

    particle.init('my_canvas');
</script>