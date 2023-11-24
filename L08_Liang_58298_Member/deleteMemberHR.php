<!DOCTYPE html>
<html>
<head>
    <?php include 'PHPLiang\headPartHR.php'; ?>
    <?php include 'PHPLiang\databaseHR.php'; ?>
    <?php include 'PHPLiang\membersResultSetHR.php'; ?>
    <?php include 'PHPLiang\checkNewMemberHR.php'; ?>
    <?php include 'PHPLiang\checkDeleteMemberHR.php'; ?>
</head>
<body>
    <header><?php include 'PHPLiang\headerHR.php'; ?></header>
    <article>
    <h3><?php echo "there is num = ", $numHR ;?><br></h3>
        <h4>Deleting Member<br></h4>
        <form action="StartHR.php" method="POST">
            <select name="delete">
                <?php
                $i=0;
                while ($i < $numHR) {
                    $rsHR->data_seek($i);
                    $row = $rsHR->fetch_assoc();
                    $option = "<option value=".$row["member_id"].">";
                    $option .= $row["name"].' - ';
                    $option .= $row["email"].' - ';
                    $option .= $row["join_date"];
                    $option .= "</option>";
                    echo $option;
                    $i++;
                }
                ?>
            </select>
            <input type="submit" value="Remove">
        </form>
    </article>
    <div id="indexStart">
                <nav>
                    <?php include 'PHPLiang\navHR.php' ?>
                </nav>
            </div>
    <footer><?php include 'PHPLiang\footerHR.php'; ?></footer>
</body>
</html>
