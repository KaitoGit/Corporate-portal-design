<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'PHPLiang\headPartHR.php'; ?>
    <?php include 'PHPLiang\databaseHR.php'; ?>
    <?php include 'PHPLiang\membersResultSetHR.php'; ?>
</head>
<body>
    <header><?php include 'PHPLiang\headerHR.php'; ?></header>
    <h2>These are our members</h2>
    <h3>Number of members: <?php echo $numHR ?></h3>
    <!-- in membersResultSetHR.php -->
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Join Date</th>
        </tr>
        <?php include 'PHPLiang\membersTableHR.php'; ?>
    </table>
    <div id="indexStart">
        <?php include 'PHPLiang\navHR.php'; ?>
    </div>
    <footer>
        <?php include 'PHPLiang\footerHR.php'; ?>
    </footer>
</body>
</html>
