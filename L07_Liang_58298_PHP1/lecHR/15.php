<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form test</title>
    <td><a href="14.html">back</a></td>
</head>
<body>
    name: <?php echo $_GET['name'] ?><br>
    surname: <?php echo $_GET['surname'] ?><br>
    Entry to the index:<?php echo (isset($_GET['index']))?'yes':'no' ?><br>
    score: <?php switch($_GET['score']){
        case "5":
        echo "Excellent";
        break;
        case "4":
        echo "good";
        break;
        case "3":
        echo "normal";
        break;
        case "2":
        echo "bad";
        break;
    }
    ?>
</body>
</html>