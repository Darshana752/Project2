<?php include 'connection.php'; ?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Read and download book</title>
    <style>
      .mm1 {
        text-align: center;
        font-size: 150%;
        background-color: rgb(42, 165, 153);
        color: rgb(194, 32, 83);
        font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
        padding: 20px;
      }
      .mm2 {
        position: relative;
        top: 10px;
        left: 200px;

        color: rgb(10, 48, 19);
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      }
      .mm3 {
        background-color: rgb(194, 240, 240);
        height: 1000px;
      }
      .btn1{
        background-color: rgb(71, 42, 165);
        border: none;
        color: azure;
        margin-left: 10px;
        height:50px ;
        width: 80px; 
        border-radius: 5px;
      }
      .btn1:hover{
        background-color: blue;
      }
    </style>
  </head>
  <body>
    <div class="mm1">
      <h1>WELOCME ABC LIBRARY</h1>
      <span><b>You can view and download our books.</b></span>
      <p></p>
      <a href="home.html"><button class="btn1">BACK</button></a>
      <p></p>
       <form method="GET" action="">
       <input type="text" name="search" placeholder="Search by bookname">
       <input type="submit" value="Search" style="background-color:green;color:white;border:none;">
       </form>

      
    </div>
    <div class="mm3">
      <div class="mm2">

      <?php
        
$search = '';
if (isset($_GET['search'])) {
    $search = $connection->real_escape_string($_GET['search']);
    $sql = "SELECT * FROM book WHERE bname LIKE '%$search%' ";
} else {
    $sql = "SELECT * FROM book";
}

$result = $connection->query($sql);
echo "<table border='2px'>
<tr>
  <th>Book Name</th>
            <th>Book Categary</th>
            <th>Writer Name</th>
            <th>Language</th>
            <th>Special discription</th>
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
    <td>" .htmlspecialchars($row['pdfname'])."</td>
    <td>" . $row['type'] . "</td>
    <td><a href='view.php?bid=".$row['bid']."'
    target='_blank'>View</a></td>
    <td><a href='download.php? bid=" .$row['bid'] . "'>Download</a></td>
   

  </tr>";
}

echo "</table>";

?>


</div>
    </div>
  </body>
</html>









       <?php
          

/*$query = "SELECT * FROM book";
$result = mysqli_query($connection,$query);

if ($result && mysqli_num_rows($result) > 0){
   while($row = mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>" .$row['bname']."</td>";
    echo "<td>" .$row['catagarie']."</td>";
    echo "<td>" .$row['writer']."</td>";
    echo "<td>" .$row['language']."</td>";
    echo "<td>" .$row['discription']."</td>";
    echo "<td>" .htmlspecialchars($row['pdfname'])."</td>";
    echo "<td>" . $row['type'] . "</td>";
    echo "<td><a href='view.php?bid=".$row['bid']."'
    target='_blank'>View</a></td>";
    echo "<td><a href='download.php? bid=" .$row['bid'] . "'>Download</a></td>";
    echo "</tr>";

   }



}else {
  echo "<tr><td colspan='5'>No files found.</td></tr>";
 
}




mysqli_close($connection);

?>*/





     //   </table>

        ?>
      

