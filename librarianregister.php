<?php include 'connection.php';?>

<?php 

if(isset($_POST['submit'])){

    $fname = mysqli_real_escape_string($connection,$_POST['fname']);
    $nic = mysqli_real_escape_string($connection,$_POST['nic']);
    $address = mysqli_real_escape_string($connection,$_POST['address']);
    $username = mysqli_real_escape_string($connection,$_POST['username']);
    $password = mysqli_real_escape_string($connection,$_POST['password']);


    $query="INSERT INTO librarian (fname,nic,laddress,username,lpassword) VALUES ('{$fname}','{$nic}','{$address}','{$username}','{$password}')";

    $result = mysqli_query($connection,$query);


    if($result){

     header ('location:submitsuc.html');

    }else{

     header ('location:subunsuc.html');
    }







}








?>
<?php mysqli_close($connection);?>