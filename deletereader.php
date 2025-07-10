<?php
include 'connection.php';
$id = $_GET['id'];
$connection->query("DELETE FROM details WHERE id=$id");
header("Location: updatereader.php");
exit;
?>
