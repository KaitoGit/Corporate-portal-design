<!DOCTYPE html>
<html>
<head>
    <?php include 'PHPLiang\headPartHR.php'; ?>
    <?php include 'PHPLiang\databaseHR.php'; ?>
    <?php include 'PHPLiang\membersResultSetHR.php'; ?>
</head>
<body>
    <header><?php include 'PHPLiang\headerHR.php'; ?></header>
    <article>
    <h3><?php echo "there is ", $numHR , " membership";?><br></h3>
        <h4>We add members<br></h4>
    </article>
    <form action="StartHR.php" method="POST">
        <table>
            <tr><td></td><td>Enter</td></tr>
            <tr><td>Name</td><td><input type="text" name="name"></td></tr>
            <tr><td>Email</td><td><input type="text" name="email"></td></tr>
            <tr><td>Join Date</td><td><input type="date" name="joinDate"></td></tr>
            <tr><td></td><td><input type="submit" value="Save"></td></tr>
        </table>
    </form>
    <div id="indexStart">
                <nav>
                    <?php include 'PHPLiang\navHR.php' ?>
                </nav>
            </div>
    <footer><?php include 'PHPLiang\footerHR.php'; ?></footer>
</body>
</html>
