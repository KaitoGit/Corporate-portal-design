<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'PHPLiang/headPartHR.php'; ?>
    <?php include 'PHPLiang/databaseHR.php'; ?> 
    <?php include 'PHPLiang/resultClientSetHR.php'; ?> 
</head>
<body>
    <canvas id="my_canvas"></canvas>
    <header>
        <?php include 'PHPLiang/headerHR.php'; ?>
    </header>
    <article>
        Adding New Clients
    </article>
    <form action="homePageHR.php" method="POST">
        <table>
            <tr><td></td><td>Enter</td></tr>
            <tr><td>name</td><td><input type="text" class="transparent-input" name="client_name"></td></tr>
            <tr><td>email</td><td><input type="text" class="transparent-input" name="client_email"></td></tr>
            <tr><td>join date</td><td><input type="date" class="transparent-input" name="client_date"></td></tr>
            <tr><td>password</td><td><input type="text" class="transparent-input" name="client_password"></td></tr>
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