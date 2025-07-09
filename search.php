<?php
include 'connection.php'; // my DB connection ?>


<?php
$search = '';
if (isset($_GET['search'])) {
    $search = $connection->real_escape_string($_GET['search']);
    $sql = "SELECT * FROM book WHERE bname LIKE '%$search%' ";
} else {
    $sql = "SELECT * FROM book";
}

$result = $connection->query($sql);

echo "<table border='1'>
<tr>
  
  <th>Book Name</th>
  <th>Catagarie</th>
  <th>Writer</th>
  <th>Language</th>
  <th>Discription</th>
  <th>Pdf</th>
  <th>Type</th>
  <th>Veiw</th>
  <th>Download</th>
</tr>";

while($row = $result->fetch_assoc()) {
  echo "<tr>
    <td>".$row['bname']."</td>
    <td>".$row['catagarie']."</td>
    <td>".$row['writer']."</td>
    <td>".$row['language']."</td>
    <td>".$row['discription']."</td>
  </tr>";
}

echo "</table>";
?>
