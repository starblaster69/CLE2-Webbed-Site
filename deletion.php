<?php
require_once  'connect.php';

$customerId = '';
if(isset($_POST['customerId']) && ctype_digit($_POST['customerId'])) {
    $customerId = $_POST['customerId'];
} else {
    header("Location: index.php");
}

$sql = sprintf(
    "DELETE FROM jobs WHERE id=$customerId");

mysqli_query($conn, $sql) or die('error: '. mysqli_error($conn). ' with query'. $sql);

header("Location: inbox.php");
