<?php include 'connection.php'; ?>

<?php 

if(isset($_POST['submit'])){

   $username = mysqli_real_escape_string($connection,$_POST['username']);
   $password = mysqli_real_escape_string($connection,$_POST['password']);


   $stmt = $connection -> prepare("SELECT * FROM librarian WHERE username=? AND lpassword=? LIMIT 1");
   $stmt -> bind_param("ss", $username,$password);
   $stmt->execute();
   $stmt_result= $stmt->get_result();
   if($stmt_result -> num_rows ===1){
    header ('location:updatereader.php');
   }else{
      echo "unsuccess ";
   }





}

