<?php
$newTransactionHR = TRUE;
if (isset($_POST['client_id'])) {
    $clientIdHR = $_POST['client_id'];
} else {
    $newTransactionHR = FALSE;
}

if (isset($_POST['good_id'])) {
    $goodIdHR = $_POST['good_id'];
} else {
    $newTransactionHR = FALSE;
}

if (isset($_POST['quantity'])) {
    $quantityHR = $_POST['quantity'];
} else {
    $newTransactionHR = FALSE;
}

if (isset($_POST['price'])) {
    $priceHR = $_POST['price'];
} else {
    $newTransactionHR = FALSE;
}
?>
