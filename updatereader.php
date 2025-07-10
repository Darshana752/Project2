<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <?php
include 'connection.php';

$result = $connection->query("SELECT * FROM details"); ?>

    <!DOCTYPE html>
    <html>
      <head>
        <title>User Table</title>
        <style>
          .mm1 {
            margin-left: 500px;
          }
          body {
            background-color: rgb(135, 227, 227);
          }
          .btn1 {
            background-color: rgb(215, 182, 32);
            border: none;
            color: blue;
          }
          .btn1:hover {
            background-color: rgb(212, 255, 0);
          }
        </style>
      </head>
      <body>
        <a href="home.html"><button class="btn1">BACK</button></a>
        <h2 style="text-align: center">Reader Details</h2>
        <table border="1" cellpadding="10" class="mm1">
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Year</th>
            <th>Address</th>
            <th>Username</th>
            <th>Password</th>
          </tr>
          <?php while($row = $result->fetch_assoc()): ?>
          <tr>
            <td><?= $row['id']; ?></td>
            <td><?= $row['fname']; ?></td>
            <td><?= $row['syear']; ?></td>
            <td><?= $row['username']; ?></td>
            <td><?= $row['spassword']; ?></td>
            <td>
              <a
                href="deletereader.php?id=<?= $row['id']; ?>"
                onclick="return confirm('Delete this user?');"
                >Delete</a
              >
            </td>
          </tr>
          <?php endwhile; ?>
        </table>
      </body>
    </html>
  </body>
</html>
