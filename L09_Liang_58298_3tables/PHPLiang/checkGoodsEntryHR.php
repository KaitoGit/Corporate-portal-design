<?php
$newGoodHR = TRUE;
if (isset($_POST['good_name'])) {
    $nameHR = $_POST['good_name'];
} else {
    $newGoodHR = FALSE;
}

if (isset($_POST['good_price'])) {
    $priceHR = $_POST['good_price'];
} else {
    $newGoodHR = FALSE;
}
?>
