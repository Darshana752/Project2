<?php include 'connection.php' ?>


<?php

$id = (int)$_GET['bid'];
$result = $connection->query("SELECT * FROM book WHERE bid = $id");

if($row = $result->fetch_assoc()){
  header("Content-Type: ".$row['type']);
  header("Content-Disposition:inline;filename=".$row['pdfname']);
  echo $row['data'];
}else{
  echo "File not found.";
}








?>