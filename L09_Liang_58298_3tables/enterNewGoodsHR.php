<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'PHPLiang/headPartHR.php'; ?>
    <?php include 'PHPLiang/databaseHR.php'; ?>   
    <?php include 'PHPLiang/resultGoodsSetHR.php'; ?> 
</head>
<body>
    <canvas id="my_canvas"></canvas>
    <header>
        <?php include 'PHPLiang/headerHR.php'; ?>
    </header>
    <article>
        Adding New Goods
    </article>
    <form action="homePageHR.php" method="POST">
        <table>
            <tr><td></td><td>Enter</td></tr>
            <tr><td>Good Name</td><td><input type="text" class="transparent-input" name="good_name"></td></tr>
            <tr>
                <td>Good Price</td>
                <td><input type="number" step="0.01" class="transparent-input" name="good_price"></td>
            </tr>
            <tr><td></td><td><input type="submit" value="Save"></td></tr>
        </table>
    </form>
    <footer>
        <?php include 'PHPLiang/footerHR.php'; ?>
    </footer>
</body>
</html>
<script src="JSLiang/particle.min.js"></script>
<script>
    particle.init('my_canvas');
</script>