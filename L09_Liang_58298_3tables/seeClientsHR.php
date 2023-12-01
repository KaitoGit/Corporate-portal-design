<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'PHPLiang\headPartHR.php'; ?>
    <?php include 'PHPLiang\databaseHR.php'; ?>
    <?php include 'PHPLiang\resultClientSetHR.php'; ?>
</head>
<body>
<canvas id="my_canvas"></canvas>
    <header><?php include 'PHPLiang\headerHR.php'; ?></header>
    <h2> We have such clients </h2>
    <h3> This is the number of customers: <?php echo $numHR ?></h3>
    <table>
        <tr><th>clients id</th><th>name</th><th>email</th><th>join date</th><th>password</th></tr>
        <?php include 'PHPLiang\tableClientHR.php'; ?>
    </table>
    <footer><?php include 'PHPLiang\footerHR.php'; ?></footer>
</body>
</html>
<script src="JSLiang/particle.min.js"></script>
<script>

    particle.init('my_canvas');
</script>