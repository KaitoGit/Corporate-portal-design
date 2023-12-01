<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'PHPLiang/headPartHR.php'; ?>
    <?php include 'PHPLiang/databaseHR.php'; ?>   
    <?php include 'PHPLiang/resultTransactionSetHR.php'; ?> <!-- 用于加载交易相关的客户和商品数据 -->
</head>
<body>
    <canvas id="my_canvas"></canvas>
    <header><?php include 'PHPLiang/headerHR.php'; ?></header>
    <article>
        Adding New Transactions
    </article>
    <form action="homePageHR.php" method="POST"> 
        <table>
            <tr><td>Client</td><td>Good</td><td>Quantity</td><td>Cost</td></tr>
            <tr>
                <td>
                    <select name="client_id">
                        <?php include 'PHPLiang/selectTransactionClientHR.php'; ?> <!-- 用于显示客户选择项 -->
                    </select>
                </td>
                <td>
                    <select name="good_id">
                        <?php include 'PHPLiang/selectTransactionGoodHR.php'; ?> <!-- 用于显示商品选择项 -->
                    </select>
                </td>
                <td><input type="number" class="transparent-input" name="quantity"></td>
                <td><input type="number" class="transparent-input" step="0.01" name="price"></td>
            </tr>
            <tr><td></td><td></td><td><input type="submit" value="Save"></td><td></td></tr>
        </table>
    </form>
    <footer><?php include 'PHPLiang/footerHR.php'; ?></footer>
</body>
</html>
<script src="JSLiang/particle.min.js"></script>
<script>
    particle.init('my_canvas');
</script>