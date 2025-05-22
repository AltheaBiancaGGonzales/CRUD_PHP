<?php
include 'config.php';

$id = $_GET['id'];
$conn->query("DELETE FROM items WHERE item_id=$id");

header("Location: index.php");
exit();
?>
