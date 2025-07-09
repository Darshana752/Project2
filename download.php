<?php include 'connection.php'; ?>

<?php

$id = (int)$_GET['bid']; // Same as in view.php
$result = $connection->query("SELECT * FROM book WHERE bid = $id");

if ($row = $result->fetch_assoc()) {
    header("Content-Type: " . $row['type']);
    header("Content-Disposition: attachment; filename=\"" . $row['pdfname'] . "\""); // Force download
    header("Content-Length: " . strlen($row['data'])); // Optional: tells browser file size
    echo $row['data'];
} else {
    echo "File not found.";
}

?>

