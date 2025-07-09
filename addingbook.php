<?php include 'connection.php'; ?>

<?php

if (isset($_POST['submit']) && isset($_FILES['pdf_file']) ){

    $bname=mysqli_real_escape_string($connection,$_POST['bname']);
    $catagarie=mysqli_real_escape_string($connection,$_POST['bcatagarie']);
    $writer=mysqli_real_escape_string($connection,$_POST['wname']);
    $language=mysqli_real_escape_string($connection,$_POST['language']);
    $discription=mysqli_real_escape_string($connection,$_POST['discription']);
    $filename=$_FILES['pdf_file']['name'];
    $filetype=$_FILES['pdf_file']['type'];
    $filedata=file_get_contents($_FILES['pdf_file']['tmp_name']);

    $stmt=$connection->prepare("INSERT INTO book (bname,catagarie,writer,language,discription,pdfname,type,data) VALUES (?,?,?,?,?,?,?,?)");

    $stmt->bind_param("ssssssss",$bname,$catagarie,$writer,$language,$discription,$filename,$filetype,$filedata);

   if($stmt->execute()){
    header('location:submitsuc.html');
   }else{
    header('location:subunsuc.html');
   }




$stmt->close();




}












?>