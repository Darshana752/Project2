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
        left: 20%;

        color: rgb(10, 48, 19);
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      }
      .mm3 {
        background-color: rgb(194, 240, 240);
        height: 1000px;
      }
    </style>
  </head>
  <body>
    <div class="mm1">
      <h1>WELOCME ABC LIBRARY</h1>
      <span><b>You can view and download our books.</b></span>
    </div>
    <div class="mm3">
      <div class="mm2">
        <table border="2px" cellpadding="10px">
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
          </tr>
        </table>
      </div>
    </div>
  </body>
</html>

<?php

$query = "SELECT * FROM book";
$result = mysqli_query($connection,$query);








?>