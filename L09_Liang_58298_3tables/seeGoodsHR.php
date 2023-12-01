<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'PHPLiang/headPartHR.php'; ?>
    <?php include 'PHPLiang/databaseHR.php'; ?>
    <?php include 'PHPLiang/resultGoodsSetHR.php'; ?>
</head>
<body>
<canvas id="my_canvas"></canvas>
    <header><?php include 'PHPLiang/headerHR.php'; ?></header>
    <h2> These are the goods we have </h2>
    <h3> This is the number of goods: <?php echo $numHR ?></h3>
    <table>
        <tr><th>id</th><th>name</th><th>price</th></tr>
        <?php include 'PHPLiang/tableGoodsHR.php'; ?>
    </table>
    <footer><?php include 'PHPLiang/footerHR.php'; ?></footer>
</body>
</html>
<script src="JSLiang/particle.min.js"></script>
<script>

    particle.init('my_canvas');
</script>