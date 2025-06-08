<?php include 'connection.php';?>

<?php 
    
    if(isset($_POST['submit'])){

       $fname = mysqli_real_escape_string($connection,$_POST['fname']);
       $yearofstudent = mysqli_real_escape_string($connection,$_POST['yearofstudent']);
       $adress = mysqli_real_escape_string($connection,$_POST['address']);
       $username = mysqli_real_escape_string($connection,$_POST['username']);
       $pasword = mysqli_real_escape_string($connection,$_POST['password']);


      $query="INSERT INTO  details (fname,syear,saddress,username,spassword) VALUES ('{$fname}','{$yearofstudent}','{$adress}','{$username}','{$pasword}')";
     
      $result = mysqli_query($connection,$query);

      if($result){
        echo "success add data";
      }else{
        echo "insuccess data addded";
      }





    }




?>
<?php mysqli_close($connection);?>